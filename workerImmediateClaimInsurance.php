<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 3) {

    $schemeApplyId = $_GET['schemeApplyId'];
    if (isset($_POST['hide']) and ($_POST['hide'] == 'h')) {
        if (isset($_FILES['medicalReport'])) {
            $obj->immediateClaimWorker($_FILES['medicalReport'], $schemeApplyId);
            echo "<script>window.location.href='workerViewAppliedSchemes.php';</script>";
        } else {
            echo "<script>alert('Medical Report Not Uploaded');
            window.location.href='workerViewAppliedSchemes.php';</script>";
        }
    }
    $smartyObj->display('workerHeader.tpl');
    $smartyObj->display('workerImmediateClaimInsurance.tpl');
    $smartyObj->display('footer.tpl');

} else
    header("location:login.php");
?>