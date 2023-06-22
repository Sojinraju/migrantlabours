<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 1) {

$id = $_COOKIE['id'];
$data=$obj->getDeathPassedWorkersByPoliceStation($id);
$smartyObj->assign('data',$data);
$smartyObj->display('policeHeader.tpl');
$smartyObj->display('policeStationViewDeathReports.tpl');
$smartyObj->display('footer.tpl');
    
} else
    header("location:login.php");
?>