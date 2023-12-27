
<?php session_start();
echo "<script src='../../bootstrap-5.0.0-beta2-dist/js/jquery-3.6.0.js'></script>";
echo "<script src='../../sweetalert/dist/sweetalert2.all.min.js'></script>";
$pn_name = $_POST['pn_name'];
$user_id =$_SESSION['user_id'];
include('../../condb.php');
$scurity = mysqli_query($con, "select *from tb_province where pn_name='$pn_name'");
$num=mysqli_num_rows($scurity);
if($num <> 0){
    echo"
    <script>
    Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'ກະລຸນນາປ້ອນຊື່ແຂວງໃໝ່',
            showConfirmButton: false,
            timer: 1500
            })
    </script>
    ";

}else if($pn_name == ""){
    echo"
    <script>
    Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'ກະລຸນນາປ້ອນຂໍ້ມູນພາກສວ່ນກ່ອນ',
            showConfirmButton: false,
            timer: 1500
            })
    </script>
    ";

}else{

$sql = mysqli_query($con,"INSERT INTO `tb_province`( `pn_name`, `user_id`) VALUES
('$pn_name','$user_id')");
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
}
?>
