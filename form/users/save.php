
<?php session_start();
echo "<script src='../../bootstrap-5.0.0-beta2-dist/js/jquery-3.6.0.js'></script>";
echo "<script src='../../sweetalert/dist/sweetalert2.all.min.js'></script>";
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$user_name = $_POST['user_name'];
$user_pass = $_POST['user_pass'];
$status = $_POST['status'];
$tel = $_POST['tel'];

$exit=pathinfo(basename($_FILES['ps_img']['name']),PATHINFO_EXTENSION);
$new_image_name='img_'.uniqid().".".$exit;
$image_path="image/";
$upload_path=$image_path.$new_image_name;
$success=move_uploaded_file($_FILES['ps_img']['tmp_name'],$upload_path);
if($success==FALSE){
echo "ບໍສາມາດ upload ໄດ້";
$exit();
}
$ps_img=$new_image_name;

include('../../condb.php');
$sql = mysqli_query($con,"INSERT INTO `users`(`fname`, `lname`, `gender`, `user_name`, `user_pass`, `status`, `tel`, `in_date`, `ps_img`) VALUES
('$fname','$lname','$gender','$user_name','$user_pass','$status','$tel',now(),'$ps_img')");
if($sql){
echo "<script>";
echo " Swal.fire({
icon: 'success',
title: 'ບັນທືກຂໍ້ມູນສຳເລັດ',
showConfirmButton: false,
timer: 2000
}).then((result) => {
if (result.isDismissed) {  

location='table.php';
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

location='form.php';
}
});";
echo "</script>";

}

?>
