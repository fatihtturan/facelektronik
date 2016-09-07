<?php session_start(); if(!isset($_SESSION["face_giris"])) header("Location:giris.php"); ?>
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
            <li role="presentation"><a href="./">Site Anasayfa</a></li>
            <li role="presentation" class="active"><a href="./yonetim.php">Ürün Ekle</a></li>
            <li role="presentation"><a href="giris.php?cikis=evet">Çıkış Yap</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">CF VT</h3>
      </div>

      <div class="jumbotron">
      <form id="urunekle_form">
		<select name="kategori" id="kategori" class="form-control">
            <option disabled selected>Kategori seçin</option>
            <option value="bilgisayar">Bilgisayar</option>
            <option value="telefon">Telefon</option>
            <option value="tablet">Tablet</option>
            <option value="televizyon">Televizyon</option>
            <option value="fotograf_makinesi">Fotoğraf Makinesi</option>
            <option value="aksesuar">Aksesuar</option>
		</select><br>
        <div class="panel panel-info" style="display:none;" id="panel-alan">
        <div class="panel-heading"><span id="panel-baslik"></span> Kategorisine Ürün Ekle</div>
        <div class="panel-body" id="panel-icerik"></div>
        <div class="panel-footer" id="panel-butonlar" style="text-align:center;"><button type="button" class="btn btn-primary" id="gonderButonu">Ürün Ekle</button></div>
        </div>
        </form>
      </div>

</div> <!-- /container -->
      <footer class="footer" style="text-align:center;">
        <p>2015 &copy;Tüm Hakları Fa-Ce Elektroniğe aittir. Tasarım & Kodlama: Cemre Nur Bali & Fatih Talha Turan</p>
      </footer>

    


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script>
	$("#kategori").change(function(e) {
		$("#panel-icerik").empty().html('<input type="text" class="form-control" name="marka" placeholder="Marka"><br>');
		$("#panel-icerik").append('<input type="text" class="form-control" name="model" placeholder="Model"><br>');
        if($("#kategori").val()=='bilgisayar') {
			$("#panel-baslik").html('Bilgisayar');
			$("#panel-icerik").append('<input type="text" class="form-control" name="boyut" placeholder="Ekran Boyutu (inç) (AA.A)"><br>');
			$("#panel-icerik").append('<input type="text" class="form-control" name="e_cozunurluk" placeholder="Ekran Çözünürlüğü (piksel) (GGGGxYYYY)"><br>');
			$("#panel-icerik").append('<input type="text" class="form-control" name="disk" placeholder="Disk Boyutu (Birim ile girin)"><br>');
			$("#panel-icerik").append('<input type="text" class="form-control" name="islemci_markasi" placeholder="İşlemci Markası"><br>');
			$("#panel-icerik").append('<input type="text" class="form-control" name="islemci_modeli" placeholder="İşlemci Modeli"><br>');
			$("#panel-icerik").append('<input type="text" class="form-control" name="ekran_karti_markasi" placeholder="Grafik Kartı Markası"><br>');
			$("#panel-icerik").append('<input type="text" class="form-control" name="ekran_karti_modeli" placeholder="Grafik Kartı Modeli"><br>');
			$("#panel-icerik").append('<input type="text" class="form-control" name="ram_gb" placeholder="Bellek (RAM) (Sadece değeri girin)">');
			$("#panel-alan").show("slow");
		}
		else if($("#kategori").val()=='telefon') {
			$("#panel-baslik").html('Telefon');
			$("#panel-icerik").append('<input type="text" class="form-control" name="boyut" placeholder="Ekran Boyutu (AA.A)"><br>');
			$("#panel-icerik").append('<input type="text" class="form-control" name="disk" placeholder="Disk Boyutu (GB) (Sadece değeri girin)"><br>');
			$("#panel-icerik").append('<input type="text" class="form-control" name="k_cozunurluk" placeholder="Kamera Çözünürlüğü (MP) (Sadece değeri girin)"><br>');
			$("#panel-icerik").append('<input type="text" class="form-control" name="renk" placeholder="Renk"><br>');
			$("#panel-icerik").append('<select name="4G" class="form-control"><option value="0">4G - Yok</option><option value="1">4G - Var</option></select>');
			$("#panel-alan").show("slow");
		}
		else if($("#kategori").val()=='tablet') {
			$("#panel-baslik").html('Tablet');
			$("#panel-icerik").append('<input type="text" class="form-control" name="boyut" placeholder="Ekran Boyutu (AA.A)"><br>');
			$("#panel-icerik").append('<input type="text" class="form-control" name="e_cozunurluk" placeholder="Ekran Çözünürlüğü (piksel) (GGGGxYYYY)"><br>');
			$("#panel-icerik").append('<input type="text" class="form-control" name="disk" placeholder="Disk Boyutu (GB) (Sadece değeri girin)"><br>');
			$("#panel-icerik").append('<input type="text" class="form-control" name="k_cozunurluk" placeholder="Kamera Çözünürlüğü (MP) (Sadece değeri girin)">');
			$("#panel-alan").show("slow");
		}
		else if($("#kategori").val()=='televizyon') {
			$("#panel-baslik").html('Televizyon');
			$("#panel-icerik").append('<input type="text" class="form-control" name="tur" placeholder="Tür"><br>');
			$("#panel-icerik").append('<input type="text" class="form-control" name="boyut" placeholder="Ekran Boyutu (AA.A)"><br>');
			$("#panel-icerik").append('<input type="text" class="form-control" name="e_cozunurluk" placeholder="Ekran Çözünürlüğü (piksel) (GGGGxYYYY)">');
			$("#panel-alan").show("slow");
		}
		else if($("#kategori").val()=='fotograf_makinesi') {
			$("#panel-baslik").html('Fotoğraf Makinesi');
			$("#panel-icerik").append('<input type="text" class="form-control" name="tur" placeholder="Tür"><br>');
			$("#panel-icerik").append('<input type="text" class="form-control" name="boyut" placeholder="Ekran Boyutu (AA.A)"><br>');
			$("#panel-icerik").append('<input type="text" class="form-control" name="k_cozunurluk" placeholder="Kamera Çözünürlüğü (MP) (Sadece değeri girin)">');
			$("#panel-alan").show("slow");
		}
		else if($("#kategori").val()=='aksesuar') {
			$("#panel-baslik").html('Aksesuar');
			$("#panel-icerik").append('<input type="text" class="form-control" name="tur" placeholder="Tür">');
			$("#panel-alan").show("slow");
		}
		else {
			$("#panel-alan").hide(0);
			$("#panel-baslik").empty();
			$("#panel-icerik").empty();
			alert('Kategori seçiminde bir hata oluştu. Lütfen sayfayı yenileyin!');
		}
    });
	$("#gonderButonu").click(function(e) {
        $.ajax({
        type:'POST',
        url:'urunekle.php',
        data:$('#urunekle_form').serialize(),
        success: function (msg) {
             if(msg=='bosluk') {
				alert('Bazı alanlarda boşluklar olabilir. Lütfen kontrol ederek yeniden deneyin!');
				return false; 
			 }
			 else if(msg=='veritabani') {
				alert('Ürün veritabanına yazılamadı. Lütfen kontrol ederek yeniden deneyin!'); 
			 	return false;
			 }
			 else {
				alert('Ürün eklendi! Ürün resmini, resimlerin olduğu klasöre aşağıda yazıldığı şekliyle yükleyin:\n\r./img/' + $("#kategori").val() + '/' + msg + '.jpg'); 
			 }
            }
        });
    });
	</script>
  </body>
</html>
