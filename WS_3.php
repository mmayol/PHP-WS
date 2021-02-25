<?php
//endpoint: https://api.spotify.com/v1/users/{user_id}
//consuming a ws with php curl
//response: json in string format
//transform the response into an associative array
try {
    $header_accept = "Accept: application/json";
    $header_content_type = "Content-Type: application/json";
    $header_authorization = "Authorization: Bearer BQDRNx2mYI3IF0M8CLFy0jtRZryMCNtyGJaMBMEAd49I1oWaw-ZAyf2Fkk0ogbBK9L-evidEEKgd1Zu3_oQRCzgi0DkxHzuDjtoP-N5LwmWsmU6ceXvyGXQHcw1iveXhGgOhyfgsrfURL99cvS3eu99HiZYpWeaK32A";
    header('Content-Type: application/json');


     $ch = curl_init('https://api.spotify.com/v1/playlists/3cEYpjA9oz9GiPac4AsH4n/followers/contains?ids=jmperezperez%2Cthelinmichael%2Cwizzler');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array($header_accept,$header_content_type,$header_authorization));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPGET, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($ch);
    curl_close($ch);

    echo $result."\n";
    echo var_dump($result)."\n";//string
    $json_result = json_decode($result, true);//true: to be used as an associative array
}

catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
  }

 ?>
