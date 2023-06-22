<?php
$date = date('d-m-Y');
$time = str_replace(":", "", str_replace(" ", "", date('h:i:s a')));
$d = "Backups/" . $date;
if (!is_dir($d)) {
    mkdir($d);
}
$backup_file = "C:/xampp/htdocs/MigrantLabours/Backups/$date/$time.sql";
putenv('PATH=C:\xampp\mysql\bin');
exec('mysqldump -u root migrantlabours > ' . $backup_file);
echo "<script>alert('Backup Complete: $date/$time');window.history.back()</script>";
?>