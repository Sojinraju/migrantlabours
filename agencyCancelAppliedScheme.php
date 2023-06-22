<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 2) {

$schemeApplyId = $_GET['schemeApplyId'];
$obj->agencyCancelAppliedScheme($schemeApplyId);
echo "<script>window.location.href='agencyViewAppliedSchemes.php';</script>";
    
} else
    header("location:login.php");
?>