<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 2) {

$id = $_COOKIE['id'];
$data = $obj->getWorkersbyAgency($id);
$smartyObj->assign('data', $data);
$smartyObj->display('agencyHeader.tpl');
$smartyObj->display('agencyViewWorkers.tpl');
$smartyObj->display('footer.tpl');
    
} else
    header("location:login.php");
?>