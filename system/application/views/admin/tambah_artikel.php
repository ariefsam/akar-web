<div class="pad20">

    <!-- Tabs -->
    <div id="tabs">
        <ul>
            <li><a href="#">Tambah Artikel</a></li>
        </ul>

        <!-- First tab -->
        <div id="tabs-1">
            <!-- Form -->
            <form method="post" action="../index.php/admin/artikel/inset">
                <!-- Fieldset -->
                <fieldset>
                    <p>
                        <label for="lf">Judul: </label>
                        <input class="lf" name="judul" type="text" value="" />
                    </p>
                    <p>
                        <!-- WYSIWYG editor -->
                        <textarea cols="80" rows="10" class="wysiwyg" name="isi"></textarea>
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