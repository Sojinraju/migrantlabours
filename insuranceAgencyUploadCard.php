<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 4) {

$schemeApplyId = $_GET['schemeApplyId'];
if (isset($_POST['hide']) and ($_POST['hide'] == 'w')) {
    if (isset($_FILES['insuranceCard'])) {
        $obj->insuranceAgencyUploadCard($_FILES['insuranceCard'], $schemeApplyId);
        echo "<script>window.location.href='insuranceAgencyViewAppliedSchemes.php';</script>";
    } else {
        echo "<script>alert('Insurance Card not Uploaded');window.location.href='insuranceAgencyViewAppliedSchemes.php';</script>";
    }
}
$smartyObj->display('insuranceAgencyHeader.tpl');
$smartyObj->display('insuranceAgencyUploadCard.tpl');
$smartyObj->display('footer.tpl');
    
} else
    header("location:login.php");
?>