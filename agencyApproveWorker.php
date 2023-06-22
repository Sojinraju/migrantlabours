<?php
include_once('settings/settings.php');
include_once('classes/userclass.php');
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 2) {

$id = $_GET['id'];
$obj->approvebyAgency($id);
echo "<script>window.location.href='agencyViewWorkers.php';</script>";
    
} else
    header("location:login.php");
?>