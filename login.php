<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Autentikasi</title>
		<link href="img/eight.png" rel="shortcut icon">
	</head>
	<body>

		<?php
		include('koneksi.php');
		if(isset($_POST['login'])){
			$user = mysql_real_escape_string(htmlentities($_POST['username']));
			$pass = mysql_real_escape_string(htmlentities(($_POST['password'])));

			$sql = mysql_query("SELECT * FROM user WHERE username='$user' AND password='$pass'") or die(mysql_error());
			if(mysql_num_rows($sql) == 0){
				echo '<center>'.'Username or Password is not match'.'</center>';
				header("refresh:2 ; index.php");
			}else{
				$row = mysql_fetch_assoc($sql);
				if($row['level'] == 1){
					$_SESSION['admin']=$user;
					echo '<center>'."Hello ".$_SESSION['admin'].'</center>';
					header("refresh:0.1 , ./admin/index.php");
				}else{
					$_SESSION['guest']=$user;
					echo '<center>'."Hello ".$_SESSION['guest'].'</center>';
					header("refresh:0.1 , ./guest/index.php");
				}
			}
		}
		?>

	</body>
</html>
