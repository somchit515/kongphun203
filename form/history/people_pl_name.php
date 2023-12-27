<?php include('../../controller/head.php');  ?>
<?php include('../../controller/menu_left.php');  ?>

<div class="content-wrapper">
<div class="content-header">
<!-- Main content -->
<div class="container-fluid">
<div class="row mb-2">

<div class="col-sm-8 col-12">
<?php 
include('../../condb.php');
$sql = mysqli_query($con,"select count(*)as alls from historys_personsall ");
$alls = mysqli_fetch_array($sql);
?>
<a href="table.php" class="text-light btn btn-info btn-sm">ພະນັກງານທັງໝົດ <i class="fas fa-restroom"></i> [ <?php echo $alls['alls']; ?> ສະຫາຍ ]</a>
<?php 
include('../../condb.php');
$sql = mysqli_query($con,"select count(*)as single from historys_personsall where status_mw='ໂສດ' ");
$single = mysqli_fetch_array($sql);
?>
<a href="single.php" class="text-dark btn btn-warning btn-sm">ໂສດ <i class="ion ion-man"></i> [ <?php echo $single['single']; ?> ສະຫາຍ ]</a>
<?php 
include('../../condb.php');
$sql = mysqli_query($con,"select count(*)as family from historys_personsall where status_mw='ຄອບຄົວ' ");
$family = mysqli_fetch_array($sql);
?>
<a href="family.php" class="text-light btn btn-success btn-sm">ຄອບຄົວ <i class="ion-person-stalker"></i> [ <?php echo $family['family']; ?> ສະຫາຍ ]</a>
<?php 
include('../../condb.php');
$sql = mysqli_query($con,"select count(*)as f from historys_personsall where gender_hp='ຍິງ' ");
$f = mysqli_fetch_array($sql);
?>
<a href="woman.php" class="text-light btn btn-primary btn-sm">ຍິງ <i class="ion ion-woman"></i> [ <?php echo $f['f']; ?> ສະຫາຍ ]</a>
<?php 
include('../../condb.php');
$sql = mysqli_query($con,"select count(*)as m from historys_personsall where gender_hp='ຊາຍ' ");
$m = mysqli_fetch_array($sql);
?>
<a href="man.php" class="text-light btn btn-danger btn-sm">ຊາຍ <i class="ion ion-man"></i> [ <?php echo $m['m']; ?> ສະຫາຍ ]</a>
<a href="../../form/history/chick_showprint.php" class="btn btn-dark btn-sm">Print <i class="ion-ios-printer-outline"></i></a>
</div>
<!-- /.col -->
<!-- <div class="col-sm-2 col-6">
<select class="form-control">
<option value="">ສັງກັດ</option>
</select>
</div> -->
<!-- /.col -->
<div class="col-sm-4 col-6">
<div class="input-group">
<input type="text" name="flname_hp" id="flname_hp" class="form-control" placeholder="ຄົ້ນຫາຂໍ້ມູນພະນັກງານ">
<button type="submit" class=" btn btn-primary"><i class="ion-android-search"></i></button>
</div>
</div><!-- /.col -->
</div><!-- /.row -->
<div id="ss">
<div class="row">
<?php 
$pl_name = $_GET['pl_name'];
include('../../condb.php');
$sql = mysqli_query($con,"SELECT a.*,b.*,c.*,d.* from positionlevel as a,duties as b,sungkud as c,historys_personsall as d where a.pl_id=d.pl_id and b.dts_id=d.dts_id and c.sk_id=d.sk_id and a.pl_name='$pl_name' ");
while ($row = mysqli_fetch_array($sql)) {
?>
    <div class="col-md-2 col-6">
<?php if($row['img_photo']==""){ ?>

<a href="../../form/history/showp_id.php?hp_id=<?php echo $row['hp_id']; ?>">
<div class="small-box  text-center" style="border: 1px solid red;  ">

<img src="logo/1.png" style="width: 100%; height: 180px;" >
<b style="font-size: 12px; color: black"><?php echo $row['pl_name']; ?> <?php echo $row['flname_hp']; ?></b>

</div>
</a>
    <?php }else{ ?>

 <a href="../../form/history/showp_id.php?hp_id=<?php echo $row['hp_id']; ?>">
<div class="small-box  text-center" style="border: 1px solid red;  ">

<img src="image/<?php echo $row['img_photo']; ?>" style="width: 100%; height: 180px;" >
<b style="font-size: 12px; color: black"><?php echo $row['pl_name']; ?> <?php echo $row['flname_hp']; ?></b>

</div>
</a>

        <?php } ?>
        </div>
<?php }  ?>
</div>
</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
</div>
<?php include('../../controller/footer.php');  ?>
<script>
$(function(){
$("#flname_hp").keyup(function(){
var flname_hp=$("#flname_hp").val();
$.post("sarech_people.php",
{
    flname_hp:flname_hp
},
function(output){
$("#ss").html(output).show();
});
});
});
</script>