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
				wide: { range: '1200-', containers: 1080, grid: { gutters: 50 } },
				narrow: { range: '481-1199', containers: 1010 },				
			}
		}
		</script>		
		
        <script>
        function checkIfOk(){          
	 	  if (document.getElementById("t6").value == ""){
			  return true;
		  }
          if (isNaN(document.getElementById("t6").value)){
             alert("Ο αριθμός μητρώου εκπαιδευτικού πρέπει να είναι αριθμός!");
             document.getElementById("t6").focus();
             return false;
		  }    
          if (document.getElementById("t6").value.length < 5){
             alert("Ο αριθμός μητρώου εκπαιδευτικού περιλαμβάνει τουλάχιστον 5 αριθμούς!");
             document.getElementById("t6").focus();
             return false;
		  }    		  
          return true;
        }
        function clearAll(){	
           document.frm.type_foreas.value="";
           document.frm.vathmida.value="";
           document.frm.klados.value="";
           document.frm.year_apospasi.value="";   
           document.frm.pou.value="";   
           document.frm.mitroo.value="";   
           document.frm.lastname.value="";
           document.frm.organiki.value="";
           document.frm.firstname.value="";
        }    
        </script>
      

        
        
	</head>
	<body>
		<div id="site_content">			
		    <div class="container">		
					<div class="row">
						<section class="6u">					
							<h1>@pospaseis</h1>							   
							<h2>Υπηρεσία αναζήτησης αποσπάσεων εκπαιδευτικών</h2>
                               <?php                                
                                $conn = new mysqli("userdb","stoug","#46cortu", "stoug-db1");                                                                                  						  
                                $result2 = $conn->query("SELECT COUNT(*) AS N FROM APOSPASI");
				                $row2 = $result2->fetch_assoc();			                
							    echo "<p style='font-size: 9pt;'>",$row2['N']," αποσπάσεις εκπαιδευτικών σε τάξη</p>";				                
				                $conn->close();                                               
                               ?>		
                         </section>
                         <section class="6u">					
							 <center>
							 <a href=https://ma.ellak.gr/><img src="images/ma.jpg" width=110, height=80></a>&nbsp;<a href="https://ellak.gr/"><img src="images/elak.jpg" width=110, height=80></a>&nbsp;<a href="https://www.grnet.gr/"><img src="images/grnet.jpg" width=110, height=80></a>&nbsp;<a href="http://www.digitalplan.gov.gr"><img src="images/ps.jpeg" width=110, height=80></a>
							 <p style='font-size: 7pt;'>To <a href="index.php">@pospaseis</a> αναπτύχθηκε στα πλαίσια του υπο-έργου "Χρηματική Ενίσχυση για έργα ανάπτυξης ΕΛ/ΛΑΚ" του έργου <a href="https://www.grnet.gr/el/ellak">"Ηλεκτρονικές Υπηρεσίες για την Ανάπτυξη και Διάδοση του Ανοιχτού Λογισμικού"</a> που υλοποιείται από την <a href="https://www.grnet.gr/">ΕΔΕΤ Α.Ε.</a></p>
							 </center>
                         </section>							 
					</div>
			</div>	
        </div>
		<!-- Banner -->		
		<div id="banner_wrapper">	
			<div class="container">					
				<div id="banner">		        
                                              
                          <?php                                                   

                          echo "<form name='frm' action='query_results.php' method='GET' onsubmit='return checkIfOk()'>";
                          echo "<table style='margin: 0 auto;' class='table1'>";                          
                          echo "<tr><td colspan=2><h2>Αναζήτηση αποσπάσεων με κριτήρια</h2></td></tr>";
                          
                          $conn = new mysqli("userdb","stoug","#46cortu", "stoug-db1");                                                                                  						                                                                             						  
                          mysqli_set_charset($conn,"utf8");
                          
						  $sqlcommand = "SELECT DISTINCT TYPE FROM FOREAS ORDER BY TYPE";
						  $result = $conn->query($sqlcommand);					      					      
						  echo "<tr><td class=r>Τύπος Απόσπασης:&nbsp;</td>";
                          echo "<td class=l>";
                          echo "<select id=t1 name=type_foreas>";
                          echo "<option value='' SELECTED>Όλες</option>";
                          while ($row = $result->fetch_assoc()){
						       echo "<option value='",$row['TYPE'],"'>",$row['TYPE'],"</option>";
					      }					      
                          echo "</select></td></tr>";

						  $sqlcommand = "SELECT DISTINCT VATHMIDA FROM TEACHER ORDER BY VATHMIDA";
					      $result = $conn->query($sqlcommand);					      
						  echo "<tr><td class=r>Βαθμίδα εκπαίδευσης:&nbsp;</td>";
                          echo "<td class=l>";
                          echo "<select id=t2 name=vathmida>";
                          echo "<option value='' SELECTED>Όλες</option>";
                          while ($row = $result->fetch_assoc()){
						       echo "<option value=",$row['VATHMIDA'],">",$row['VATHMIDA'],"</option>";
					      }					      
                          echo "</select></td></tr>";                          
                          
						  $sqlcommand = "SELECT DISTINCT KLADOS FROM TEACHER ORDER BY KLADOS";
					      $result = $conn->query($sqlcommand);					      
						  echo "<tr><td class=r>Ειδικότητα εκπαιδευτικού:&nbsp;</td>";
                          echo "<td class=l>";
                          echo "<select id=t3 name=klados>";
                          echo "<option value='' SELECTED>Όλες</option>";
                          while ($row = $result->fetch_assoc()){
						       echo "<option value=",$row['KLADOS'],">",$row['KLADOS'],"</option>";
					      }					      
                          echo "</select></td></tr>";                                                    
                          
						  $sqlcommand = "SELECT DISTINCT YEAR_APOSPASI FROM APOSPASI ORDER BY YEAR_APOSPASI";
					      $result = $conn->query($sqlcommand);		      
						  echo "<tr><td class=r>Σχολικό έτος απόσπασης:&nbsp;</td>";
                          echo "<td class=l>";
                          echo "<select id=t4 name=year_apospasi>";
                          echo "<option value='' SELECTED>Όλα</option>";
                          while ($row = $result->fetch_assoc()){
						       echo "<option value=",$row['YEAR_APOSPASI'],">",$row['YEAR_APOSPASI'],"</option>";
					      }					      
                          echo "</select></td></tr>";                                                         

						  echo "<tr><td class=r>Οργανική:&nbsp;</td>";
                          echo "<td class=l>";                          
                          echo "<input id=t8 type=text  name=organiki size=30>";
                          echo "</td></tr>";                           
                          
						  echo "<tr><td class=r>Φορέας απόσπασης/ΠΥΣΠΕ/ΠΥΣΔΕ:&nbsp;</td>";
                          echo "<td class=l>";                          
                          echo "<input id=t5 type=text  name=pou size=30>";
                          echo "</td></tr>";                                                         
                          
                          echo "<tr><td class=r>Αριθμός μητρώου:&nbsp;</td>";
                          echo "<td class=l>";                          
                          echo "<input id=t6 type=text name=mitroo size=6>";
                          echo "</td></tr>";                                                    

                          echo "<tr><td class=r>Επώνυμο:&nbsp;</td>";
                          echo "<td class=l>";                          
                          echo "<input id=t7 type=text name=lastname size=30>";
                          echo "</td></tr>";      
                          
                          echo "<tr><td class=r>Όνομα:&nbsp;</td>";
                          echo "<td class=l>";                          
                          echo "<input id=t11 type=text name=firstname size=30>";
                          echo "</td></tr>";                            
                          
                          echo "<tr><td colspan=2><br><input name=sub type=submit value='Αναζήτηση αποσπάσεων'> <input name=sub type=submit value='Αναζήτηση στατιστικών'> <input type='button' value='Επαναφόρα' onclick='clearAll()'><br><br></td></tr>";
                          
                          $conn->close();          
                          ?>
                          
                          </table>
                   
                          </form>
				
				
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
					           <p>Αποκλειστικά υπεύθυνος για την ανάπτυξη και συντήρηση του @pospaseis είναι ο <a href="http://users.sch.gr/stoug">Στέφανος Ουγιάρογλου</a>, εκπαιδευτικός ΠΕ20. Η υπηρεσία δεν σχετίζεται με κανέναν φορέα.<p>
							   <p> Επισκεφθείτε την σελίδα του έργου στο <a href="https://github.com/ellak-monades-aristeias/apospaseis">GitHub</a></p>    							   
					           <p>Η ανάπτυξη της υπηρεσίας χρηματοδοτήθηκε ως ΕΛ/ΛΑΚ στα πλαίσια του υπο-έργου "Χρηματική Ενίσχυση για έργα ανάπτυξης ΕΛ/ΛΑΚ" του έργου <a href="https://www.grnet.gr/el/ellak">"Ηλεκτρονικές Υπηρεσίες για την Ανάπτυξη και Διάδοση του Ανοιχτού Λογισμικού"</a> που υλοποιείται από την <a href="https://www.grnet.gr/">ΕΔΕΤ Α.Ε.</a>.</p>					  					           
					           <p> Δείτε την πρόταση πoυ έλαβε έγκριση για χρηματοδότηση <a href="protasi.pdf">εδώ</a></p>    
					           <p style="color:'#FFF';">Ε: <a href="mailto:stoug@uom.gr">stoug (at) uom.gr</a></p>						           
					           <p style="color:'#FFF';">Copyright &copy; 2015. Designed using template from <a href="http://css3templates.co.uk">css3templates.co.uk</a></p>				  
							</section>
						</div>
					</section>
					
				</div>
		    </div>
		</div>	 

			
	</body>
</html>
