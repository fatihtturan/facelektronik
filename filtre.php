<form id="filtrele">
<input type="hidden" value="<?php echo $_GET["kategori"]; ?>" name="kategori">
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <?php
    echo '<div class="panel panel-info">';
    echo '<div class="panel-heading" role="tab" id="headingOne">';
    echo '<h4 class="panel-title">';
    echo '<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">';
    echo 'Marka';
    echo '</a>';
    echo '</h4>';
    echo '</div>';

    echo '<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">';
    echo '<div class="panel-body">';
    $QueryRow = mysqli_query($baglan, "SELECT DISTINCT(marka) FROM ".$_GET["kategori"]." ORDER BY marka ASC");
    while($Result = mysqli_fetch_array($QueryRow)) echo '<div class="checkbox list-group-item"><label><input type="checkbox" name="marka[]" value="'.$Result["marka"].'"> '.$Result["marka"].'</label></div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    
    if(($_GET["kategori"]=="aksesuar") || ($_GET["kategori"]=="fotograf_makinesi") || ($_GET["kategori"]=="televizyon")) {
        echo '<div class="panel panel-info">';
        echo '<div class="panel-heading" role="tab" id="headingTwo">';
        echo '<h4 class="panel-title">';
        echo '<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">';
        echo 'Tür';
        echo '</a>';
        echo '</h4>';
        echo '</div>';

        echo '<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">';
        echo '<div class="panel-body">';
        $QueryRow = mysqli_query($baglan, "SELECT DISTINCT(tur) FROM ".$_GET["kategori"]." ORDER BY tur ASC");
        while($Result = mysqli_fetch_array($QueryRow)) echo '<div class="checkbox list-group-item"><label><input type="checkbox" name="tur[]" value="'.$Result["tur"].'"> '.$Result["tur"].'</label></div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    if(($_GET["kategori"]=="bilgisayar") || ($_GET["kategori"]=="fotograf_makinesi") || ($_GET["kategori"]=="tablet") || ($_GET["kategori"]=="telefon") || ($_GET["kategori"]=="televizyon")) {
        echo '<div class="panel panel-info">';
        echo '<div class="panel-heading" role="tab" id="headingThree">';
        echo '<h4 class="panel-title">';
        echo '<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">';
        echo 'Ekran Boyutu (inç)';
        echo '</a>';
        echo '</h4>';
        echo '</div>';

        echo '<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">';
        echo '<div class="panel-body">';
        $QueryRow = mysqli_query($baglan, "SELECT DISTINCT(boyut) FROM ".$_GET["kategori"]." ORDER BY boyut ASC");
        while($Result = mysqli_fetch_array($QueryRow)) echo '<div class="checkbox list-group-item"><label><input type="checkbox" name="boyut[]" value="'.$Result["boyut"].'"> '.$Result["boyut"].' "</label></div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    if(($_GET["kategori"]=="bilgisayar") || ($_GET["kategori"]=="tablet") || ($_GET["kategori"]=="televizyon")) {
        echo '<div class="panel panel-info">';
        echo '<div class="panel-heading" role="tab" id="headingFour">';
        echo '<h4 class="panel-title">';
        echo '<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">';
        echo 'Ekran Çözünürlüğü (piksel)';
        echo '</a>';
        echo '</h4>';
        echo '</div>';

        echo '<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">';
        echo '<div class="panel-body">';
        $QueryRow = mysqli_query($baglan, "SELECT DISTINCT(e_cozunurluk) FROM ".$_GET["kategori"]." ORDER BY e_cozunurluk ASC");
        while($Result = mysqli_fetch_array($QueryRow)) echo '<div class="checkbox list-group-item"><label><input type="checkbox" name="e_cozunurluk[]" value="'.$Result["e_cozunurluk"].'"> '.$Result["e_cozunurluk"].'</label></div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    if(($_GET["kategori"]=="bilgisayar") || ($_GET["kategori"]=="tablet") || ($_GET["kategori"]=="telefon")) {
        echo '<div class="panel panel-info">';
        echo '<div class="panel-heading" role="tab" id="headingFive">';
        echo '<h4 class="panel-title">';
        echo '<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">';
        echo 'Disk Boyutu';
        echo '</a>';
        echo '</h4>';
        echo '</div>';

        echo '<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">';
        echo '<div class="panel-body">';
        $QueryRow = mysqli_query($baglan, "SELECT DISTINCT(disk) FROM ".$_GET["kategori"]." ORDER BY disk ASC");
        while($Result = mysqli_fetch_array($QueryRow)) {
            echo '<div class="checkbox list-group-item"><label><input type="checkbox" name="disk[]" value="'.$Result["disk"].'"> '.$Result["disk"];
            if(($_GET["kategori"]=="tablet") || ($_GET["kategori"]=="telefon")) echo ' GB';
            echo '</label></div>';
        }
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    if(($_GET["kategori"]=="fotograf_makinesi") || ($_GET["kategori"]=="tablet") || ($_GET["kategori"]=="telefon")) {
        echo '<div class="panel panel-info">';
        echo '<div class="panel-heading" role="tab" id="headingSix">';
        echo '<h4 class="panel-title">';
        echo '<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">';
        echo 'Kamera Çözünürlüğü (MP)';
        echo '</a>';
        echo '</h4>';
        echo '</div>';

        echo '<div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">';
        echo '<div class="panel-body">';
        $QueryRow = mysqli_query($baglan, "SELECT DISTINCT(k_cozunurluk) FROM ".$_GET["kategori"]." ORDER BY k_cozunurluk ASC");
        while($Result = mysqli_fetch_array($QueryRow)) echo '<div class="checkbox list-group-item"><label><input type="checkbox" name="k_cozunurluk[]" value="'.$Result["k_cozunurluk"].'"> '.$Result["k_cozunurluk"].' Megapiksel</label></div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    
    if($_GET["kategori"]=="bilgisayar") {
        echo '<div class="panel panel-info">';
        echo '<div class="panel-heading" role="tab" id="headingSeven">';
        echo '<h4 class="panel-title">';
        echo '<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">';
        echo 'İşlemci';
        echo '</a>';
        echo '</h4>';
        echo '</div>';

        echo '<div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">';
        echo '<div class="panel-body">';
        $QueryRow = mysqli_query($baglan, "SELECT DISTINCT(islemci_modeli),(islemci_markasi) FROM bilgisayar ORDER BY islemci_markasi ASC");
        while($Result = mysqli_fetch_array($QueryRow)) echo '<div class="checkbox list-group-item"><label><input type="checkbox" name="islemci_modeli[]" value="'.$Result["islemci_modeli"].'"> '.$Result["islemci_markasi"].' '.$Result["islemci_modeli"].'</label></div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        
        echo '<div class="panel panel-info">';
        echo '<div class="panel-heading" role="tab" id="headingEight">';
        echo '<h4 class="panel-title">';
        echo '<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="true" aria-controls="collapseEight">';
        echo 'Grafik Kartı';
        echo '</a>';
        echo '</h4>';
        echo '</div>';

        echo '<div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">';
        echo '<div class="panel-body">';
        $QueryRow = mysqli_query($baglan, "SELECT DISTINCT(ekran_karti_modeli),(ekran_karti_markasi) FROM bilgisayar ORDER BY ekran_karti_markasi ASC");
        while($Result = mysqli_fetch_array($QueryRow)) echo '<div class="checkbox list-group-item"><label><input type="checkbox" name="ekran_karti_modeli[]" value="'.$Result["ekran_karti_modeli"].'"> '.$Result["ekran_karti_markasi"].' '.$Result["ekran_karti_modeli"].'</label></div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        
        echo '<div class="panel panel-info">';
        echo '<div class="panel-heading" role="tab" id="headingNine">';
        echo '<h4 class="panel-title">';
        echo '<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="true" aria-controls="collapseNine">';
        echo 'Bellek (RAM)';
        echo '</a>';
        echo '</h4>';
        echo '</div>';

        echo '<div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">';
        echo '<div class="panel-body">';
        $QueryRow = mysqli_query($baglan, "SELECT DISTINCT(ram_gb) FROM bilgisayar ORDER BY ram_gb ASC");
        while($Result = mysqli_fetch_array($QueryRow)) echo '<div class="checkbox list-group-item"><label><input type="checkbox" name="ram_gb[]" value="'.$Result["ram_gb"].'"> '.$Result["ram_gb"].' GB</label></div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    if($_GET["kategori"]=="telefon") {
        echo '<div class="panel panel-info">';
        echo '<div class="panel-heading" role="tab" id="headingTen">';
        echo '<h4 class="panel-title">';
        echo '<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="true" aria-controls="collapseTen">';
        echo 'Renk';
        echo '</a>';
        echo '</h4>';
        echo '</div>';

        echo '<div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">';
        echo '<div class="panel-body">';
        $QueryRow = mysqli_query($baglan, "SELECT DISTINCT(renk) FROM telefon ORDER BY renk ASC");
        while($Result = mysqli_fetch_array($QueryRow)) echo '<div class="checkbox list-group-item"><label><input type="checkbox" name="renk[]" value="'.$Result["renk"].'"> '.$Result["renk"].'</label></div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        
        echo '<div class="panel panel-info">';
        echo '<div class="panel-heading" role="tab" id="headingEleven">';
        echo '<h4 class="panel-title">';
        echo '<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">';
        echo '4G';
        echo '</a>';
        echo '</h4>';
        echo '</div>';

        echo '<div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">';
        echo '<div class="panel-body">';
        $QueryRow = mysqli_query($baglan, "SELECT DISTINCT(4G) FROM telefon ORDER BY 4G DESC");
        while($Result = mysqli_fetch_array($QueryRow)) {
            if($Result["4G"]==0) $FourGText='Yok'; else $FourGText='Var';
            echo '<div class="checkbox list-group-item"><label><input type="checkbox" name="4G[]" value="'.$Result["4G"].'"> '.$FourGText.'</label></div>';
        }
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    ?>
</div>
</form>