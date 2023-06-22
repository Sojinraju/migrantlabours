<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 2) {

$id = $_COOKIE['id'];
$data = $obj->getWorkersbyAgency($id);
$schemeId = $_GET['schemeId'];
for ($i = 0; $i < count($data); $i++) {
    $data[$i]['isApplied'] = $obj->isApplied($data[$i]['wlogid'], $schemeId);
}
$smartyObj->assign('data', $data);
$insAg_loginId = $_COOKIE['insAg_loginId'];
$smartyObj->assign('insAg_loginId', $insAg_loginId);
setcookie("schemeId", $schemeId);
$smartyObj->display('agencyHeader.tpl');
$smartyObj->display('agencyInsApplyWorkers.tpl');
$smartyObj->display('footer.tpl');
    
} else
    header("location:login.php");
?>