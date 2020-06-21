<div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                        <!-- /input-group -->
                    </li>
                    <li class="user-pro">
                        <a href="#" class="waves-effect"><span class="hide-menu"><?php echo $dt_name ?></span>
                        </a>
                    </li>
                    <!--                     ******************************************************************************************************************************************** -->
                    <li><a href="<?php echo $url ?>/dashboard" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Anasayfa</span></a></li>
                    
                    
                    <li class="nav-small-cap m-t-10">--- Main Hasta İşlemleri</li>
                    
                    <!--                     ******************************************************************************************************************************************** -->
                    <li><a href="inbox.html" class="waves-effect"><i class="ti-user"></i> <span class="hide-menu">Hasta <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo $url ?>/patient/list">Aktif Hasta Listele</a></li>
                            <li><a href="<?php echo $url ?>/patient/list_passive">Pasif Hasta Listele</a></li>
                            <li><a href="<?php echo $url ?>/patient/add">Ekle</a></li>
                           
                            
                        </ul>
                    </li>
<!--                     ******************************************************************************************************************************************** -->
                    
                    <li><a href="inbox.html" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i>  <span class="hide-menu">Randevu <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo $url ?>/interview/list">Haftalık Program</a></li>
                            <li><a href="<?php echo $url ?>/interview/calendar">Ajanda</a></li>
                            <li><a href="<?php echo $url ?>/interview/add">Ekle</a></li>
                           
                            
                        </ul>
                    </li>
<!--                     ******************************************************************************************************************************************** -->


                    <li><a href="inbox.html" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Yapılacaklar <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo $url ?>/todo/list">Listele</a></li>
                            <li><a href="<?php echo $url ?>/todo/add">Ekle</a></li>
                           
                            
                        </ul>
                    </li>
<!--                     ******************************************************************************************************************************************** -->


                    <li><a href="inbox.html" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Tahsilat Raporları <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo $url ?>/reports/list/gecmis">Geçmiş</a></li>
                            <li><a href="<?php echo $url ?>/reports/list/reports">Ödeme Raporları</a></li>
                        </ul>
                    </li>
<!--                     ******************************************************************************************************************************************** -->
                    
                </ul>
            </div>
        </div>