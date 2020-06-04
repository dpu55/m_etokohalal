<?php

function sendTele($message) 
{
    // 851725124 laras
    $ids = array('851725124','558743094','1080578098','1072378686','1131653104');

    foreach ($ids as $id) {
        # code...
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.telegram.org/bot998908892:AAHAMb72ND3ksrQZMG4I2Tc1lLSVXtsk_Po/sendMessage?chat_id=".$id."&text=".$message,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
        ));
        $response = curl_exec($curl);
        curl_close($curl);
    }
}

function send_notif_order_finish($message)
{
    // 851725124 laras
    $ids = array('851725124','558743094','1131653104');

    foreach ($ids as $id) {
        # code...
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.telegram.org/bot998908892:AAHAMb72ND3ksrQZMG4I2Tc1lLSVXtsk_Po/sendMessage?chat_id=".$id."&text=".$message,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
        ));
        $response = curl_exec($curl);
        curl_close($curl);
    }
}

?>