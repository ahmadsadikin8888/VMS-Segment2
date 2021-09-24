<?php
require_once("../library/config.php");
require_once("class_speed_template.php");

if (is_array($_POST)) extract($_POST, EXTR_OVERWRITE);
$upd = $active_user_id;
function get_random_email($ncli, $email)
{
	$random_num = "";
	dbconnect();
	$lup = date("Y-m-d H:i:s");
	$characters = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
	$keys = array();
	while (count($keys) < 4) {
		$x = mt_rand(0, count($characters) - 1);
		if (!in_array($x, $keys)) {
			$keys[] = $x;
		}
	}
	foreach ($keys as $key) {
		$random_num .= $characters[$key];
	}

	$query = "insert into email_send (no_tiket,e_to,e_nama,e_subject,e_isi,status,e_upd,e_lup) values ('$ncli','$email','$email','Kode Verifikasi','Terima kasih telah menjadi pelanggan Telkom. Kami sedang melakukan validasi terhadap email Anda. Informasikan kembali kepada kami, Kode Validasi berikut : <b>$random_num</b>','0','PROF',SYSDATE())";
	$result = mysql_unbuffered_query($query);
	disconnect();
	return $random_num;
}

function get_random_sms($ncli, $handphone, $username)
{
	$random_num = "";
	dbconnect();
	$lup = date("Y-m-d H:i:s");
	$characters = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
	$keys = array();
	while (count($keys) < 4) {
		$x = mt_rand(0, count($characters) - 1);
		if (!in_array($x, $keys)) {
			$keys[] = $x;
		}
	}
	foreach ($keys as $key) {
		$random_num .= $characters[$key];
	}


	//var_dump($getSend);
	//$json = json_decode($getSend, true);
	//$msg_id=$json[id];
	//$status_id=$json[status];
	$msg = "Pelanggan Yth.
Silahkan informasikan Kode Verifikasi " . $random_num . " kepada petugas kami untuk validasi data Anda.
Angka ini bukan untuk transaksi pembayaran. Tks";
	$query = "insert into send_sms (msisdn,`message`,status_psb,`status`,ukey,lup,msg_id,sumber_data,sender_id) values ('$handphone','" . $msg . "','$status_id','0','$ncli',SYSDATE(),'$msg_id','Profilling','INDIHOME')";
	$result = mysql_unbuffered_query($query);

	$getSend = blast_smsturbo($handphone, $random_num);
	disconnect();

	return $random_num;
}

if ($by == 1) {
	$random_num = get_random_email($ncli, $email);
} else {
	$random_num = get_random_sms($ncli, $handphone, $username);
}

function send_sms2($msisdn, $random_num)
{
	$msg = "Kode verifikasi data Anda adalah " + $random_num + " silakan infokan kepada petugas  kami yang sedang menghubungi Bpk/Ibu. Tks";
	$curl = curl_init();

	curl_setopt_array($curl, array(
		CURLOPT_PORT => "11080",
		CURLOPT_URL => "http://103.39.52.171:11080/smsnadyne/sms.php?username=infomedia1&password=info112233&sourceaddr=TELKOM147&destinationaddr=" . $msisdn . "&shortmessage=" . $msg . "&desc=" . $msg,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => array(
			"cache-control: no-cache",
			"postman-token: 9cb67b97-555f-63be-11dd-63c176960d20"
		),
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
		echo "cURL Error #:" . $err;
	} else {
		echo $response;
	}
}

function send_sms3($msisdn, $random_num, $username)
{
	$msg_id = $msisdn . date('YmdHis');
	$hash = sha1('INFOMEDIA#' . $msg_id . '#NUSANTARA');
	$hash = sha1('INFOMEDIA#' . $username . '#' . $msg_id . '#Telkom147#NUSANTARA');
	$msg = 'Kode Validasi Anda adalah ' . $random_num . ' silakan infokan kepada petugas  kami yang sedang menghubungi Bpk/Ibu. Tks';
	$curl = curl_init();

	curl_setopt_array($curl, array(
		CURLOPT_URL => "https://10.194.176.72/SMS.Telkom/SMS147_OTP/sendSMS",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_SSL_VERIFYPEER => false,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "username=sms_telkom&password=infomedia&sender=Telkom147&request_by=tlkm&recipient=" . $msisdn . "&msg_id=" . $msg_id . "&hash=" . $hash . "&message=" . $msg,
		CURLOPT_HTTPHEADER => array(
			"cache-control: no-cache",
			"content-type: application/x-www-form-urlencoded",
			"postman-token: 7be6d429-43ee-cd2c-61dc-3d36c10f72dc"
		),
	));

	$response = curl_exec($curl);


	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
		return "cURL Error #:" . $err;
	} else {
		return $response;
	}
}

function send_sms_telkom147($msisdn, $random_num, $username)
{
	//$no ='6281281226677';
	$msg_id = $msisdn . date('YmdHis');
	$hash = sha1('INFOMEDIA#sms_telkom#' . $msg_id . '#Telkom147#NUSANTARA');
	// $hash=sha1('INFOMEDIA#'.$msg_id.'#NUSANTARA');
	// $msg="Kode verifikasi data Anda adalah ".$random_num." silakan infokan kepada petugas  kami yang sedang menghubungi Bpk/Ibu. Tks";
	$msg = "Pelanggan Yth.
Silahkan informasikan Kode Verifikasi " . $random_num . " kepada petugas kami untuk validasi data Anda.
Angka ini bukan untuk transaksi pembayaran. Tks";

	$curl = curl_init();

	curl_setopt_array($curl, array(
		CURLOPT_URL => "https://10.194.176.72/SMS.Telkom/SMS147_OTP/sendSMS",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_SSL_VERIFYPEER => false,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "username=sms_telkom&password=infomedia&sender=Telkom147&request_by=tlkm&recipient=" . $msisdn . "&msg_id=" . $msg_id . "&hash=" . $hash . "&message=" . $msg,
		CURLOPT_HTTPHEADER => array(
			"cache-control: no-cache",
			"content-type: application/x-www-form-urlencoded",
			"postman-token: 7be6d429-43ee-cd2c-61dc-3d36c10f72dc"
		),
	));

	$response = curl_exec($curl);


	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
		return "cURL Error #:" . $err;
	} else {
		// echo $response;
	}
}
function send_sms_indihome($msisdn, $random_num, $username)
{
	//$no ='6281281226677';
	$msg_id = $msisdn . date('YmdHis');
	$hash = sha1('INFOMEDIA#sms_telkom#' . $msg_id . '#INDIHOME#NUSANTARA');
	// $hash=sha1('INFOMEDIA#'.$msg_id.'#NUSANTARA');
	// $msg="Kode verifikasi data Anda adalah ".$random_num." silakan infokan kepada petugas  kami yang sedang menghubungi Bpk/Ibu. Tks";
	$msg = "Pelanggan Yth.
Silahkan informasikan Kode Verifikasi " . $random_num . " kepada petugas kami untuk validasi data Anda.
Angka ini bukan untuk transaksi pembayaran. Tks";

	$curl = curl_init();

	curl_setopt_array($curl, array(
		CURLOPT_URL => "https://10.194.176.72/SMS.Telkom/SMS147_OTP/sendSMS",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_SSL_VERIFYPEER => false,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "username=sms_telkom&password=infomedia&sender=INDIHOME&request_by=tlkm&recipient=" . $msisdn . "&msg_id=" . $msg_id . "&hash=" . $hash . "&message=" . $msg,
		CURLOPT_HTTPHEADER => array(
			"cache-control: no-cache",
			"content-type: application/x-www-form-urlencoded",
			"postman-token: 7be6d429-43ee-cd2c-61dc-3d36c10f72dc"
		),
	));

	$response = curl_exec($curl);


	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
		return "cURL Error #:" . $err;
	} else {
		// echo $response;
	}
}

function send_sms($msisdn, $random_num)
{
	//$no ='6281281226677';
	$msg_id = $msisdn . date('YmdHis');
	$hash = sha1('INFOMEDIA#' . $msg_id . '#NUSANTARA');
	//$msg='Terima kasih telah menjadi pelanggan Telkom. Kami sedang melakukan validasi terhadap nomor GSM Anda. Infokan kembali kepada kami,kode validasi berikut: '.$random_num;
	$msg = 'Kode Validasi Anda adalah ' . $random_num . ' silakan infokan kepada petugas  kami yang sedang menghubungi Bpk/Ibu. Tks';
	$curl = curl_init();
	// $msg=$random_num;

	curl_setopt_array($curl, array(
		CURLOPT_URL => "https://10.194.176.72/SMS.Telkom/SMS147/sendSMS",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_SSL_VERIFYPEER => false,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "recipient=" . $msisdn . "&msg_id=" . $msg_id . "&hash=" . $hash . "&message=" . $msg,
		CURLOPT_HTTPHEADER => array(
			"cache-control: no-cache",
			"content-type: application/x-www-form-urlencoded",
			"postman-token: 7be6d429-43ee-cd2c-61dc-3d36c10f72dc"
		),
	));

	$response = curl_exec($curl);


	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
		return "cURL Error #:" . $err;
	} else {
		return $response;
	}
}


function get_tokensms()
{
	$curl = curl_init();

	curl_setopt_array($curl, array(
		CURLOPT_URL => "https://10.194.178.199/HERMES.1/Service/TokenRequest",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_SSL_VERIFYPEER => false,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => '{
                "username": "profiling",
                "password": "mPFGs79MeUaZBq64"
                }',
		CURLOPT_HTTPHEADER => array(
			"cache-control: no-cache",
			'Content-Type: application/json',
			"postman-token: 7be6d429-43ee-cd2c-61dc-3d36c10f72dc"
		),
	));

	$response = curl_exec($curl);
	$response = json_decode($response);
	return $response->data->token;
}
function blast_smsturbo($msisdn, $random_num)
{
	$msg_id = $msisdn . date('YmdHis');
	// $hash=sha1('INFOMEDIA#'.$msg_id.'#NUSANTARA');
	// $msg="Kode verifikasi data Anda adalah ".$random_num." silakan infokan kepada petugas  kami yang sedang menghubungi Bpk/Ibu. Tks";
	$msg = "Pelanggan Yth.
Silahkan informasikan Kode Verifikasi " . $random_num . " kepada petugas kami untuk validasi data Anda.
Angka ini bukan untuk transaksi pembayaran. Tks";
	$msisdn = hp($msisdn);
	$curl = curl_init();
	$token = get_tokensms();

	curl_setopt_array($curl, array(
		CURLOPT_URL => "https://10.194.178.199/HERMES.1/Message/restSaveSend",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_SSL_VERIFYPEER => false,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => '{
                "message": [
                    {
                        "content": "' . $msg . '", 
                        "phone": "' . $msisdn . '", 
                        "schedule": "' . date('Y-m-d H:i:s') . '", 
                        "uid": "' . $msisdn . $random_num . '" 
                    }
                ]
            }',
		CURLOPT_HTTPHEADER => array(
			"cache-control: no-cache",
			'Content-Type: application/json',
			"postman-token: 7be6d429-43ee-cd2c-61dc-3d36c10f72dc",
			"Authorization: Bearer $token"
		),
	));

	$response = curl_exec($curl);
	$response = json_decode($response);
	if ($response->success) {
		return 'SUCCESS';
	} else {
		return 'cURL Error';
	}
}
function hp($nohp)
{
	$hp = $nohp;
	// kadang ada penulisan no hp 0811 239 345
	$nohp = str_replace(" ", "", $nohp);
	// kadang ada penulisan no hp (0274) 778787
	$nohp = str_replace("(", "", $nohp);
	// kadang ada penulisan no hp (0274) 778787
	$nohp = str_replace(")", "", $nohp);
	// kadang ada penulisan no hp 0811.239.345
	$nohp = str_replace(".", "", $nohp);

	// cek apakah no hp mengandung karakter + dan 0-9
	if (!preg_match('/[^+0-9]/', trim($nohp))) {
		// cek apakah no hp karakter 1-3 adalah +62
		if (substr(trim($nohp), 0, 3) == '+62') {
			$hp = trim($nohp);
		}
		// cek apakah no hp karakter 1 adalah 0
		elseif (substr(trim($nohp), 0, 1) == '0') {
			$hp = '62' . substr(trim($nohp), 1);
		}
	}
	return $hp;
}


$lup = date("Y-m-d H:i:s");
//echo $hasil;
echo $get_session . "," . $ncli . "," . $random_num . "," . $id . "," . $postinfo . "," . $lup;
