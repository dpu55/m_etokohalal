<?php

	define('IN_ECS', true);

	require(dirname(__FILE__) . '/includes/init.php');
	require(ROOT_PATH . 'includes/lib_order.php');

	print "Parsing Data Destination Code JNE<br/><br/>";

	$sql="select * from ". $ecs->table('jne_destination');
	$jne = $db->getAll($sql);

	foreach ($jne as $key => $value) {
		# code...
		$name = explode(',', $value['name']);

		$regionSQL="select * from ". $ecs->table('region') . " where region_name like '".$name[0]."'";
		$region = $db->getRow($regionSQL);

		if($region) {
			echo "<pre>"; print 'Region ID: ' . $region["region_id"]. '. ('. $value['name'] .') -> '. $name[0] .' to '. $region["region_name"] . ' => ' . $value['code'];

			$sql = "UPDATE ".$ecs->table('region')." set dest_code = '".$value['code']."' where  region_id ='".$region["region_id"]."'";
    		$res = $db->query($sql);
		}
	}

?>