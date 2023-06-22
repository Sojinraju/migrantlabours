<?php
include_once('settings/settings.php');
include_once('classes/userclass.php');
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 2) {

$workAssignId = $_GET['workAssignId'];
$obj->removeWorkByAgency($workAssignId);
echo "<script>window.location.href='agencyWorkDetails.php';</script>";
    
} else
    header("location:login.php");
?>