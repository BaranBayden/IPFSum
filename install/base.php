<?php




ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(-1);

session_start();

$app_name = 'IPFSum';
$app_url = 'www.ipfsum.com';
$release_date = 'November 17, 2022';
$author_name = 'IPFSum';
$support_url = 'https://www.ipfsum.com';


function inSession($key,$def=''){
    if(isset($_SESSION[$key])){
        return $_SESSION[$key];
    }
    else{
        return $def;
    }
}
