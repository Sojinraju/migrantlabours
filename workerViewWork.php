<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 3) {

$worker_loginId = $_COOKIE['id'];
$data = $obj->getWorkByWorker($worker_loginId);
if ($data == null) {
    $data[0]['work'] = null;
}
$smartyObj->assign('data', $data);
$smartyObj->display('workerHeader.tpl');
$smartyObj->display('workerViewWork.tpl');
$smartyObj->display('footer.tpl');
    
} else
    header("location:login.php");
?>