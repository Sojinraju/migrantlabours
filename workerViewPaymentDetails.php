<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 3) {

$schemeApplyId = $_GET['schemeApplyId'];
$view=$obj->getTotalPaymentDetailsOfSchemeApply($schemeApplyId);
$data = $obj->getPaymetDetailsOfSchemeApply($schemeApplyId);
$smartyObj->assign('view', $view);
$smartyObj->assign('data', $data);
$smartyObj->display('workerHeader.tpl');
$smartyObj->display('workerViewPaymentDetails.tpl');
$smartyObj->display('footer.tpl');
    
} else
    header("location:login.php");
?>