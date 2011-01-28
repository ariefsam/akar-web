<?php
foreach ($daftar_berita as $a)
{?>
<a href="index.php/berita/page/<?php echo $a['id']?>/<?php echo $a['judul']?>.akr" style="font-size: larger"><?php echo $a['judul']?></a><br />
<?php }
?>
