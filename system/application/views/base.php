<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php if(isset($title)) echo $title." :: ";?>Akar Corporation</title>
        <base href="<?php echo base_url()?>" />
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
        <style type="text/css">
 a.package1{
	width:270px;
	height:180px;
	display:block;
	background:url(images/percetakan_buku.png) top left no-repeat;
	margin:0 auto;
}
a.package2{
	width:270px;
	height:180px;
	display:block;
	background:url(images/sertifikat_acara.png) top left no-repeat;
	margin:0 auto;
}
a.package3{
	width:270px;
	height:180px;
	display:block;
	background:url(images/kalender_kampanye.png) top left no-repeat;
	margin:0 auto;
}
a.package4{
	width:270px;
	height:180px;
	display:block;
	background:url(images/spanduk.png) top left no-repeat;
	margin:0 auto;
}
a.package5{
	width:270px;
	height:180px;
	display:block;
	background:url(images/stiker.png) top left no-repeat;
	margin:0 auto;
}
        </style>
    </head>
    <body>
        <div id="wrapper">
            <?php $this->load->view('header.php');?>
            <div id="hold">
                <div id="featured">
                    <div class="sliderImages">
                        <ul class="slider-img-list">
                            <li><a href="index.php/artikel/page/1" class="package1"><span>Percetakan Buku</span></a></li>
                            <li><a href="index.php/artikel/page/1" class="package2"><span>Sertifikat Acara</span></a></li>
                            <li><a href="index.php/artikel/page/1" class="package3"><span>Kalender Kampanye</span></a></li>
                            <li><a href="index.php/artikel/page/1" class="package4"><span>Spanduk</span></a></li>
                            <li><a href="index.php/artikel/page/1" class="package5"><span>Stiker</span></a></li>
                        </ul>
                    </div>
                    <div class="arrows">
                        <a href="#" class="next"><span>next</span></a>
                        <a href="#" class="prev"><span>previous</span></a>
                    </div>
                    <div class="texthold"><div class="sliderText">
                            <ul class="slider-text-list">
                                <li>
                                    <h2>Percetakan <strong>Buku</strong></h2>
                                    <p>Kami menawarkan percetakan buku murah. Kualitas percetakan kami sangat baik, dengan berbagai jenis tingkatan warna baik itu grayscale maupun full color.</p>
                                    <a href="" class="more">read more</a>
                                </li>
                                <li>
                                    <h2>Percetakan <strong>Sertifikat Acara</strong></h2>
                                    <p>Berbagai acara besar memerlukan sertifikat untuk dibagikan kepada peserta. Kami menawarkan percetakan sertifikat dengan harga termurah dan kualitas terbaik mulai dari Rp 1 ribu.</p>
                                    <a href="" class="more">read more</a>
                                </li>
                                <li>
                                    <h2>Percetakan <strong>Kalender Kampanye</strong></h2>
                                    <p>Kalender sangat membantu dalam kegiatan kampanye penarikan massa. Kami menawarkan harga terbaik untuk membantu kampanye Anda.</p>
                                    <a href="" class="more">read more</a>
                                </li>
                                <li>
                                    <h2>Percetakan <strong>Spanduk</strong></h2>
                                    <p>Spanduk adalah reklame yang paling penting dalam publikasi di jalan dan tempat keramaian lain. Kami menyediakan spanduk kualitas digital dengan harga mulai dari Rp 17ribu per meter.</p>
                                    <a href="" class="more">read more</a>
                                </li>
                                <li>
                                    <h2>Percetakan <strong>Stiker</strong>.</h2>
                                    <p>Stiker merupakan alternatif publikasi yang cukup ampuh di masyarakat. Kami menyediakan jasa pembuatan stiker yang sangat murah. Produk stiker kami dapat Anda dinikmati mulai dari Rp 120,- .</p>
                                    <a href="" class="more">read more</a>
                                </li>
                            </ul>
                        </div></div>


                </div>
                <div id="services">
                    <div class="box"><img src="images/valid.png" width="64" height="64" alt="valid" />
                        <h3>Kualitas Terbaik</h3><p>Kami menawarkan kualitas produk yang terbaik.</p></div>

                    <div class="box"><img src="images/help.png" width="64" height="64" alt="help" />
                        <h3>Layanan Pelanggan</h3><p>Hubungi kami 0251-8624073, 085711513130 (Cepi)</p></div>

                    <div class="box2"><img src="images/clock.png" width="64" height="64" alt="clock"/>
                        <h3>Tepat Waktu</h3><p>Produk yang kami kerjakan akan diselesaikan tepat waktu.</p></div>
                </div>
                <div id="content">
                    <div id="leftcolumn">
                        <?php $this->load->view($view_content);?>
                    </div>
<?php $this->load->view('sidebar')?>
        <?php $this->load->view('footer');?>