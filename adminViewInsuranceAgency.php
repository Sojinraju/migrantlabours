<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 0) {

$data = $obj->getAllInsuranceAgency();
$smartyObj->assign('data', $data);
$smartyObj->display('adminViewInsuranceAgency.tpl');
    
} else
    header("location:login.php");
?>