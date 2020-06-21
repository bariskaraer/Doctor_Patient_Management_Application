 <ul class="menu">
    <li><a href="<?php echo $url ?>">Anasayfa</a> </li>
    <li><a href="course.html">Kurslar</a>
        <ul class="sub-menu">
	        
	           <?php
				$query = $db->prepare("SELECT * from category ");
				$query->execute(array());
				if ( $query->rowCount() ){
				foreach( $query as $row ){

					$course_id=$row['course_id'];
					$category=$row['category'];

				?>
	        
            <li class="menu-item"><a href="course.html">Course</a></li>
            <?php }} ?>
            
            
        </ul><!-- sub-menu -->
    </li>
    <li><a href="<?php echo $url ?>/iletisim">İletişim</a></li>
    <li><a href="#">Degrees</a> </li>
    <li class="nav-sing">
        <a target="_blank" class="sing-up" href="https://www.kurscrm.com/ogrenci-giris">Öğrenci Girişi</a>
    </li>
</ul>
