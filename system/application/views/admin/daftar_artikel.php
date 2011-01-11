<div id="tabs-2">

    <h1>Daftar Artikel Terbaru</h1>

    <p style="float: right"><a href="../index.php/admin/artikel/tambah">Tambah Artikel Baru</a></p>
    <table class="fullwidth" cellpadding="0" cellspacing="0" border="0">
        <thead>
            <tr>
                <td width="30px">No</td>
                <td width="100px">Tanggal</td>
                <td>Judul</td>
                <td>Cuplikan</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php
            $i=1;
            foreach ($daftar_artikel as $a) {?>
            <tr id="row<?php echo $a['id']?>" class="<?php if($i%2==0) echo 'even'; else echo 'odd';?>">
                <td><?php echo $i++?></td>
                <td><?php echo $a['tanggal']?></td>
                <td><?php echo $a['judul']?></td>
                <td><?php echo substr(htmlentities($a['isi']),0,200);?></td>
                <td width="60px">
                    <ul class="ui-widget ui-helper-clearfix" id="icons">
                    <li title="Edit" class="ui-state-default ui-corner-all">
                        <a href="../index.php/admin/artikel/edit/<?php echo $a['id']?>"><span class="ui-icon ui-icon-pencil">&nbsp;</span></a>
                    </li>
                    <li title="Hapus" class="ui-state-default ui-corner-all">
                        <a href="#" onclick="hapus(<?php echo $a['id']?>)"><span class="ui-icon ui-icon-closethick"></span></a>
                    </li>
                    </ul>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>


</div>

<!-- End of Main Content -->
<script type="text/javascript">
    function hapus(id) {
        if (confirm("Yakin akan menghapus artikel ini? Artikel yang sudah dihapus tidak akan dapat dikembalikan lagi.")) {
                $.ajax({
                        url: 'delete.php',
                        data: 'del=' + id,
                        success: function(data) {
                                $('#row' + id).fadeOut('slow');

                        }

                });
        }
        }

</script>