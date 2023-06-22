<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj = new userclass();

if (isset($_POST['hide']) and ($_POST['hide'] == 'a')) {
    if (isset($_POST['stationId']) and ($_POST['stationId'] != null)) {
        if (isset($_POST['addLine1']) and ($_POST['addLine1']) != null) {
            if (isset($_POST['addLine2']) and ($_POST['addLine2']) != null) {
                if (isset($_POST['pincode']) and ($_POST['pincode']) != null) {
                    if (isset($_POST['district']) and ($_POST['district']) != null) {
                        if (isset($_POST['city']) and ($_POST['city']) != null) {
                            if (isset($_POST['contactNo']) and ($_POST['contactNo']) != null) {
                                if (isset($_POST['email']) and ($_POST['email']) != null) {
                                    if (isset($_POST['password']) and ($_POST['password']) != null) {
                                        $stationId = trim($_POST['stationId']);
                                        $addLine1 = trim($_POST['addLine1']);
                                        $addLine2 = trim($_POST['addLine2']);
                                        $pincode = trim($_POST['pincode']);
                                        $district = trim($_POST['district']);
                                        $city = trim($_POST['city']);
                                        $contactNo = trim($_POST['contactNo']);
                                        $email = trim($_POST['email']);
                                        $password = trim($_POST['password']);
                                        $obj->registerPoliceStation($stationId, $addLine1, $addLine2, $pincode, $district, $city, $contactNo, $email, $password);
                                    } else
                                        echo "<script>alert('Password is Empty')</script>";
                                } else
                                    echo "<script>alert('Email is Empty')</script>";
                            } else
                                echo "<script>alert('Contact No. is Empty')</script>";
                        } else
                            echo "<script>alert('City is Empty')</script>";
                    } else
                        echo "<script>alert('District is Empty')</script>";
                } else
                    echo "<script>alert('Pincode is Empty')</script>";
            } else
                echo "<script>alert('Address Line 2 is Empty')</script>";
        } else
            echo "<script>alert('Address Line 1 is Empty')</script>";
    } else
        echo "<script>alert('Station ID is Empty')</script>";
}
$smartyObj->display('indexHeader.tpl');
$smartyObj->display('registerPolice.tpl');
$smartyObj->display('footer.tpl');

?>