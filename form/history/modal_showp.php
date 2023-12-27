
<div class="modal fade" id="hp_id<?php echo $row['hp_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">ຟອມບັນທືກ ຊັ້ນ</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<form accept="utf-8" id="uploadForm" action="save_user.php" method="post" enctype="multipart/form-data" accept="utf-8">
<div class="modal-body">
<!-- <div class="row">
<div class="col-sm-12 text-center">
<img src="image/<?php echo $row['img_photo']; ?>" style="width: 200px; height: 200px; border: 1px solid red;" >
</div>
</div> -->
<div class="row">
<div class="col-sm-4">
ຊື່ແລະນາມສະກຸນ
<?php echo $row['flname_hp'];?>
</div>
<div class="col-sm-1">
ຊັ້ນ
<?php echo $row['pl_name'];?>
</div>
<div class="col-sm-3">
ໜ້າທີ່-ຕຳແໜ່ງ
<?php echo $row['dt_name'];?>
</div>
<div class="col-sm-2">
ສັງກັດ
<?php echo $row['sk_name'];?>
</div>
<div class="col-sm-3">
ວັນເດືອນປີເກີດ
<?php echo $row['hbd_hp'];?>
</div>
</div>
<div class="row">
<div class="col-sm-3">
ເຂົ້າສັ່ງກັດລັດ
<?php echo $row['datel_hp'];?>
</div>
<div class="col-sm-2">
ສຳຮອງ
<?php echo $row['dateh_hp'];?>
</div>
<div class="col-sm-3">
ສົມບູນ
<?php echo $row['dateb_hp'];?>
</div>
<div class="col-sm-2">
ກຳມະບານ
<?php echo $row['datek_hp'];?>
</div>
<div class="col-sm-3">
ຊາວໜຸ່ມ
<?php echo $row['daten_hp'];?>
</div>
</div>
</div>

<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal"><span><i class="ion-android-cancel"></i> ປິດ</span></button>
</div>
<div id="show"></div>
</form>
</div>
</div>
</div>
