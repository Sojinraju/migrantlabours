<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 2) {

$insAg_loginId = $_GET['insAg_loginId'];
setcookie("insAg_loginId", $insAg_loginId);
$data = $obj->getSchemesByInsAg($insAg_loginId);
$smartyObj->assign('data', $data);
$smartyObj->display('agencyHeader.tpl');
$smartyObj->display('agencyViewSchemes.tpl');
$smartyObj->display('footer.tpl');
    
} else
    header("location:login.php");
?>