<?php include('../../controller/head.php');  ?>
<?php include('../../controller/menu_left.php');  ?>

<div class="content-wrapper">
<div class="content-header">
<!-- Main content -->
<div class="card">
<div class="card-header">
<h3 class="card-title">ລາຍງານຂໍ້ມູນ ຊັ້ນ</h3>
<ol class="breadcrumb float-sm-right">
<a href="../../form/position/form.php" class="btn btn-outline-success btn-sm"><span><i class="fas fa-plus"></i> ເພີ່ມຂໍ້ມູນ</span></a>
</ol>
</div>
<!-- /.card-header -->
<div class="card-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
<th>ລະດັບ</th>
<th>ຊັ້ນ</th>
<th>ແກ້ໄຂ</th>
<th>ລົບ</th>
</tr>
</thead>
<tbody>
<?php 
$i = 1;
include('../../condb.php');
$sql = mysqli_query($con,"SELECT *FROM positionlevel order by pl_id  asc ");
while($row=mysqli_fetch_array($sql)){ ?>
<tr>
<td><?php echo $i++; ?></td>
<td><?php echo $row['pl_name']; ?></td>
<td>     
<a href="editform.php?pl_id=<?php echo $row['pl_id']?>" class="btn btn-outline-primary btn-sm edit"><span><i class="fas fa-edit"></i> ແກ້ໄຂ</span></a>
</td>
<td>     
<a href="delete.php?pl_id=<?php echo $row['pl_id']?>" class="btn btn-outline-danger btn-sm btndel"><span><i class="fas fa-trash"></i> ລົບ</span></a>
</td>
</tr>
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
