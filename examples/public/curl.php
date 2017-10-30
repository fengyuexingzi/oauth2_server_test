<?php
/**
 * Created by PhpStorm.
 * User: Wind
 * Date: 2017/10/28
 * Time: 10:49
 */

function curl_post()
{
    //url 必须以 '/' 或 调用的file.suffix结尾 或 方法名，否则curl报301错误
//    $url = 'http://localhost/client_credentials.php/access_token';
//$url = 'http://fengyuexingzi.top/';
    $url = 'http://localhost/';

    $data = [
        "grant_type" => "client_credentials",
        "client_id" => "myawesomeapp",
        "client_secret" => "abc123",
        "scope" => "basic email"
    ];
    $data = http_build_query($data);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/x-www-form-urlencoded',
        'Accept: 1.0'
    ]);

    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    $result = curl_exec($ch);


    if ($result === false) {
        echo 'curlError: ' . curl_error($ch);
    } else {
        echo $result;
    }
    curl_close($ch);
}

curl_post();