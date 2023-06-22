<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 3) {
    $schemeApplyId = $_GET['schemeApplyId'];
    $obj->claimInsurance($schemeApplyId);
    echo "<script>window.location.href='workerViewAppliedSchemes.php';</script>";
} else
    header("location:login.php");
?>