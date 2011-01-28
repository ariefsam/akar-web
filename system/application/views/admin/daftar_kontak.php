<div id="tabs-2">

    <h1>Daftar Halaman</h1>
    <table class="fullwidth" cellpadding="0" cellspacing="0" border="0">
        <thead>
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Bagian</td>
                <td>No HP</td>
                <td>YM</td>
                <td style="text-align: center">Urutan</td>
                <td width="100px"></td>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach ($daftar_kontak as $a) {?>
            <tr id="row<?php echo $a['id']?>" class="<?php if($i%2==0) echo 'even'; else echo 'odd';?>">
                <td><?php echo $i?></td>
                <td><?php echo $a['nama']?></td>
                <td><?php echo $a['bagian']?></td>
                <td><?php echo $a['hp']?></td>
                <td><?php echo $a['ym']?></td>
                <td style="text-align: center"><?php echo $a['urutan']?></td>
                <td>
                    <ul class="ui-widget ui-helper-clearfix" id="icons">
                    <li title="Edit" class="ui-state-default ui-corner-all">
                        <span onclick="edit(<?php echo $a['id']?>)" class="ui-icon ui-icon-pencil">&nbsp;</span>
                    </li>
                    <li title="Hapus" class="ui-state-default ui-corner-all">
                        <span onclick="hapus(<?php echo $a['id']?>)" class="ui-icon ui-icon-closethick"></span>
                    </li>
                    </ul>
                </td>
            </tr>
            <tr id="edit<?php echo $a['id']?>" class="<?php if($i%2==0) echo 'even'; else echo 'odd';?>" style="display: none">
                <td><?php echo $i++?></td>
                <td><input type="text" value="<?php echo $a['nama']?>" name="nama" /></td>
                <td><?php echo $a['bagian']?></td>
                <td><?php echo $a['hp']?></td>
                <td><?php echo $a['ym']?></td>
                <td style="text-align: center"><?php echo $a['urutan']?></td>
                <td>
                    <ul class="ui-widget ui-helper-clearfix" id="icons">
                    <li title="Edit" class="ui-state-default ui-corner-all">
                        <span onclick="edit(<?php echo $a['id']?>)" class="ui-icon ui-icon-pencil">&nbsp;</span>
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
    function edit(id) {
        $('#row' + id).fadeOut('fast', function(){
            $('#edit' + id).fadeIn();
        });
    }
</script>

<!-- End of Main Content -->