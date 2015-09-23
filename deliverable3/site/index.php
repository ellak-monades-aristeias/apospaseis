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
    
    
    <div class="container">
    <div class="row">
    <div class="box">
                
    <?php                                                   
     echo "<form name='frm' action='query_results.php' method='GET' onsubmit='return checkIfOk()'>";
                             
     echo "<div class='col-lg-12'><hr><h2 class='intro-text text-center'><strong>Αναζητηση αποσπασεων με κριτηρια</strong></h2><hr></div>";
     $conn = new mysqli("userdb","stoug","#", "stoug-db1");                                                                                  						                                                                             						  
     mysqli_set_charset($conn,"utf8");
                          
	 $sqlcommand = "SELECT DISTINCT TYPE FROM FOREAS ORDER BY TYPE";
     $result = $conn->query($sqlcommand);					      					      
     echo "<div class='col-md-4 text-right'><label>Τύπος Απόσπασης:</label></div>";
     echo "<div class='col-md-8'>";
     echo "<select id=t1 name=type_foreas class='form-control'>";
     echo "<option value='' SELECTED>Όλες</option>";
     while ($row = $result->fetch_assoc()){
        echo "<option value='",$row['TYPE'],"'>",$row['TYPE'],"</option>";
     }					      
     echo "</select></div>";
     
     $sqlcommand = "SELECT DISTINCT VATHMIDA FROM TEACHER ORDER BY VATHMIDA";
	 $result = $conn->query($sqlcommand);					      
	 echo "<div class='col-md-4 text-right'><label>Βαθμίδα εκπαίδευσης:</label></div>";
     echo "<div class='col-md-8'>";
     echo "<select id=t2 name=vathmida class='form-control'>";
     echo "<option value='' SELECTED>Όλες</option>";
     while ($row = $result->fetch_assoc()){
	   echo "<option value=",$row['VATHMIDA'],">",$row['VATHMIDA'],"</option>";
	 }					      
     echo "</select></div>";                          
                          
     $sqlcommand = "SELECT DISTINCT KLADOS FROM TEACHER ORDER BY KLADOS";
	 $result = $conn->query($sqlcommand);					      
	 echo "<div class='col-md-4 text-right'><label>Ειδικότητα εκπαιδευτικού:</label></div>";
     echo "<div class='col-md-8'>";
     echo "<select id=t3 name=klados class='form-control'>";
     echo "<option value='' SELECTED>Όλες</option>";
     while ($row = $result->fetch_assoc()){
		echo "<option value=",$row['KLADOS'],">",$row['KLADOS'],"</option>";
	 }					      
     echo "</select></div>";                                                    
                          
	 $sqlcommand = "SELECT DISTINCT YEAR_APOSPASI FROM APOSPASI ORDER BY YEAR_APOSPASI";
	 $result = $conn->query($sqlcommand);		      
	 echo "<div class='col-md-4 text-right'><label>Σχολικό έτος απόσπασης:</label></div>";
     echo "<div class='col-md-8'>";
     echo "<select id=t4 name=year_apospasi class='form-control'>";
     echo "<option value='' SELECTED>Όλα</option>";
     while ($row = $result->fetch_assoc()){
	   echo "<option value=",$row['YEAR_APOSPASI'],">",$row['YEAR_APOSPASI'],"</option>";
	 }					      
     echo "</select></div>";                                                        

	 echo "<div class='col-md-4 text-right'><label>Οργανική θέση εκπαιδευτικού:</label></div>";
     echo "<div class='col-md-8'>";                        
     echo "<input id=t8 type=text  name=organiki class='form-control'>";
     echo "</div>";                           
                          
	 echo "<div class='col-md-4 text-right'><label>Φορέας απόσπασης/ΠΥΣΠΕ/ΠΥΣΔΕ:</label></div>";
     echo "<div class='col-md-8'>";                          
     echo "<input id=t5 type=text  name=pou class='form-control'>";
     echo "</div>";                                                        
                          
     echo "<div class='col-md-4 text-right'><label>Αριθμός μητρώου εκπαιδευτικού:</label></div>";
     echo "<div class='col-md-8'>";                        
     echo "<input id=t6 type=text name=mitroo class='form-control'>";
     echo "</div>";                                                    

     echo "<div class='col-md-4 text-right'><label>Επώνυμο εκπαιδευτικού:</label></div>";
     echo "<div class='col-md-8'>";                     
     echo "<input id=t7 type=text name=lastname class='form-control'>";
     echo "</div>";     
                          
     echo "<div class='col-md-4 text-right'><label>Όνομα εκπαιδευτικού:</label></div>";
     echo "<div class='col-md-8'>";                             
     echo "<input id=t11 type=text name=firstname class='form-control'>";
     echo "</div>";         
     echo "<div class='col-lg-12 text-center'><hr><input name=sub type=submit value='Αναζήτηση αποσπάσεων' class='btn btn-default'><input name=sub type=submit value='Αναζήτηση στατιστικών' class='btn btn-default'><input type='button' value='Επαναφόρα' class='btn btn-default' onclick='clearAll()'></div>";
     echo"</form>";
                          
     $conn->close();          
     ?>     
     </div>      
     </div>

     <div class="row">
        <div class="box">
           <div class="col-lg-12">
              <hr>
              <h2 class="intro-text text-center">
                 <strong>Ανακοινωσεις</strong>
              </h2>
              <hr> 
           </div>                     
            <?php                                
             $conn = new mysqli("userdb","stoug","#", "stoug-db1");                                                                                  						      
             mysqli_set_charset($conn,"utf8");
             $result2 = $conn->query("SELECT * FROM ANAK ORDER BY D DESC");
             while ($row = $result2->fetch_assoc()){
	            echo "<div class='col-lg-2 text-right'><strong>",$row['HM'],": </strong></div>";		
	            echo "<div class='col-lg-10'>",$row['KEIMENO'],"</div>";		
	         }		                
	         $conn->close();                                               
             ?>           
        </div>
     </div>

     <div class="row text-center" >
        <div class="box">
           <div class="col-sm-3 col-xs-6">					
              <a href=https://ma.ellak.gr/>
                 <img src="img/ma.jpg" width=140, height=100>
              </a>
           </div>   
           <div class="col-sm-3 col-xs-6">					
              <a href="https://ellak.gr/">
			     <img src="img/elak.jpg" width=140, height=100>
			  </a>
		   </div>	
		   <div class="col-sm-3 col-xs-6">					
			  <a href="https://www.grnet.gr/">
				 <img src="img/grnet.jpg" width=140, height=100>
			  </a>
		   </div>	
		   <div class="col-sm-3 col-xs-6">					
			   <a href="http://www.digitalplan.gov.gr">
				  <img src="img/ps.jpeg" width=140, height=100>
			   </a>
			</div>
			<div class="col-lg-12">						
		       <p class='small' align=center>
			      To <a href="index.php">@pospaseis</a> αναπτύχθηκε στα πλαίσια του 
				  υπο-έργου "Χρηματική Ενίσχυση για έργα ανάπτυξης ΕΛ/ΛΑΚ" του έργου 
				  <a href="https://www.grnet.gr/el/ellak">"Ηλεκτρονικές Υπηρεσίες για 
				  την Ανάπτυξη και Διάδοση του Ανοιχτού Λογισμικού"</a> που υλοποιείται 
				  από την <a href="https://www.grnet.gr/">ΕΔΕΤ Α.Ε.</a> Επισκεφθείτε 
				  την σελίδα του έργου στο <a href="https://github.com/ellak-monades-aristeias/apospaseis">GitHub</a>
			   </p>		            
            </div>
        </div>
     </div>  
    
    </div>            
    <!-- /.container -->

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
