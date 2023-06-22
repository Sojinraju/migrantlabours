<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 4) {

    $schemeApplyId = $_GET['schemeApplyId'];
    if (isset($_POST['pay'])) {
        $amount = $_POST['amount'];
        echo "<script>window.location.href='insuranceAgencyPaymentInsuranceClaim.php?amount=$amount&&schemeApplyId=$schemeApplyId';</script>";
    }

    $view = $obj->getTotalPaymentDetailsOfSchemeApply($schemeApplyId);
    $data = $obj->getClaimDetailsofScheme($schemeApplyId);
    $smartyObj->assign('view', $view);
    $smartyObj->assign('data', $data);
    $smartyObj->display('insuranceAgencyHeader.tpl');
    $smartyObj->display('insuranceAgencyGrantClaim.tpl');
    $smartyObj->display('footer.tpl');

} else
    header("location:login.php");
?>