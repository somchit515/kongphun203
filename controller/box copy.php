<section class="content">
<div class="container-fluid">
<!-- Small boxes (Stat box) -->
<div class="row">
<div class="col-lg-3 col-6">
<!-- small box -->
<div class="small-box bg-info">
<div class="inner">
<h3>ພະນັກງານທັງໝົດ<sup style="font-size: 20px"></sup></h3>
<?php 
include('../../condb.php');
$sql = mysqli_query($con,"select count(*)as alls from historys_personsall ");
$alls = mysqli_fetch_array($sql);
?>
<h4>[ <?php echo $alls['alls']; ?> ສະຫາຍ ]</h4>
</div>
<div class="icon">
<i class="fas fa-restroom"></i>
</div>
<a href="../../form/history/people.php" class="small-box-footer">ເບີ່ງຂໍ້ມູນເພີ່ມເຕີມ <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
<!-- small box -->
<div class="small-box bg-success">
<div class="inner">
<h3>ກອງຮ້ອຍ I<sup style="font-size: 20px"></sup></h3>
<?php 
include('../../condb.php');
$sql = mysqli_query($con,"select count(b.hp_id)as ones from sungkud as a,historys_personsall as b where a.sk_id=b.sk_id and a.sk_name='ກອງຮ້ອຍ I' ");
$ones = mysqli_fetch_array($sql);
?>
<h4>[ <?php echo $ones['ones']; ?> ສະຫາຍ ]</h4>
</div>
<div class="icon">
<i class="fas fa-male"></i>
</div>
<a href="#" class="small-box-footer">ເບີ່ງຂໍ້ມູນເພີ່ມເຕີມ <i class="fas fa-arrow-circle-right"></i></a>

</div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
<!-- small box -->
<div class="small-box bg-warning">
<div class="inner">
<h3>ກອງຮ້ອຍ II<sup style="font-size: 20px"></sup></h3>
<?php 
include('../../condb.php');
$sql = mysqli_query($con,"select count(b.hp_id)as two from sungkud as a,historys_personsall as b where a.sk_id=b.sk_id and a.sk_name='ກອງຮ້ອຍ II' ");
$two = mysqli_fetch_array($sql);
?>
<h4>[ <?php echo $two['two']; ?> ສະຫາຍ ]</h4>
</div>
<div class="icon">
<i class="fas fa-male"></i>
</div>
<a href="#" class="small-box-footer">ເບີ່ງຂໍ້ມູນເພີ່ມເຕີມ <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
<!-- small box -->
<div class="small-box bg-danger">
<div class="inner">
<h3>ກອງຮ້ອຍ III<sup style="font-size: 20px"></sup></h3>
<?php 
include('../../condb.php');
$sql = mysqli_query($con,"select count(b.hp_id)as tree from sungkud as a,historys_personsall as b where a.sk_id=b.sk_id and a.sk_name='ກອງຮ້ອຍ III' ");
$tree = mysqli_fetch_array($sql);
?>
<h4>[ <?php echo $tree['tree']; ?> ສະຫາຍ ]</h4>
</div>
<div class="icon">
<i class="fas fa-male"></i>
</div>
<a href="#" class="small-box-footer">ເບີ່ງຂໍ້ມູນເພີ່ມເຕີມ <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
<!-- ./col -->
</div>

<div class="row">
<div class="col-lg-3 col-6">
<!-- small box -->
<div class="small-box bg-primary">
<div class="inner">
<h3>ກອງຮ້ອຍ IV<sup style="font-size: 20px"></sup></h3>
<?php 
include('../../condb.php');
$sql = mysqli_query($con,"select count(b.hp_id)as four from sungkud as a,historys_personsall as b where a.sk_id=b.sk_id and a.sk_name='ກອງຮ້ອຍ IV' ");
$four = mysqli_fetch_array($sql);
?>
<h4>[ <?php echo $four['four']; ?> ສະຫາຍ ]</h4>
</div>
<div class="icon">
<i class="fas fa-female"></i>
</div>
<a href="#" class="small-box-footer">ເບີ່ງຂໍ້ມູນເພີ່ມເຕີມ <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
<!-- small box -->
<div class="small-box bg-light">
<div class="inner">
<h3>ສຳນັກງານ<sup style="font-size: 20px"></sup></h3>
<?php 
include('../../condb.php');
$sql = mysqli_query($con,"select count(b.hp_id)as sumnuk from sungkud as a,historys_personsall as b where a.sk_id=b.sk_id and a.sk_name='ສຳນັກງານ' ");
$sumnuk = mysqli_fetch_array($sql);
?>
<h4>[ <?php echo $sumnuk['sumnuk']; ?> ສະຫາຍ ]</h4>
</div>
<div class="icon">

<i class="fas fa-restroom"></i>
</div>
<a href="#" class="small-box-footer">ເບີ່ງຂໍ້ມູນເພີ່ມເຕີມ <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
<!-- small box -->
<div class="small-box bg-dark">
<div class="inner">
<h3>ໝວດປ້ອງກັນ<sup style="font-size: 20px"></sup></h3>
<?php 
include('../../condb.php');
$sql = mysqli_query($con,"select count(b.hp_id)as pongkun from sungkud as a,historys_personsall as b where a.sk_id=b.sk_id and a.sk_name='ໝວດປ້ອງກັນ' ");
$pongkun = mysqli_fetch_array($sql);
?>
<h4>[ <?php echo $pongkun['pongkun']; ?> ສະຫາຍ ]</h4>
</div>
<div class="icon">
<i class="fas fa-street-view"></i>
</div>
<a href="#" class="small-box-footer">ເບີ່ງຂໍ້ມູນເພີ່ມເຕີມ <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
<!-- small box -->
<div class="small-box bg-secondary">
<div class="inner">
<h3>ຜູ້ຄຸມລະບົບ<sup style="font-size: 20px"></sup></h3>
<?php 
include('../../condb.php');
$sql = mysqli_query($con,"select count(*)as users from users");
$users = mysqli_fetch_array($sql);
?>
<h4>[ <?php echo $users['users']; ?> ສະຫາຍ ]</h4>
</div>
<div class="icon">
<i class="fas fa-user-cog"></i>
</div>
<a href="#" class="small-box-footer">ເບີ່ງຂໍ້ມູນເພີ່ມເຕີມ <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
<!-- ./col -->
</div>
<div class="row">
<div class="col-sm-6 ">
<b>	<li class="list-group-item ">ສະແດງຂໍ້ມູນ ແຍກຕາມຂະແໜ່ງການ</li></b>	
	<?php
include('../../condb.php');

$sql=mysqli_query($con,"SELECT sk_name FROM sungkud ");
while ($sungkud=mysqli_fetch_array($sql)) {
	$sk_name = $sungkud['sk_name'];	
	$count = mysqli_query($con,"select count(b.hp_id)as totalls from sungkud as a,historys_personsall as b where a.sk_id=b.sk_id and a.sk_name='$sk_name' ");
	$totalls =mysqli_fetch_array($count);
	?>

	<li class="list-group-item "><a href="../../form/history/people_sk_name.php?sk_name=<?php echo $sungkud['sk_name']; ?>" class="text-danger"><?php echo $sungkud['sk_name']; ?><span class="btn btn-danger btn-sm float-sm-right "> <span class="text-light"><i class="fas fa-restroom"></i></span> [ <b><?php echo $totalls['totalls']; ?></b> ຄົນ ]</span> </a></li>	
<?php } ?>	
</div>
</div>
</div><!-- /.container-fluid -->
</section>