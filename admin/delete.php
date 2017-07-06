<?php
    require '../database.php';
    $id = 0;

    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }

    if ( !empty($_POST)) {
        // keep track post values
        $id = $_POST['id'];

        // delete data
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM masyarakat  WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        Database::disconnect();
        header("Location: index.php");

    }
?>

<!DOCTYPE html>
<?php include('akses.php'); ?>
<html lang="en">
<head>
    <title>Delete | DATA WARGA</title>
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
                        <h3>Delete a Customer</h3>
                    </div>

                    <form class="form-horizontal" action="delete.php" method="post">
                      <input type="hidden" name="id" value="<?php echo $id;?>"/>
                      <p class="alert alert-error">Are you sure to delete ?</p>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-danger">Yes</button>
                          <a class="btn" href="index.php">No</a>
                        </div>
                    </form>
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
