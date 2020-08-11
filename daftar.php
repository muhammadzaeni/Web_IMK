<?php
include 'config.php';
if(!empty($_SESSION['login'])){
//jika masih ada session login alihkan ya
  header('Location: sudahlogin.php');
  //jangan eksekusi script di bawah
  exit;
}
if(!empty($_POST['login'])){
$ttl = $_POST['tanggal'].'/'.$_POST['bulan'].'/'.$_POST['Tahun'];
$ok = daftar($_POST['namadepan'],$_POST['gender'],$_POST['tanggal'],$ttl,$_POST['agm'],$_POST['tlp'],$_POST['email'],$_POST['Password']);
	if($ok){
	header('Location: login.php');
	exit;
	}else{
	$error = '<h1>gagal daftar terjadi kesalahan</h1>';
	}
}

?>
<html>
    <head>
     <link href="Daftar2.css" rel="stylesheet" type="text/css">
        <title> Form Registration AFW </title>
       
    </head>
   
        <tr>
           <center> <td width="1038" align="center"><h1> <font face="Rockwell" color ="ffffff"> Welcome To Website </font>  </h1></td></center>
                          
        </tr>
             
                <div class="container">
                    <div class="content">
                    <div class="badan">
                        <div class="bingkai">
                                <form name="cake" action="daftar.php" method="POST" enctype="multipart/form-data">
                                    <table width="550" border="0">
                                        
                                    <tr>
                                        <td >Full Name</td>
                                        <td><input class="nama" type="text" name="namadepan" id="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Full Name';}"></td>
                                    </tr>
                       
                                    <tr>
                                        <td>Gender</td>
                                        <td>
                                                <label class="jeniskelamin" name="gender" >
                                                <input type="radio" name="gender" id="laki" value="laki-laki">Male</label>
                                                <label class="jeniskelamin">
                                                <input type="radio" name="gender" id="laki" value="perempuan">Female</label>
                                        </td>
                                    </tr>
                                        
                        <tr>
                            <td> Date Of Birth</td>
                            <td>
                               
                        <div>
                        <select class="tgllahir" name="tanggal">
                            <option value="Tanggal" selected>Date</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>

                        <select class="tgllahir" name="bulan">
                            <option value="Bulan" selected>Month</option>
                            <option value="Januari">January</option>
                            <option value="Februari">February</option>
                            <option value="Maret">March</option>
                            <option value="April">April</option>
                            <option value="Mei">May</option>
                            <option value="Juni">June</option>
                            <option value="Juli">July</option>
                            <option value="Agustus">August</option>
                            <option value="September">September</option>
                            <option value="Oktober">October</option>
                            <option value="November">November</option>
                            <option value="Desember">December</option>
                        </select>

                        <select class="tgllahir" name="Tahun">
                            <option value="Tahun" selected>Years</option>
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>
                        </select>
                        </div>
                        </td>
                        </tr>
                        
                        <tr>
                            <td>Religion</td>
                            <td>
                                <label class="agama" name="agm">
                                <input type="radio" name="agm" id="islm" value="islm">Islam</label>
                                <label class="agama">
                                <input type="radio" name="agm" id="kris" value="kris">Kristen</label>
                                                       <label class="agama">
                                <input type="radio" name="agm" id="hin" value="hin" >Hindu</label>
                                                       <label class="agama">
                                <input type="radio" name="agm" id="bud" value="bud" >Budha</label>
                            </td>
                        </tr>
                                  
                            <td>Telepon</td>
                            <td><input class="tlp" type="text" name="tlp" id="tlp" value="telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'telephone';}"></td>
                        </tr>
                        <tr>
                                        
                             <td>Email</td>
                            <td><input class="Email" type="email" name="email" id="email" value="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"></td>
                        </tr>
                        <tr>
                            <td> Kata Sandi </td>
                            <td> <input class="Password" type="password" name="Password" id="Password" value="Password"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"></td>
                                        
                            </tr>
                            </table>
                            <div>     
                            <button class="signin" type="submit" value="Sub" name="login"> Sign Up </button>
                            <button class="reset" type="reset" value="reset">Reset</button>                   
                            </div>
                        
                        </form>
                </div>
            </div>
        </div>
        <footer>
        <center><p><font face="Rockwell" color ="ffffff"> Copyright @2018 Coding AFW Official </font></p></center>
</footer>
</div>

</body>

</html>