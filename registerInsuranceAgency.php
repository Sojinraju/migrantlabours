<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj = new userclass();

if (isset($_POST['hide']) and ($_POST['hide'] == 'd')) {
    if (isset($_POST['insAgId']) and ($_POST['insAgId'] != null)) {
        if (isset($_POST['insAgName']) and ($_POST['insAgName']) != null) {
            if (isset($_POST['address']) and ($_POST['address']) != null) {
                if (isset($_POST['district']) and ($_POST['district']) != null) {
                    if (isset($_POST['contactNo']) and ($_POST['contactNo']) != null) {
                        if (isset($_POST['email']) and ($_POST['email']) != null) {
                            if (isset($_POST['password']) and ($_POST['password']) != null) {
                                $insAgId = trim($_POST['insAgId']);
                                $insAgName = trim($_POST['insAgName']);
                                $address = trim($_POST['address']);
                                $district = trim($_POST['district']);
                                $contactNo = trim($_POST['contactNo']);
                                $email = trim($_POST['email']);
                                $password = trim($_POST['password']);
                                $obj->registerInsuranceAgency($insAgId, $insAgName, $address, $district, $contactNo, $email, $password);
                            } else
                                echo "<script>alert('Password is Empty')</script>";
                        } else
                            echo "<script>alert('Email is Empty')</script>";
                    } else
                        echo "<script>alert('Contact No. is Empty')</script>";

                } else
                    echo "<script>alert('District is Empty')</script>";
            } else
                echo "<script>alert('Address is Empty')</script>";
        } else
            echo "<script>alert('Insurance Agency Name is Empty')</script>";
    } else
        echo "<script>alert('Insurance Agency Id is Empty')</script>";

}
$smartyObj->display('indexHeader.tpl');
$smartyObj->display('registerInsuranceAgency.tpl');
$smartyObj->display('footer.tpl');
    
?>