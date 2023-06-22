<?php
include_once('settings/settings.php');
include_once('classes/userclass.php');
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 2) {

$worker_loginId = $_GET['worker_loginId'];
$agency_loginId=$_COOKIE['id'];
$obj->agencyAbsentWorker($worker_loginId,$agency_loginId);
echo "<script>window.location.href='agencyAttendanceWorkers.php';</script>";
    
} else
    header("location:login.php");
?>