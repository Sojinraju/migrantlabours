<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 3) {

$schemeAmnt = $_GET['schemeAmnt'];
$schemeApplyId = $_GET['schemeApplyId'];
$worker_loginId = $_COOKIE['id'];
if (isset($_POST['hide']) and ($_POST['hide'] == 'h')) {
    if (isset($_POST['cardHolderName']) and ($_POST['cardHolderName'] != null)) {
        if (isset($_POST['cardNo']) and ($_POST['cardNo']) != null) {
            if (isset($_POST['month']) and ($_POST['month']) != null) {
                if (isset($_POST['year']) and ($_POST['year']) != null) {
                    if (isset($_POST['cvv']) and ($_POST['cvv']) != null) {
                        $cardHolderName = trim($_POST['cardHolderName']);
                        $cardNo = trim($_POST['cardNo']);
                        $month = trim($_POST['month']);
                        if (strlen($month) == 1) {
                            $month = str_pad($month, 2, '0', STR_PAD_LEFT);
                        }
                        $year = trim($_POST['year']);
                        $expDate = $month . "/" . $year;
                        $cvv = trim($_POST['cvv']);
                        $obj->paymentByWorker($worker_loginId, $schemeAmnt, $cardHolderName, $cardNo, $expDate, $cvv, $schemeApplyId);
                    } else
                        echo "<script>alert('CVV is Empty')</script>";
                } else
                    echo "<script>alert('Year is Empty')</script>";
            } else
                echo "<script>alert('Month is Empty')</script>";
        } else
            echo "<script>alert('Card Number is Empty')</script>";
    } else
        echo "<script>alert('Card Holder Name is Empty')</script>";
}
$smartyObj->display('workerHeader.tpl');
$smartyObj->display('workerPaymentAnnualAmount.tpl');
$smartyObj->display('footer.tpl');
    
} else
    header("location:login.php");
?>