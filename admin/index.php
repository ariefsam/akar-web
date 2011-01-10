<?php
session_start();
require 'fungsi.php';
require "../dbconfig.php";
if(!loginkah()) header("Location: login.php");
require "header.php";?>
<h1>Selamat datang, <span>Admin</span>!</h1>
                        <p>Apa yang akan Anda lakukan?</p>
<div class="pad20">
    <!-- Big buttons -->
    <ul class="dash">
        <li>
            <a href="new_artikel.php" title="Tulis artikel baru" class="tooltip">
                <img src="index_files/8_48x480.png" alt="" />
                <span>Artikel Baru</span>
            </a>
        </li>
        <li>
            <a href="list.php" title="Atur artikel yang sudah terbit" class="tooltip">
                <img src="index_files/7_48x480.png" alt="" />
                <span>Artikel</span>
            </a>
        </li>
        <li>
            <a href="user.php" title="Atur data member" class="tooltip">
                <img src="index_files/16_48x48.png" alt="" />
                <span>Member</span>
            </a>
        </li>
        <li>
            <a href="forum.php" title="Atur semua posting di forum" class="tooltip">
                <img src="index_files/26_48x48.png" alt="" />
                <span>Forum</span>
            </a>
        </li>

        <li>
            <a href="iklan.php" title="Atur semua iklan yang terbit" class="tooltip">
                <img src="index_files/29_48x48.png" alt="" />
                <span>Iklan</span>
            </a>
        </li>
    </ul>
    <!-- End of Big buttons -->
</div>
<?php require "footer.php"?>