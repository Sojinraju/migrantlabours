<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
if (isset($_POST['hide']) and ($_POST['hide'] == 'h')) {
    if (isset($_POST['loginId']) and ($_POST['loginId']) != null) {
        if (isset($_POST['passcode']) and ($_POST['passcode']) != null) {
            $loginId = trim($_POST['loginId']);
            $passcode = trim($_POST['passcode']);
            $obj->loginWithLoginID($loginId, $passcode);
        } else
            echo "<script>alert('Login ID is empty')</script>";
    } else
        echo "<script>alert('Passcode is empty')</script>";
}
$smartyObj->display('workerLogin.tpl');
?>