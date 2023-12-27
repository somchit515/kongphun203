<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
*{
font-family:"Lao_Patuxai";
}
</style>
</head>
<body>
<?php session_start();
echo "<script src='../../bootstrap-5.0.0-beta2-dist/js/jquery-3.6.0.js'></script>";
echo "<script src='../../sweetalert/dist/sweetalert2.all.min.js'></script>";
if(isset($_GET['sk_id'])){
$sk_id   = $_GET['sk_id'];
$user_id =$_SESSION['user_id'];
include('../../condb.php');
$sql = mysqli_query($con,"DELETE FROM `sungkud` WHERE sk_id ='$sk_id' and user_id='$user_id' ");
if($sql){
echo "<script>";
echo " Swal.fire({
icon: 'success',
title: 'ລົບຂໍ້ມູນສຳເລັດ',
showConfirmButton: false,
timer: 2000
}).then((result) => {
if (result.isDismissed) {  

location='../../form/location/table.php';
}
});";
echo "</script>";
}else{
echo "<script>";
echo " Swal.fire({
icon: 'error',
title: 'ຜິດພາດ',
showConfirmButton: false,
timer: 2000
}).then((result) => {
if (result.isDismissed) {  

location='../../form/location/form.php';
}
});";
echo "</script>";

}
}

?>
</body>
</html>