<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 2) {

$worker_loginId = $_GET['worker_loginId'];
$agency_loginId = $_COOKIE['id'];
$view1 = $obj->workerEdit($worker_loginId);
$view2 = $obj->getSalaryOfAgency($agency_loginId);
$smartyObj->assign('view1', $view1);
$smartyObj->assign('view2', $view2);
if (isset($_POST['hide']) and ($_POST['hide'] == 'c')) {
    if (isset($_POST['salaryId']) and ($_POST['salaryId'] != null)) {
        if (isset($_POST['startDate']) and ($_POST['startDate'] != null)) {
            if (isset($_POST['days']) and ($_POST['days'] != null)) {
                $salaryId = trim($_POST['salaryId']);
                $startDate = trim($_POST['startDate']);
                $days = trim($_POST['days']);
                $obj->registerWork($worker_loginId, $salaryId, $startDate, $days);
                echo "<script>window.location.href='agencyAssignWork.php';</script>";
            } else
                echo "<script>alert('No. of Days is Empty')</script>";
        } else
            echo "<script>alert('Date is Empty')</script>";
    } else
        echo "<script>alert('Work is Empty')</script>";
}
$smartyObj->display('agencyHeader.tpl');
$smartyObj->display('agencyAssignWorkToWorker.tpl');
$smartyObj->display('footer.tpl');
    
} else
    header("location:login.php");
?>