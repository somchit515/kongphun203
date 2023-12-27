<?php
 session_start();
 $user_id=$_SESSION['user_id'];
$download=$_GET['download'];
include('../../condb.php');
if(isset($_GET['download'])) {
$sql=mysqli_query($con,"select *from historys_personsall where file_name='$download'");
mysqli_query($con,"insert into docu_download(docu_name,down_date,down_time,user_id)value('$download',curdate(),curtime(),'$user_id')");

    header('Content-Type:application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($download).'" ');
    header('Content-length:'.filesize($download));
    readfile($download);
}
?>

