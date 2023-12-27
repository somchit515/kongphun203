<section class="content">
<div class="container-fluid">
<!-- Small boxes (Stat box) -->
<div class="row">
<div class="col-lg-4 col-4">
<!-- small box -->
<div class="small-box bg-info">
<div class="inner">
<h3>ພ/ງ ທັງໝົດ<sup style="font-size: 16px"></sup></h3>
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
<div class="col-lg-4 col-6">
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
<a href="../../form/history/one.php" class="small-box-footer">ເບີ່ງຂໍ້ມູນເພີ່ມເຕີມ <i class="fas fa-arrow-circle-right"></i></a>

</div>
</div>
<!-- ./col -->
<div class="col-lg-4 col-6">
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
<a href="../../form/history/two.php" class="small-box-footer">ເບີ່ງຂໍ້ມູນເພີ່ມເຕີມ <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
<!-- ./col -->
<div class="col-lg-4 col-6">
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
<a href="../../form/history/three.php" class="small-box-footer">ເບີ່ງຂໍ້ມູນເພີ່ມເຕີມ <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>


<!-- ./col -->
<div class="col-lg-4 col-6">
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
<a href="../../form/history/samnukngan.php" class="small-box-footer">ເບີ່ງຂໍ້ມູນເພີ່ມເຕີມ <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>


<div class="col-lg-4 col-6">
<!-- small box -->
<div class="small-box bg-primary">
<div class="inner">
<h3>ສະມະຊິກພັກສົມບູນ<sup style="font-size: 20px"></sup></h3>
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
<a href="../../form/history/four.php" class="small-box-footer">ເບີ່ງຂໍ້ມູນເພີ່ມເຕີມ <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<!-- ./col -->
<div class="col-lg-3 col-6">
<!-- small box -->
<div class="small-box bg-dark">
<div class="inner">
<h3>ຊະມາຊິກພັກສຳຮອງ<sup style="font-size: 20px"></sup></h3>
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
<a href="../../form/history/phongkuun.php" class="small-box-footer">ເບີ່ງຂໍ້ມູນເພີ່ມເຕີມ <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
<!-- small box -->
<div class="small-box bg-info">
<div class="inner">
<h3>ສະມາຊິກສະຫະພັນແມ່ຍິງທັງໝົດ<sup style="font-size: 20px"></sup></h3>
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
<a href="../../form/history/phongkuun.php" class="small-box-footer">ເບີ່ງຂໍ້ມູນເພີ່ມເຕີມ <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<!-- ./col -->
<div class="col-lg-3 col-6">
<!-- small box -->
<div class="small-box bg-danger">
<div class="inner">
<h3>ມະຫາຊົນກ້າວໜ້າທັງໝົດ<sup style="font-size: 20px"></sup></h3>
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
<a href="../../form/history/phongkuun.php" class="small-box-footer">ເບີ່ງຂໍ້ມູນເພີ່ມເຕີມ <i class="fas fa-arrow-circle-right"></i></a>
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
<a href="../../form/users/table.php" class="small-box-footer">ເບີ່ງຂໍ້ມູນເພີ່ມເຕີມ <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
<!-- ./col -->
</div>
<div class="row">
<div class="col-sm-5">
<b>	<li class="list-group-item ">ລາຍງານຂໍ້ມູນ ແຍກຕາມຊັ້ນ</li></b>	
<?php
include('../../condb.php');

$sql=mysqli_query($con,"SELECT pl_name FROM positionlevel order by pl_id desc ");
while ($row=mysqli_fetch_array($sql)) {
$pl_name = $row['pl_name'];	
$countp = mysqli_query($con,"select count(b.hp_id)as totallname from positionlevel as a,historys_personsall as b where a.pl_id =b.pl_id  and a.pl_name='$pl_name' ");
$totallname =mysqli_fetch_array($countp);
?>

<li class="list-group-item "><a href="../../form/history/people_pl_name.php?pl_name=<?php echo $row['pl_name']; ?>" class="text-dark"><?php echo $row['pl_name']; ?><span class="btn btn-info btn-sm float-sm-right "> <span class="text-light"><i class="fas fa-restroom"></i></span> [ <b><?php echo $totallname['totallname']; ?></b> ສະຫາຍ ]</span> </a></li>	
<?php } ?>	
</div>
<div class="col-sm-7">
<div class="card">
<div class="card-header">
<h3 class="card-title"><b>ລາຍງານຂໍ້ມູນ ແຍກຕາມຂະແໜ່ງການ</b></h3>
</div>
<div class="card-body">
<table id="example1" class="table table-bordered table-hover table-sm">
<thead>
<tr align="center">
<th>ລະດັບ</th>
<th>ສັງກັດ</th>
<th>ຈຳນວນພົນ</th>

</tr>
</thead>
<tbody>
<?php 
$i=1;
include('../../condb.php');
$sql=mysqli_query($con,"SELECT sk_name FROM sungkud ");
while ($sungkud=mysqli_fetch_array($sql)){
$sk_name = $sungkud['sk_name'];	
$count = mysqli_query($con,"select count(b.hp_id)as totalls from sungkud as a,historys_personsall as b where a.sk_id=b.sk_id and a.sk_name='$sk_name' ");
$totalls =mysqli_fetch_array($count);



// $count2 = mysqli_query($con,"SELECT a.*,b.*,c.*,count(c.hp_id)as totalls2 from positionlevel as a,sungkud as b,historys_personsall as c where a.pl_id=c.pl_id  and b.sk_id=c.sk_id and b.sk_name='$sk_name' and a.pl_name='ຊັ້ນ II';");
// $totalls2 =mysqli_fetch_array($count2);


?>
<tr align="center">
<td><?php echo $i++; ?></td>
<td><?php echo $sungkud['sk_name']; ?></td>
<!-- <td><?php echo $totalls2['totalls2']; ?></td> -->
<td><a href="../../form/history/people_sk_name.php?sk_name=<?php echo $sungkud['sk_name']; ?>" class="btn btn-success btn-sm"> <i class="fas fa-restroom"></i> [ <?php echo $totalls['totalls']; ?>   ສະຫາຍ ] ()</a></td>

</tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div><!-- /.container-fluid -->
</section>