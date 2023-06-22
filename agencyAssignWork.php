<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 2) {

$id = $_COOKIE['id'];
$data = $obj->getWorkersForJobByAgency($id);
for ($i = 0; $i < count($data); $i++) {
    $data[$i]['isPreviouslyAppliedForJob'] = $obj->isPreviouslyAppliedForJob($data[$i]['wlogid']);
    $data[$i]['isCurrentlyAppliedForJob'] = $obj->isCurrentlyAppliedForJob($data[$i]['wlogid']);
}
$smartyObj->assign('data', $data);
$smartyObj->display('agencyHeader.tpl');
$smartyObj->display('agencyAssignWork.tpl');
$smartyObj->display('footer.tpl');
    
} else
    header("location:login.php");
?>