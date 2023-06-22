<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj = new userclass();

if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $url = "https://";
else
    $url = "http://";

// Append the host(domain name, ip) to the URL.   
$url .= $_SERVER['HTTP_HOST'];

// Append the requested resource location to the URL   
$url .= $_SERVER['REQUEST_URI'];

// echo $url;  exit;
$smartyObj->assign("view", $url);

$worker_loginId = $_GET['worker_loginId'];
$smartyObj->assign("view1", $worker_loginId);
$smartyObj->assign("data", $obj->getVideoDetailsOfWorker($worker_loginId));
//$m=$_COOKIE['logkey'];

// $obj->video($url, $worker_loginId);


$smartyObj->display("agencyVideo.tpl");

?>