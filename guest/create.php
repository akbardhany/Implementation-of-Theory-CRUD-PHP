<!DOCTYPE html>
<?php include('akses.php'); ?>
<html lang="en">
<head>
    <title>Create | DATA WARGA</title>
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
  <?php

      require '../database.php';

      if ( !empty($_POST)) {
        $nikError = null;
        $namaError = null;
        $tempat_lahirError = null;
        $tgl_lahirError = null;
        $jenis_kelaminError = null;
        $gol_darahError = null;
        $alamatError = null;
        $rtError = null;
        $rwError = null;
        $kode_posError = null;
        $kelurahanError = null;
        $kecamatanError = null;
        $agamaError = null;
        $status_kawinError = null;
        $pekerjaanError = null;
        $berlaku_hinggaError = null;
        $kewarganegaraanError = null;

        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $gol_darah = $_POST['gol_darah'];
        $alamat = $_POST['alamat'];
        $rt = $_POST['rt'];
        $rw = $_POST['rw'];
        $kode_pos = $_POST['kode_pos'];
        $kelurahan = $_POST['kelurahan'];
        $kecamatan = $_POST['kecamatan'];
        $agama = $_POST['agama'];
        $status_kawin = $_POST['status_kawin'];
        $pekerjaan = $_POST['pekerjaan'];
        $berlaku_hingga = $_POST['berlaku_hingga'];
        $kewarganegaraan = $_POST['kewarganegaraan'];

        $valid = true;
        if (empty($nik)) {
            $nikError = 'Masukkan N.I.K';
            $valid = false;
        }

        if (empty($nama)) {
            $namaError = 'Masukkan Nama';
            $valid = false;
        }

        if (empty($tempat_lahir)) {
            $tempat_lahirError = 'Masukkan Tempat Lahir';
            $valid = false;
        }

        if (empty($tgl_lahir)) {
            $tgl_lahirError = 'Masukkan Tanggal Lahir';
            $valid = false;
        }

        if (empty($jenis_kelamin)) {
            $jenis_kelaminError = 'Masukkan Jenis Kelamin';
            $valid = false;
        }

        if (empty($gol_darah)) {
            $gol_darahError = 'Masukkan Golongan Darah';
            $valid = false;
        }

        if (empty($alamat)) {
            $alamatError = 'Masukkan Alamat';
            $valid = false;
        }

        if (empty($rt)) {
            $rtError = 'Masukkan RT';
            $valid = false;
        }

        if (empty($rw)) {
            $rwError = 'Masukkan RW';
            $valid = false;
        }

        if (empty($kode_pos)) {
            $kode_posError = 'Masukkan Kode Pos';
            $valid = false;
        }

        if (empty($kelurahan)) {
            $kelurahanError = 'Masukkan Kelurahan';
            $valid = false;
        }

        if (empty($kecamatan)) {
            $kecamatanError = 'Masukkan Kecamatan';
            $valid = false;
        }

        if (empty($agama)) {
            $agamaError = 'Masukkan Agama';
            $valid = false;
        }

        if (empty($status_kawin)) {
            $status_kawinError = 'Masukkan Status Kawin';
            $valid = false;
        }

        if (empty($pekerjaan)) {
            $pekerjaanError = 'Masukkan Pekerjaan';
            $valid = false;
        }

        if (empty($berlaku_hingga)) {
            $berlaku_hinggaError = 'Masukkan Berlaku Hingga';
            $valid = false;
        }

        if (empty($kewarganegaraan)) {
            $kewarganegaraanError = 'Masukkan kewarganegaraan';
            $valid = false;
        }

        if ($valid) {
              $pdo = Database::connect();
              $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $sql = "INSERT INTO masyarakat (nik,nama,tempat_lahir,tgl_lahir,jenis_kelamin,gol_darah,alamat,rt,rw,kode_pos,kelurahan,kecamatan,agama,status_kawin,pekerjaan,berlaku_hingga,kewarganegaraan) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
              $q = $pdo->prepare($sql);
              $q->execute(array($nik,$nama,$tempat_lahir,$tgl_lahir,$jenis_kelamin,$gol_darah,$alamat,$rt,$rw,$kode_pos,$kelurahan,$kecamatan,$agama,$status_kawin,$pekerjaan,$berlaku_hingga,$kewarganegaraan));
              Database::disconnect();
              header("Location: index.php");
          }
      }
  ?>
    <div class="container">

        <div class="span10 offset1">
          <br />
      		<div class="simplifica" style="text-align: center; color:#00ff00; font-size: 20px">UNIVERSITAS NAROTAMA | FASILKOM'2K16 | SEMESTER II (PAGI) | TEKNIK PEMROGRAMAN | KELOMPOK 8 | ECP 2</div>
            <div class="row">
                <h3>Create</h3>
            </div>

            <form class="form-horizontal" action="create.php" method="post">
              <div class="control-group <?php echo !empty($nikError)?'error':'';?>">
                <label class="control-label">N.I.K :</label>
                <div class="controls">
                    <input name="nik" type="text" placeholder="N.I.K - 11 digit" value="<?php echo !empty($nik)?$nik:'';?>">
                    <?php if (!empty($nikError)): ?>
                        <span class="help-inline"><?php echo $nikError;?></span>
                    <?php endif; ?>
                </div>
              </div>
              <div class="control-group <?php echo !empty($namaError)?'error':'';?>">
                <label class="control-label">NAMA :</label>
                <div class="controls">
                    <input name="nama" type="text" placeholder="NAMA" value="<?php echo !empty($nama)?$nama:'';?>">
                    <?php if (!empty($namaError)): ?>
                        <span class="help-inline"><?php echo $namaError;?></span>
                    <?php endif;?>
                </div>
              </div>
              <div class="control-group <?php echo !empty($tempat_lahirError)?'error':'';?>">
                <label class="control-label">TEMPAT LAHIR :</label>
                <div class="controls">
                    <input name="tempat_lahir" type="text" placeholder="TEMPAT LAHIR" value="<?php echo !empty($tempat_lahir)?$tempat_lahir:'';?>">
                    <?php if (!empty($tempat_lahirError)): ?>
                        <span class="help-inline"><?php echo $tempat_lahirError;?></span>
                    <?php endif;?>
                </div>
              </div>
              <div class="control-group <?php echo !empty($tgl_lahirError)?'error':'';?>">
                <label class="control-label">TANGGAL LAHIR :</label>
                <div class="controls">
                    <input name="tgl_lahir" type="text" placeholder="HH/BB/TTTT" value="<?php echo !empty($tgl_lahir)?$tgl_lahir:'';?>">
                    <?php if (!empty($tgl_lahirError)): ?>
                        <span class="help-inline"><?php echo $tgl_lahirError;?></span>
                    <?php endif;?>
                </div>
              </div>
              <div class="control-group <?php echo !empty($jenis_kelaminError)?'error':'';?>">
                <label class="control-label">JENIS KELAMIN :</label>
                <div class="controls">
                    <input name="jenis_kelamin" type="text" placeholder="LAKI-LAKI / PEREMPUAN" value="<?php echo !empty($jenis_kelamin)?$jenis_kelamin:'';?>">
                    <?php if (!empty($jenis_kelaminError)): ?>
                        <span class="help-inline"><?php echo $jenis_kelaminError;?></span>
                    <?php endif;?>
                </div>
              </div>
              <div class="control-group <?php echo !empty($gol_darahError)?'error':'';?>">
                <label class="control-label">GOLONGAN DARAH :</label>
                <div class="controls">
                    <input name="gol_darah" type="text" placeholder="GOL. DARAH" value="<?php echo !empty($gol_darah)?$gol_darah:'';?>">
                    <?php if (!empty($gol_darahError)): ?>
                        <span class="help-inline"><?php echo $gol_darahError;?></span>
                    <?php endif;?>
                </div>
              </div>
              <div class="control-group <?php echo !empty($alamatError)?'error':'';?>">
                <label class="control-label">ALAMAT :</label>
                <div class="controls">
                    <input name="alamat" type="text" placeholder="ALAMAT" value="<?php echo !empty($alamat)?$alamat:'';?>">
                    <?php if (!empty($alamatError)): ?>
                        <span class="help-inline"><?php echo $alamatError;?></span>
                    <?php endif;?>
                </div>
              </div>
              <div class="control-group <?php echo !empty($rtError)?'error':'';?>">
                <label class="control-label">RT :</label>
                <div class="controls">
                    <input name="rt" type="text" placeholder="RT (3 digit: ex. 001)" value="<?php echo !empty($rt)?$rt:'';?>">
                    <?php if (!empty($rtError)): ?>
                        <span class="help-inline"><?php echo $rtError;?></span>
                    <?php endif;?>
                </div>
              </div>
              <div class="control-group <?php echo !empty($rwError)?'error':'';?>">
                <label class="control-label">RW :</label>
                <div class="controls">
                    <input name="rw" type="text" placeholder="RW (3 digit: ex. 001)" value="<?php echo !empty($rw)?$rw:'';?>">
                    <?php if (!empty($rwError)): ?>
                        <span class="help-inline"><?php echo $rwError;?></span>
                    <?php endif;?>
                </div>
              </div>
              <div class="control-group <?php echo !empty($kode_posError)?'error':'';?>">
                <label class="control-label">KODE POS :</label>
                <div class="controls">
                    <input name="kode_pos" type="text" placeholder="KODE POS (5 digit)" value="<?php echo !empty($kode_pos)?$kode_pos:'';?>">
                    <?php if (!empty($kode_posError)): ?>
                        <span class="help-inline"><?php echo $kode_posError;?></span>
                    <?php endif;?>
                </div>
              </div>
              <div class="control-group <?php echo !empty($kelurahanError)?'error':'';?>">
                <label class="control-label">KELURAHAN :</label>
                <div class="controls">
                    <input name="kelurahan" type="text" placeholder="KELURAHAN" value="<?php echo !empty($kelurahan)?$nikelurahan:'';?>">
                    <?php if (!empty($kelurahanError)): ?>
                        <span class="help-inline"><?php echo $kelurahanError;?></span>
                    <?php endif;?>
                </div>
              </div>
              <div class="control-group <?php echo !empty($kecamatanError)?'error':'';?>">
                <label class="control-label">KECAMATAN :</label>
                <div class="controls">
                    <input name="kecamatan" type="text" placeholder="KECAMATAN" value="<?php echo !empty($kecamatan)?$kecamatan:'';?>">
                    <?php if (!empty($kecamatanError)): ?>
                        <span class="help-inline"><?php echo $kecamatanError;?></span>
                    <?php endif;?>
                </div>
              </div>
              <div class="control-group <?php echo !empty($agamaError)?'error':'';?>">
                <label class="control-label">AGAMA :</label>
                <div class="controls">
                    <input name="agama" type="text" placeholder="AGAMA" value="<?php echo !empty($agama)?$agama:'';?>">
                    <?php if (!empty($agamaError)): ?>
                        <span class="help-inline"><?php echo $agamaError;?></span>
                    <?php endif;?>
                </div>
              </div>
              <div class="control-group <?php echo !empty($status_kawinError)?'error':'';?>">
                <label class="control-label">STATUS KAWIN :</label>
                <div class="controls">
                    <input name="status_kawin" type="text" placeholder="STATUS KAWIN" value="<?php echo !empty($status_kawin)?$status_kawin:'';?>">
                    <?php if (!empty($status_kawinError)): ?>
                        <span class="help-inline"><?php echo $status_kawinError;?></span>
                    <?php endif;?>
                </div>
              </div>
              <div class="control-group <?php echo !empty($pekerjaanError)?'error':'';?>">
                <label class="control-label">PEKERJAAN :</label>
                <div class="controls">
                    <input name="pekerjaan" type="text" placeholder="PEKERJAAN" value="<?php echo !empty($pekerjaan)?$pekerjaan:'';?>">
                    <?php if (!empty($pekerjaanError)): ?>
                        <span class="help-inline"><?php echo $pekerjaanError;?></span>
                    <?php endif;?>
                </div>
              </div>
              <div class="control-group <?php echo !empty($berlaku_hinggaError)?'error':'';?>">
                <label class="control-label">BERLAKU HINGGA :</label>
                <div class="controls">
                    <input name="berlaku_hingga" type="text" placeholder="HH/BB/TTTT" value="<?php echo !empty($berlaku_hingga)?$berlaku_hingga:'';?>">
                    <?php if (!empty($berlaku_hinggaError)): ?>
                        <span class="help-inline"><?php echo $berlaku_hinggaError;?></span>
                    <?php endif;?>
                </div>
              </div>
              <div class="control-group <?php echo !empty($kewarganegaraanError)?'error':'';?>">
                <label class="control-label">KEWARGANEGARAAN :</label>
                <div class="controls">
                    <input name="kewarganegaraan" type="text" placeholder="WNI / WNA" value="<?php echo !empty($kewarganegaraan)?$kewarganegaraan:'';?>">
                    <?php if (!empty($kewarganegaraanError)): ?>
                        <span class="help-inline"><?php echo $kewarganegaraanError;?></span>
                    <?php endif;?>
                </div>
              </div>
              <div class="form-actions">
                  <button type="submit" class="btn btn-success">Create</button>
                  <a class="btn" href="index.php">Back</a>
              </div>
        </form>
       </div>
    </div>

    <footer>
        <div class="simplifica" style="font-size:15px; text-align: center; color: #00ff00">
            COPYRIGHT &copy; ZOUANN&trade; 2017
        </div>
    </footer>
    &nbsp;
</body>
</html>
