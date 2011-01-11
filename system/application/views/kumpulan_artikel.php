<?php
foreach ($daftar_artikel as $a)
{?>
<a href="index.php/artikel/page/<?php echo $a['id']?>" style="font-size: larger"><?php echo $a['judul']?></a><br />
<?php }
?>
