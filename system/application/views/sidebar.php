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
                        <h3>Hubungi Kami</h3>
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
