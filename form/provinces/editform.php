<?php include('../../controller/head.php');  ?>
<?php include('../../controller/menu_left.php');  ?>
<?php
include('../../condb.php');
$pn_id=$_GET['pn_id'];
$sql=mysqli_query($con,"select *from tb_province where pn_id  ='$pn_id'");
$row=mysqli_fetch_array($sql);
?>
<div class="content-wrapper">
<div class="content-header">
<!-- Main content -->
<div class="card card-success">
<div class="card-header">
<h3 class="card-title">ຟອມແກ້ໄຂ ແຂວງ</h3>
</div>
<form accept="utf-8" id="uploadForm" action="" method="post" enctype="multipart/form-data" accept="utf-8">
<div class="card-body">
<div class="row">
<div class="col-sm-12">

<div class="form-group">
<label for="">ແຂວງ:</label>
<div class="input-group">
<div class="input-group-append">
<div class="input-group-text">
<span class="text-danger"><i class="ion-ios-home"></i></span>
</div>
</div>
<input type="hidden" name="pn_id" id="pn_id" value="<?php echo $row['pn_id']; ?>" class="form-control"  placeholder="">

<input type="text" name="pn_name" id="pn_name" value="<?php echo $row['pn_name']; ?>" class="form-control"  placeholder="ກະລຸນນາປ້ອນແຂວງ">
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