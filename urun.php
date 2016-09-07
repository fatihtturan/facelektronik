<?php
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
   <link rel="shortcut icon" type="img/iconn.jpeg" href="favicon.ico" />

    <title>Fa-Ce Elektronik</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

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

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./">CF VT</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
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
      </div>
    </nav>
	<div class="col-xs-12 main">
	<?php
	if(empty($_GET["kategori"]) || empty($_GET["id"])) {
		echo '<div class="jumbotron">';
			echo '<h1>Üzgünüz!</h1>';
			echo '<p>Aradığınız ürün silinmiş olabilir veya yanlış bir yönlendirmeyle gelmiş olabilirsiniz. Lütfen menüleri takip edin.</p>';
		echo '</div>';
	}
	$QueryString = 'SELECT * FROM '.$_GET["kategori"].' WHERE ID="'.$_GET["id"].'"';
	$QueryRow = mysqli_query($baglan, $QueryString);
	if(mysqli_num_rows($QueryRow)>0) {
	while($Result = mysqli_fetch_array($QueryRow)) {
		echo '<h1 class="page-header">'.$Result["marka"].' '.$Result["model"].'</h1>';
		echo '<div class="row">';
		echo '<div class="col-xs-3 placeholders placeholder">';
		echo '<img src="img/'.$_GET["kategori"].'/'.$Result["ID"].'.jpg" width="200" height="200" class="img-responsive" alt="'.$Result["marka"].' '.$Result["model"].'">';
		echo '</div>';
		
		echo '<div class="col-xs-9">';
        echo '<div class="table-responsive">';
		echo '<table class="table table-striped">';
		echo '<tbody>';
		echo '<tr>';
		echo '<th colspan="2"><u>Özellikler</u></th>';
		echo '</tr>';
		echo '<tr>';
		echo '<th width="250px">Marka</th>';
		echo '<td>'.$Result["marka"].'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>Model</th>';
		echo '<td>'.$Result["model"].'</td>';
		echo '</tr>';
		if(!empty($Result["tur"])) {
			echo '<tr>';
			echo '<th>Tür</th>';
			echo '<td>'.$Result["tur"].'</td>';
			echo '</tr>';
		}
		if(!empty($Result["boyut"])) {
			echo '<tr>';
			echo '<th>Ekran Boyutu (inç)</th>';
			echo '<td>'.$Result["boyut"].' "</td>';
			echo '</tr>';
		}
		if(!empty($Result["e_cozunurluk"])) {
			echo '<tr>';
			echo '<th>Ekran Çözünürlüğü (piksel)</th>';
			echo '<td>'.$Result["e_cozunurluk"].'</td>';
			echo '</tr>';
		}
		if(!empty($Result["disk"])) {
			echo '<tr>';
			echo '<th>Disk Boyutu</th>';
			echo '<td>';
			echo $Result["disk"];
		 	if(($_GET["kategori"]=="tablet") || ($_GET["kategori"]=="telefon")) echo ' GB';
			echo '</td>';
			echo '</tr>';
		}
		if(!empty($Result["islemci_markasi"])) {
			echo '<tr>';
			echo '<th>İşlemci</th>';
			echo '<td>'.$Result["islemci_markasi"].' '.$Result["islemci_modeli"].'</td>';
			echo '</tr>';
		}
		if(!empty($Result["ekran_karti_markasi"])) {
			echo '<tr>';
			echo '<th>Grafik Kartı</th>';
			echo '<td>'.$Result["ekran_karti_markasi"].' '.$Result["ekran_karti_modeli"].'</td>';
			echo '</tr>';
		}
		if(!empty($Result["ram_gb"])) {
			echo '<tr>';
			echo '<th>Bellek (RAM)</th>';
			echo '<td>'.$Result["ram_gb"].' GB</td>';
			echo '</tr>';
		}
		if(!empty($Result["k_cozunurluk"])) {
			echo '<tr>';
			echo '<th>Kamera Çözünürlüğü (MP)</th>';
			echo '<td>'.$Result["k_cozunurluk"].' MP</td>';
			echo '</tr>';
		}
		if(!empty($Result["renk"])) {
			echo '<tr>';
			echo '<th>Renk</th>';
			echo '<td>'.$Result["renk"].'</td>';
			echo '</tr>';
		}
		if(!empty($Result["4G"])) {
			echo '<tr>';
			echo '<th>4G</th>';
			echo '<td>';
			if($Result["4G"]==0) echo 'Yok'; else echo 'Var';
			echo '</td>';
			echo '</tr>';
		}
		echo '<tr>';
		echo '<th colspan="2"><u>Fiyatlar</u></th>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>Media Markt</th>';
		echo '<td>';
		if($Result["fiyat_mm"]=='0') echo 'Fiyat Bilgisi Yok'; else echo $Result["fiyat_mm"].' TL';
		echo '</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>Teknosa</th>';
		echo '<td>';
		if($Result["fiyat_teknosa"]=='0') echo 'Fiyat Bilgisi Yok'; else echo $Result["fiyat_teknosa"].' TL';
		echo '</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>Vatan Bilgisayar</th>';
		echo '<td>';
		if($Result["fiyat_vatan"]=='0') echo 'Fiyat Bilgisi Yok'; else echo $Result["fiyat_vatan"].' TL';
		echo '</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>Bimeks</th>';
		echo '<td>';
		if($Result["fiyat_bimeks"]=='0') echo 'Fiyat Bilgisi Yok'; else echo $Result["fiyat_bimeks"].' TL';
		echo '</td>';
		echo '</tr>';
		echo '</tbody>';
		echo '</table>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
	}
	} else {
		echo '<div class="jumbotron">';
			echo '<h1>Üzgünüz!</h1>';
			echo '<p>Aradığınız ürün silinmiş olabilir veya yanlış bir yönlendirmeyle gelmiş olabilirsiniz. Lütfen menüleri takip edin.</p>';
		echo '</div>';		
	}
	?>
    <hr>
    <footer style="text-align:center;">
    <p>2015 &copy;Tüm Hakları Fa-Ce Elektroniğe aittir. Tasarım & Kodlama: Cemre Nur Bali & Fatih Talha Turan</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
