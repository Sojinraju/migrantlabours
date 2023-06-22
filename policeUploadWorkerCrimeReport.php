<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 1) {

$worker_loginId=$_GET['worker_loginId'];
if (isset($_POST['hide']) and ($_POST['hide'] == 'w')) {
    if (isset($_FILES['crimeReport'])) {
        $obj->policeUploadWorkerCrimeReport($_FILES['crimeReport'], $worker_loginId);
        echo "<script>window.location.href='policeStationViewWorkers.php';</script>";
    } else {
        echo "<script>alert('Crime Report not Uploaded');window.location.href='policeStationViewWorkers.php';</script>";
    }
}
$smartyObj->display('policeHeader.tpl');
$smartyObj->display('policeUploadWorkerCrimeReport.tpl');
$smartyObj->display('footer.tpl');
    
} else
    header("location:login.php");
?>