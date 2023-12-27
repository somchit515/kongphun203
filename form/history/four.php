<?php include('../../controller/head.php');  ?>
<?php include('../../controller/menu_left.php');  ?>

<div class="content-wrapper">
<div class="content-header">
<!-- Main content -->
<div class="card card-danger">
<div class="card-header">
<h3 class="card-title">ລາຍງານຂໍ້ມູນ ປະຫວັດພະນັກງານ ກອງຮ້ອຍ IV</h3>
<ol class="breadcrumb float-sm-right">
<a href="../../form/history/form.php" class="btn btn-outline-success btn-sm"><span><i class="fas fa-plus"></i> ເພີ່ມຂໍ້ມູນ</span></a>
</ol>
</div>
<!-- /.card-header -->
<div class="card-body">
<table id="example1" class="table table-bordered table-striped table-sm">
<thead>
<tr align="center">
<th>ເລກບັດປະຈຳໂຕ</th>
<th>ຮູບ</th>
<th>ຊື່ແລະນາມສະກຸນ</th>
<th>ຊັ້ນ</th>
<th>ຕຳແໜ່ງ</th>
<th>ສັງກັດ</th>
<th>ເພດ</th>
<th>ສະຖານະ</th>
<th>ປຸ່ມຄຳສັ່ງ</th>
</tr>
</thead>
<tbody>
<?php 
$i=1;
include('../../condb.php');
$sql = mysqli_query($con,"SELECT a.*,b.*,c.*,d.* from positionlevel as a,duties as b,sungkud as c,historys_personsall as d where a.pl_id=d.pl_id and b.dts_id=d.dts_id and c.sk_id=d.sk_id and c.sk_name='ກອງຮ້ອຍ IV' ");
while($row=mysqli_fetch_array($sql)){ ?>
<tr align="center">
<td><?php echo $row['hp_id']; ?></td>
<td>
<?php if($row['img_photo']==""){ ?>
    <img src="logo/1.png" style="width: 80px; height: 80px; border: 1px solid red;" >

    <?php }else{ ?>
        <img src="image/<?php echo $row['img_photo']; ?>" style="width: 80px; height: 80px; border: 1px solid red;" >

    <?php } ?>
</td>
<td><?php echo $row['flname_hp']; ?></td>
<td><?php echo $row['pl_name']; ?></td>
<td><?php echo $row['dt_name']; ?></td>
<td><?php echo $row['sk_name']; ?></td>
<td><?php echo $row['gender_hp']; ?></td>
<td><?php echo $row['status_mw']; ?></td>
<!-- <td><button type="button" class="btn btn-success btn-sm " data-toggle="modal" data-target="#hp_id<?php echo $row['hp_id'] ?>">ເປີດເບີ່ງ</button></td> -->
<td>     
<div class="dropdown show">
<a class="btn btn-danger dropdown-toggle btn-sm" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="ion-android-checkbox-outline"></i> ເລືອກຄຳສັ່ງ
</a>
<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
<a href="showp_id.php?hp_id=<?php echo $row['hp_id']?>" class="btn btn-outline-success btn-sm dropdown-item"><span><i class="fas fa-eye text-primary"></i> </span> ເປີດເບີ່ງ</a>
<a href="delete.php?hp_id=<?php echo $row['hp_id']?>" class="btn btn-outline-danger btn-sm dropdown-item"><span><i class="fas fa-trash text-danger"></i> </span> ລົບ</a>
<a href="editform.php?hp_id=<?php echo $row['hp_id']?>" class="btn btn-outline-primary btn-sm dropdown-item"><span><i class="fas fa-edit text-success"></i></span> ແກ້ໄຂ</a>
</div>
</div> 
</td>
</tr>
<?php include('modal_showp.php');  ?>
<?php } ?>
</tbody>
</table>
</div>
<!-- /.card-body -->
</div>
</div>

<!-- /.content -->
</div>
</div>
<?php include('../../controller/footer.php');  ?>

