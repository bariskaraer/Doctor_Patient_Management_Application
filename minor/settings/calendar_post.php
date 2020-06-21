<?php
    /*
     $stmt = $db->prepare("SELECT patient_id, date_day_month_year FROM patients_appointment");
     
     if($stmt)
     {
       $stmt->execute();
       $stmt->bind_result($patient_id, $date_day_month_year);
       while ($stmt->fetch()) 
       {
            $rows[] = array('title' => $patient_id, 'start' => date('Y-m-d H:i:s', strtotime($date_day_month_year)));
       }
       $stmt->close();
       echo json_encode($rows); 
     } 
     */
?>




<?php
/*
mysql_pconnect("localhost", "root", "") or die("Could not connect");
mysql_select_db("calendar") or die("Could not select database");


$rs = mysql_query("SELECT * FROM events ORDER BY start ASC");
$arr = array();

while($obj = mysql_fetch_object($rs)) {
$arr[] = $obj;
}
echo json_encode($arr);

*/


$query = $db->prepare("SELECT patient_id, date_day_month_year FROM patients_appointment");
$query->execute(array());
$count = 0;
$notifications = array();
while ($row = $query->fetchObject(__CLASS__)) {
  
        $notifications[] = $row;    
      
    }


echo '{"aqArrayi":'.json_encode($notifications).'}';


?>