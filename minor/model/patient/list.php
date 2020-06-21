
   <div class="col-lg-12">
    <div class="white-box">
        <h3 class="box-title m-b-0">Hasta Listesi</h3>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Ad Soyad</th>
                        <th>Telefon Numarası</th>
                        <th>Durumu</th>
                        <th>İncele</th>
                        <th>Pasif Yap</th>
                    </tr>
                </thead>
                <tbody>
                  	
                   <?php 
					$array_where_string = array();
                    $array_where_attribute = array();

                    array_push($array_where_string, "doctor_id","status");
                    array_push($array_where_attribute, $_SESSION['wpID'],1);
                  
				# Inject
				$data= select_patient_with_where_asc($table_patient,$array_where_string,$array_where_attribute);
					
    			foreach($data as $post) { 
      
   
					?>
                    <tr>
                        
                        <td> <?php echo $post['name'] ?> <?php echo $post['surname'] ?></td>
                        <td><?php echo $post['phone'] ?></td>
                        <td>
                            <div class="label label-table label-success">Aktif</div>
                        </td>
                        
                        <td><a href="<?php echo $url ?>/patient/detail/<?php echo base64_encode($post['patient_id']) ?>" class="btn btn-info">İncele</a></td>

                        <td><a data-id="<?php  echo $post['patient_id'] ?>" class="btn btn-info passive_change">Pasiflik</a></td>

                        
                    </tr>
                    <?php  } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>