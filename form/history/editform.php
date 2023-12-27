<?php include('../../controller/head.php');  ?>
<?php include('../../controller/menu_left.php');  ?>
<?php
include('../../condb.php');
$hp_id=$_GET['hp_id'];
$sql=mysqli_query($con,"select *from historys_personsall where hp_id  ='$hp_id'");
$row=mysqli_fetch_array($sql);
?>
<div class="content-wrapper">
<div class="content-header">
<!-- Main content -->
<div class="card card-info">
<div class="card-header">
<h3 class="card-title">ຟອມບັນທືກ ປະຫວັດພະນັກງານ</h3>
</div>
<form accept="utf-8" id="uploadForm" action="" method="post" enctype="multipart/form-data" accept="utf-8">
<div class="card-body">
<div class="row">
<div class="col-sm-3">
<div class="form-group">
<label for="">ເລກບັດປະຈຳໂຕ:</label>
<div class="input-group">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-ios-barcode-outline"></i></span>
</div>
</div>
<input type="text" class="form-control" name="hp_id" id="hp_id" value="<?php echo $row['hp_id']; ?>" placeholder="ກະລຸນນາປ້ອນເລກບັດປະຈຳໂຕ">
</div>
</div> 
<div class="form-group">
<label for="">ຊື່ ແລະ ນາມສະກຸນ:</label>
<div class="input-group">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="fas fa-restroom"></i></span>
</div>
</div>
<input type="hidden" class="form-control" name="hp_id" id="hp_id" value="<?php echo $row['hp_id']; ?>" placeholder="ກະລຸນນາປ້ອນຊື່ ແລະ ນາມສະກຸນ">
<input type="text" class="form-control" name="flname_hp" id="flname_hp" value="<?php echo $row['flname_hp']; ?>" placeholder="ກະລຸນນາປ້ອນຊື່ ແລະ ນາມສະກຸນ">
</div>
</div> 

<div class="form-group">
<label for="">ຊັ້ນ:</label>
<div class="input-group">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-android-funnel"></i></span>
</div>
</div>
<select name="pl_id" id="pl_id" class="form-control">
<option value="ກະລຸນນາເລືອກແຂງ">ເລືອກຊັ້ນ</option>
<?php 
include('condb.php');
$sql = "SELECT * FROM positionlevel ";
$query = mysqli_query($con,$sql);
foreach ($query as $value){ ?>
<option value="<?= $value['pl_id'] ?>"><?= $value['pl_name'] ?></option>
<?php }  ?>

</select>


</div>
</div> 
<div class="form-group">
<label for="">ຕຳແໜ່ງ-ໜ້າທີ່:</label>
<div class="input-group ">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-android-pin"></i></span>
</div>
</div>
<select name="dts_id" id="dts_id" class="form-control">
<option value="ກະລຸນນາເລືອກແຂງ">ເລືອກຕຳແໜ່ງ-ໜ້າທີ່</option>
<?php 
include('condb.php');
$sql = "SELECT * FROM duties ";
$query = mysqli_query($con,$sql);
foreach ($query as $value){ ?>
<option value="<?= $value['dts_id'] ?>"><?= $value['dt_name'] ?></option>
<?php }  ?>

</select>

</div>
</div> 

<div class="form-group">
<label for="">ສັງກັດ:</label>
<div class="input-group ">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-stats-bars"></i></span>
</div>
</div>
<select name="sk_id" id="sk_id" class="form-control">
<option value="ກະລຸນນາເລືອກແຂງ">ເລືອກສັງກັດ</option>
<?php 
include('condb.php');
$sql = "SELECT * FROM sungkud ";
$query = mysqli_query($con,$sql);
foreach ($query as $value){ ?>
<option value="<?= $value['sk_id'] ?>"><?= $value['sk_name'] ?></option>
<?php }  ?>

</select>

</div>
</div> 
<div class="form-group">
<label for="">ເພດ:</label>
<div class="input-group">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="fas fa-restroom"></i></span>
</div>
</div>
<select name="gender_hp" id="gender_hp" class="form-control">
<option value="0">ເພດ</option>
<option value="ຊາຍ">ຊາຍ</option>
<option value="ຍິງ">ຍິງ</option>
</select>
</div>
</div> 
<div class="form-group">
<label for="">ສະຖານະ:</label>
<div class="input-group ">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="fas fa-restroom"></i></span>
</div>
</div>
<select name="status_mw" id="status_mw" class="form-control">
<option value="0">ສະຖານະ</option>
<option value="ໂສດ">ໂສດ</option>
<option value="ຄອບຄົວ">ຄອບຄົວ</option>
</select>
</div>
</div>
 
</div>
<div class="col-sm-3">
<div class="form-group">
<label for="">ວັນເດືອນປີເກີດ:</label>
<div class="input-group ">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-android-calendar"></i></span>
</div>
</div>
<input type="date" class="form-control" name="hbd_hp" id="hbd_hp" value="<?php echo $row['hbd_hp']; ?>" placeholder="">
</div>
</div>
<div class="form-group">
<label for="">ວດປ ເຂົ້າສັ່ງກັດລັດ:</label>
<div class="input-group ">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-android-calendar"></i></span>
</div>
</div>
<input type="date" class="form-control" name="datel_hp" id="datel_hp" value="<?php echo $row['datel_hp']; ?>" placeholder="">
</div>
</div> 

<div class="form-group">
<label for="">ວດປ ສຳຮອງ:</label>
<div class="input-group ">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-android-calendar"></i></span>
</div>
</div>
<input type="date" class="form-control" name="dateh_hp" id="dateh_hp" value="<?php echo $row['dateh_hp']; ?>" placeholder="">
</div>
</div> 

<div class="form-group">
<label for="">ວດປ ສົມບູນ:</label>
<div class="input-group ">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-android-calendar"></i></span>
</div>
</div>
<input type="date" class="form-control" name="dateb_hp" id="dateb_hp" value="<?php echo $row['dateb_hp']; ?>" placeholder="">
</div>
</div> 
<div class="form-group">
<label for="">ວດປ ກຳມະບານ:</label>
<div class="input-group ">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-android-calendar"></i></span>
</div>
</div>
<input type="date" class="form-control" name="datek_hp" id="datek_hp" value="<?php echo $row['datek_hp']; ?>" placeholder="">

</div>
</div> 

<div class="form-group">
<label for="">ວດປ ຊາວໜຸ່ມ:</label>
<div class="input-group">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-android-calendar"></i></span>
</div>
</div>
<input type="date" class="form-control" name="daten_hp" id="daten_hp" value="<?php echo $row['daten_hp']; ?>" placeholder="">
</div>
</div>

<div class="form-group">
<label for="">ວດປ ແມ່ຍິງ:</label>
<div class="input-group ">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-android-calendar"></i></span>
</div>
</div>
<input type="date" class="form-control" name="datew_hp" id="datew_hp" value="<?php echo $row['datew_hp']; ?>" placeholder="">
</div>
</div> 
</div>
<div class="col-sm-3">
<div class="form-group">
<label for="">ບ້ານເກີດ:</label>
<div class="input-group ">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-home"></i></span>
</div>
</div>
<select name="vg_id" class="form-control" id="villages" required></select>

</div>
</div> 

<div class="form-group">
<label for="">ເມືອງເກີດ:</label>
<div class="input-group ">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-ios-home-outline"></i></span>
</div>
</div>
<select name="dt_id" class="form-control" id="districts" required></select>

</div>
</div> 

<div class="form-group">
<label for="">ແຂວງເກີດ:</label>
<div class="input-group ">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-ios-home"></i></span>
</div>
</div>
<select name="pn_id" class="form-control" id="provinces">
<option value="ກະລຸນນາເລືອກແຂງ" required>ກະລຸນນາເລືອກແຂວງ</option>
<?php 
include('connect.php');
$sql = "SELECT * FROM tb_province";
$query = mysqli_query($con,$sql);
foreach ($query as $value){ ?>
<option value="<?= $value['pn_id'] ?>"><?= $value['pn_name'] ?></option>
<?php }  ?>
</select>

</div>
</div> 

<div class="form-group">
<label for="">ລະດັບການສືກສາວິຊາສະເພາະ:</label>
<div class="input-group ">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-android-subway"></i></span>
</div>
</div>
<select class="form-control" name="lv_lead_hp" id="lv_lead_hp" required>
<option value="">ເລືອກລະດັບການສືກສາວິຊາສະເພາະ</option>
<option value="ປເອກ">ປເອກ</option>
<option value="ປໂທ">ປໂທ</option>
<option value="ປຕິ">ປຕິ</option>
<option value="ຊັ້ນສູງ">ຊັ້ນສູງ</option>
<option value="ຊັ້ນການ">ຊັ້ນການ</option>
<option value="ຊັ້ນຕົ້ນ">ຊັ້ນຕົ້ນ</option>
<option value="ບໍ່ມີວິຊາສະເພາະ">ບໍ່ມີວິຊາສະເພາະ</option>
</select>
</div>
</div>
<div class="form-group">
<label for="">ສາດສະໜາ:</label>
<div class="input-group">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-aperture"></i></span>
</div>
</div>
<select class="form-control" name="lv_sadsana_hp" id="lv_sadsana_hp" required>
<option value="0">ເລືອກສາດສະໜາ</option>
<option value="ລາວລຸ່ມ">ພູດ</option>
<option value="ລາວເທິງ">ຜີ</option>
<option value="ລາວສູງ">ລາວສູງ</option>
<option value="ໄທແດງ">ໄທແດງ</iption>
<option value="ຂະມຸ">ຂະມຸ</iption>
<option value="ພວນ">ພວນ</iption>
<option value="ບໍ່ລະບຸ">ບໍ່ລະບຸ</option>
</select>
</div>
</div> 

<div class="form-group">
<label for="">ຊົນເຜົ່າ:</label>
<div class="input-group ">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-cube"></i></span>
</div>
</div>
<select class="form-control" name="lv_zanpao_hp" id="lv_zanpao_hp" required>
<option value="0">ເລືອກຊົນເຜົ່າ</option>
<option value="ຕະຫຼຽງ">ຕະຫຼຽງ</option>
<option value="ອາລັກ">ອາລັກ</option>
<option value="ລາວ">ລາວ</option>
<option value="ແຢະ">ແຢະ</iption>
<option value="ໂອຍ">ໂອຍ</iption>
<option value="ຍາເຫີນ">ຍາເຫີນ</iption>
<option value="ເບຣົາ">ເບຣົາ</option>
<option value="ເຈັງ">ເຈັງ</option>
<option value="ຢຣູ">ຢຣູ</option>
<option value="ລະເວນ">ລະເວນ</option>
<option value="ລາວໄຕ">ລາວໄຕ</option>
<option value="​ອອງ">​ອອງ</option>
</select></div>
</div> 
<div class="form-group">
<label for="">ລະດັບທິດສະດີການເມືອງ:</label>
<div class="input-group">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-easel"></i></span>
</div>
</div>
<select class="form-control" name="lv_vizasapor_hp" id="lv_vizasapor_hp" required>
<option value="">ເລືອກລະດັບທິດສະດີການເມືອງ</option>
<option value="ຊັ້ນສູງ">ຊັ້ນສູງ</option>
<option value="ຊັ້ນກາງ">ຊັ້ນກາງ</option>
<option value="ຊັ້ນຕົ້ນ">ຊັ້ນຕົ້ນ</option>
</select>
</div>
</div>
</div>

<div class="col-sm-3">
 
<div class="form-group">
<label for="">ບ້ານຢູ່ປັດຈຸບັນ:</label>
<div class="input-group ">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-ios-home-outline"></i></span>
</div>
</div>
<input type="text" name="villn_hp" id="villn_hp" class="form-control" value="<?php echo $row['villn_hp']; ?>" placeholder="" >

</div>
</div> 

<div class="form-group">
<label for="">ເມືອງປັດຈຸບັນ:</label>
<div class="input-group ">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-ios-home-outline"></i></span>
</div>
</div>
<input type="text" name="disn_hp" id="disn_hp" class="form-control" value="<?php echo $row['disn_hp']; ?>" placeholder="" aria-describedby="helpId">

</div>
</div>
<div class="form-group">
<label for="">ແຂວງຢູ່ປັດຈຸບັນ:</label>
<div class="input-group ">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-ios-home-outline"></i></span>
</div>
</div>
<select name="provn_hp" class="form-control" id="provinces2" required>
<option value="ກະລຸນນາເລືອກແຂງ">ກະລຸນນາເລືອກແຂວງ</option>
<?php 
include('condb.php');
$sql = "SELECT * FROM tb_province";
$query = mysqli_query($con,$sql);
foreach ($query as $value){ ?>
<option value="<?= $value['pn_name'] ?>"><?= $value['pn_name'] ?></option>
<?php }  ?>
</select>

</div>
</div>

<div class="form-group">
<label for="">ໝາຍເຫດ:</label>
<div class="input-group">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-ios-help"></i></span>
</div>
</div>
<input type="text" name="remark_hp" id="remark_hp" class="form-control" value="<?php echo $row['remark_hp']; ?>" placeholder="" >

</div>
</div>

<div class="form-group">
<label for="">ຊື່ໄຟ(file):</label>
<div class="input-group ">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-android-document"></i></span>
</div>
</div>
<input type="text" name="file_name" id="file_name" class="form-control" placeholder="" aria-describedby="helpId">

</div>
</div> 
<div class="form-group">
<label for="">ໄຟ(file):</label>
<div class="input-group ">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-android-document"></i></span>
</div>
</div>
<input type="file" name="file_db" id="file_db" class="form-control" placeholder="" aria-describedby="helpId">

</div>
</div> 
<div class="form-group">
<label for="">ຮູບພາບ:</label>
<div class="input-group ">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-ios-reverse-camera"></i></span>
</div>
</div>
<input type="file" name="img_photo" id="img_photo" value="<?php echo $row['img_photo']; ?>" class="form-control" placeholder="" >

</div>
</div>

</div>

</div>
<div align="center">
<div class="card-footer">
<button type="submit" id="send" class="btn btn-success"><span><i class="fas fa-plus"></i> ບັນທືກ</span> </button>
<button type="reset" class="btn btn-danger"><span><i class="fas fa-eraser"></i></span> ລ້າງຂໍ້ມູນ</button>
</div>
</div>

</div>
</div>
</form>
</div>
<div id="show"></div>
<!-- /.content -->
</div>
</div>
<?php include('../../controller/footer.php');  ?>

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


<script>
$('#provinces').change(function(){
var dis_id  = $(this).val();
$.ajax({
type: "post",
url: "ajax_address2_db.php",
data:{dis_id  :dis_id  ,function:'provinces'},
success: function(data){
$('#districts').html(data);
}
});
});
</script>


<script>
$('#districts').change(function(){
var vill_id   = $(this).val();
$.ajax({
type: "post",
url: "ajax_address2_db.php",
data:{vill_id  :vill_id  ,function:'districts'},
success: function(data){
$('#villages').html(data);
}
});
});
</script>
<!--  -->

<script>
$('#provinces2').change(function(){
var dis_id  = $(this).val();
$.ajax({
type: "post",
url: "ajax_address3_db.php",
data:{dis_id  :dis_id  ,function:'provinces2'},
success: function(data){
$('#districts2').html(data);
}
});
});
</script>


<script>
$('#districts2').change(function(){
var vill_id   = $(this).val();
$.ajax({
type: "post",
url: "ajax_address3_db.php",
data:{vill_id  :vill_id  ,function:'districts2'},
success: function(data){
$('#villages2').html(data);
}
});
});
</script>
