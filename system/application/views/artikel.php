
<div class="blog"><?php
if(isset($artikel->isi)){
$pecah = explode("<br>", $artikel->isi);
foreach ($pecah as $p){
    echo "<p>" . $p . "</p>";
}
?>
<br />
<div class="info">Diposkan <?php echo $artikel->tanggal;
?></div>
<?php
}
else {?>
    Maaf Halaman ini tidak dapat diakses
<?php }?>
</div>
