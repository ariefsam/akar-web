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
<?php $this->load->view('sidebar')?>
        <?php $this->load->view('footer')?>