<html>
<head>
	<title>Data Kampung</title>
	<link href="img/eight.png" rel="shortcut icon">
		<style media="screen">
		@font-face {
			font-family: "infinity";
			src: url('Infinity.ttf');
		}

		.infinity{
			font-family: infinity;
			font-size: 20px;
		}

		@font-face {
			font-family: "simplifica";
			src: url('simplifica.ttf');
		}

		.simplifica{
			font-family: simplifica;
		}
		</style>
	</head>

	<body>
	<div class="simplifica" style="text-align: center; color:#00ff00; font-size: 20px">UNIVERSITAS NAROTAMA | FASILKOM'2K16 | SEMESTER II (PAGI) | TEKNIK PEMROGRAMAN | KELOMPOK 8 | ECP 2</div>
	<form action="login.php" method="post">
	<center><h2>DATA KAMPUNG | LOGIN</h2></center>
	<table align="center">
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name="username" placeholder="Username" required /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="password" placeholder="Password" required /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><div class="infinity" style="font-size: 15px">Username: guest | Password: guest</div></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" name="login" value="Login" /></td>
		</tr>
	</table>
	</form>

	<footer>
			<div class="simplifica" style="font-size:15px; text-align: center; color: #00ff00; margin-top: 350px">
					COPYRIGHT &copy; ZOUANN&trade; 2017
			</div>
	</footer>

</body>
</html>
