<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 4) {

$insAg_loginId = $_COOKIE['id'];
$data = $obj->getSchemesByInsAg($insAg_loginId);
$smartyObj->assign('data', $data);
$smartyObj->display('insuranceAgencyHeader.tpl');
$smartyObj->display('insuranceAgencySchemes.tpl');
$smartyObj->display('footer.tpl');
    
} else
    header("location:login.php");
?>