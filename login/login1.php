<?php
include 'config.php';
if(!empty($_SESSION['login1'])){
//jika masih ada session login alihkan ya
  header('Location: index.php');
  //jangan eksekusi script di bawah
  exit;
}
if(empty($_POST['username']) && !empty($_POST['password'])){
 $error = 'Please Enter Username';
}elseif(!empty($_POST['username']) && empty($_POST['password'])){
 $error = 'Please Enter password';
}elseif (!empty($_POST['username']) && !empty($_POST['password'])) {
$email = $_POST['username'];
$pass = $_POST['password'];
$ok = ceklogin($email,$pass);
if($ok){
  header('Location: Reserpasi.php');
}else{
  $error = 'Failed To Enter Wrong Username Or Password!';
}
}else{
  $error = false;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Form Login AFW </title>
<!-- For-Mobile-Apps -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Lucid Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps -->
<!-- Style --> <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<div class="container">
<h1> FORM Login AFW Hotel </h1>
	<div class="signin">
     	<form>
	      	<input type="text" class="user" value="rachelgreen" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'rachelgreen';}" />
	      	<input type="password" class="pass" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" />
	      	<label>
		  		<input type="checkbox" value="Remember-Me" /> Remember Me?
		  	</label>
          	<input type="submit" value="LOGIN" />
	 	</form>
	</div>
</div>
<div class="footer">
     <p>Copyright &copy; 2018. All Rights Reserved | Design by AFW Official </a></p>
</div>
</body>
</html>