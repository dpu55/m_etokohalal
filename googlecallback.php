<?php

	define('IN_ECS', true);
	require (dirname(__FILE__) . '/includes/init.php');
	require_once (ROOT_PATH . 'languages/' . $_CFG['lang'] . '/user.php');

	require_once "googleConfig.php";
	
	if (isset($_SESSION['access_token']))
		$gClient->setAccessToken($_SESSION['access_token']);
	else if (isset($_GET['code'])) {
		$token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
		$_SESSION['access_token'] = $token;
	} else {
		header('Location: register.php');
		exit();
	}

	$oAuth = new Google_Service_Oauth2($gClient);
	$userData = $oAuth->userinfo_v2_me->get();

	$username = explode("@", $userData['email']);
	$data['id'] = $userData['id'];
	$data['email'] = $userData['email'];
	$data['gender'] = $userData['gender'];
	$data['picture'] = $userData['picture'];
	$data['familyName'] = $userData['familyName'];
	$data['givenName'] = $userData['givenName'];
	$data['username'] = $username[0];
	$data['password'] = strtolower($userData['givenName']).'!@#'.$userData['id'];
	
	$data['msn'] = '';
	$data['qq'] = '';
	$data['office_phone'] = '';
	$data['home_phone'] = '';

	$sql="select * from ". $ecs->table('users') ." where email='".$userData['email']."'";
	$user_check = $db->getRow($sql);

	if($user_check) {
		$data['back_act'] = "";
		action_login ($data);
	}else {
		session_destroy();
		action_register ($data);
	}


	function action_register ($data)
	{
		
		$_CFG = $GLOBALS['_CFG'];
		$_LANG = $GLOBALS['_LANG'];
		$smarty = $GLOBALS['smarty'];
		$db = $GLOBALS['db'];
		$ecs = $GLOBALS['ecs'];
	
		include_once (ROOT_PATH . 'includes/lib_passport.php');
		
		$username = isset($data['username']) ? trim($data['username']) : '';
		$password = isset($data['password']) ? trim($data['password']) : '';
		$email = isset($data['email']) ? trim($data['email']) : '';
		$other['msn'] = isset($data['msn']) ? $data['msn'] : '';
		$other['qq'] = isset($data['qq']) ? $data['qq'] : '';
		$other['office_phone'] = isset($data['office_phone']) ? $data['office_phone'] : '';
		$other['home_phone'] = isset($data['home_phone']) ? $data['home_phone'] : '';
		
		require_once (ROOT_PATH . 'includes/lib_validate_record.php');
			
		$result = register_by_email($username, $password, $email, $other);
		
		if($result)
		{
			remove_validate_record($email);
		}
		
		if($result)
		{
			$sql = 'SELECT id FROM ' . $ecs->table('reg_fields') . ' WHERE type = 0 AND display = 1 ORDER BY dis_order, id'; // 读出所有自定义扩展字段的id
			$fields_arr = $db->getAll($sql);
			
			$extend_field_str = ''; 
			foreach($fields_arr as $val)
			{
				$extend_field_index = 'extend_field' . $val['id'];
				if(! empty($_POST[$extend_field_index]))
				{
					$temp_field_content = strlen($_POST[$extend_field_index]) > 100 ? mb_substr($_POST[$extend_field_index], 0, 99) : $_POST[$extend_field_index];
					$extend_field_str .= " ('" . $_SESSION['user_id'] . "', '" . $val['id'] . "', '" . compile_str($temp_field_content) . "'),";
				}
			}
			$extend_field_str = substr($extend_field_str, 0, - 1);
			
			if($extend_field_str) 
			{
				$sql = 'INSERT INTO ' . $ecs->table('reg_extend_info') . ' (`user_id`, `reg_field_id`, `content`) VALUES' . $extend_field_str;
				$db->query($sql);
			}
				
			if(! empty($passwd_answer) && ! empty($sel_question))
			{
				$sql = 'UPDATE ' . $ecs->table('users') . " SET `passwd_question`='$sel_question', `passwd_answer`='$passwd_answer'  WHERE `user_id`='" . $_SESSION['user_id'] . "'";
				$db->query($sql);
			}
			
			$now = gmtime();
			if($_CFG['bonus_reg_rand'])
			{
				$sql_bonus_ext = " order by rand() limit 0,1";
			}
			$sql_b = "SELECT type_id FROM " . $ecs->table("bonus_type") . " WHERE send_type='" . SEND_BY_REGISTER . "'  AND send_start_date<=" . $now . " AND send_end_date>=" . $now . $sql_bonus_ext;
			$res_bonus = $db->query($sql_b);
			$kkk_bonus = 0;
			while($row_bonus = $db->fetchRow($res_bonus))
			{
				$sql = "INSERT INTO " . $ecs->table('user_bonus') . "(bonus_type_id, bonus_sn, user_id, used_time, order_id, emailed)" . " VALUES('" . $row_bonus['type_id'] . "', 0, '" . $_SESSION['user_id'] . "', 0, 0, 0)";
				$db->query($sql);
				$kkk_bonus = $kkk_bonus + 1;
			}
			if($kkk_bonus)
			{
				$_LANG['register_success'] = $_LANG['m_522'];
			}
			
			if($GLOBALS['_CFG']['member_email_validate'] && $GLOBALS['_CFG']['send_verify_email'])
			{
				send_regiter_hash($_SESSION['user_id']);
			}

			header('Location: register.php');
		}
		else
		{
			$GLOBALS['err']->show($_LANG['sign_up'], 'register.php');
		}
	
	}

	function action_login ($data)
	{
		
		// 获取全局变量
		$user = $GLOBALS['user'];
		$_CFG = $GLOBALS['_CFG'];
		$_LANG = $GLOBALS['_LANG'];
		$smarty = $GLOBALS['smarty'];
		$db = $GLOBALS['db'];
		$ecs = $GLOBALS['ecs'];
		$user_id = $_SESSION['user_id'];
		
		$username = isset($data['username']) ? trim($data['username']) : '';
		$password = isset($data['password']) ? trim($data['password']) : '';
		$back_act = isset($data['back_act']) ? trim($data['back_act']) : '';
		
		$ec_salt = rand(1, 9999);
		$new_password = md5(md5($password) . $ec_salt);
		$sql = "UPDATE " . $ecs->table('users') . "SET password= '" . $new_password . "',ec_salt='" . $ec_salt . "'" . " WHERE email='".$data['email']."'";
		$db->query($sql);
		
		/* login */
		if($user->login($username, $password, isset($_POST['remember'])))
		{
			update_user_info();
			recalculate_price();
			
			header('Location: user.php');
		}
		else
		{
			$_SESSION['login_fail'] ++;
			show_message($_LANG['login_failure'], $_LANG['relogin_lnk'], 'user.php', 'error');
		}
	}

	
?>