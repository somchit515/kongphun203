<?php include('../../controller/head.php');  ?>
<?php include('../../controller/menu_left.php');  ?>
<?php
include('../../condb.php');
$user_id =$_GET['user_id'];
$sql=mysqli_query($con,"select *from users where user_id ='$user_id'");
$row=mysqli_fetch_array($sql);
?>
<div class="content-wrapper">
<div class="content-header">
<!-- Main content -->
<div class="card card-success">
<div class="card-header">
<h3 class="card-title">ຟອມບັນທືກ ພະນັກງານ</h3>
</div>
<form accept="utf-8" id="uploadForm" action="" method="post" enctype="multipart/form-data" accept="utf-8">
<div class="card-body">
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label for="">ຊື່:</label>
<div class="input-group">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-android-contact"></i></span>
</div>
</div>
<input type="hidden" name="user_id" id="user_id" value="<?php echo $row['user_id']; ?>" class="form-control"  placeholder="">

<input type="text" name="fname" id="fname" value="<?php echo $row['fname']; ?>" class="form-control"  placeholder="ກະລຸນນາປ້ອນແຂວງ">
</div>
</div> 
<div class="form-group">
<label for="">ນາມສະກຸນ:</label>
<div class="input-group">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-android-contacts"></i></span>
</div>
</div>
<input type="text" name="lname" id="lname" value="<?php echo $row['lname']; ?>" class="form-control"  placeholder="ກະລຸນນາປ້ອນແຂວງ">
</div>
</div> 
<div class="form-group">
<label for="">ເພດ:</label>
<div class="input-group">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-ios-people-outline"></i></span>
</div>
</div>
<select name="gender" id="gender" class="form-control">
    <option value="0">ເລືອກເພດ</option>
    <option value="ຊາຍ">ຊາຍ</option>
    <option value="ຍິງ">ຍິງ</option>
</select>
</div>
</div> 
<div class="form-group">
<label for="">ຊື່ຜູ້ໃຊ້ງານ:</label>
<div class="input-group">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-android-person-add"></i></span>
</div>
</div>
<input type="text" name="user_name" id="user_name" value="<?php echo $row['user_name']; ?>" class="form-control"  placeholder="ກະລຸນນາປ້ອນຊື່ຜຸ້ໃຊ້ງານ">
</div>
</div> 

</div>

<div class="col-sm-6">
<div class="form-group">
<label for="">ລະຫັດຜ່ານ:</label>
<div class="input-group">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-android-unlock"></i></span>
</div>
</div>
<input type="text" name="user_pass" id="user_pass" value="<?php echo $row['user_pass']; ?>" class="form-control"  placeholder="ກະລຸນນາປ້ອນລະຫັດຜ່ານ">
</div>
</div> 
<div class="form-group">
<label for="">ສະຖານະ:</label>
<div class="input-group">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-ios-people-outline"></i></span>
</div>
</div>
<select name="status" id="status" class="form-control">
    <option value="0">ເລືອກສະຖານະ</option>
    <option value="1">ແອັດມິນ</option>
    <option value="2">ພະນັກງານ</option>
</select>
</div>
</div>

<div class="form-group">
<label for="">ເບີໂທ:</label>
<div class="input-group">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-ios-telephone-outline"></i></span>
</div>
</div>
<input type="text" name="tel" id="tel" value="<?php echo $row['tel']; ?>" class="form-control"  placeholder="ກະລຸນນາປ້ອນເບີໂທ">
</div>
</div> 

<div class="form-group">
<img id="blah" src="#" alt="" width="150px" class="img-rounded"/ style="margin-top: 5px;">
<label for="">ຮູບພາບ:</label>
<div class="input-group">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-android-camera"></i></span>
</div>
</div>
<input type="file" name="ps_img" id="ps_img" value="<?php echo $row['ps_img']; ?>" class="form-control"  placeholder="ກະລຸນນາປ້ອນແຂວງ">
</div>
</div> 
</div>
</div>
</div>
<div class="card-footer text-center">
<button type="submit" id="send" class="btn btn-success"><span><i class="fas fa-plus"></i> ບັນທືກ</span> </button>
<button type="reset" class="btn btn-danger"><span><i class="fas fa-eraser"></i></span> ລ້າງຂໍ້ມູນ</button>
</div>
</form>
</div>
<div id="show"></div>
<!-- /.content -->
</div>
</div>
<?php include('../../controller/footer.php');  ?>
<script type="text/javascript">
function readURL(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();

reader.onload = function (e) {
$('#blah').attr('src', e.target.result);
}

reader.readAsDataURL(input.files[0]);
}
}
</script>
<script>
$(document).ready(function (e) {
$("#uploadForm").on('submit',(function(e) {
e.preventDefault();
$.ajax({
url: "saveedit.php",
type: "POST",
data: new FormData(this),
contentType: false,
cache: false,
processData:false,
success: function(data)
{
$("#show").html(data);
},
error: function() 
{
} 
});
}));
});

</script>
