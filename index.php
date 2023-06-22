<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
$smartyObj->display('indexHeader.tpl');
$smartyObj->display('index.tpl');
echo "<script>
document.addEventListener('keydown', function(event) {
    if (event.ctrlKey && event.key === 'b') {
        
        window.location.href = 'backup.php';
    }
});
</script>";
$smartyObj->display('footer.tpl');
?>