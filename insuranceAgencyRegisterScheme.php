<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 4) {

$insAg_loginId = $_COOKIE['id'];
if (isset($_POST['hide']) and ($_POST['hide'] == 'f')) {
    if (isset($_POST['schemeCat']) and ($_POST['schemeCat'] != null)) {
        if (isset($_POST['schemeName']) and ($_POST['schemeName']) != null) {
            if (isset($_POST['schemeAmnt']) and ($_POST['schemeAmnt']) != null) {
                if (isset($_POST['validity']) and ($_POST['validity']) != null) {
                    if (isset($_POST['schemeDetails']) and ($_POST['schemeDetails']) != null) {
                        if (isset($_POST['interestRate']) and ($_POST['interestRate']) != null) {
                            $schemeCat = trim($_POST['schemeCat']);
                            $schemeName = trim($_POST['schemeName']);
                            $schemeAmnt = trim($_POST['schemeAmnt']);
                            $validity = trim($_POST['validity']);
                            $schemeDetails = trim($_POST['schemeDetails']);
                            $interestRate = trim($_POST['interestRate']);
                            $obj->registerScheme($schemeCat, $schemeName, $schemeAmnt, $validity, $schemeDetails, $interestRate, $insAg_loginId);
                        } else
                            echo "<script>alert('Interest Rate is Empty')</script>";
                    } else
                        echo "<script>alert('Scheme Details is Empty')</script>";
                } else
                    echo "<script>alert('Validity is Empty')</script>";
            } else
                echo "<script>alert('Scheme Amount is Empty')</script>";
        } else
            echo "<script>alert('Scheme Name is Empty')</script>";
    } else
        echo "<script>alert('Scheme Category is Empty')</script>";
}
$smartyObj->display('insuranceAgencyHeader.tpl');
$smartyObj->display('insuranceAgencyRegisterScheme.tpl');
$smartyObj->display('footer.tpl');
    
} else
    header("location:login.php");
?>