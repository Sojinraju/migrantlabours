<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 3) {
    $worker_loginId = $_COOKIE['id'];
    $data = $obj->workerViewResponses($worker_loginId);
    $smartyObj->assign('data', $data);
    $smartyObj->display('workerHeader.tpl');
    $smartyObj->display('workerViewResponses.tpl');
    $smartyObj->display('footer.tpl');

} else
    header("location:login.php");
?>