
function sendSms(mobile_field, mobile_field_sms) {
	var mobile = document.getElementById(mobile_field).value;
	
	var valid = checkMobile(mobile);

	if (!valid) {
		alert('Incorrect format of mobile phone number');
	} else {
		Ajax.call('sms/sms.php?act=send', 'mobile=' + mobile, sendSmsResponse, 'POST', 'JSON');
	}
}

function checkMobile(mobile){
	var reg0 = /^13\d{5,9}$/;
	var reg1 = /^15\d{5,9}$/;
	var reg2 = /^1\d{10,11}$/;
	var reg3 = /^145\d{4,8}$/;
	var reg4 = /^147\d{4,8}$/;
	var reg5 = /^18\d{5,9}$/;
	var reg6 = /^17\d{5,9}$/;
	var valid = false;
	if (reg0.test(mobile)) {
		valid = true;
	}
	if (reg1.test(mobile)) {
		valid = true;
	}
	if (reg2.test(mobile)) {
		valid = true;
	}
	if (reg3.test(mobile)) {
		valid = true;
	}
	if (reg4.test(mobile)) {
		valid = true;
	}
	if (reg5.test(mobile)) {
		valid = true;
	}
	if (reg6.test(mobile)) {
		valid = true;
	}
	return valid;
}

function sendSmsResponse(result) {
	if (result.code == 2) {
		RemainTime();
		alert('Kode verifikasi telah berhasil dikirim ke ponsel Anda');
	} else {
		if (result.msg) {
			alert(result.msg);
		} else {
			alert('Kode verifikasi telepon gagal dikirim');
		}
	}
}

function register2() {
	if (mobile_field != '') {
		var mobile = document.getElementById(mobile_field).value;
		var result = Ajax.call('user.php?act=check_mobile', 'mobile=' + mobile, null, 'GET', 'TEXT', false);
		if (result == "no") {
			alert('Sudah ada pengguna yang terdaftar dengan nomor ponsel ini, silakan ubah nomor ponsel lain, atau hubungi layanan pelanggan untuk bantuan!');
			return false;
		}
		if (mobile_field_sms == '1') {
			var mobile_code = document.getElementById("mobile_code").value;
			var result = Ajax.call('sms/sms.php?act=check', 'mobile=' + mobile + '&mobile_code=' + mobile_code, null, 'POST', 'JSON', false);
			if (result.code == 2) {
				return register();
			} else {
				alert(result.msg);
				return false;
			}
		}
	}
	return register();
}

var iTime = 59;
var Account;
function RemainTime() {
	document.getElementById('zphone').disabled = true;
	var iSecond, sSecond = "", sTime = "";
	if (iTime >= 0) {
		iSecond = parseInt(iTime % 60);
		if (iSecond >= 0) {
			sSecond = iSecond + "秒";
		}
		sTime = sSecond;
		if (iTime == 0) {
			clearTimeout(Account);
			sTime = '获取手机验证码';
			iTime = 59;
			document.getElementById('zphone').disabled = false;
		} else {
			Account = setTimeout("RemainTime()", 1000);
			iTime = iTime - 1;
		}
	} else {
		sTime = '没有倒计时';
	}
	document.getElementById('zphone').value = sTime;
}
