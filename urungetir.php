<?php
session_start();
$connectMySQL=mysqli_connect('localhost','root','','facelektronik');
mysqli_set_charset($connectMySQL, "utf8");

$GetValues      =   array_keys($_GET);
$CountGetValues =   count($GetValues);

$QueryString = 'SELECT * FROM '.$_GET["".$GetValues[0].""].' WHERE ';

if($CountGetValues>1) {
    for($i=1; $i<$CountGetValues; $i++) {
        $ImplodeAttr=implode(',', $_GET["".$GetValues[$i].""]);
        $FilterAttr=explode(',',$ImplodeAttr);
        $CountFilterAttr=count($FilterAttr);
        for($j=0; $j<$CountFilterAttr; $j++) {
            if($j!=0) $QueryString .= ' OR ';
            else $QueryString .= ' (';
            $QueryString .= $GetValues[$i].'=\''.$FilterAttr[$j].'\'';
            if($j==$CountFilterAttr-1) $QueryString .= ') ';
        }
        if($i<$CountGetValues-1) $QueryString .= ' AND ';
    }
}
else $QueryString .= 1;

$QueryRow = mysqli_query($connectMySQL, $QueryString);
if(mysqli_num_rows($QueryRow)>0) {
	while($Result = mysqli_fetch_array($QueryRow)) {
		echo '<div class="col-xs-6 col-lg-4">';
		echo '<div class="panel panel-default">';
		echo '<div class="panel-heading" title="'.$Result["marka"].' '.$Result["model"].'"><strong>'.substr($Result["marka"].' '.$Result["model"],0,24);
		if(strlen($Result["marka"].' '.$Result["model"])>24) echo '...';
		echo '</strong></div>';
		echo '<div class="panel-body"><img src="img/'.$_GET["kategori"].'/'.$Result["ID"].'.jpg" class="img-responsive"></div>';
		echo '<div class="panel-footer"><a class="btn btn-default" href="urun.php?kategori='.$_GET["kategori"].'&id='.$Result["ID"].'" role="button">İncele &raquo;</a>';
		if(isset($_SESSION["face_giris"])) echo ' <a class="btn btn-danger" href="urunsil.php?kategori='.$_GET["kategori"].'&id='.$Result["ID"].'" onClick="return confirm(\'Ürünü silmek istiyor musunuz? Bu işlem geri alınamaz!\');" role="button">Ürünü Sil</a>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
	}
	} else {
		echo '<div class="jumbotron">';
			echo '<h1>Üzgünüz!</h1>';
			echo '<p>Aradığınız özelliklere sahip ürün bulunamadı veya aradığınız kategori yok.</p>';
		echo '</div>';
	}
?>