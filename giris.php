<?php
error_reporting(0);
session_start();
if($_GET["cikis"]=='evet') {
	session_destroy();
	header("Location:giris.php");
}
if($_POST["giris"]=='evet') {
	if($_POST["sifre"]=='123456') { $_SESSION["face_giris"]='evet'; header("Location:yonetim.php"); }
	else echo '<script>alert("Şifre yanlış!");</script>';
}
if(isset($_SESSION["face_giris"])) header("Location:yonetim.php");
?>
<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Fa-Ce Elektronik</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron-narrow.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="./">Anasayfa</a></li>
            <li role="presentation"><a href="./about.php">Hakkımızda</a></li>
            <li role="presentation"><a href="iletisim.php">İletişim</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">CF VT</h3>
      </div>

      <div class="jumbotron">
      <form method="post" action="giris.php">
		<input type="password" name="sifre" placeholder="Şifreyi Girin" class="form-control"><br>
		<input type="hidden" name="giris" value="evet">
        <button type="submit" class="btn btn-primary btn-sm">Giriş</button>
      </form>
      </div>

</div> <!-- /container -->
      <footer class="footer" style="text-align:center;">
        <p>2015 &copy;Tüm Hakları Fa-Ce Elektroniğe aittir. Tasarım & Kodlama: Cemre Nur Bali & Fatih Talha Turan<br></p>
      </footer>

    


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
