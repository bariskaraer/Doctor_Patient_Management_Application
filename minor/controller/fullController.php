<?php
// hasta ile ilgili tüm sorgular burada yapılacak. Add, Update, List, Delete :)
	
	function insert_patient($data_table_name,$attributes,$attribute_values){// koşullu hasta ekleme

			include 'inc/conn.php';

			$question_marks="";

			$attribute_string ="";

			for ($i=0; $i < sizeof($attributes); $i++) { 
				
				$attribute_string.=$attributes[$i];

				$question_marks.="?";
				if($i != sizeof($attributes)-1){
					$question_marks.=",";
					$attribute_string.=",";
				}

			}

			$sql_function = "INSERT INTO ".$data_table_name."(".$attribute_string.") values(".$question_marks.")";

			$query_patient = $db->prepare($sql_function);
			$insert_patient=$query_patient->execute($attribute_values);

			if($insert_patient){
				return true;
			}else{
				return false;
			}
	}

	function update_patient($data_table_name,$attributes,$attribute_values,$where_attribute_ar){// koşullu hasta ekleme

			include 'inc/conn.php';


			$attribute_string ="";
			$where_sql ="";
			for ($i=0; $i < sizeof($attributes); $i++) { 
				
				$attribute_string.=$attributes[$i]."=?";
				
				if($i != sizeof($attributes)-1){
					$attribute_string.= " , ";
				}

			}
			
			for ($i=0; $i < sizeof($where_attribute_ar); $i++) { 
				
				$where_sql.= $where_attribute_ar[$i]."=?";
				
				if($i != sizeof($where_attribute_ar)-1){
					$where_sql.= " AND ";
				}

			}

			$sql_function = "UPDATE ".$data_table_name." SET  ".$attribute_string."  WHERE  ".$where_sql;
			

			$query_patient = $db->prepare($sql_function);
			$insert_patient=$query_patient->execute($attribute_values);

			if($insert_patient){
				return true;
			}else{
				return false;
			}
	}


	function select_patient_with_where_asc($data_table_name,$where_string_ar,$where_attribute_ar){ // koşullu hasta listesi

		include 'inc/conn.php';

		$size_where =sizeof($where_string_ar);

		$where_sql ="";

		for ($i=0; $i < $size_where; $i++) { 

			$where_sql.= $where_string_ar[$i]."=?";

			if($i != $size_where-1){
				$where_sql.= " AND ";
			}
			
			
		}

		$sql_string = "SELECT * from ".$data_table_name." where ".$where_sql."order by name asc";


		$patient_select = $db->prepare($sql_string);
		$patient_select->execute($where_attribute_ar);


		if ( $patient_select->rowCount() ){
		$count = 0;
		while ($row = $patient_select->fetch(PDO::FETCH_ASSOC)) {
			
		        $patientList[$count] = $row;
		        $count ++;
		    }
		}
		

        return $patientList;

	}

	function select_patient_with_where($data_table_name,$where_string_ar,$where_attribute_ar){ // koşullu hasta listesi

		include 'inc/conn.php';

		$size_where =sizeof($where_string_ar);

		$where_sql ="";

		for ($i=0; $i < $size_where; $i++) { 

			$where_sql.= $where_string_ar[$i]."=?";

			if($i != $size_where-1){
				$where_sql.= " AND ";
			}
			
			
		}

		$sql_string = "SELECT * from ".$data_table_name." where ".$where_sql;


		$patient_select = $db->prepare($sql_string);
		$patient_select->execute($where_attribute_ar);


		if ( $patient_select->rowCount() ){
		$count = 0;
		while ($row = $patient_select->fetch(PDO::FETCH_ASSOC)) {
			
		        $patientList[$count] = $row;
		        $count ++;
		    }
		}
		

        return $patientList;

	}



	function select_patient_with_where_curdate_equal($data_table_name,$where_string_ar,$where_attribute_ar, $curdate_string){ // koşullu hasta listesi

		include 'inc/conn.php';

		$size_where =sizeof($where_string_ar);

		$where_sql ="";

		for ($i=0; $i < $size_where; $i++) { 

			$where_sql.= $where_string_ar[$i]."=?";

			if($i != $size_where-1){
				$where_sql.= " AND ";
			}
			
			
		}

		$where_sql.= " AND ";
		$where_sql.=  $curdate_string."=CURDATE()";

		$sql_string = "SELECT * from ".$data_table_name." where ".$where_sql;


		$patient_select = $db->prepare($sql_string);
		$patient_select->execute($where_attribute_ar);


		if ( $patient_select->rowCount() ){
		$count = 0;
		while ($row = $patient_select->fetch(PDO::FETCH_ASSOC)) {
			
		        $patientList[$count] = $row;
		        $count ++;
		    }
		}
		

        return $patientList;

	}


	function select_patient_with_where_curdate_less($data_table_name,$where_string_ar,$where_attribute_ar , $curdate_string){ // koşullu hasta listesi

		include 'inc/conn.php';

		$size_where =sizeof($where_string_ar);

		$where_sql ="";

		for ($i=0; $i < $size_where; $i++) { 

			$where_sql.= $where_string_ar[$i]."=?";

			if($i != $size_where-1){
				$where_sql.= " AND ";
			}
			
			
		}

		$where_sql.= " AND ";
		$where_sql.=  $curdate_string."< CURDATE()";

		$sql_string = "SELECT * from ".$data_table_name." where ".$where_sql;


		$patient_select = $db->prepare($sql_string);
		$patient_select->execute($where_attribute_ar);


		if ( $patient_select->rowCount() ){
		$count = 0;
		while ($row = $patient_select->fetch(PDO::FETCH_ASSOC)) {
			
		        $patientList[$count] = $row;
		        $count ++;
		    }
		}
		

        return $patientList;

	}

	function select_patient_with_where_curdate_more($data_table_name,$where_string_ar,$where_attribute_ar , $curdate_string){ // koşullu hasta listesi

		include 'inc/conn.php';

		$size_where =sizeof($where_string_ar);

		$where_sql ="";

		for ($i=0; $i < $size_where; $i++) { 

			$where_sql.= $where_string_ar[$i]."=?";

			if($i != $size_where-1){
				$where_sql.= " AND ";
			}
			
			
		}

		$where_sql.= " AND ";
		$where_sql.=  $curdate_string."> CURDATE()";

		$sql_string = "SELECT * from ".$data_table_name." where ".$where_sql;


		$patient_select = $db->prepare($sql_string);
		$patient_select->execute($where_attribute_ar);


		if ( $patient_select->rowCount() ){
		$count = 0;
		while ($row = $patient_select->fetch(PDO::FETCH_ASSOC)) {
			
		        $patientList[$count] = $row;
		        $count ++;
		    }
		}
		

        return $patientList;

	}


	function select_patient($data_table_name){ // koşulsuz hasta listesi

		include 'inc/conn.php';

		$sql_string = "SELECT * from ".$data_table_name." ";

		$patient_select = $db->prepare($sql_string);
		$patient_select->execute();

		if ( $patient_select->rowCount() ){
		$count = 0;
		while ($row = $patient_select->fetch(PDO::FETCH_ASSOC)) {
			
		        $patientList[$count] = $row;
		        $count ++;
		    }
		}
		
        return $patientList;

	}
	function select_patient_with_limit($data_table_name){ // koşulsuz hasta listesi

		include 'inc/conn.php';

		$sql_string = "SELECT * from ".$data_table_name." order by patient_id DESC LIMIT 5 ";

		$patient_select = $db->prepare($sql_string);
		$patient_select->execute();

		if ( $patient_select->rowCount() ){
		$count = 0;
		while ($row = $patient_select->fetch(PDO::FETCH_ASSOC)) {
			
		        $patientList[$count] = $row;
		        $count ++;
		    }
		}
		
        return $patientList;

	}

	function count_total_patient($data_table_name){ // toplam hasta sayısı

		include 'inc/conn.php';

			$product = $db->query("SELECT * from ".$data_table_name." ");
			$kayit = $product->rowCount();

		return $kayit;

	}


		function count_total_patientsssss($data_table_name,$wp_id){ // toplam hasta sayısı

		include 'inc/conn.php';

			$product = $db->query("SELECT * from ".$data_table_name."where doctor_id= ".$wp_id." ");
			$kayit = $product->rowCount();

		return $kayit;

	}
	


	function select_patient_with_where_profile_randevu($data_table_name,$where_string_ar,$where_attribute_ar){ // koşullu hasta listesi

		include 'inc/conn.php';

		$size_where =sizeof($where_string_ar);

		$where_sql ="";

		for ($i=0; $i < $size_where; $i++) { 

			$where_sql.= $where_string_ar[$i]."=?";

			if($i != $size_where-1){
				$where_sql.= " AND ";
			}
			
			
		}

		$sql_string = "SELECT * from ".$data_table_name." where ".$where_sql." order by date_day_month_year asc";


		$patient_select = $db->prepare($sql_string);
		$patient_select->execute($where_attribute_ar);


		if ( $patient_select->rowCount() ){
		$count = 0;
		while ($row = $patient_select->fetch(PDO::FETCH_ASSOC)) {
			
		        $patientList[$count] = $row;
		        $count ++;
		    }
		}
		

        return $patientList;

	}
	
	
	
?>