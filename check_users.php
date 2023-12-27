<?php
	session_start(); // ປະກາດນຳໃຊ້ session 
	include("condb.php");// ເອີ້ນຟຣາຍທີ່ເຊື່ອມໂຍງຫາຖານຂໍ້ມູນມານຳໃຊ້
	 $user=$_POST['user_name']; // ວາງຕົວປ່ຽນຮັບເອົາຂໍ້ມູນ
	 $pass=$_POST['user_pass'];

	$q=mysqli_query($con,"select user_id,status,fname,lname from users
	where user_name='$user' and user_pass='$pass'");
	$a=mysqli_num_rows($q); // ກວດສອບຂໍ້ມູນ
	if($a <> 0){ // ຖ້າມີຂໍ້ມູນ ໃຫ້ທຳງານຕາມເງື່ອນໄຂດັ່ງນີ້ :
		$rows=mysqli_fetch_array($q);
		if($rows['status']=="1"){ // ຖ້າຫາກສະຖານະຂອງຜຸ້ລ໋ອກອິນ ແມ່ນ ພະນັກງານ
		$_SESSION['user_id']=$rows['user_id']; // ວາງຕົວປ່ຽນ user_id ເກັບເອົາລະຫັດຜູ້ນຳໃຊ້
		$_SESSION['fname']=$rows['fname']; // ວາງຕົວປ່ຽນ fname ເກັບເອົາຊື່
		$_SESSION['lname']=$rows['lname']; // ວາງຕົວປ່ຽນ lname ເກັບເອົານາມສະກຸນ
		$_SESSION['checked']=1; // ວາງຕົວປ່ຽນ checked ເກັບກຳເອົາເລກ 1 ເພື່ອໃຊ້ໃນການຢືນຢັນ 
		echo"
		<script>
		let timerInterval
Swal.fire({
  title: 'ກຳລັງເຂົ້າສູ່ລະບົບ!',
  timer: 1500,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()
    timerInterval = setInterval(() => {
       const content = Swal.getContent()
      if (content) {
        const b = content.querySelector('b')
        if (b) {
          b.textContent = Swal.getTimerLeft()
        }
      }
    }, 100)
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
    console.log('I was closed by the timer')
  }
})
window.setTimeout(function(){ 
    location='form/admin/';
} ,1500);
		</script>
		";
			
	}
	elseif($rows['status']=="2"){ // ຖ້າຫາກສະຖານະຂອງຜຸ້ລ໋ອກອິນ ແມ່ນ ຜູ້ບໍລິຫານ
		$_SESSION['user_id']=$rows['user_id'];
		$_SESSION['fname']=$rows['fname']; 
		$_SESSION['lname']=$rows['lname']; 
		$_SESSION['checked']=1; 
		echo"
		<script>
		let timerInterval
Swal.fire({
  title: 'ກຳລັງເຂົ້າສູ່ລະບົບ!',
  timer: 1500,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()
    timerInterval = setInterval(() => {
      const content = Swal.getContent()
      if (content) {
        const b = content.querySelector('b')
        if (b) {
          b.textContent = Swal.getTimerLeft()
        }
      }
    }, 100)
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
    console.log('I was closed by the timer')
  }
})
window.setTimeout(function(){ 
  location='form/admin/';
} ,1500);
		</script>
		";
		
	}
	}
	else{
	echo"
		<script>
		Swal.fire({
				position: 'center',
				icon: 'error',
				title: 'ຊື່ ຫຼື ລະຫັດຜ່ານບໍ່ຖືກຕ້ອງ',
				showConfirmButton: false,
				timer: 1500
				})
		</script>
		";
	}
	
	
?>