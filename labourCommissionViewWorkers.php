<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 5) {

$data = $obj->getWorkersByLabourCommission();
$smartyObj->assign('data', $data);
$smartyObj->display('labourCommissionHeader.tpl');
$smartyObj->display('labourCommissionViewWorkers.tpl');
$smartyObj->display('footer.tpl');
    
} else
    header("location:login.php");
?>