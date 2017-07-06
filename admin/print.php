<!DOCTYPE html>
<?php include('akses.php'); ?>
<html lang="en">
<head>
	<title>Print | DATA KAMPUNG</title>
  <meta charset="utf-8">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <script src="../js/bootstrap.min.js"></script>
	<link href="../img/eight.png" rel="shortcut icon">
		<style media="screen">
		@font-face {
			font-family: "infinity";
			src: url('../Infinity.ttf');
		}

		.infinity{
			font-family: infinity;
			font-size: 20px;
		}

		@font-face {
			font-family: "simplifica";
			src: url('../simplifica.ttf');
		}

		.simplifica{
			font-family: simplifica;
		}
		</style>
</head>

<body>
  <div class="container">
		<br />
		<div class="simplifica" style="text-align: center; color:#00ff00; font-size: 20px">UNIVERSITAS NAROTAMA | FASILKOM'2K16 | SEMESTER II (PAGI) | TEKNIK PEMROGRAMAN | KELOMPOK 8 | ECP 2</div>
		<br />
					<div class="row" style="text-align:center">
						<h3>DATA KAMPUNG | RT 00 RW 00</h3>
					</div>
          <div class="row">
                <p>
										<a href="javascript:window.print()" class="btn btn-warning">Print Out</a>
                </p>
          </div>
  </div>
          <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>N.I.K</th>
              <th>NAMA</th>
              <th>TEMPAT LAHIR</th>
              <th>TANGGAL LAHIR</th>
              <th>JENIS KELAMIN</th>
              <th>GOLONGAN DARAH</th>
              <th>ALAMAT</th>
              <th>RT</th>
              <th>RW</th>
              <th>KODE POS</th>
              <th>KELURAHAN</th>
              <th>KECAMATAN</th>
              <th>AGAMA</th>
              <th>STATUS KAWIN</th>
              <th>PEKERJAAN</th>
              <th>BERLAKU HINGGA</th>
              <th>KEWARGANEGARAAN</th>
            </tr>
          </thead>
          <tbody>
          <?php
            include '../database.php';
            $pdo = Database::connect();
            $sql = 'SELECT * FROM masyarakat ORDER BY id DESC';
            foreach ($pdo->query($sql) as $row) {
                    echo '<tr>';
                    echo '<td>'. $row['nik'] . '</td>';
                    echo '<td>'. $row['nama'] . '</td>';
                    echo '<td>'. $row['tempat_lahir'] . '</td>';
                    echo '<td>'. $row['tgl_lahir'] . '</td>';
                    echo '<td>'. $row['jenis_kelamin'] . '</td>';
                    echo '<td>'. $row['gol_darah'] . '</td>';
                    echo '<td>'. $row['alamat'] . '</td>';
                    echo '<td>'. $row['rt'] . '</td>';
                    echo '<td>'. $row['rw'] . '</td>';
                    echo '<td>'. $row['kode_pos'] . '</td>';
                    echo '<td>'. $row['kelurahan'] . '</td>';
                    echo '<td>'. $row['kecamatan'] . '</td>';
                    echo '<td>'. $row['agama'] . '</td>';
                    echo '<td>'. $row['status_kawin'] . '</td>';
                    echo '<td>'. $row['pekerjaan'] . '</td>';
                    echo '<td>'. $row['berlaku_hingga'] . '</td>';
                    echo '<td>'. $row['kewarganegaraan'] . '</td>';
                    echo '</tr>';
            }
            Database::disconnect();
          ?>
          </tbody>
        </table>

				<footer>
		        <div class="simplifica" style="font-size:15px; text-align: center; color: #00ff00">
		            COPYRIGHT &copy; ZOUANN&trade; 2017
		        </div>
		    </footer>
		    &nbsp;
</body>
</html>
