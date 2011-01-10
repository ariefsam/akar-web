<div id="tabs-2">

    <h1>Daftar Halaman</h1>
    <table class="fullwidth" cellpadding="0" cellspacing="0" border="0">
        <thead>
            <tr>
                <td>No</td>
                <td width="100px">Halaman</td>
                <td>Cuplikan</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach ($daftar_halaman as $a) {?>
            <tr id="row<?php echo $a['id']?>" class="<?php if($i%2==0) echo 'even'; else echo 'odd';?>">
                <td><?php echo $i++?></td>
                <td><?php echo $a['judul']?></td>
                <td><?php echo substr(htmlentities($a['isi']),0,200);?></td>
                <td width="20px">
                    <ul class="ui-widget ui-helper-clearfix" id="icons">
                    <li title="Edit" class="ui-state-default ui-corner-all">
                        <a href="../index.php/admin/front/edit/<?php echo $a['id']?>"><span class="ui-icon ui-icon-pencil">&nbsp;</span></a>
                    </li>
                    </ul>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>


</div>

<!-- End of Main Content -->