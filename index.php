<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ກອງພັນ 203</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="asset/plugins/fontawesome-free/css/all.min.css">

<script src="bootstrap-5.0.0-beta2-dist/js/jquery-3.6.0.js"></script>
<script src="sweetalert/dist/sweetalert2.all.min.js"></script>
<style type="text/css">
  *{
    font-family:"phetsarath ot";
  }
</style>
<script>
$(function(){
$("#send").click(function(){
var user = $("#username").val();
var pass = $("#password").val();
if(user == ""){
Swal.fire({
position: 'top',
icon: 'warning',
title: 'ປ້ອນຊື່ຜູ້ນຳໃຊ້ກ່ອນ',
showConfirmButton: false,
timer: 1500
})
}else if(pass == ""){
Swal.fire({
position: 'top',
icon: 'warning',
title: 'ປ້ອນລະຫັດຜ່ານກ່ອນ',
showConfirmButton: false,
timer: 1500
})
}else{
$.post("check_users.php",{
user_name:user,
user_pass:pass
},
function(out){
$(".show").html(out).show();
});
}
});
});
</script>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="index2.html" class="h1"><b>ກອງພັນ 203 </b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">ຍິນດີຕ້ອນຮັບເຂົ້າສູ່ລະບົບ</p>

     <form class="user">
        <div class="input-group mb-3">
          <input type="text" name="username" id="username" class="form-control" placeholder="ຊື່ຜູ້ໃຊ້ງານ">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" id="password" class="form-control" placeholder="ລະຫັດຜ່ານ">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">

          <!-- /.col -->
   <div class="col-12">
            <button type="button" id="send" class="btn btn-primary btn-block"><i class="fas fa-edit"></i> ເຂົ້າສູ່ລະບົບ</button>
          </div>
            <div class="show"></div>
          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->

    
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
