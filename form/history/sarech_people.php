<div class="row">
<?php 
  $flname_hp = $_POST['flname_hp'];
include('../../condb.php');
$sql = mysqli_query($con,"SELECT a.*,b.*,c.*,d.* from positionlevel as a,duties as b,sungkud as c,historys_personsall as d where a.pl_id=d.pl_id and b.dts_id=d.dts_id and c.sk_id=d.sk_id and d.flname_hp like'%$flname_hp%'");

// $sql = mysqli_query($con,"SELECT  *FROM historys_personsall where flname_hp like'%$flname_hp%' ");
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
</div>