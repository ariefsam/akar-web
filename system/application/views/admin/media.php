<div id="tabs-2">

    <h1>Gambar-gambar di web</h1>


<?php echo $error;?>

<form action="http://localhost/akar-new/admin/upload/do_upload.akr" method="post" enctype="multipart/form-data">
<input type="file" name="userfile" size="20" />
<input type="submit" value="upload" />

</form>

    <?php
    $i=1;
    foreach ($map as $m)
    {?>
    <div id="gambar<?php echo $i?>" style="display: inline-block; padding: 5px; border: 1px solid black; width: 200px; height: 300px; text-align: left; overflow: auto">
        <div style="height: 200px; width: 150px; border: 1px solid #222; vertical-align: bottom; text-align: center; margin: auto; padding: 10px;">
            <img alt="<?php echo $m?>" src="../pictures/<?php echo $m;?>" style="max-width: 100px; margin: auto; max-height: 200px; vertical-align: bottom" />
        </div>
        <br />Hiperlink Gambar:<br /><?php echo base_url()?>pictures/<?php echo $m?><br />
        <span onclick="hapus('<?php echo $m?>', <?php echo $i++?>)" style="color: blue; cursor: pointer">Hapus</span>
    </div>
    <?php }?>

    <script type="text/javascript">
        function hapus(id, no) {
        if (confirm("Yakin akan menghapus gambar ini? Gambar yang sudah dihapus tidak akan dapat dikembalikan lagi.")) {
                $.ajax({
                        url: 'media/hapus/' + id,
                        success: function() {
                            $('#gambar' + no).fadeOut();
                        }

                });
        }
        }

    </script>