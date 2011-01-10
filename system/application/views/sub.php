<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php if(isset($title)) echo $title." :: ";?>Akar Corporation</title>
        <base href="<?php echo base_url();?>" />
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/cufon-yui.js"></script>
        <script type="text/javascript" src="js/Myriad_Pro_400-Myriad_Pro_700-Myriad_Pro_italic_400-Myriad_Pro_italic_700.font.js"></script>

        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.easing.compatibility.js"></script>
        <script type="text/javascript" src="js/jcarousellite.js"></script>
        <script type="text/javascript" src="js/slider.js"></script>
        <script type="text/javascript" src="js/general.js"></script>
        <script type="text/javascript" src="js/jquery.form.js"></script>

    </head>
    <body>
        <div id="wrapper">
            <?php $this->load->view('header');?>
        <div id="hold">

          <div id="content">
          <div id="subheader"><h2><?php echo $halaman->judul?></h2></div>
            <div id="leftcolumn">
                <?php echo $halaman->isi?>
            </div>
      <div id="rightcolumn">
                        <h3>recent blog entries</h3>
                        <ul class="blog-entries">
                            <li class="bd">

                                <ul>
                                    <li class="image">
                                        <a href="#">
                                            <img src="images/thumb.jpg" alt="alternative text for image" title="image title here" >
                                        </a>

                                    </li>
                                    <li class="title"><span><a href="#" title="link title">Promo Bulan Desember</a></span></li>
                                    <li class="author">Author: Cepi</li>

                                    <li class="date">5 Desember 2010</li>
                                </ul>
                            </li>
                        </ul>
                        <h3>Testimonial</h3>
                        <ul>
                            <li class="testimonial">
                                <ul>

                                    <li class="extract">"Luar biasa..."</li>
                                    <li class="testimonial-main">Pekerjaan akar printing sangat berkualitas... Pelayanan baik dan tepat waktu</li>
                                    <li class="testimonial-author">by Joni Hermawan - Kopi GS</li>
                                </ul>
                            </li>
                            <li class="testimonial">
                                <ul>

                                    <li class="extract">"Tepat waktu...."</li>
                                    <li class="testimonial-main">Akar Printing memiliki komitmen yang tinggi untuk menyelesaikan program tepat waktu.... bahkan lebih cepat</li>
                                    <li class="testimonial-author">by Rani - Partai Hanura</li>
                                </ul>
                            </li>
                        </ul>
                        <div class="outerhol">

                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div id="footer">
                    <div class="box">
                        <h3>Artikel Terbaru</h3>
                        <ul>

                            <li><a href="">Percetakan Buku</a></li>
                            <li><a href="">Promo Kalender Kampanye</a></li>
                            <li><a href="">Pembuatan Spanduk Murah</a></li>
                            <li><a href="">Cetak Poster Digital printing</a></li>
                            <li><a href="">Pembuatan Stiker Murah</a></li>
                        </ul>

                    </div>
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
                    <div class="clear"></div>
                </div>
                <div id="copyright"><a href="#">Akar Corporation</a></div>
            </div>
        </div>
    </body>
</html>
