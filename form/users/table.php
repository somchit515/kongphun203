<?php include('../../controller/head.php');  ?>
<?php include('../../controller/menu_left.php');  ?>

<div class="content-wrapper">
<div class="content-header">
<!-- Main content -->
<div class="card">
<div class="card-header">
<h3 class="card-title">ລາຍງານຂໍ້ມູນ ພະນັກງານ</h3>
<ol class="breadcrumb float-sm-right">
<a href="../../form/users/form.php" class="btn btn-outline-success btn-sm"><span><i class="fas fa-plus"></i> ເພີ່ມຂໍ້ມູນ</span></a>
</ol>
</div>
<!-- /.card-header -->
<div class="card-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
<tr align="center">
<th>ລະດັບ</th>
<th>ຮູບພາບ</th>
<th>ຊື່</th>
<th>ນາມສະກຸນ</th>
<th>ເພດ</th>
<th>ຊື່ຜູ້ໃຊ້ງານ</th>
<th>ລະຫັດຜ່ານ</th>
<th>ສະຖານະ</th>
<th>ເບີໂທ</th>

<th>ແກ້ໄຂ</th>
<th>ລົບ</th>
</tr>
</thead>
<tbody>
<?php 
$i = 1;
include('../../condb.php');
$sql = mysqli_query($con,"SELECT *FROM users order by user_id asc ");
while($row=mysqli_fetch_array($sql)){ ?>
<tr align="center">
<td><?php echo $i++; ?></td>
<td><img src="image/<?php echo $row['ps_img']; ?>" alt="" style="width:40px;height:40px;"></td>

<td><?php echo $row['fname']; ?></td>
<td><?php echo $row['lname']; ?></td>
<td><?php echo $row['gender']; ?></td>
<td><?php echo $row['user_name']; ?></td>
<td><?php echo $row['user_pass']; ?></td>
<td>
    <?php if($row['status']==1){
   echo"Admin";
}else{
    echo"User";   
}?>
</td>
<td><?php echo $row['tel']; ?></td>

<td>     
<a href="editform.php?user_id=<?php echo $row['user_id']?>" class="btn btn-outline-primary btn-sm edit"><span><i class="fas fa-edit"></i> ແກ້ໄຂ</span></a>
</td>
<td>     
<a href="delete.php?user_id=<?php echo $row['user_id']?>" class="btn btn-outline-danger btn-sm btndel"><span><i class="fas fa-trash"></i> ລົບ</span></a>
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
