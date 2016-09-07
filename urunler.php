<?php
error_reporting(0);
$baglan=mysqli_connect('localhost','root','','facelektronik');
mysqli_set_charset($baglan, "utf8");
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
    <link href="css/offcanvas.css" rel="stylesheet">

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
    <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">CF VT</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="./">Anasayfa</a></li>
                <li><a href="./about.php">Hakkımızda</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ürünler <span class="caret"></span></a>
                  <ul class="dropdown-menu" style="background-color:#222;">
                    <li><a href="./urunler.php?kategori=bilgisayar" style="color:#9E9E9E;"><img src="img/bilgisayaricon.png" alt="Örnek Resim" width="32" height="32">&nbsp;&nbsp;Bilgisayar</a></li>
                    <li><a href="./urunler.php?kategori=telefon" style="color:#9E9E9E;"><img src="img/telefonicon.png" alt="Örnek Resim" width="32" height="32">&nbsp;&nbsp;Telefon</a></li>
                    <li><a href="./urunler.php?kategori=tablet" style="color:#9E9E9E;"><img src="img/tableticon.png" alt="Örnek Resim" width="32" height="32">&nbsp;&nbsp;Tablet</a></li>
                    <li><a href="./urunler.php?kategori=televizyon" style="color:#9E9E9E;"><img src="img/tvicon.png" alt="Örnek Resim" width="32" height="32">&nbsp;&nbsp;Televizyon</a></li>
                    <li><a href="./urunler.php?kategori=fotograf_makinesi" style="color:#9E9E9E;"><img src="img/fotograficon.png" alt="Örnek Resim" width="32" height="32">  &nbsp;&nbsp;Fotoğraf Makinesi</a></li>
                    <li><a href="./urunler.php?kategori=aksesuar" style="color:#9E9E9E;"><img src="img/aksesuaricon.png" alt="Örnek Resim" width="32" height="32">&nbsp;&nbsp;Aksesuar</a></li>
                  </ul>
                </li>
                <li><a href="iletisim.php">İletişim</a></li>
              </ul>
            </div>
      </div><!-- /.container -->
    </nav><!-- /.navbar -->

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
        <div class="row col-xs-12">
        <p class="pull-right visible-xs">
        <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Filtrele</button>
        </p>
        </div>

        <div id="content">
         <?php include 'urungetir.php'; ?>
        </div>
        
      </div><!--/row-->
          <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="panel panel-primary">
              <div class="panel-heading">Filtreleme Seçenekleri</div>
              <div class="panel-body"><?php include 'filtre.php'; ?></div>
              <div class="panel-footer" style="text-align:center;"><button id="sendFilter" class="btn btn-danger">Uygula</button> <button onClick="location.href='';" class="btn btn-warning">Sıfırla</button></div></div>
          </div>
        </div><!--/.sidebar-offcanvas-->
        </div>
      <hr>
      <footer style="text-align:center;">
        <p>2015 &copy; Tüm Hakları Fa-Ce Elektroniğe aittir. Tasarım & Kodlama: Cemre Nur Bali & Fatih Talha Turan</p>
      </footer>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/offcanvas.js"></script>
    <script type="text/javascript">
	$("#sendFilter").click(function(e) {
        $.ajax({
        type:'GET',
        url:'urungetir.php',
        data:$('#filtrele').serialize(),
        success: function (msg) {
             $("#content").html(msg);
            }
        });
    });
    </script>
  </body>
</html>
