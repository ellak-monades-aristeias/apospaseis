<!DOCTYPE HTML>
<html>
	<head>
		<title>@pospaseis</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
				
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60586269-1', 'auto');
  ga('send', 'pageview');

</script>
        				
		<script src="js/skel.min.js">
		{
			prefix: 'css/style',
			preloadStyleSheets: true,
			resetCSS: true,
			boxModel: 'border',
			grid: { gutters: 30 },
			breakpoints: {
				wide: { range: '1200-', containers: 1160, grid: { gutters: 50 } },
				narrow: { range: '481-1199', containers: 1130 },				
			}
		}
		</script>	
	
	</head>

	
	
	
	
	<body>
		<div id="header_container">		
		    <div class="container">	
			<!-- Header -->						
				<div id="header" class="row">
					<div class="4u">
						<div class="transparent">
							<h1><a href="index.php"><span class="header_colour">@pospaseis</span></a></h1>
                               <?php                                
                                $conn = new mysqli("userdb","stoug","#46cortu", "stoug-db1");                                                                                  						         
                                $result2 = $conn->query("SELECT COUNT(*) AS N FROM APOSPASI");
				                $row2 = $result2->fetch_assoc();			                
							    echo "<p style='font-size: 9pt;'>",$row2['N']," αποσπάσεις εκπαιδευτικών σε τάξη</p>";				                
				                $conn->close();                                               
                               ?>								
					    </div>					    
					</div>	
										
					<nav id="main-nav" class="8u">
			           <?php			    
  		               if (!isset($_GET['sub'])){
		                  echo "Παρακαλώ πηγαίντε στην αρχική οθόνη του @pospasis.gr";		            
		               }
		               else{
                          $conn = new mysqli("userdb","stoug","#46cortu", "stoug-db1");                                                                                  						                                
                          						   
					      $typeforeas = mysqli_real_escape_string($conn, $_GET['type_foreas']);		            
					      $vathmida = mysqli_real_escape_string($conn, $_GET['vathmida']);
					      $klados = mysqli_real_escape_string($conn, $_GET['klados']);					 		    
					      $yearapospasi = mysqli_real_escape_string($conn, $_GET['year_apospasi']);
					      $pou = mysqli_real_escape_string($conn, $_GET['pou']);
					      $mitroo = mysqli_real_escape_string($conn, $_GET['mitroo']);
					      $ln = mysqli_real_escape_string($conn, $_GET['lastname']);
					      $fn = mysqli_real_escape_string($conn, $_GET['firstname']);
					      $organiki = mysqli_real_escape_string($conn, $_GET['organiki']);
					      $sub = $_GET['sub'];							   	
						  if (($typeforeas!='') || ($vathmida!='') || ($klados!='') || ($yearapospasi!='') || ($pou!='') || ($mitroo!='') || ($ln!='') || ($organiki!='') || ($fn!='')){
							  echo "<h1>Αποτελέσματα αναζήτησης για:</h1>";
						  }						  
                          
                          $arr=buildq($typeforeas, $klados, $vathmida, $yearapospasi, $pou, $mitroo, $ln, $organiki, $fn);
                          $pr=$arr[0];
                          $where=$arr[1];
                          
						  $pr = substr($pr, 0, strlen($pr)-3);						  
						  
                          $conn = new mysqli("userdb","stoug","#46cortu", "stoug-db1");                                                                                  						                                
                          mysqli_set_charset($conn,"utf8");					      
                          $result = $conn->query("SELECT COUNT(*) AS N $where");
				          $row = $result->fetch_assoc();
				          $num_rows = $row['N'];
						  if ($pr!=''){
						     echo "<p>$pr</p>";								
						     echo "<p>Βρέθηκαν ",$num_rows," αποσπάσεις</p>";
						  }			                
				          $conn->close();  
		              }
		              				
					  ?>
					</nav>											
				</div>				
			</div>	
        </div>
		<!-- Banner -->		
		<div id="banner_wrapper">	
			<div class="container">					
				<div id="banner">
				
				<font color=black>	
													
		        
			    <?php
			    
		        if (!isset($_GET['sub'])){
		            echo "Παρακαλώ πηγαίντε στην αρχική οθόνη του @pospasis.gr";		            
		         }
		         else{	
							            
   			        if ($sub == 'Αναζήτηση αποσπάσεων'){
                       $conn = new mysqli("userdb","stoug","#46cortu", "stoug-db1");                                                                                  						                                                                               						  
                       mysqli_set_charset($conn,"utf8");							
					   $sqlcommand = "SELECT AM, LASTNAME, FIRSTNAME, VATHMIDA, KLADOS, APO, NAME, TYPE, YEAR_APOSPASI, COMMENT1, COMMENT2 $where ORDER BY YEAR_APOSPASI, TYPE, NAME";						 
                       $result = $conn->query($sqlcommand);
				       
					   echo "<br><table width=99%  class='table2'><tr class='ep'>";
					   echo "<td width='2%'>&nbsp;ΑΜ&nbsp;</td>"; 
					   echo "<td width='7%'>&nbsp;Επώνυμο&nbsp;</td>";
					   echo "<td width='7%'>&nbsp;Όνομα&nbsp;</td>";
					   echo "<td width='3%'>&nbsp;ΠΕ/ΔΕ&nbsp;</td>";
					   echo "<td width='3%'>&nbsp;Ειδικ.&nbsp;</td>";
					   echo "<td width='10%'>&nbsp;Οργανική&nbsp;</td>";
					   echo "<td width='33%'>&nbsp;Τοποθέτηση&nbsp;</td>";
					   echo "<td width='20%'>&nbsp;Τύπος απόσπασης&nbsp;</td>";
					   echo "<td width='3%'>&nbsp;Έτος&nbsp;</td>";	
					   echo "<td width='10%'>&nbsp;Σχ.1&nbsp;</td>";	
					   echo "<td width='2%'>&nbsp;Σχ.2&nbsp;</td></tr>";	
					
					   $i=0;	
					   while ($row = $result->fetch_assoc()) {										
						 $i++;
						 if (($i%2)==0){
						   echo "<tr bgcolor='#E4F1F7'>";
					     }
						 else{
						   echo "<tr bgcolor=white>";
						 }   
						 echo "<td>&nbsp;",$row['AM'],"&nbsp;</td>"; 
						 echo "<td>&nbsp;",$row['LASTNAME'],"&nbsp;</td>";
						 echo "<td>&nbsp;",$row['FIRSTNAME'],"&nbsp;</td>";
						 echo "<td>&nbsp;",$row['VATHMIDA'],"&nbsp;</td>";
						 echo "<td>&nbsp;",$row['KLADOS'],"&nbsp;</td>";
						 echo "<td>&nbsp;",$row['APO'],"&nbsp;</td>";
						 echo "<td>&nbsp;",$row['NAME'],"&nbsp;</td>";
						 echo "<td>&nbsp;",$row['TYPE'],"&nbsp;</td>";
						 echo "<td>&nbsp;",$row['YEAR_APOSPASI'],"&nbsp;</td>";														
						 echo "<td>&nbsp;",$row['COMMENT1'],"&nbsp;</td>";														
						 echo "<td>&nbsp;",$row['COMMENT2'],"&nbsp;</td>";														
						 echo "</tr>";
					   }						
					   echo "</table><br>";
					   $conn->close();   				            
					}
					else{
					   $sql1 = "SELECT YEAR_APOSPASI AS A, COUNT(*) AS N $where GROUP BY YEAR_APOSPASI ORDER BY YEAR_APOSPASI";
					   $sql2 = "SELECT TYPE AS A, COUNT(*) AS N $where GROUP BY TYPE ORDER BY N DESC";
					   $sql3 = "SELECT VATHMIDA AS A, COUNT(*) AS N $where GROUP BY VATHMIDA ORDER BY VATHMIDA";
					   $sql4 = "SELECT KLADOS AS A, COUNT(*) AS N $where GROUP BY KLADOS ORDER BY KLADOS";						
						   
                       $conn = new mysqli("userdb","stoug","#46cortu", "stoug-db1");                                                                                  						                                                                                						  
                       mysqli_set_charset($conn,"utf8");
					   printtable("Έτος",$sql1, $conn);
					   printtable("Βαθμίδα",$sql3, $conn);
					   printtable("Ειδικότητα",$sql4, $conn);
					   printtable("Τοποθέτηση",$sql2, $conn);	
					   echo "<br>";
					   $conn->close();          
					}
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
							
					echo "<br><table width=80% class='table3'><tr class='ep'>";
					echo "<td colspan=2 style='color:#FFF';>Αποσπάσεις ανα $textfield</td>";
					echo "</tr>";						
					echo "<tr class='ep'><td width='50%'>$textfield</td><td width='50%'>Πλήθος αποσπάσεων</td><tr>";
					$i=0;
					while ($row = $result->fetch_assoc()){
						$i++;
						if (($i%2)==0){
						   echo "<tr bgcolor='#E4F1F7'>";
					    }
						else{
						   echo "<tr bgcolor=white>";
						}   
						echo "<td>&nbsp;",$row['A'],"&nbsp;</td>"; 								
						echo "<td>&nbsp;",$row['N'],"&nbsp;</td>"; 
						echo "</tr>";								
					}
					echo "</table>";											
				}				
				
				?>	
				
				</font>	

				</div>	
            </div>	
        </div>			

		<div id="site_content">		
			<div class="container">			
				
			<!-- Features -->
				<div class="row">
					<section class="8u">
						<h2>Νέα-Ανακοινώσεις</h2>
                               <?php                                
                                $conn = new mysqli("userdb","stoug","#46cortu", "stoug-db1");                                                                                  						  
                                mysqli_set_charset($conn,"utf8");
                                $result2 = $conn->query("SELECT * FROM ANAK ORDER BY D DESC");
                                while ($row = $result2->fetch_assoc()){
							       echo "<p>",$row['HM'],"<br>";		
							       echo "",$row['KEIMENO'],"</p>";		
							    }		                
				                $conn->close();                                               
                               ?>	
					</section>
					
					<section class="4u">
						<div id="sidebar">
							<section class="12u">
								<h3>Πληροφορίες</h3>
							</section>
							<section class="12u">
					           <p>Υπεύθυνος για την ανάπτυξη και συντήρηση του @pospaseis είναι ο <a href="http://users.sch.gr/stoug">Στέφανος Ουγιάρογλου</a>, εκπαιδευτικός ΠΕ20. Η υπηρεσία δε σχετίζεται με κανέναν φορέα.</p>					  
					           <p style="color:'#FFF';">Ε: <a href="mailto:stoug@sch.gr">stoug (at) sch.gr</a></p>	
					           <p style="color:'#FFF';">Copyright &copy; 2015 Stefanos Ougiaroglou. Designed using template from <a href="http://css3templates.co.uk">css3templates.co.uk</a></p>				  
							</section>
						</div>
					</section>
					
				</div>
		    </div>
		</div>	   

			
	</body>
</html>
