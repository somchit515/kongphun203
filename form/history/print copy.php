
<link rel="stylesheet" href="styleprint.css">

<!-- <style type="text/css" media="print">
    	/* body{font-family:phetsarath OT;background-color:#white} */
@media print
{
#hd { display: none; }
}

.main-footer{
display: none;
}

.header{
display: none;
}

</style> -->
<div class="container-fluid mb-5">
<!-- <button id="hd" class="btn btn-primary btn-sm text-white float-sm-right mt-3" onclick="window.print();"><span><i class="fas fa-print"></i></span> ພີມ</button> -->

<div class="cardimg">
<img src="logo/logo1.png"  >
</div>
<!-- <div class="pdr">
<p>ສາທາລະນະລັດ ປະຊາທິປະໄຕ ປະຊາຊົນລາວ</p>
<p>ສັນຕິພາບ ເອກະລາດ ປະຊາທິປະໄຕ ເອກະພາບ ວັດທະນາຖາວອນ</p>
</div> -->
<div class="khom213">
<p class="ml-3">ກົມ  </p>


</div>
<div class="vieng">
<p class="ml-3">ກອງພັນ  </p>
<p class="mr-3">ເລກທີ:......../.......... </p>
</div>
<div class="right">
<p class="mr-3">ນະຄອນຫຼວງວຽງຈັນ,ວັນທີ:....../......./......... </p>
</div>
<br>
<div class="centertext"><h3 class="mt-2 text-center">ສະຫຼຸບພະນັກງານທັງໝົດ ພາຍໃນກອງພັນ </h3></div>
<div class="tableshow">

<table border="1" cellspacing="0" style="width: 100%;  ">
<tr align="center">
<th rowspan="3">ລະດັບ</th>
<th rowspan="3">ກົົງຈັກການຈັດຕັ້ງ</th>
<th colspan="4">ການຈັດຕັ້ງປະຕິບັດແຜນການ (06 ເດີອນ ທ້າຍປີ )</th>
</tr>
<tr align="center">
<th colspan="4">ພາຍໃນກົມກອງ</th>

</tr>
<tr align="center">
<th>ຊາຍ</th>
<th>ຍິງ</th>
<th>ຄອບຄົວ</th>
<th>ໂສດ</th>
</tr>

<tr align="center">
<th>I</th>
<?php 
include('../../condb.php');
$sql = mysqli_query($con,"select count(*)as allss from historys_personsall  ");
$allss = mysqli_fetch_array($sql);
?>
<th>ພະນັກງານທັງໝົດ <?php echo $allss['allss']; ?> ສະຫາຍ</th>
<?php 
include('../../condb.php');
$sql = mysqli_query($con,"select count(*)as alls from historys_personsall where gender_hp='ຊາຍ' ");
$alls = mysqli_fetch_array($sql);
?>
<th><?php echo $alls['alls']; ?> ສະຫາຍ</th>
<?php 
include('../../condb.php');
$sql = mysqli_query($con,"select count(*)as allsf from historys_personsall where gender_hp='ຍິງ' ");
$allsf = mysqli_fetch_array($sql);
?>
<th><?php echo $allsf['allsf']; ?> ສະຫາຍ</th>
<?php 
include('../../condb.php');
$sql = mysqli_query($con,"select count(*)as allsfamily from historys_personsall where status_mw='ຄອບຄົວ' ");
$allsfamily = mysqli_fetch_array($sql);
?>
<th><?php echo $allsfamily['allsfamily']; ?> ສະຫາຍ</th>
<?php 
include('../../condb.php');
$sql = mysqli_query($con,"select count(*)as allssing from historys_personsall where status_mw='ໂສດ' ");
$allssing = mysqli_fetch_array($sql);
?>
<th><?php echo $allsfamily['allsfamily']; ?> ສະຫາຍ</th>
</tr>
<?php 
$i = 1;
include('../../condb.php');
$sql = mysqli_query($con,"SELECT *FROM positionlevel order by pl_id  asc ");
while($row=mysqli_fetch_array($sql)){ 
    $pl_name = $row['pl_name'];
$m = mysqli_query($con,"SELECT a.*,b.*, count(b.hp_id)as tom from positionlevel as a,historys_personsall as b where a.pl_id=b.pl_id    and a.pl_name='$pl_name' and b.gender_hp='ຊາຍ' ");
$tom =mysqli_fetch_array($m);

$m = mysqli_query($con,"SELECT a.*,b.*, count(b.hp_id)as tof from positionlevel as a,historys_personsall as b where a.pl_id=b.pl_id    and a.pl_name='$pl_name' and b.gender_hp='ຍິງ' ");
$tof =mysqli_fetch_array($m);

$family = mysqli_query($con,"SELECT a.*,b.*, count(b.hp_id)as tofamily from positionlevel as a,historys_personsall as b where a.pl_id=b.pl_id    and a.pl_name='$pl_name' and b.status_mw='ຄອບຄົວ' ");
$tofamily =mysqli_fetch_array($family);

$single = mysqli_query($con,"SELECT a.*,b.*, count(b.hp_id)as tosingle from positionlevel as a,historys_personsall as b where a.pl_id=b.pl_id    and a.pl_name='$pl_name' and b.status_mw='ໂສດ' ");
$tosingle =mysqli_fetch_array($single);
    ?>
<tr align="center">
<th><?php echo $i++; ?></th>

<th><?php echo $row['pl_name']; ?></th>
<th><?php echo $tom['tom']; ?> ສະຫາຍ</th>
<th><?php echo $tof['tof']; ?> ສະຫາຍ</th>
<th><?php echo $tofamily['tofamily']; ?> ສະຫາຍ</th>
<th><?php echo $tof['tof']; ?> ສະຫາຍ</th>


</tr>
<?php }?>

<tr align="center">
<th>II</th>
<th>ແຍກຕາມຂະແໜງການ</th>
<th>ຊາຍ</th>
<th>ຍິງ</th>
<th>ຄອບຄົວ</th>
<th>ໂສດ</th>
</tr>
<?php 
$i = 1;
include('../../condb.php');
$sql = mysqli_query($con,"SELECT *FROM sungkud order by sk_id asc ");
while($row3=mysqli_fetch_array($sql)){ 
    $sk_name = $row3['sk_name'];  

$count = mysqli_query($con,"select count(b.hp_id)as totallss from sungkud as a,historys_personsall as b where a.sk_id=b.sk_id and a.sk_name='$sk_name'  and b.gender_hp='ຊາຍ' ");
$totallss =mysqli_fetch_array($count);

$countw = mysqli_query($con,"select count(b.hp_id)as totallsws from sungkud as a,historys_personsall as b where a.sk_id=b.sk_id and a.sk_name='$sk_name'  and b.gender_hp='ຍິງ' ");
$totallsws =mysqli_fetch_array($countw);

$countf = mysqli_query($con,"select count(b.hp_id)as totallsfs from sungkud as a,historys_personsall as b where a.sk_id=b.sk_id and a.sk_name='$sk_name'  and b.status_mw='ຄອບຄົວ' ");
$totallsfs =mysqli_fetch_array($countf);

$counting = mysqli_query($con,"select count(b.hp_id)as totallsings from sungkud as a,historys_personsall as b where a.sk_id=b.sk_id and a.sk_name='$sk_name'  and b.status_mw='ຄອບຄົວ' ");
$totallsings =mysqli_fetch_array($counting);

    ?>
<tr align="center">
<th><?php echo $i++; ?></th>

<th><?php echo $row3['sk_name']; ?></th>
<th><?php echo $totallss['totallss']; ?> ສະຫາຍ</th>
<th><?php echo $totallsws['totallsws']; ?> ສະຫາຍ</th>
<th><?php echo $totallsfs['totallsfs']; ?> ສະຫາຍ</th>
<th><?php echo $totallsings['totallsings']; ?> ສະຫາຍ</th>


</tr>
<?php }?>



<tr align="center">
<th>III</th>
<?php 
include('../../condb.php');
$sql = mysqli_query($con,"select count(*)as allss from historys_personsall where dateh_hp  ");
$allss = mysqli_fetch_array($sql);
?>
<th>ສະມະຊີກສຳຮອງ <?php echo $allss['allss']; ?> ສະຫາຍ</th>
<?php 
include('../../condb.php');
$sql = mysqli_query($con,"select count(*)as alls from historys_personsall where gender_hp='ຊາຍ' and dateh_hp ");
$alls = mysqli_fetch_array($sql);
?>
<th><?php echo $alls['alls']; ?> ສະຫາຍ</th>
<?php 
include('../../condb.php');
$sql = mysqli_query($con,"select count(*)as allsf from historys_personsall where gender_hp='ຍິງ' and dateh_hp ");
$allsf = mysqli_fetch_array($sql);
?>
<th><?php echo $allsf['allsf']; ?> ສະຫາຍ</th>
<?php 
include('../../condb.php');
$sql = mysqli_query($con,"select count(*)as allsfamily from historys_personsall where status_mw='ຄອບຄົວ' and dateh_hp ");
$allsfamily = mysqli_fetch_array($sql);
?>
<th><?php echo $allsfamily['allsfamily']; ?> ສະຫາຍ</th>
<?php 
include('../../condb.php');
$sql = mysqli_query($con,"select count(*)as allssing from historys_personsall where status_mw='ໂສດ' and dateh_hp ");
$allssing = mysqli_fetch_array($sql);
?>
<th><?php echo $allsfamily['allsfamily']; ?> ສະຫາຍ</th>
</tr>
<?php 
$i = 1;
include('../../condb.php');
$sql = mysqli_query($con,"SELECT *FROM positionlevel order by pl_id  asc ");
while($row=mysqli_fetch_array($sql)){ 
    $pl_name = $row['pl_name'];
$m = mysqli_query($con,"SELECT a.*,b.*, count(b.hp_id)as tom from positionlevel as a,historys_personsall as b where a.pl_id=b.pl_id    and a.pl_name='$pl_name' and b.gender_hp='ຊາຍ' and b.dateh_hp");
$tom =mysqli_fetch_array($m);

$m = mysqli_query($con,"SELECT a.*,b.*, count(b.hp_id)as tof from positionlevel as a,historys_personsall as b where a.pl_id=b.pl_id    and a.pl_name='$pl_name' and b.gender_hp='ຍິງ' and b.dateh_hp");
$tof =mysqli_fetch_array($m);

$family = mysqli_query($con,"SELECT a.*,b.*, count(b.hp_id)as tofamily from positionlevel as a,historys_personsall as b where a.pl_id=b.pl_id    and a.pl_name='$pl_name' and b.status_mw='ຄອບຄົວ' and b.dateh_hp");
$tofamily =mysqli_fetch_array($family);

$single = mysqli_query($con,"SELECT a.*,b.*, count(b.hp_id)as tosingle from positionlevel as a,historys_personsall as b where a.pl_id=b.pl_id    and a.pl_name='$pl_name' and b.status_mw='ໂສດ' ");
$tosingle =mysqli_fetch_array($single);
    ?>
<tr align="center">
<th><?php echo $i++; ?></th>

<th><?php echo $row['pl_name']; ?></th>
<th><?php echo $tom['tom']; ?> ສະຫາຍ</th>
<th><?php echo $tof['tof']; ?> ສະຫາຍ</th>
<th><?php echo $tofamily['tofamily']; ?> ສະຫາຍ</th>
<th><?php echo $tof['tof']; ?> ສະຫາຍ</th>


</tr>
<?php }?>



<tr align="center">
<th>IV</th>
<?php 
include('../../condb.php');
$sql = mysqli_query($con,"select count(*)as allss from historys_personsall where dateb_hp  ");
$allss = mysqli_fetch_array($sql);
?>
<th>ສະມະຊີກສຳມບູນ <?php echo $allss['allss']; ?> ສະຫາຍ</th>
<?php 
include('../../condb.php');
$sql = mysqli_query($con,"select count(*)as alls from historys_personsall where gender_hp='ຊາຍ' and dateb_hp ");
$alls = mysqli_fetch_array($sql);
?>
<th><?php echo $alls['alls']; ?> ສະຫາຍ</th>
<?php 
include('../../condb.php');
$sql = mysqli_query($con,"select count(*)as allsf from historys_personsall where gender_hp='ຍິງ' and dateb_hp ");
$allsf = mysqli_fetch_array($sql);
?>
<th><?php echo $allsf['allsf']; ?> ສະຫາຍ</th>
<?php 
include('../../condb.php');
$sql = mysqli_query($con,"select count(*)as allsfamily from historys_personsall where status_mw='ຄອບຄົວ' and dateb_hp ");
$allsfamily = mysqli_fetch_array($sql);
?>
<th><?php echo $allsfamily['allsfamily']; ?> ສະຫາຍ</th>
<?php 
include('../../condb.php');
$sql = mysqli_query($con,"select count(*)as allssing from historys_personsall where status_mw='ໂສດ' and dateb_hp ");
$allssing = mysqli_fetch_array($sql);
?>
<th><?php echo $allsfamily['allsfamily']; ?> ສະຫາຍ</th>
</tr>
<?php 
$i = 1;
include('../../condb.php');
$sql = mysqli_query($con,"SELECT *FROM positionlevel order by pl_id  asc ");
while($row=mysqli_fetch_array($sql)){ 
    $pl_name = $row['pl_name'];
$m = mysqli_query($con,"SELECT a.*,b.*, count(b.hp_id)as tom from positionlevel as a,historys_personsall as b where a.pl_id=b.pl_id    and a.pl_name='$pl_name' and b.gender_hp='ຊາຍ' and b.dateb_hp ");
$tom =mysqli_fetch_array($m);

$m = mysqli_query($con,"SELECT a.*,b.*, count(b.hp_id)as tof from positionlevel as a,historys_personsall as b where a.pl_id=b.pl_id    and a.pl_name='$pl_name' and b.gender_hp='ຍິງ' and b.dateb_hp ");
$tof =mysqli_fetch_array($m);

$family = mysqli_query($con,"SELECT a.*,b.*, count(b.hp_id)as tofamily from positionlevel as a,historys_personsall as b where a.pl_id=b.pl_id    and a.pl_name='$pl_name' and b.status_mw='ຄອບຄົວ' and b.dateb_hp ");
$tofamily =mysqli_fetch_array($family);

$single = mysqli_query($con,"SELECT a.*,b.*, count(b.hp_id)as tosingle from positionlevel as a,historys_personsall as b where a.pl_id=b.pl_id    and a.pl_name='$pl_name' and b.status_mw='ໂສດ' and b.dateb_hp ");
$tosingle =mysqli_fetch_array($single);
    ?>
<tr align="center">
<th><?php echo $i++; ?></th>

<th><?php echo $row['pl_name']; ?></th>
<th><?php echo $tom['tom']; ?> ສະຫາຍ</th>
<th><?php echo $tof['tof']; ?> ສະຫາຍ</th>
<th><?php echo $tofamily['tofamily']; ?> ສະຫາຍ</th>
<th><?php echo $tof['tof']; ?> ສະຫາຍ</th>


</tr>
<?php }?>


<tr align="center">
<th>V</th>
<th>ແຍກຕາມຂະແໜງການ ສະມາຊີກສຳຮອງ</th>
<th>ຊາຍ</th>
<th>ຍິງ</th>
<th>ຄອບຄົວ</th>
<th>ໂສດ</th>
</tr>
<?php 
$i = 1;
include('../../condb.php');
$sql = mysqli_query($con,"SELECT *FROM sungkud order by sk_id asc ");
while($row5=mysqli_fetch_array($sql)){ 
    $sk_name = $row5['sk_name'];  

$count = mysqli_query($con,"select count(b.hp_id)as totalls5 from sungkud as a,historys_personsall as b where a.sk_id=b.sk_id and a.sk_name='$sk_name'  and b.gender_hp='ຊາຍ' and b.dateh_hp ");
$totalls5 =mysqli_fetch_array($count);

$countw = mysqli_query($con,"select count(b.hp_id)as totallsw5 from sungkud as a,historys_personsall as b where a.sk_id=b.sk_id and a.sk_name='$sk_name'  and b.gender_hp='ຍິງ' and b.dateh_hp ");
$totallsw5 =mysqli_fetch_array($countw);

$countf = mysqli_query($con,"select count(b.hp_id)as totallsf5 from sungkud as a,historys_personsall as b where a.sk_id=b.sk_id and a.sk_name='$sk_name'  and b.status_mw='ຄອບຄົວ' and b.dateh_hp ");
$totallsf5 =mysqli_fetch_array($countf);

$counting = mysqli_query($con,"select count(b.hp_id)as totallsing5 from sungkud as a,historys_personsall as b where a.sk_id=b.sk_id and a.sk_name='$sk_name'  and b.status_mw='ຄອບຄົວ' and b.dateh_hp ");
$totallsing5 =mysqli_fetch_array($counting);

    ?>
<tr align="center">
<th><?php echo $i++; ?></th>

<th><?php echo $row5['sk_name']; ?></th>
<th><?php echo $totalls5['totalls5']; ?> ສະຫາຍ</th>
<th><?php echo $totallsw5['totallsw5']; ?> ສະຫາຍ</th>
<th><?php echo $totallsf5['totallsf5']; ?> ສະຫາຍ</th>
<th><?php echo $totallsing5['totallsing5']; ?> ສະຫາຍ</th>


</tr>
<?php }?>

<tr align="center">
<th>VI</th>
<th>ແຍກຕາມຂະແໜງການ ສະມາຊີກສົມບູນ</th>
<th>ຊາຍ</th>
<th>ຍິງ</th>
<th>ຄອບຄົວ</th>
<th>ໂສດ</th>
</tr>
<?php 
$i = 1;
include('../../condb.php');
$sql = mysqli_query($con,"SELECT *FROM sungkud order by sk_id asc ");
while($row6=mysqli_fetch_array($sql)){ 
    $sk_name = $row6['sk_name'];  

$count = mysqli_query($con,"select count(b.hp_id)as totalls6 from sungkud as a,historys_personsall as b where a.sk_id=b.sk_id and a.sk_name='$sk_name'  and b.gender_hp='ຊາຍ'  and b.dateb_hp ");
$totalls6 =mysqli_fetch_array($count);

$countw = mysqli_query($con,"select count(b.hp_id)as totallsw6 from sungkud as a,historys_personsall as b where a.sk_id=b.sk_id and a.sk_name='$sk_name'  and b.gender_hp='ຍິງ'  and b.dateb_hp ");
$totallsw6 =mysqli_fetch_array($countw);

$countf = mysqli_query($con,"select count(b.hp_id)as totallsf6 from sungkud as a,historys_personsall as b where a.sk_id=b.sk_id and a.sk_name='$sk_name'  and b.status_mw='ຄອບຄົວ'  and b.dateb_hp ");
$totallsf6 =mysqli_fetch_array($countf);

$counting = mysqli_query($con,"select count(b.hp_id)as totallsing6 from sungkud as a,historys_personsall as b where a.sk_id=b.sk_id and a.sk_name='$sk_name'  and b.status_mw='ຄອບຄົວ'   and b.dateb_hp");
$totallsing6 =mysqli_fetch_array($counting);

    ?>
<tr align="center">
<th><?php echo $i++; ?></th>

<th><?php echo $row6['sk_name']; ?></th>
<th><?php echo $totalls6['totalls6']; ?> ສະຫາຍ</th>
<th><?php echo $totallsw6['totallsw6']; ?> ສະຫາຍ</th>
<th><?php echo $totallsf6['totallsf6']; ?> ສະຫາຍ</th>
<th><?php echo $totallsing6['totallsing6']; ?> ສະຫາຍ</th>


</tr>
<?php }?>


</table>
<br>
</div>
</div>
</div>
</div>
</div>

<!-- /.content -->


