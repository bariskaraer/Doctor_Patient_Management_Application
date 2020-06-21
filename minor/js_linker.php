<!-- /#wrapper -->
    <!-- jQuery -->
    <script src="<?php echo $url ?>/theme/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $url ?>/theme/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo $url ?>/theme/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo $url ?>/theme/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo $url ?>/theme/js/waves.js"></script>
    <!--Counter js -->
    <script src="<?php echo $url ?>/theme/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="<?php echo $url ?>/theme/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!--Morris JavaScript -->
    <script src="<?php echo $url ?>/theme/plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="<?php echo $url ?>/theme/plugins/bower_components/morrisjs/morris.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $url ?>/theme/js/custom.min.js"></script>
    <script src="<?php echo $url ?>/theme/js/dashboard1.js"></script>
    <script src="<?php echo $url ?>/theme/js/jasny-bootstrap.js"></script>
    
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <!-- Sparkline chart JavaScript -->
    <script src="<?php echo $url ?>/theme/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo $url ?>/theme/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
    <script src="<?php echo $url ?>/theme/plugins/bower_components/toast-master/js/jquery.toast.js"></script>


    <script src="<?php echo $url ?>/theme/js/cbpFWTabs.js"></script>
    <script type="text/javascript">
    (function() {
        [].slice.call(document.querySelectorAll('.sttabs')).forEach(function(el) {
            new CBPFWTabs(el);
        });
    })();
    </script>
    <!--Style Switcher -->
    <script src="<?php echo $url ?>/theme/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    
    <script src="<?php echo $url ?>/theme/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>


    <!-- Calendar JavaScript -->
    <script src="<?php echo $url ?>/theme/plugins/bower_components/calendar/jquery-ui.min.js"></script>
    <script src="<?php echo $url ?>/theme/plugins/bower_components/moment/moment.js"></script>
    <script src="<?php echo $url ?>/theme/plugins/bower_components/calendar/dist/fullcalendar.min.js"></script>
    <!-- <script src="<?php echo $url ?>/theme/plugins/bower_components/calendar/dist/jquery.fullcalendar.js"></script> -->
    


    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });

    </script>

    
        <script src="OneSignalSDKUpdaterWorker.js"></script>
    <script src="OneSignalSDKWorker.js"></script>
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
        

<script>

<?php  if(!empty($_SESSION['wpID'])) {?>

  	
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "f5fe755a-c953-4bab-84d1-f4b5112375be",
    });
	  OneSignal.getUserId(function(userId) {
    console.log("ID:", userId);
    // (Output) OneSignal User ID: 270a35cd-4dda-4b3f-b04e-41d7463a2316    
  });
               
  OneSignal.getUserId().then(function(userId) {
    console.log("ID:", userId);
    // (Output) OneSignal User ID: 270a35cd-4dda-4b3f-b04e-41d7463a2316    
	 
            $(document).ready(function(){
var values = $(this).serialize();

                              

				
var userID = "<?php echo $_SESSION['wpID'] ?>";   
 var webSignalID = userId;								
				
      $.ajax({
        type: "POST",
        url: "<?php echo $url;?>/webSignal",
        data:{'userID': userID,'webSignalID': webSignalID },
      

      });



    
  });
  });
	  
	  
  });
  <?php  } ?>

</script>
    <script type="text/javascript">
    $(document).ready(function() {
        $.toast({
            heading: 'Sağlıklı Bir Gün Dileriz..',
            text: 'Ellerinizi Yıkamayı Unutmayınız :)',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'info',
            hideAfter: 3500,
            stack: 6
        })
    });
    </script>
    <!--Style Switcher -->
    <script src="<?php echo $url ?>/theme/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
<script>
	$(".patient_delete").click(function(){


	  var patient_id = $( "#patient_id" ).val();	 
			
			$.ajax({
				type: "POST",
				url: "<?php echo $url;?>/settings/patient_delete",
				data:{'patient_id': patient_id },
				beforeSend(){

					$("#onayla").text("Bekleyin...");

				},
				success: function(data){
					$("#onayla").text("Tamamlandı");
					$("#onayla").removeAttr("onclick");
					$("#onayla").removeClass("btn-success");
					$("#onayla").addClass("btn-danger");

					var countTotal = Number($('#countTotal').text());
					var countRequest = Number($('#countRequest').text());

					$("#countTotal").text(countTotal-1);
					$("#countRequest").text(countRequest-1);

					 if(data=1){
			            swal("Değişiklik Gerçekleşti.", "", "success");
			            //alert("Organizasyon isteği onaylandı..");
			          }else{
			            swal("Değişiklik Gerçekleşmedi.","", "error");
			          }
			          
		          window.location.replace("<?php echo $url?>/patient/list");
				},
				error:function(){
					alert("Sorun Oluştu");
				}

			});	

});	

      </script>





      <script>
    $(".activity_change").click(function(){
        var patient_id =  $(this).attr("data-id"); 


      //var patient_id = $( "#patient_id" ).val();     
            
            $.ajax({
                type: "POST",
                url: "<?php echo $url;?>/settings/active_change",
                data:{'patient_id': patient_id },
                beforeSend(){

                    $("#onayla").text("Bekleyin...");

                },
                success: function(data){
                    $("#onayla").text("Tamamlandı");
                    $("#onayla").removeAttr("onclick");
                    $("#onayla").removeClass("btn-success");
                    $("#onayla").addClass("btn-danger");

                    var countTotal = Number($('#countTotal').text());
                    var countRequest = Number($('#countRequest').text());

                    $("#countTotal").text(countTotal-1);
                    $("#countRequest").text(countRequest-1);

                     if(data=1){
                        swal("Değişiklik Gerçekleşti.", "", "success");
                        //alert("Organizasyon isteği onaylandı..");
                      }else{
                        swal("Değişiklik Gerçekleşmedi.","", "error");
                      }
                      
                  window.location.replace("<?php echo $url?>/patient/list_passive");
                },
                error:function(){
                    alert("Sorun Oluştu");
                }

            }); 

}); 

      </script>


      <script>
    $(".passive_change").click(function(){
        var patient_id =  $(this).attr("data-id"); 


     // var patient_id = $( "#patient_id" ).val();     
            
            $.ajax({
                type: "POST",
                url: "<?php echo $url;?>/settings/passive_change",
                data:{'patient_id': patient_id },
                beforeSend(){

                    $("#onayla").text("Bekleyin...");

                },
                success: function(data){
                    $("#onayla").text("Tamamlandı");
                    $("#onayla").removeAttr("onclick");
                    $("#onayla").removeClass("btn-success");
                    $("#onayla").addClass("btn-danger");

                    var countTotal = Number($('#countTotal').text());
                    var countRequest = Number($('#countRequest').text());

                    $("#countTotal").text(countTotal-1);
                    $("#countRequest").text(countRequest-1);

                     if(data=1){
                        swal("Değişiklik Gerçekleşti.", "", "success");
                        //alert("Organizasyon isteği onaylandı..");
                      }else{
                        swal("Değişiklik Gerçekleşmedi.","", "error");
                      }
                      
                  window.location.replace("<?php echo $url?>/patient/list");
                },
                error:function(){
                    alert("Sorun Oluştu");
                }

            }); 

}); 

      </script>



      <script>
      $(document).ready(function() {
    
    var drag =  function() {
        $('.calendar-event').each(function() {

        // store data so the calendar knows to render an event upon drop
        $(this).data('event', {
            title: $.trim($(this).text()), // use the element's text as the event title
            stick: true // maintain when user navigates (see docs on the renderEvent method)
        });

        // make the event draggable using jQuery UI
        $(this).draggable({
            zIndex: 1111999,
            revert: true,      // will cause the event to go back to its
            revertDuration: 0  //  original position after the drag
        });
    });
    };
    
    var removeEvent =  function() {
        $('.remove-calendar-event').click(function() {
        $(this).closest('.calendar-event').fadeOut();
        return false;
    });
    };
    
    $(".add-event").keypress(function (e) {
        if ((e.which == 13)&&(!$(this).val().length == 0)) {
            $('<div class="calendar-event">' + $(this).val() + '<a href="javascript:void(0);" class="remove-calendar-event"><i class="ti-close"></i></a></div>').insertBefore(".add-event");
            $(this).val('');
        } else if(e.which == 13) {
            alert('Please enter event name');
        }
        drag();
        removeEvent();
    });
    
    
    drag();
    removeEvent();
    
    var date = new Date();
    var day = date.getDate();
    var month = date.getMonth();
    var year = date.getFullYear();
    
    $('#calendar').fullCalendar({

    		monthNames: ['Ocak','Şubat','Mart','Nisan','Mayıs','Haziran','Temmuz','Ağustos','Eylül','Ekim','Kasım','Aralık'],
    		monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
    		dayNames: ['Pazar','Pazartesi','Salı','Çarşamba','Perşembe','Cuma','Cumartesi'],
    		dayNamesShort: ['Pazar','Pazartesi','Salı','Çarşamba','Perşembe','Cuma','Cumartesi'],


    		<?php 
				
			  $year_ciro=0;
			$query = $db->prepare("SELECT  * from  patients_appointment" );
			$query->execute(array());
			if ( $query->rowCount() ){
			foreach( $query as $row ){
			  
			$date_day_month_year = $row['date_day_month_year'];
			
			
			
			
			
			
			
			?>
            
            
            <?php }} ?>


       
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            editable: false,
            droppable: false, // this allows things to be dropped onto the calendar
            eventLimit: true, // allow "more" link when too many events
            
              <?php 
	              $events = [];
		            $query = $db->prepare("SELECT * FROM patients_appointment where doctor_id=? order by date_time_hour_minute ASC");
					$query->execute(array($_SESSION['wpID']));
					while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
						//$detail = $row['appointment_details']." ".$row['date_time_hour_minute'];
						$detail = $row['date_time_hour_minute'];
					  
					
					   $events[] = ['title' => $detail." ".$row['appointment_details'], 'start' => $row['date_day_month_year'], 'description' => $row['appointment_details']];
					} 
	            ?>
            
            
            events: <?= json_encode($events) ?>
            
        });
    
});

				

      </script>
       

