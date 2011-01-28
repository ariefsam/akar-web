
<div class="blog"><?php
if(isset($berita->isi)){
$pecah = explode("<br>", $berita->isi);
foreach ($pecah as $p){
    echo "<p>" . $p . "</p>";
}
?>
<br />
<div class="info">Diposkan <?php echo $berita->tanggal;
?></div>
<?php }
else {?>
Maaf Halaman ini tidak dapat diakses
<?php }?>
</div>
