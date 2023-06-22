<?php
include_once('settings/settings.php');
include_once('classes/userclass.php');
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 5) {

$worker_loginId = $_GET['worker_loginId'];
$obj->labourCommissionPassWorkerToAgency($worker_loginId);
echo "<script>window.location.href='labourCommissionViewWorkers.php';</script>";
    
} else
    header("location:login.php");
?>