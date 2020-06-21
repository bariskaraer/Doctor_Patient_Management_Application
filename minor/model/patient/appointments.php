<?php

// panel panel-info   warning   danger success  primary inverse




$attribute_string_randevu=array();
$attribute_value_randevu=array();

array_push($attribute_string_randevu,'patient_id');
array_push($attribute_value_randevu,base64_decode($r3));

$gelen_data_randevu=select_patient_with_where_profile_randevu("patients_appointment",$attribute_string_randevu,$attribute_value_randevu); 




?>





<div class="row">
                    <?php  foreach($gelen_data_randevu as $post) {  ?>

                    <div class="col-lg-4 col-sm-4">
                        <div class="panel panel-info">
                            <div class="panel-heading"> <?php echo $post['date_day_month_year'] ?>  <?php echo $post['date_time_hour_minute'] ?>
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <p><?php echo $post['appointment_details'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php } ?>
</div>