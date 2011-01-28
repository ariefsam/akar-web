<iframe src="http://www.facebook.com/plugins/like.php?href=akarcorporation.com"
        scrolling="no" frameborder="0"
        style="border:none; width:450px; height:80px"></iframe>
<div id="footer">
                    <div class="box">
                        <h3>Artikel Terbaru</h3>
                        <ul>
                            <?php $daftar_artikel = $this->artikel->get_semua_artikel();
                                    foreach ($daftar_artikel as $artikel){
                                    ?>
                            <li><a href="index.php/artikel/page/<?php echo $artikel['id']?>/<?php echo $artikel['judul']?>.akr"><?php echo $artikel['judul']?></a></li>
                                <?php
                                    }?>
                        </ul>
                    </div>
                    <div class="box">
                        <h3>Berita Terbaru</h3>
                        <ul>
                            <?php $daftar_berita = $this->berita->get_semua_berita();
                                    foreach ($daftar_berita as $berita){
                                    ?>
                            <li><a href="index.php/berita/page/<?php echo $berita['id']?>/<?php echo $berita['judul']?>.akr"><?php echo $berita['judul']?></a></li>
                                <?php
                                    }?>
                        </ul>
                    </div>
                    <?php /*
                    <div class="box">
                        <h3>Daftar Harga</h3>
                        <ul>
                            <li><a href="">Buku</a></li>
                            <li><a href="">Spanduk dan Baliho</a></li>
                            <li><a href="">Flyer</a></li>
                            <li><a href="">Poster</a></li>
                            <li><a href="">Stiker</a></li>
                        </ul>
                    </div>
                    <div class="box2">
                        <h3>Promo</h3>
                        <img src="images/promo.png" />
                    </div>
                     */ ?>
                    <div class="clear"></div>
                </div>
<div id="copyright">
        

    <a href="#">Akar Corporation</a></div>
            </div>
        </div>
    </body>
</html>
