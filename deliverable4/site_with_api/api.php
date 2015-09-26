

<?php	
   header("Content-type: application/json; charset=utf-8");
   include("conf.php");     		     
   $conn = new mysqli(HOST,USERNAME,DB_PWD, DATABASE);   
   mysqli_set_charset($conn,"utf8");					      
		  
   $sub = mysqli_real_escape_string($conn, $_GET['search_type']);
   $typeforeas = mysqli_real_escape_string($conn, $_GET['type']);		            
   $vathmida = mysqli_real_escape_string($conn, $_GET['vathmida']);
   $klados = mysqli_real_escape_string($conn, $_GET['eidikotita']);					 		    
   $yearapospasi = mysqli_real_escape_string($conn, $_GET['year_apospasi']);
   $pou = mysqli_real_escape_string($conn, $_GET['foreas']);
   $mitroo = mysqli_real_escape_string($conn, $_GET['am']);
   $ln = mysqli_real_escape_string($conn, $_GET['lastname']);
   $fn = mysqli_real_escape_string($conn, $_GET['firstname']);
   $organiki = mysqli_real_escape_string($conn, $_GET['organiki']);          	
					      						   	
   $where=buildq($typeforeas, $klados, $vathmida, $yearapospasi, $pou, $mitroo, $ln, $organiki, $fn);
  	 
   if ($sub == 'search'){
      $sqlcommand = "SELECT AM, LASTNAME, FIRSTNAME, VATHMIDA, KLADOS, APO, NAME, TYPE, YEAR_APOSPASI, COMMENT1, COMMENT2 $where ORDER BY YEAR_APOSPASI, TYPE, NAME";						 
      $result = $conn->query($sqlcommand);
      $apospasiarray[] = array();
     	     
      while ($row = $result->fetch_assoc()) {		
         $apospasiarray[] = $row;
	  }						
      echo json_encode($apospasiarray);
   }
   else if ($sub == 'statistics'){
      $sql1 = "SELECT YEAR_APOSPASI AS A, COUNT(*) AS N $where GROUP BY YEAR_APOSPASI ORDER BY YEAR_APOSPASI";
	  $sql2 = "SELECT TYPE AS A, COUNT(*) AS N $where GROUP BY TYPE ORDER BY N DESC";
	  $sql3 = "SELECT VATHMIDA AS A, COUNT(*) AS N $where GROUP BY VATHMIDA ORDER BY VATHMIDA";
	  $sql4 = "SELECT KLADOS AS A, COUNT(*) AS N $where GROUP BY KLADOS ORDER BY KLADOS";						
						   
	  printtable($sql1, $conn);
	  printtable($sql3, $conn);
	  printtable($sql4, $conn);
	  printtable($sql2, $conn);			  
   }
   $conn->close();          
				
   function buildq($typeforeas, $klados, $vathmida, $yearapospasi, $pou, $mitroo, $ln, $organiki, $fn){								
      $where = "FROM TEACHER, FOREAS, APOSPASI WHERE ";
	  if ($typeforeas != ""){
		$where = "$where TYPE = '$typeforeas' AND";		
	  }
	  if ($klados != ""){
		$where = "$where KLADOS= '$klados' AND"; 
	  }					
	  if ($vathmida != ""){
	     $where = "$where VATHMIDA= '$vathmida' AND"; 
	  }	
	  if ($yearapospasi != ""){
	     $where = "$where YEAR_APOSPASI='$yearapospasi' AND"; 
	  }
	  if ($organiki != ""){
	 	 $where = "$where APO LIKE '%$organiki%' AND"; 
	  }						
	  if ($pou != ""){
	 	 $where = "$where NAME LIKE '%$pou%' AND"; 
	  }
	  if ($mitroo != ""){
	 	 $where = "$where AM = '$mitroo' AND"; 
	  }		
	  if ($ln != ""){
	 	 $where = "$where LASTNAME LIKE '%$ln%' AND"; 
	  }					    
	  if ($fn != ""){
	   	 $where = "$where FIRSTNAME LIKE '%$fn%' AND"; 
	  }						
	  $where = "$where ID = POU_ID AND AM = TAM ";					
	  return $where;
   }	
				

   function printtable($sql, $conn){
 	 $result = $conn->query($sql);
	 $i=0;
	 while ($row = $result->fetch_assoc()){     
        $farray[] = $row;
	 }	
	 echo json_encode($farray);						
   }								
?>			  
		





