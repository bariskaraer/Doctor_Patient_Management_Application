<header class="header-page2">
        <!-- =========================== navbar-->
        <nav class="navbar is-dark bg-white">
            <div class="container">
                <div class="flex">
                    <a href="<?php echo $url?> " class="navbar-brand flex vcenter" href="#"><img
                            class="logo" src="<?php echo $url?>/assets/kursappicon.png" alt=""></a>
                    <ul class="navbar-menu">
                        <li data-aos-delay="100"> <a class="fade-page"
                                href="<?php echo $url?>">Anasayfa</a>
                        </li>
                        <li data-aos-delay="100"> <a class="fade-page"
                                href="<?php echo $url?>/fiyat">Fiyatlar</a>
                        </li>
                        
                        <li data-aos-delay="100"> <a class="fade-page"
                                href="<?php echo $url?>/referanslar">Referanslar</a>
                        </li>
                        
                        <li data-aos-delay="400"> <a class="fade-page"
                                href="<?php echo $url?>/moduller">Moduller</a> </li>
                                
                                
                        <li data-aos-delay="400"> <a class="fade-page"
                                href="<?php echo $url?>/iletisim">İletişim</a> </li>
                    </ul>
                </div>
                <div class="level-right">
                    <!-- your list menu here -->
                    <div class="navbar-menu">
                        <!--<a href="" class="btn text-primary "> Sign in
                        </a>-->
				<?php if(!empty($_SESSION['course_adminID'])){?>  
					<div class="navbar-menu">
                        <a target="_blank" href="<?php echo $url ?>/anasayfa" data-aos-delay="400" class="btn btn-green btn-round btn-sm"> Otomasyon
                        </a>
                        <a href="" data-aos-delay="400" class="btn btn-dark btn-round btn-sm"> Hesabım
                        </a>
                    </div>
           <?php } elseif(!empty($_SESSION['advisor_id'])){?>  
					<div class="navbar-menu">
                        <a target="_blank" href="<?php echo $url ?>/main" data-aos-delay="400" class="btn btn-green btn-round btn-sm"> Panel
                        </a>
                        <a href="" data-aos-delay="400" class="btn btn-dark btn-round btn-sm"> Hesabım
                        </a>
                    </div>
            <?php } else {?>
              		
              		<div class="navbar-menu">
	              		 <a target="_blank" href="<?php echo $url?>/giris"  data-aos-delay="400" class="btn btn-green btn-round btn-sm"> Otomasyon Girişi
                        </a>
                        <a href="<?php echo $url?>/giris-yap" data-aos-delay="400" class="btn btn-dark btn-round btn-sm"> Giriş Yap
                        </a>
                    </div>
            <?php }?>
                    </div>
                    <div class="mobile-menu">
                        <!-- your list menu in mobile here -->
                        <ul>
                            <a href="<?php echo $url?> " class="navbar-brand flex vcenter" href="#"><img
                            class="logo" src="<?php echo $url?>/assets/kursappicon.png" alt=""></a>
							<ul class="navbar-menu">
                        <li data-aos-delay="100"> <a class="fade-page"
                                href="<?php echo $url?>">Anasayfa</a>
                        </li>
                        <li data-aos-delay="100"> <a class="fade-page"
                                href="<?php echo $url?>/fiyat">Fiyatlar</a>
                        </li>
                        
                        <li data-aos-delay="100"> <a class="fade-page"
                                href="<?php echo $url?>/referanslar">Referanslar</a>
                        </li>
                        
                        <li data-aos-delay="400"> <a class="fade-page"
                                href="<?php echo $url?>/moduller">Moduller</a> </li>
                                
                                
                        <li data-aos-delay="400"> <a class="fade-page"
                                href="<?php echo $url?>/iletisim">İletişim</a> </li>
							</ul>
                        </ul>
                    </div>
                    <div class="flex">
                        <div class="menu-toggle-icon">
                            <div class="menu-toggle">
                                <div class="menu">
                                    <input type="checkbox">
                                    <div class="line-menu"></div>
                                    <div class="line-menu"></div>
                                    <div class="line-menu"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="header-wrap">
               	<?php if($r1=='referanslar'){?>
                	<h2 class="header-title ml-0 text-left mr-0"  data-aos-delay="500"> Referanslarımız</h2>
                
               	<?php } if($r1=='iletisim'){?>
                	<h2 class="header-title"  data-aos-delay="500">Bizemle İletişime Geçin</h2>
                
               <?php } if($r1=='moduller'){?>
                	<h2 class="header-title"  data-aos-delay="500">Otomasyon Modülleri</h2>
                
               <?php } if($r1=='giris'){?>
                	<h2 class="header-title"  data-aos-delay="500">Giriş Yap</h2>
                
                
               <?php } if($r1=='hesabim'){?>
                	<h2 class="header-title"  data-aos-delay="500">Hesabım</h2>
                
                <?php } if($r1=='fiyat'){?>
                	<h2 class="header-title"  data-aos-delay="500">Fiyatlarımız</h2>
                
                  <?php } if($r1=='basvuru'){?>
                	<h2 class="header-title"  data-aos-delay="500">KursCRM Başvuru Formu</h2>
                
                <?php }?>
            </div>
        </div>
        <img class="shape" src="<?php echo $url ?>/assets/images/others/shape2.svg" alt="">
    </header>