
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

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
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
              <ul class="nav navbar-nav">
                <li class="active"><a href="./">Anasayfa</a></li>
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

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="data:img/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              
              <p><a class="btn btn-primary" href="./urun.php?kategori=telefon&id=3" role="button"><img src="img/Untitled-1.jpg" alt="Örnek Resim" width="700" height="330" ></a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1></h1>
              <p><a class="btn btn-lg btn-primary" href="./urun.php?kategori=televizyon&id=20" role="button"><img src="img/Untitled-2.jpg" alt="Örnek Resim" width="700" height="330" ></a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <p><a class="btn btn-lg btn-primary" href="./urun.php?kategori=fotograf_makinesi&id=7" role="button"><img src="img/foto.jpg" alt="Örnek Resim" width="700" height="330"></a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img src="img/bilgisayar.jpg" alt="Örnek Resim" width="140" height="140">
          <h2>Bilgisayar</h2>
          <p>Günümüzün en çok kullanılan teknolojik araçları arasında yer alan bilgisayarlar, gün geçtikçe daha gösterişli ve daha özellikli hale gelmekte. Bilgisayar alırken kalite esaslarına dayanarak seçim yapmanız bu açıdan son derece önem arz ediyor. Kaliteli markalar tarafından üretilen bilgisayarlar, hayal ettiklerinizi gerçeğe dönüştürebilmek açısından çok daha uygundur. Teknolojik gelişmelerde ilerleme kaydedildikçe bilgisayarların özelliklerinde de bir takım değişimler yaşanabiliyor. Masaüstü bilgisayar modellerinin yanı sıra taşınabilir bilgisayarlar da son derece ilgi çekmekte.</p>
          <a href="./urunler.php?kategori=bilgisayar" role="button" class="btn btn-success">Daha Fazla Ürün İçin &raquo;</a>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="img/telefon.jpg" alt="Örnek Resim" width="229" height="128">
          <h2>Telefon</h2>
          <p>En yeni akıllı cep telefonu modellerinden kablosuz telefon çeşitlerine kadar tüm ürünler bu kategoride yer almaktadır.  Görüntülü konuşma yapılmasına olanak tanıyan telefon modellerini de kategori içerisinde bulabilirsiniz. Ayrıca telefonunuzu kişiselleştirmenizi sağlayan kılıflar, bluetooth ürünleri ve diğer aksesuarlar da zengin seçenek yelpazesi ile beğeninize sunulmaktadır.</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <a href="./urunler.php?kategori=telefon" role="button" class="btn btn-success">Daha Fazla Ürün İçin &raquo;</a>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="img/tablet.jpg" alt="Örnek Resim" width="140" height="138">
          <h2>Tablet</h2>
          <p>Gelişen teknolojinin bize sunduğu en önemli araçlardan birisi tabletlerdir. Her yere rahatlıkla götürebileceğimiz ve her an yanımızda taşıyabileceğimiz bu tabletler, teknolojiden uzak kalmama açısından son derece kullanışlıdır. Boyut olarak da gayet ergonomik bir yapıya sahip olan bu tablet pc yanınızda bulundurmak son derece kolay olacak. Artık internetten ve teknolojiden asla uzak olmak zorunda kalmayacaksınız.</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <a href="./urunler.php?kategori=tablet" role="button" class="btn btn-success">Daha Fazla Ürün İçin &raquo;</a>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
      
      
      <br>
      <br>
      <br>
      
      <p></p>
      
      <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img src="img/televizyon.jpg" alt="Örnek Resim" width="140" height="140">
          <h2>Televizyon</h2>
          <p>Teknolojinin gelişmesi ile birlikte hızla değişen ve gelişen televizyonlar artık yüksek çözünürlükte görüntü kalitesi sunuyor. İstediğiniz her an bu kalite ile izleyebileceğiniz en keyifli filmlerin yanı sıra televizyonları oyun konsolları ile de rahatlıkla kullanabilir, eğlencenin tadını çıkarabilirsiniz. Pixel olarak gelişmiş olan televizyonlar artık çok daha canlı renklere sahip. Bağlantılar ve farklı kullanım alanları açısından bakıldığında çok farklı özellikleri beraberinde sunuyor. Bilgisayarlara, fotoğraf makinelerine bağlanabilen yeni nesil televizyonlar aynı zamanda internete de bağlanabiliyor. Eğlencenin vazgeçilmez adresi halene gelen televizyon sunduğu canlı görüntüler ile artık çok daha etkili bir araç. Son çıkan televizyon teknolojilerini rahatlıkla takip edebilir, isabetli seçimler yaparak eğlencenin tadına varabilirsiniz.</p>
          <a href="./urunler.php?kategori=televizyon" role="button" class="btn btn-success">Daha Fazla Ürün İçin &raquo;</a>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="img/sony-dsc-hx300-siyah-dijital-fotograf-makinesi_u-5.jpg" alt="Örnek Resim" width="134" height="129">
          <h2>Fotoğraf Makineleri</h2>
          <p>Amatör ve profesyonel kullanımlar için özel olarak tasarlanmış en yeni fotoğraf makinesiçeşitleri için kategoriye tıklayabilirsiniz. Dijital bir teknoloji ile üretilen fotoğraf makinesi modelleri en kaliteli markaların ürünleridir ve pratik bir kullanım sunar. Hayatınızın en önemli anlarını ölümsüzleştirmenizi sağlayacak video kamera çeşitleri ise yüksek çözünürlükte videolar çekmenizi sağlar. Video kamera ve diğer ürünlerin teknik özelliklerini ürün görseli altında bulabilirsiniz.</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <a href="./urunler.php?kategori=fotograf_makinesi" role="button" class="btn btn-success">Daha Fazla Ürün İçin &raquo;</a>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="img/pr_01_10274_min.jpg" alt="Örnek Resim" width="140" height="140">
          <h2>Aksesuarlar</h2>
          <p>Ev aksesuarları, evinize daha iyi bir görünüm kazandırmak için yararlanabileceğiniz ürünler arasında yer alır. Her biri birbirinden dikkat çekici ev aksesuarları, evinizle aranızda özel bir bağ oluşturacaktır. Ev aksesuarları gibi ses aksesuarları da bu bağlamda son derece önemlidir. Bu aksesuarlar sayesinde sevdiğiniz müzikleri her yerde dinleyebilir, bazı özel enstrümanlar sayesinde kendi müziğinizi bile yapabilirsiniz. Ses aksesuarları arasından seçim yaparken kararsız kalmanız, göz attığınız ürünlerin kalitesini ortaya koymaktadır.</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <a href="./urunler.php?kategori=aksesuar" role="button" class="btn btn-success">Daha Fazla Ürün İçin &raquo;</a>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
      
      <br>
      <br>
      <br>
      
      <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img src="img/gold1.jpg" alt="Örnek Resim" width="140" height="140">
          <h2>SAMSUNG GALAXY NOTE 4</h2>
          <p class="lead">S Pen Kalem ile Her şeyi Not alın.</p>
          <p class="lead">Aynı Zamanda Daha Fazla İş Yapın.</p>
          <a href=".//urun.php?kategori=telefon&id=5" type="button" class="btn btn-danger">İncele</a>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="img/v2-79801-5_medium.jpg" alt="Örnek Resim" width="134" height="129">
          <h2>TOSHIBA SATELLITE L50-C</h2>
          <p class="lead">OPTİMUM PERFORMANS</p>
          <p class="lead">YENİLİKÇİ VE KULLANIMI KOLAY</p>
          <a href="./urun.php?kategori=bilgisayar&id=6" type="button" class="btn btn-danger">İncele</a>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="img/televizyon/23.jpg" alt="Örnek Resim" width="140" height="152">
          <h2>LG 24MT47U</h2>
         <p class="lead">GENİŞ İZLEME AÇISI</p>
          <p class="lead">STEREO SPEAKER</p>
          <a href="./urun.php?kategori=televizyon&id=23" type="button" class="btn btn-danger">İncele</a>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
      
      


      <!-- START THE FEATURETTES -->

    

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Yukarı Çık</a></p>
        <p>2015 &copy;Tüm Hakları Fa-Ce Elektroniğe aittir. Tasarım & Kodlama: Cemre Nur Bali & Fatih Talha Turan</p>
        
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
