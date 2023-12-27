
<?php session_start();
echo "<script src='../../bootstrap-5.0.0-beta2-dist/js/jquery-3.6.0.js'></script>";
echo "<script src='../../sweetalert/dist/sweetalert2.all.min.js'></script>";
$hp_id =$_POST['hp_id'];
$flname_hp = $_POST['flname_hp'];
$hbd_hp = $_POST['hbd_hp'];
$pl_id = $_POST['pl_id'];
$dts_id = $_POST['dts_id'];
$sk_id = $_POST['sk_id'];
$gender_hp = $_POST['gender_hp'];
$status_mw = $_POST['status_mw'];
$hbd_hp = $_POST['hbd_hp'];
$datel_hp = $_POST['datel_hp'];
$dateh_hp = $_POST['dateh_hp'];
$dateb_hp = $_POST['dateb_hp'];
$datek_hp = $_POST['datek_hp'];
$daten_hp = $_POST['daten_hp'];
$datew_hp = $_POST['datew_hp'];
$vg_id = $_POST['vg_id'];
$dt_id = $_POST['dt_id'];
$pn_id = $_POST['pn_id'];
$lv_lead_hp = $_POST['lv_lead_hp'];
$lv_sadsana_hp = $_POST['lv_sadsana_hp'];
$lv_zanpao_hp = $_POST['lv_zanpao_hp'];
$lv_vizasapor_hp = $_POST['lv_vizasapor_hp'];
$villn_hp = $_POST['villn_hp'];
$disn_hp = $_POST['disn_hp'];
$provn_hp = $_POST['provn_hp'];
$remark_hp = $_POST['remark_hp'];
$user_id =$_SESSION['user_id'];

$file_name=$_POST['file_name'];
$file_db=$_FILES['file_db']['name'];
$tmp_name=$_FILES['file_db']['tmp_name'];

if ($file_db && $file_name) {
    $location="document/$file_db";
    move_uploaded_file($tmp_name,$location);
} else {
    echo "Not upload file document !";
}

$exit=pathinfo(basename($_FILES['img_photo']['name']),PATHINFO_EXTENSION);
$new_image_name='img_'.uniqid().".".$exit;
$image_path="image/";
$upload_path=$image_path.$new_image_name;
$success=move_uploaded_file($_FILES['img_photo']['tmp_name'],$upload_path);
if($success==FALSE){
echo "ບໍສາມາດ upload ໄດ້";
$exit();
}
$img_photo=$new_image_name;
include('../../condb.php');

$sql = mysqli_query($con,"UPDATE `historys_personsall` SET `hp_id`='$hp_id', `flname_hp`='$flname_hp',`pl_id`='$pl_id',`dts_id`='$dts_id',`sk_id`='$sk_id',`gender_hp`='$gender_hp',`status_mw`='$status_mw',`hbd_hp`='$hbd_hp',`datel_hp`='$datel_hp',`dateh_hp`='$dateh_hp',`dateb_hp`='$dateb_hp',`datek_hp`='$datek_hp',`daten_hp`='$daten_hp',`datew_hp`='$datew_hp',`vg_id`='$vg_id',`dt_id`='$dt_id',`pn_id`='$pn_id',`lv_lead_hp`='$lv_lead_hp',`lv_sadsana_hp`='$lv_sadsana_hp',`lv_zanpao_hp`='$lv_zanpao_hp',`lv_vizasapor_hp`='$lv_vizasapor_hp',`villn_hp`='$villn_hp',`disn_hp`='$disn_hp',`provn_hp`='$provn_hp',`remark_hp`='$remark_hp',`img_photo`='$img_photo',file_name='$file_name',file_db='$location'  WHERE hp_id='$hp_id' ");


if($sql){
echo "<script>";
echo " Swal.fire({
icon: 'success',
title: 'ແກ້ໄຂຂໍ້ມູນສຳເລັດ',
showConfirmButton: false,
timer: 2000
}).then((result) => {
if (result.isDismissed) {  
// location='table.php';

}
});";
echo "</script>";
}else{
echo "<script>";
echo " Swal.fire({
icon: 'error',
title: 'ຜິດພາດ!',
showConfirmButton: false,
timer: 1000
}).then((result) => {
if (result.isConfirmed) {  
location='form.php';
}
})";
echo "</script>";
}


?>
