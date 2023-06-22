<?php
include_once('settings/settings.php');
include_once('classes/userclass.php');
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 2) {

$agency_loginId = $_COOKIE['id'];
$data = $obj->getSalaryOfAgency($agency_loginId);
$smartyObj->assign('data', $data);
if (isset($_POST['hide']) and ($_POST['hide'] == 'd')) {
    if (isset($_POST['work']) and ($_POST['work'] != null)) {
        if (isset($_POST['salary']) and ($_POST['salary']) != null) {
            $work = trim($_POST['work']);
            $salary = trim($_POST['salary']);
            $obj->registerSalary($work, $salary, $agency_loginId);
            echo "<script>window.location.href='agencyAddSalary.php';</script>";
        } else
            echo "<script>alert('Salary is Empty')</script>";
    } else
        echo "<script>alert('Work is Empty')</script>";
}
$smartyObj->display('agencyHeader.tpl');
$smartyObj->display('agencyAddSalary.tpl');
$smartyObj->display('footer.tpl');
    
} else
    header("location:login.php");
?>