<?php 
session_start(); 
include('../../condb.php');
$query =mysqli_query($con,"select *from users");
$result = mysqli_fetch_array($query);
?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ກອງພັນ 203</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <script src="../../bootstrap-5.0.0-beta2-dist/js/jquery-3.6.0.js"></script>
<script src="../../sweetalert/dist/sweetalert2.all.min.js"></script>
  <style>
    *{
      font-family:"phetsarath ot";
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <!-- <img class="animation__shake" src="../../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60"> -->
  </div>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars">

        
        </i>
        <font style="color:GREEN">
          <script>
          var t=new Date();
          var d=t.getDay();
		  var today = new Date();
          document.write(" ");
		  
if(d==0){
document.write("ວັນທີດ");
}
else if(d==1){
document.write("ວັນຈັນ");
}
else if(d==2){
document.write("ວັນຄານ");
}
else if(d==3){
document.write("ວັນພູດ");
}
else if(d==4){
document.write("ວັນພະຫັດ");
}
else if(d==5){
document.write("ວັນສຸກ");
}
else if(d==6){
document.write("ວັນເສົາ");
}
else{
document.write("ຜິດພາດ");
}
</script>
<script>
today=new Date();
d=today.getDate();
m=today.getMonth()+1;
y=today.getFullYear();
document.write( +d+ "-" +m+ "-" +y);
</script>

<script>
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
<body onload="startTime()">

<b id="txt"></b>
          </font>
      </a>
      </li>
      

    </ul>
    
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      <li class="nav-item">
        <a href="../../logout.php" class="btn btn-danger btn-sm" onclick="return confirm('ການຕ້ອງການອອກຈາກລະບົບແທ້ບໍ່?')"> <span><i class="ion-log-out" ></i></span> ອອກຈາກລະບົບ</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->