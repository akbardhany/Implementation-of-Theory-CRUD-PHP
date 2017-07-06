<?php
    require '../database.php';
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }

    if ( null==$id ) {
        header("Location: index.php");
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM masyarakat where id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
    }
?>

<!DOCTYPE html>
<?php include('akses.php'); ?>
<html lang="en">
<head>
    <title>Read | DATA WARGA</title>
    <meta charset="utf-8">
    <link   href="../css/bootstrap.min.css" rel="stylesheet">
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
                <div class="span10 offset1">
                    <div class="row">
                        <h3>DATA WARGA | RT 00 RW 00</h3>
                    </div>

                    <div class="form-horizontal" >
                      <div class="control-group">
                        <label class="control-label">N.I.K</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['nik'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">NAMA</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['nama'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">TEMPAT LAHIR</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['tempat_lahir'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">TANGGAL LAHIR</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['tgl_lahir'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">JENIS KELAMIN</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['jenis_kelamin'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">GOLONGAN DARAH</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['gol_darah'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">ALAMAT</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['alamat'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">RT</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['rt'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">RW</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['rw'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">KODE POS</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['kode_pos'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">KELURAHAN</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['kelurahan'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">KECAMATAN</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['kecamatan'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">AGAMA</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['agama'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">STATUS KAWIN</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['status_kawin'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">PEKERJAAN</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['pekerjaan'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">BERLAKU HINGGA</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['berlaku_hingga'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">KEWARGANEGARAAN</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['kewarganegaraan'];?>
                            </label>
                        </div>
                      </div>
                        <div class="form-actions">
                          <a href="javascript:window.print()" class="btn btn-warning">Print Out</a>
                          <a class="btn" href="index.php">Back</a>
                       </div>


                    </div>
                </div>

    </div> <!-- /container -->
    <footer>
        <div class="simplifica" style="font-size:15px; text-align: center; color: #00ff00">
            COPYRIGHT &copy; ZOUANN&trade; 2017
        </div>
    </footer>
    &nbsp;
  </body>
</html>
