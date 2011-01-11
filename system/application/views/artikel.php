
<div class="blog"><?php

$pecah = explode("<br>", $artikel->isi);
foreach ($pecah as $p){
    echo "<p>" . $p . "</p>";
}
?>
<br />
<div class="info">Diposkan <?php echo $artikel->tanggal;
?></div></div>
