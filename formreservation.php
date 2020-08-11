<?php
include 'config.php';
if(empty($_SESSION['login'])){
//jika masih ada session login alihkan ya
  header('Location: index.php');
  //jangan eksekusi script di bawah
  exit;
}
if(!empty($_POST['hajar'])){
$cekin = $_POST['tanggalin'].'/'.$_POST['bulanin'].'/'.$_POST['tahunin'];
$cekout = $_POST['tanggalout'].'/'.$_POST['bulanout'].'/'.$_POST['tahunout'];
$ok = kamar($_SESSION['id'],$_SESSION['nama'],$_POST['namakamar'],$_POST['jenis'],$_POST['tipe'],$cekin,$cekout);
    if($ok){
    header('Location: berhasil.php');
    exit;
    }else{
    $error = '<h1>gagal daftar terjadi kesalahan</h1>';
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Form_Reservation</title>
	<link rel="stylesheet" type="text/css" href="StyleReservation.css">
</head>
<body>
		
<div class="bingkai">
    <?php if(!empty($error)){ echo $error; } ?>
		<form action="formreservation.php" method="POST">
			
 						<tr>
                            <td> Check In : </td>
                            <td>
                               
                        <div>
                        <select class="tgllahir" name="tanggalin">
                            <option value="Tanggal" selected>Tanggal</option>
                            <?php for ($i=1; $i < 31; $i++) { 
                                echo '<option value="'.$i.'">'.$i.'</option>';
                            }
                            ?>
                        </select>

                        <select class="tgllahir" name="bulanin">
                            <option value="Bulan" selected> Bulan </option>
                            <option value="Januari"> Januari </option>
                            <option value="Februari"> Februari </option>
                            <option value="Maret"> Maret </option>
                            <option value="April"> April </option>
                            <option value="Mei"> Mei </option>
                            <option value="Juni"> Juni </option>
                            <option value="Juli"> Juli </option>
                            <option value="Agustus"> Agustus </option>
                            <option value="September"> September </option>
                            <option value="Oktober"> Oktober </option>
                            <option value="November"> November </option>
                            <option value="Desember"> Desember </option>
                        </select>

                        <select class="tgllahir" name="tahunin">
                            <option value="Tahun" selected>Tahun</option>
                            <option value="2019"> 2018 </option>
                            <option value="2018"> 2018 </option>
                            <option value="2017"> 2017 </option>
                            <option value="2016"> 2016 </option>
                            <option value="2015"> 2015 </option>
                            <option value="2014"> 2014 </option>
                            <option value="2013"> 2013 </option>
                            <option value="2012"> 2012 </option>
                            <option value="2011"> 2011 </option>
                            <option value="2010"> 2010 </option>
                            <option value="2009"> 2009 </option>
                            <option value="2008"> 2008 </option>
                            <option value="2007"> 2007 </option>
                            <option value="2006"> 2006 </option>
                            <option value="2005"> 2005 </option>
                        </select>
                        </div>
                        </td>
                        </tr>
						 <tr>
                            <td> Check Out : </td>
                            <td>
                               
                        <div>
                        <select class="tgllahir" name="tanggalout">
                            <option value="Tanggal" selected>Tanggal</option>
                           <?php for ($i=1; $i < 31; $i++) { 
                                echo '<option value="'.$i.'">'.$i.'</option>';
                            }
                            ?>
                        </select>

                        <select class="tgllahir" name="bulanout">
                            <option value="Bulan" selected>Bulan</option>
                            <option value="Januari">Januari</option>
                            <option value="Februari">Februari</option>
                            <option value="Maret">Maret</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="Juni">Juni</option>
                            <option value="Juli">Juli</option>
                            <option value="Agustus">Agustus</option>
                            <option value="September">September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November">November</option>
                            <option value="Desember">Desember</option>
                        </select>

                        <select class="tgllahir" name="tahunout">
                            <option value="Tahun" selected>Tahun</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                        </select>
                        </div>
                        </td>
                        </tr>


			
				</table>
					<button class="submit" type="submit" name="hajar" value="Proses">Proses</button>
                    <button class="" type="submit" name="hajar" value="Proses">Proses</button>
			</form>
            
		</div>
</body>
</html>