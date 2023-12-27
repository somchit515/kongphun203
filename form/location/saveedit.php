
<?php session_start();
echo "<script src='../../bootstrap-5.0.0-beta2-dist/js/jquery-3.6.0.js'></script>";
echo "<script src='../../sweetalert/dist/sweetalert2.all.min.js'></script>";
$sk_id = $_POST['sk_id'];
$sk_name = $_POST['sk_name'];
$user_id =$_SESSION['user_id'];
include('../../condb.php');
$sql = mysqli_query($con,"UPDATE `sungkud` SET `sk_name`='$sk_name' WHERE sk_id='$sk_id' and user_id='$user_id' ");
if($sql){
    echo "<script>";
    echo " Swal.fire({
         icon: 'success',
         title: 'ແກ້ໄຂຂໍ້ມູນສຳເລັດ',
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
