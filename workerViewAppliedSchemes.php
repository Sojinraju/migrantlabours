<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 3) {

    $worker_loginId = $_COOKIE['id'];
    $data = $obj->getSchemesByWorker($worker_loginId);
    for ($i = 0; $i < count($data); $i++) {
        $data[$i]['isAnnualAmountPaid'] = $obj->isAnnualAmountPaid($data[$i]['schemeApplyId'], Date('Y'));
        $data[$i]['paymentCount'] = $obj->paymentCount($data[$i]['schemeApplyId']);
    }
    if ($data == null) {
        $data[0]['schemeApplyId'] = null;
    }
    $smartyObj->assign('data', $data);
    $smartyObj->display('workerHeader.tpl');
    $smartyObj->display('workerViewAppliedSchemes.tpl');
    $smartyObj->display('footer.tpl');

} else
    header("location:login.php");
?>