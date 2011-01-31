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
                                    <li class="title"><span><a href="index.php/artikel/page/1" title="link title">Promo Harga Akar</a></span></li>
                                    <li class="author">Author: Cepi</li>
                                    <li class="date">5 Desember 2010</li>
                                </ul>
                            </li>
                        </ul>
                        <h3>Pesan</h3>
                        <div>
<?php /*                        <div class="chat">
                            <div>
                                <?php
                                $this->session->set_userdata('url', $_SERVER['REQUEST_URI']);
                                $daftar_chat = $this->Chat->get_chat();
                                $i = 0;
                                foreach ($daftar_chat as $chat) {?>
                                <div <?php if($i%2==0) echo 'class="even"'; else echo 'class="odd"'?>><strong><a><?php echo $chat['nama']?></a>:</strong> <?php echo $chat['pesan']?><br /></div>
                                <?php
                                $i++;
                                }?>
                            </div>
                            <div class="isian">
                                <br />
                                Tambah Shout
                                <form method="POST" action="pesan/insert.akr">
                                    <table border="0" style="border: none; width: 100%">
                                        <tr><td>Nama</td><td>: <input type="text" name="nama" maxlength="20" /></td></tr>
                                        <tr><td>No HP</td><td>: <input type="text" name="hp"maxlength="15"  /></td></tr>
                                        <tr><td>Email</td><td>: <input type="text" name="email" maxlength="50" /></td></tr>
                                        <tr><td>URL</td><td>: <input type="text" name="url" value="http://" maxlength="50" /></td></tr>
                                        <tr><td>Pesan</td><td>: <input type="text" name="pesan" maxlength="100" /></td></tr>
                                        <tr><td></td><td><input type="submit" name="submit" value="kirim" /></td></tr>
                                    </table>                                    
                                </form>
                                
                            </div> */?>
                        <!-- Begin ShoutMix - http://www.shoutmix.com -->
<iframe title="akar_corp" src="http://www1.shoutmix.com/?akar_corp" width="280" height="400" frameborder="0" scrolling="auto">
<a href="http://www1.shoutmix.com/?akar_corp">View shoutbox</a>
</iframe>
<br /><a href="http://www.shoutmix.com" title="Get your own free shoutbox chat widget at ShoutMix!">ShoutMix chat widget</a><br />
<!-- End ShoutMix -->
                        </div>
                        <br />
                        <h3>Kontak Kami</h3>
                        <div id="ja-topsl1" style="text-align: center">
                            <?php
                            $kontak = $this->Kontak_model->get_kontak();
                                foreach ($kontak as $d) {
                            ?>
                            <h4><?php echo $d['bagian']?></h4><br />
                            <a href="ymsgr:sendIM?<?php echo $d['ym']?>">
                                <img border="0" src="http://opi.yahoo.com/online?u=<?php echo $d['ym']?>&amp;m=g&amp;t=14">
                            </a><br />
                            <?php echo $d['nama']?><br />
                            YM: <?php echo $d['ym']?><br />
                            HP: <?php echo $d['hp']?><br /><br /><br />
                            <?php }?>

                        </div>
                        
                        <div class="outerhol">
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
