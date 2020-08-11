<?php
include 'config.php';
if(!empty($_SESSION['login'])){
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
  header('Location: rooms.html');
}else{
  $error = 'Failed To Enter Wrong Username Or Password!';
}
}else{
  $error = false;
}
?>

<html>
<head>
<title>Form Login AFW </title>
<!-- For-Mobile-Apps -->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps -->
<!-- Style --> <link rel="stylesheet" href="login/css/style.css" type="text/css" media="all" />
</head>
<body>
<div class="container">
<h1> FORM LOGIN AFW HOTEL </h1>
  <div class="signin">

      <form action="login.php" method="POST">

          <input type="text" class="user" value="username" name="username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'username';}" />
          <input type="password" class="pass" value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" />
          <label>
          </br>
          <input type="checkbox" value="Remember-Me" /> Remember Me?
        </label>
            <input name="login" type="submit" value="LOGIN" />
    </form>
  </div>
</div>
<div class="footer">
     <p>Copyright &copy; 2018. All Rights Reserved | Design by AFW Official </a></p>
</div>
</body>
</html>