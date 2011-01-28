<?php
foreach ($daftar_artikel as $a)
{?>
<a href="index.php/artikel/page/<?php echo $a['id']?>/<?php echo $a['judul']?>.akr" style="font-size: larger"><?php echo $a['judul']?></a><br />
<?php }
?>
