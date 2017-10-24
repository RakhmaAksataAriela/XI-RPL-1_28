<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hasil</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<?php 
$host= "localhost";
$user= "root";
$password= "";
$email=$_GET['email'];
$fullname=$_GET['fullname'];
$user=$_GET['user'];
$pw=$_GET['pw'];
if($fullname)

{
	$koneksi=mysqli_connect($host, $user, $pass);
	mysqli_select_db ($koneksi, 'dblogin');
	$sql="insert into tinstagram values('$email', '$fullname', 'user', '$pw')";
}
if ($koneksi->connect_errno) {
	echo "Gagal mengoneksikan ke server";
}

?>

<div id="container">
	<div class="Header">
		Verify
	</div>

	<div class="hasil">
		<div class="email">
			Email or Number Phone: <?php echo" $email" ?><br>
		</div>

		<div class="fullname">
			Full name : <?php echo "$fullname"; ?><br>
		</div>

		<div class="user">
			Username  : <?php echo "$user"; ?><br>
		</div>

		<div class="pw">
			Password : <?php echo "$pw"; ?><br>
		</div>
		
		
	</div>
</div>

</body>
</html>
