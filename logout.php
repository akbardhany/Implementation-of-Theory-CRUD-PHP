<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Autentikasi</title>
    <link href="img/eight.png" rel="shortcut icon">
  </head>
  <body>

    <?php
    session_start();
    session_destroy();
    echo '<center />'."Anda Telah Logout";
    header("refresh:2 , /ECP2/");
    ?>


  </body>
</html>
