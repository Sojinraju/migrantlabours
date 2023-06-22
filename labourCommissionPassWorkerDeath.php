<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 5) {

$data = $obj->getDeathPassedWorkersByLabourCommission();
$smartyObj->assign('data', $data);
$smartyObj->display('labourCommissionHeader.tpl');
$smartyObj->display('labourCommissionPassWorkerDeath.tpl');
$smartyObj->display('footer.tpl');
    
} else
    header("location:login.php");
?>