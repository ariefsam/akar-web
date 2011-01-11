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
          <div id="subheader"><h2>Artikel</h2></div>
            <div id="leftcolumn">
                <?php $this->load->view($view_content)?>
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
<?php $this->load->view('footer')?>