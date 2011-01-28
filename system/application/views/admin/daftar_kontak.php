<div id="tabs-2">

    <h1>Daftar Kontak</h1>
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
                <form id="data<?php echo $a['id']?>" action="kontak/update/<?php echo $a['id']?>" method="POST">
                <td><?php echo $i++?></td>
                <td><input type="text" value="<?php echo $a['nama']?>" size="15" name="nama" /></td>
                <td><input type="text" value="<?php echo $a['bagian']?>" name="bagian" /></td>
                <td><input type="text" value="<?php echo $a['hp']?>" size="15" name="hp" /></td>
                <td><input type="text" value="<?php echo $a['ym']?>" name="ym" /></td>
                <td style="text-align: center"><input type="text" value="<?php echo $a['urutan']?>" size="1" name="urutan" /></td>
                <td>
                    <ul class="ui-widget ui-helper-clearfix" id="icons">
                        <li title="Simpan" class="ui-state-default ui-corner-all">
                            <span class="ui-icon ui-icon-disk" onclick="$('#data<?php echo $a['id']?>').submit()"></span>
                        </li>
                        <li title="Batal" class="ui-state-default ui-corner-all">
                            <span onclick="batal(<?php echo $a['id']?>)" class="ui-icon ui-icon-arrowreturnthick-1-w"></span>
                        </li>
                    </ul>
                </td>
                </form>
            </tr>
            <?php }?>
            <tr>
                <td colspan="7">Tambah Kontak Baru</td>
            </tr>
            <form action="kontak/insert" method="POST">
            <tr>
                
                <td>+</td>
                <td><input type="text" value="" size="15" name="nama" /></td>
                <td><input type="text" value="" name="bagian" /></td>
                <td><input type="text" value="" size="15" name="hp" /></td>
                <td><input type="text" value="" name="ym" /></td>
                <td style="text-align: center"><input type="text" value="" size="1" name="urutan" /></td>
                <td>
                    <input type="submit" value="tambah" name="submit" />
                </td>
            </tr>
            </form>
        </tbody>
    </table>


</div>
<script type="text/javascript">
    function hapus(id) {
        if (confirm("Yakin akan menghapus kontak ini? Kontak yang sudah dihapus tidak akan dapat dikembalikan lagi.")) {
                $.ajax({
                        url: 'kontak/hapus/' + id,
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
    function batal(id) {
        $('#edit' + id).fadeOut('fast', function(){
            $('#row' + id).fadeIn();
        });
    }
</script>

<!-- End of Main Content -->