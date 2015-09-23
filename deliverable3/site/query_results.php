<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Αποσπάσεις εκπαιδευτικών">
    <meta name="author" content="Stefanos Ougiaroglou">

    <title>@pospaseis</title>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60586269-1', 'auto');
  ga('send', 'pageview');

</script>    

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">@pospaseis</div>
    <div class="address-bar">
    <?php                                
        $conn = new mysqli("userdb","stoug","#", "stoug-db1");                                                                                  						  
        $result2 = $conn->query("SELECT COUNT(*) AS N FROM APOSPASI");
		$row2 = $result2->fetch_assoc();			                
		echo "Υπηρεσια αναζητησης ",$row2['N']," αποσπασεων εκπαιδευτικων";				                
		$conn->close();                                               
        ?>	
   </div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">@pospaseis</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">				
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="open.php?path=apof">Αποφασεις</a>
                    </li>                    
                    <li>
                        <a href="https://github.com/ellak-monades-aristeias/apospaseis">GitHub</a>
                    </li>
                    <li>
                        <a href="info.php">Πληροφοριες</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	 <?php			    
  	   if (!isset($_GET['sub'])){
		 echo "<div class='container'>";
		 echo "<div class='row'><div class='box'><div class='col-lg-12'>";  
	     echo "Παρακαλώ πηγαίνετε στην αρχική οθόνη του @pospasis.gr";		
	     echo "</div></div></div>";	   
	     echo "</div>";
	   }
	   else{
		  $sub = $_GET['sub'];
		  if ($sub != 'Αναζήτηση αποσπάσεων'){
			echo "<div class='container'>";
		  } 
		  else{
		    echo "<div class='container-fluid'>";
		  }			
          $conn = new mysqli("userdb","stoug","#", "stoug-db1");                                                                                  						                                
                          						   
		  $typeforeas = mysqli_real_escape_string($conn, $_GET['type_foreas']);		            
		  $vathmida = mysqli_real_escape_string($conn, $_GET['vathmida']);
		  $klados = mysqli_real_escape_string($conn, $_GET['klados']);					 		    
		  $yearapospasi = mysqli_real_escape_string($conn, $_GET['year_apospasi']);
		  $pou = mysqli_real_escape_string($conn, $_GET['pou']);
		  $mitroo = mysqli_real_escape_string($conn, $_GET['mitroo']);
		  $ln = mysqli_real_escape_string($conn, $_GET['lastname']);
		  $fn = mysqli_real_escape_string($conn, $_GET['firstname']);
		  $organiki = mysqli_real_escape_string($conn, $_GET['organiki']);          	
					      						   	
		  if (($typeforeas!='') || ($vathmida!='') || ($klados!='') || ($yearapospasi!='') || ($pou!='') || ($mitroo!='') || ($ln!='') || ($organiki!='') || ($fn!='')){		  
			 echo "<div class='row'><div class='box'><div class='col-lg-12'>";
			 echo "<p><strong>Αποτελέσματα αναζήτησης για:</strong></p>";
		  }						  
                          
          $arr=buildq($typeforeas, $klados, $vathmida, $yearapospasi, $pou, $mitroo, $ln, $organiki, $fn);
          $pr=$arr[0];
          $where=$arr[1];
                          
	      $pr = substr($pr, 0, strlen($pr)-3);						  
						  
          $conn = new mysqli("userdb","stoug","#", "stoug-db1");                                                                                  						                                
          mysqli_set_charset($conn,"utf8");					      
          $result = $conn->query("SELECT COUNT(*) AS N $where");
		  $row = $result->fetch_assoc();
		  $num_rows = $row['N'];
		  if ($pr!=''){
		     echo "<p class='small'>$pr</p>";								
		     echo "<p><strong>Βρέθηκαν ",$num_rows," αποσπάσεις</strong></p>";
		     echo "</div></div></div>";
		  }			                
          $conn->close();  
  	 
    	 if ($sub == 'Αναζήτηση αποσπάσεων'){
            $conn = new mysqli("userdb","stoug","#", "stoug-db1");                                                                                  						                                                                               						  
            mysqli_set_charset($conn,"utf8");							
		    $sqlcommand = "SELECT AM, LASTNAME, FIRSTNAME, VATHMIDA, KLADOS, APO, NAME, TYPE, YEAR_APOSPASI, COMMENT1, COMMENT2 $where ORDER BY YEAR_APOSPASI, TYPE, NAME";						 
            $result = $conn->query($sqlcommand);

		    echo "<div class='row'><div class='box'>";               
            echo "<div class='col-lg-12'>";
		    echo "<div class='table-responsive'>";        
		    echo "<table class='table table-condensed table-striped table-hover'>";
		    echo "<thead>";
	        echo "<strong>";
	        echo "<th>Απ</th>";	        
	        echo "<th>ΑΜ</th>"; 
            echo "<th>Επώνυμο</th>";
	        echo "<th>Όνομα</th>";
            echo "<th>Β.</th>";
	        echo "<th>Ειδικ.</th>";
	        echo "<th>Οργανική</th>";
	        echo "<th>Τοποθέτηση</th>";
	        echo "<th>Τύπος απόσπασης</th>";
	        echo "<th>Έτος</th>";	
	        echo "<th>Σχ.1</th>";	
	        echo "<th>Σχ.2</th>";
	        echo "</strong>";	
	        echo "</thead>";
		    echo "<tbody>";					
     	     
  	        while ($row = $result->fetch_assoc()) {		
			  echo "<tr>";
              echo "<td class='small'><a href='open.php?path=apof/",$row['YEAR_APOSPASI'],"/",$row['TYPE'],"'><img src=img/f.png></a></td>";																		
		   	  echo "<td class='small'>",$row['AM'],"</td>"; 
			  echo "<td class='small'>",$row['LASTNAME'],"</td>";
			  echo "<td class='small'>",$row['FIRSTNAME'],"</td>";
			  echo "<td class='small'>",$row['VATHMIDA'],"</td>";
			  echo "<td class='small'>",$row['KLADOS'],"</td>";
			  echo "<td class='small'>",$row['APO'],"</td>";
			  echo "<td class='small'>",$row['NAME'],"</td>";
			  echo "<td class='small'>",$row['TYPE'],"</td>";
			  echo "<td class='small'>",$row['YEAR_APOSPASI'],"</td>";																	  
			  echo "<td class='small'>",$row['COMMENT1'],"</td>";														
			  echo "<td class='small'>",$row['COMMENT2'],"</td>";														
			  echo "</tr>";
		    }						
		    echo "</tbody>";
		    echo "</table>";
		    echo "</div>";
		    echo "</div></div></div>";	
		    $conn->close();   				            		 
	     }
	     else{
		    $sql1 = "SELECT YEAR_APOSPASI AS A, COUNT(*) AS N $where GROUP BY YEAR_APOSPASI ORDER BY YEAR_APOSPASI";
		    $sql2 = "SELECT TYPE AS A, COUNT(*) AS N $where GROUP BY TYPE ORDER BY N DESC";
		    $sql3 = "SELECT VATHMIDA AS A, COUNT(*) AS N $where GROUP BY VATHMIDA ORDER BY VATHMIDA";
		    $sql4 = "SELECT KLADOS AS A, COUNT(*) AS N $where GROUP BY KLADOS ORDER BY KLADOS";						
						   
            $conn = new mysqli("userdb","stoug","#", "stoug-db1");                                                                                  						                                                                                						  
            mysqli_set_charset($conn,"utf8");		    
		    echo "<div class='row'><div class='box'>";               
            echo "<div class='col-lg-12 text-center' >";		           
		    printtable("Έτος",$sql1, $conn);
		    printtable("Βαθμίδα",$sql3, $conn);
		    printtable("Ειδικότητα",$sql4, $conn);
		    printtable("Τοποθέτηση",$sql2, $conn);			  
		    echo "</div>";
		    echo "</div></div>";			  
		    $conn->close();          
	    }
	    echo "</div>";
     }
				
     function buildq($typeforeas, $klados, $vathmida, $yearapospasi, $pou, $mitroo, $ln, $organiki, $fn){								
  	     $where = "FROM TEACHER, FOREAS, APOSPASI WHERE ";
		 $pr='';		
		 if ($typeforeas != ""){
			$where = "$where TYPE = '$typeforeas' AND";
			$pr=$pr."Τύπος απόσπασης: ".$typeforeas." | ";
		 }
		 if ($klados != ""){
			$where = "$where KLADOS= '$klados' AND"; 
		    $pr=$pr."Ειδικότητα: ".$klados." | ";
		 }					
		 if ($vathmida != ""){
		    $where = "$where VATHMIDA= '$vathmida' AND"; 
			$pr=$pr."Βαθμίδα: ".$vathmida." | ";
		 }	
		 if ($yearapospasi != ""){
		    $where = "$where YEAR_APOSPASI='$yearapospasi' AND"; 
			$pr=$pr."Έτος: ".$yearapospasi." | ";
		 }
		 if ($organiki != ""){
			$where = "$where APO LIKE '%$organiki%' AND"; 
			$pr=$pr."Οργανική: ".htmlentities($organiki,ENT_QUOTES, "UTF-8")." | ";
		 }						
		 if ($pou != ""){
			$where = "$where NAME LIKE '%$pou%' AND"; 
			$pr=$pr."Φορέας: ".htmlentities($pou,ENT_QUOTES, "UTF-8")." | ";
		 }
		 if ($mitroo != ""){
			$where = "$where AM = '$mitroo' AND"; 
			$pr=$pr."Αρ. Μητρώου: ".htmlentities($mitroo)." | ";
		 }		
		 if ($ln != ""){
			$where = "$where LASTNAME LIKE '%$ln%' AND"; 
			$pr=$pr."Επώνυμο: ".htmlentities($ln,ENT_QUOTES, "UTF-8")." | ";
	 	 }					    
		 if ($fn != ""){
		   	$where = "$where FIRSTNAME LIKE '%$fn%' AND"; 
		    $pr=$pr."Όνομα: ".htmlentities($fn,ENT_QUOTES, "UTF-8")." | ";
		 }						
		 $where = "$where ID = POU_ID AND AM = TAM ";					
		 return array($pr, $where);
	 }	
				

	 function printtable($textfield, $sql, $conn){
		$result = $conn->query($sql);
	    echo "<div class='table-responsive'>";        
		echo "<table class='table table-striped'>";				
		echo "<thead>";
	    echo "<strong>";
		echo "<th colspan=2>Αποσπάσεις ανα $textfield</th>";
		if ($textfield != "Έτος"){						
		   echo "<tr><th class='text-center'>$textfield</th><th class='text-center'>Πλήθος αποσπάσεων</th><tr>";
	    }
	    else{
		   echo "<tr><th class='text-center'>$textfield</th><th class='text-center'>Πλήθος αποσπάσεων</th><th class='text-center'>Αποφάσεις</th><tr>";
		}
	    echo "</strong>";	
	    echo "</thead>";
		echo "<tbody>";				
		$i=0;
		while ($row = $result->fetch_assoc()){
          echo "<tr>";			
          if ($textfield != "Έτος"){								
	         echo "<td width='50%'>",$row['A'],"</td>"; 								
		     echo "<td width='50%'>",$row['N'],"</td>"; 
	      }
	      else{
	         echo "<td width='35%'>",$row['A'],"</td>"; 								
		     echo "<td width='35%'>",$row['N'],"</td>"; 			  
		     echo "<td width='30%'><a href='open.php?path=apof/",$row['A'],"'><img src='img/f.png'></a></td>"; 			  
		  }
		  echo "</tr>";								
		}
		echo "</tbody>";		
		echo "</table>";				
		echo "</div>";									
	 }								
	?>			  
		


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; @pospaseis 2015 - Designed using <a href="http://startbootstrap.com/template-categories/all/">Bootstrap templates</a></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
