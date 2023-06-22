<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 2) {

$worker_loginId = $_GET['worker_loginId'];
$schemeId = $_COOKIE['schemeId'];
$obj->applyScheme($worker_loginId, $schemeId);
echo "<script>window.location.href='agencyInsApplyWorkers.php?schemeId=$schemeId';</script>";
// header("location:agencyInsApplyWorkers.php?schemeId=$schemeId");
    
} else
    header("location:login.php");
?>