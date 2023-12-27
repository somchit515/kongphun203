<?php include('../../controller/head.php');  ?>
<?php include('../../controller/menu_left.php');  ?>

<div class="content-wrapper">
<div class="content-header">
<!-- Main content -->
<div class="card card-danger">
<div class="card-header">
<h3 class="card-title">ປະຫວັດພະນັກງານ</h3>
<ol class="breadcrumb float-sm-right">
<a href="../../form/history/table.php" class="btn btn-outline-success btn-sm"><span><i class="ion-reply-all"></i> ຍ້ອນກັບ</span></a>
</ol>
</div>
<div class="card-body">
    <div class="row">
        <!-- <div class="col-sm-6"></div>
        <div class="col-sm-6">
          
</div> -->
    </div>
<div class="row">
<div class="col-sm-12">

<?php 
$i=1;
include('../../condb.php');
$hp_id =$_GET['hp_id'];

$sql = mysqli_query($con,"SELECT a.*,b.*,c.*,d.*,e.*,f.*,g.* from positionlevel as a,duties as b,sungkud as c,tb_province as d,tb_district as e,tb_village as f,historys_personsall as g where a.pl_id=g.pl_id and b.dts_id=g.dts_id and c.sk_id=g.sk_id and d.pn_id=g.pn_id and e.dt_id=g.dt_id and f.vg_id=g.vg_id and g.hp_id=$hp_id ");

while($row = mysqli_fetch_array($sql)){
?>
<center>
<img src="logo/file.png" alt="" width="200px" height="100px">
  <br>
            <b></b>
            <a class="btn btn-outline-warning btn-sm" href="download_document.php?download=<?php echo $row ['file_db']?>" onclick="return confirm('ທ່ານຕ້ອງການດາວໂຫລດເອກະສານແມ່ນບໍ່?')">ກົດດາວໂຫຼດໄຟຣ(FALSE) <?php echo $row['file_name'];?><span><i class="fas fa-download text-danger" style="width:50px"></i> </span></a> 
</center>

<table id="example1" class="table table-bordered table-striped table-hover">

<tr align="center">

<!-- <tr>
<th>ລະດັບ</th>
<td><?php echo $row['hp_id'];?></td>
</tr> -->
<tr>
<th>ຊື່ ແລະ ນາມສະກຸນ</th>
<td><?php echo $row['flname_hp'];?></td>
</tr>
<tr>
<th>ຊັ້ນ</th>
<td><?php echo $row['pl_name'];?></td>
</tr>
<tr>
<th>ໜ້າທີ່-ຕຳແໜ່ງ</th>
<td><?php echo $row['dt_name'];?></td>
</tr>
<tr>
<th>ສັງກັດ</th>
<td><?php echo $row['sk_name'];?></td>
</tr>
<tr>
<th>ວັນເດືອນປີເກີດ</th>
<td><?php echo $row['hbd_hp'];?></td>
</tr>
<tr>
<th>ວັນເດືອນປີ ເຂົ້າສັ່ງກັດລັດ</th>
<td><?php echo $row['datel_hp'];?></td>
</tr>
<tr>
<th>ວັນເດືອນປີ ສຳຮອງ</th>
<td><?php echo $row['dateh_hp'];?></td>
</tr>
<tr>
<th>ວັນເດືອນປີ ສົມບູນ</th>
<td><?php echo $row['dateb_hp'];?></td>
</tr>
<tr>
<th>ວັນເດືອນປີ ກຳມະບານ</th>
<td><?php echo $row['datek_hp'];?></td>
</tr>
<tr>
<th>ວັນເດືອນປີ ຊາວໜຸ່ມ</th>
<td><?php echo $row['daten_hp'];?></td>
</tr>
<tr>
<th>ວັນເດືອນປີ ແມ່ຍິງ</th>
<td><?php echo $row['datew_hp'];?></td>
</tr>
<tr>
<th>ບ້ານເກີດ</th>
<td><?php echo $row['vg_name'];?></td>
</tr>
<tr>
<th>ເມືອງເກີດ</th>
<td><?php echo $row['dt_name'];?></td>
</tr>
<tr>
<th>ແຂວງເກີດ</th>
<td><?php echo $row['pn_name'];?></td>
</tr>
<tr>
<th>ລະດັບການສືກສາວິຊາສະເພາະ</th>
<td><?php echo $row['lv_lead_hp'];?></td>
</tr>
<tr>
<th>ສາດສະໜາ</th>
<td><?php echo $row['lv_sadsana_hp'];?></td>
</tr>
<tr>
<th>ຊົນເຜົ່່າ</th>
<td><?php echo $row['lv_zanpao_hp'];?></td>
</tr>
<tr>
<th>ລະດັບທິດສະດີການເມືອງ</th>
<td><?php echo $row['lv_vizasapor_hp'];?></td>
</tr>
<tr>
<th>ບ້ານຢູ່ປັດຈຸບັນ</th>
<td><?php echo $row['villn_hp'];?></td>
</tr>
<tr>
<th>ເມືອງຢູ່ປັດຈຸບັນ</th>
<td><?php echo $row['disn_hp'];?></td>
</tr>
<tr>
<th>ແຂວງຢູ່ປັດຈຸບັນ</th>
<td><?php echo $row['provn_hp'];?></td>
</tr>
<tr>
<th>ໝາຍເຫດ</th>
<td><?php echo $row['remark_hp'];?></td>
</tr>

<tr>
<th>ຊື່ໄຟ(file)</th>
<td><?php echo $row['file_name'];?></td>
</tr>
<!-- 
<tr>
<th>ໄຟ(file)</th>
<td><?php echo $row['file_db'];?></td>
</tr> -->


</table>
<?php } ?>

</div>
</div>
</div>
</form>
</div>

<!-- /.content -->
</div>
</div>
<?php include('../../controller/footer.php');  ?>

