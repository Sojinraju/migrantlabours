<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 2) {

$agency_loginId = $_COOKIE['id'];
$view1 = $obj->getAvailableJobs($agency_loginId);
$smartyObj->assign('view1', $view1);
$smartyObj->display('agencyHeader.tpl');
$smartyObj->display('agencyWorkDetails.tpl');
if (isset($_POST['hide']) and ($_POST['hide'] == 'd')) {
    if (isset($_POST['salaryId']) and ($_POST['salaryId'] != null)) {
        $salaryId = trim($_POST['salaryId']);
        $view2 = $obj->getAvailableWorkersForJob($salaryId);
        $smartyObj->assign('view2', $view2);
        echo "<script>
        var dropdown = document.getElementById('salaryId');
        var selectedValue = '$salaryId';
        for (var i = 0; i < dropdown.options.length; i++) {
            if (dropdown.options[i].value == selectedValue) {
                dropdown.selectedIndex = i;
                break;
            }
        }
        </script>";
        $smartyObj->display('agencyWorkerDetailsByWork.tpl');
    } else
        echo "<script>alert('salaryId is Empty')</script>";
}
$smartyObj->display('footer.tpl');
    
} else
    header("location:login.php");
?>