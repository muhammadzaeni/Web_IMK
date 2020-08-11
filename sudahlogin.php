<?php
session_start();
if(isset($_GET['logout'])){
	session_destroy();
	header('Location: halamanhotel.php');
}
if(!empty($_SESSION['login'])){
$html = <<<XYZ
<!DOCTYPE html>
<html>
<head>
	<title>Please Logout</title>
</head>
<body>

Want to logout? <a href="?logout=true">Click Here</a>
</body>
</html>
XYZ;
echo $html;
}
?>