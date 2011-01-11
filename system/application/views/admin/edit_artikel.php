<div class="pad20">

    <!-- Tabs -->
    <div id="tabs">
        <ul>
            <li><a href="#">Edit Artikel <?php echo $artikel->judul?></a></li>
        </ul>

        <!-- First tab -->
        <div id="tabs-1">
            <!-- Form -->
            <form method="post" action="../index.php/admin/artikel/update/">
                <!-- Fieldset -->
                <fieldset>
                    <p>
                        <label for="lf">Judul: </label>
                        <input name="id" value="<?php echo $artikel->id?>" type="hidden" />
                        <input class="lf" name="judul" type="text" value="<?php echo $artikel->judul?>" />
                    </p>
                    <p>
                        <label for="lf">Tanggal: </label>
                        <input class="lf" name="tanggal" type="text" value="<?php echo $artikel->tanggal?>" />
                    </p>
                    <p>
                        <!-- WYSIWYG editor -->
                        <textarea cols="80" rows="10" class="wysiwyg" name="isi"><?php echo $artikel->isi?></textarea>
                        <!-- End of WYSIWYG editor -->
                    </p>
                    <p>
                        <input class="button" type="submit" value="Update" name="submit" /> <a href="../index.php/admin/front">Ke Daftar Artikel</a>
                    </p>
                </fieldset>
                <!-- End of fieldset -->
            </form>
            <!-- End of Form -->
        </div>
        <!-- End of First tab -->

    </div>
    <!-- End of Tabs -->
</div>

<!-- End of Main Content -->