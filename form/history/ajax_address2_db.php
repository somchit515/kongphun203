<?php
  include('../../condb.php');
if(isset($_POST['function'])  && $_POST['function'] == 'provinces'){

$dis_id = $_POST['dis_id'];
$sql = "SELECT * FROM tb_district where pn_id='$dis_id'";
$query = mysqli_query($con,$sql);
echo '<option value="">ກະລຸນາເລືອກເມືອງ</option>';
foreach($query as $value){
echo '<option value="'.$value['dt_id'].'">'.$value['dt_name'].'</option>';
}
exit();

}

if(isset($_POST['function'])  && $_POST['function'] == 'districts'){

$vill_id  = $_POST['vill_id'];
$sql = "SELECT * FROM tb_village where dt_id='$vill_id'";
$query = mysqli_query($con,$sql);
echo '<option value="">ກະລຸນາເລືອກບ້ານ</option>';
foreach($query as $value){
echo '<option value="'.$value['vg_id'].'">'.$value['vg_name'].'</option>';
}
exit();

}

if(isset($_POST['function'])  && $_POST['function'] == 'districts'){

$id = $_POST['id'];
$sql = "SELECT * FROM districts where id='$id'";
$query = mysqli_query($con,$sql);
$result = mysqli_fetch_assoc($query);
echo $result['zip_code'];
exit();

}

?>

