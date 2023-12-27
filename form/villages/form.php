<?php include('../../controller/head.php');  ?>
<?php include('../../controller/menu_left.php');  ?>

<div class="content-wrapper">
<div class="content-header">
<!-- Main content -->
<div class="card card-success">
<div class="card-header">
<h3 class="card-title">ຟອມບັນທືກ ບ້ານ</h3>
</div>
<form accept="utf-8" id="uploadForm" action="" method="post" enctype="multipart/form-data" accept="utf-8">
<div class="card-body">
<div class="row">
<div class="col-sm-12">
<div class="form-group">
<label for="">ບ້ານ:</label>
<div class="input-group">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-ios-home"></i></span>
</div>
</div>
<input type="text" name="vg_name" id="vg_name" value="" class="form-control"  placeholder="ກະລຸນນາປ້ອນບ້ານ">
</div>
</div> 

<div class="form-group">
<label for="">ເມືອງ:</label>
<div class="input-group">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-ios-home"></i></span>
</div>
</div>
<select name="dt_id" id="dt_id" class="form-control">
<option value="ເລືອກເມືອງ">ເລືອກເມືອງ</option>
<?php 
include('condb.php');
$sql = "SELECT * FROM tb_district ";
$query = mysqli_query($con,$sql);
foreach ($query as $value){ ?>
<option value="<?= $value['dt_id'] ?>"><?= $value['dt_name'] ?></option>
<?php }  ?>
</select>
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

<script>
$(document).ready(function (e) {
$("#uploadForm").on('submit',(function(e) {
e.preventDefault();
$.ajax({
url: "save.php",
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