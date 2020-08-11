<?php
include 'config.php';
if(!empty($_SESSION['login'])){
//jika masih ada session login alihkan ya
  header('Location: sudahlogin.php');
  //jangan eksekusi script di bawah
  exit;
}
if(!empty($_POST['login'])){
$ttl = $_POST['tanggal'].'/'.$_POST['bulan'].'/'.$_POST['tahun'];
$ok = daftar($_POST['nama'],$_POST['gender'],$_POST['ttl'],$_POST['agm'],$_POST['Password']);

  if($ok){
  header('Location: login.php');
  exit;
  }else{
  $error = '<h1> Failed Registration Error </h1>';
  }
}

?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Form AFW Sign Up </title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="daftar/css/style2.css">

  
</head>

<body>

  
<div class="container">
  <form method="POST" action="SIGNUP.php">
    <div class="row">
      <h4>Account</h4>
      <div class="input-group input-group-icon">
        <input name="nama" type="text"  placeholder="Full Name"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="email" name="email" placeholder="Email"/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input name="Password" type="Password" placeholder="Password"/>
        <div class="input-icon"><i class="fa fa-key"></i></div>
        </div> 
          <div class="input-group input-group-icon">
            <input type="Password" placeholder="Confirm Password"/>
            <div class="input-icon"><i class="fa fa-key"></i></div>
           
      </div>
    </div>
     <div class="col-half">
        <h4>Gender</h4>
        <div class="input-group">
          <input type="radio" name="gender" value="male" id="gender-male"/>
          <label for="gender-male">Male</label>
          <input type="radio" name="gender" value="female" id="gender-female"/>
          <label for="gender-female">Female</label>
        </div>
      </div>
    <div class="col-half">
        <h4>Religion</h4>
        <div class="input-group">
          <input type="radio" name="agm" value="islam" id="islam"/>
          <label for="islam">Islam</label>
          <input type="radio" name="agm" value="kristen" id="kristen"/>
          <label for="kristen">Kristen</label>
          <input type="radio" name="agm" value="hindu" id="hindu"/>
          <label for="hindu">Hindu</label>
          <input type="radio" name="agm" value="budha" id="budha"/>
          <label for="budha">Budha</label>
        </div>
      </div>
    <div class="row">
      <div class="col-half">
        <h4>Date of Birth</h4>
        <div class="input-group"> 
          <div class="col-third">
            <input type="text" min="1" max="31" name="tanggal" placeholder="DD" />
          </div>
          <div class="col-third">
            <input type="text" min="1" max="12" name="bulan"  placeholder="MM"/>
          </div>
          <div class="col-third">
            <input type="text" min="1999" max="2000" name="tahun"  placeholder="YYYY"/>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="input-group">
        <input type="reset" name="reset" value="RESET" id="reset" checked="true"/>
        <label for="reset"><span><i></i></span></label>
      </div>
      <div class="input-group">
        <input type="submit" value="SUBMIT" id="signup">
        <label for="signup"> <span><i></i></span></label>
        </div>
   
    </div>
  </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
