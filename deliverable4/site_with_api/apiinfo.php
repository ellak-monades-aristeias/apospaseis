<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Υπηρεσία αναζήτησης αποσπάσεων εκπαιδευτικών">
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
        include("conf.php");                               
        $conn = new mysqli(HOST,USERNAME,DB_PWD, DATABASE);                                                                                  						  
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
                    <li class="small">
                        <a href="index.php">Home</a>
                    </li>
                    <li class="small">
                        <a href="open.php?path=apof">Αρχεια</a>
                    </li>                    
                    <li class="small">
                        <a href="apiinfo.php">API</a>
                    </li>                    
                    <li class="small">
                        <a href="https://github.com/ellak-monades-aristeias/apospaseis">GitHub</a>
                    </li>                    
                    <li class="small">
                        <a href="info.php">Σχετικα</a>
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
                <div class="col-lg-12">
				    <hr>
                    <h2 class="intro-text text-center">
                        <strong>API για τα δεδομενα του @poaspseis</strong>
                    </h2>
                    <hr>	
                    <p><strong>Γενικά</strong></p>
                    <p class="small">								
					Το @pospaseis προσφέρει μια διεπαφή προγραμματισμού εφαρμογής (Application Programming Interface-API) που παρέχει έναν εύχρηστο τρόπο ανάκτησης των αποτελεσμάτων μιας αναζήτησης σε μορφή <a href=https://en.wikipedia.org/wiki/JSON>JSON</a>. Έτσι, To @pospaseis δίνει τη δυνατότητα σε οποιονδήποτε προγραμματιστή να πραγματοποιήσει αναζητήσεις μέσα από την εφαρμογή του ή το site του. 										
					</p><br>
					<p class="small"><strong>Οδηγίες χρήσης του API</strong></p>  					
					<p class="small">
					Το API του @pospaseis ακολουθεί την λογική <a href="https://en.wikipedia.org/wiki/Representational_state_transfer">REST</a>. Ως εκ τούτου, 
					η χρήση του API είναι ιδιαίτερα απλή: Αρκεί κάποιος να κάνει ένα αίτημα http στο script που βρίσκεται στη διεύθυνση:</p>
					<p class="text-center small"><a href="api.php">http://www.apospaseis.eu/api.php</a></p>
					<p class="small">με τις εξής παραμέτρους:
					<br><strong>search_type</strong> (Υποχρεωτική): Η τιμή μπορεί να είναι είτε <i>search</i> είτε <i>statistics</i> και δηλώνει αν ο χρήστης επιθυμεί την ανάκτηση των δεδομένων των αποσπάσεων ή των στατιστικών στοιχείων των αποσπάσεων
					<br><strong>am: </strong> (Προαιρετική): Επιτρέπει την αναζήτηση βάσει του αριθμού μητρώου του εκπαιδευτικού
					<br><strong>lastname: </strong> (Προαιρετική): Επιτρέπει την αναζήτηση βάσει του επώνυμου του εκπαιδευτικού. Η αναζήτηση στη βάση δεδομένων γίνεται με βάση του τελεστή SQL LIKE. Έτσι δεν είναι απαραίτητο το επώνυμο να πληκτρολογηθεί ακριβώς όπως είναι καταχωρημένο στη βάση δεδομένων
					<br><strong>firstname: </strong> (Προαιρετική): Επιτρέπει την αναζήτηση βάσει του ονόματος του εκπαιδευτικού. Η αναζήτηση στη βάση δεδομένων γίνεται με βάση του τελεστή SQL LIKE. Έτσι δεν είναι απαραίτητο το όνομα να πληκτρολογηθεί ακριβώς όπως είναι καταχωρημένο στη βάση δεδομένων
					<br><strong>vathmida: </strong> (Προαιρετική): Παίρνει τιμή είτε ΔΕ είτε ΠΕ δηλώνοντας αν ο εκπαιδευτικός ανήκει στην Δευτεροβάθμια εκπαίδευση ή στην Πρωτοβάθμια. Με αυτό τον τρόπο επιτρέπεται η αναζήτηση βάσει βαθμίδας εκπαίδευσης
					<br><strong>eidikotita: </strong> (Προαιρετική): Επιτρέπει την αναζήτηση βάσει ειδικότητας. Δείτε <a href="http://localhost:8050/apospaseis/query_results.php?type_foreas=&amp;vathmida=&amp;klados=&amp;year_apospasi=&amp;organiki=&amp;pou=&amp;mitroo=&amp;lastname=&amp;firstname=&amp;sub=%CE%91%CE%BD%CE%B1%CE%B6%CE%AE%CF%84%CE%B7%CF%83%CE%B7+%CF%83%CF%84%CE%B1%CF%84%CE%B9%CF%83%CF%84%CE%B9%CE%BA%CF%8E%CE%BD">εδώ</a> τις ειδικότητες των εκπαιδευτικών
					<br><strong>organiki: </strong>	(Προαιρετική): Επιτρέπει την αναζήτηση βάσει της οργανικής θέσης, ή καλύτερα, βάσει του από που μετακινήθηκε ο εκπαιδευτικός στη νέα του θέση. Η αναζήτηση στη βάση δεδομένων γίνεται με βάση του τελεστή SQL LIKE. Έτσι δεν είναι απαραίτητο το πεδίο να πληκτρολογηθεί ακριβώς όπως είναι καταχωρημένο στη βάση δεδομένων
					<br><strong>year_apospasi: </strong> (Προαιρετική): Επιτρέπει την αναζήτηση βάσει σχολικού έτους απόσπασης. Το έτος απόσπασης έχει μορφή  2015-2016
					<br><strong>foreas: </strong> (Προαιρετική): Επιτρέπει την αναζήτηση βάσει του φορέα απόσπασης (που αποσπάσθηκε ο εκπαιδευτικός). Η αναζήτηση στη βάση δεδομένων γίνεται με βάση του τελεστή SQL LIKE. Έτσι δεν είναι απαραίτητο ο φορέας απόσπασης να πληκτρολογηθεί ακριβώς όπως είναι καταχωρημένο στη βάση δεδομένων
					<br><strong>type: </strong> (Προαιρετική): Επιτρέπει την αναζήτηση βάσει του τύπου απόσπασης. Δείτε <a href="http://localhost:8050/apospaseis/query_results.php?type_foreas=&amp;vathmida=&amp;klados=&amp;year_apospasi=&amp;organiki=&amp;pou=&amp;mitroo=&amp;lastname=&amp;firstname=&amp;sub=%CE%91%CE%BD%CE%B1%CE%B6%CE%AE%CF%84%CE%B7%CF%83%CE%B7+%CF%83%CF%84%CE%B1%CF%84%CE%B9%CF%83%CF%84%CE%B9%CE%BA%CF%8E%CE%BD">εδώ</a> τους πιθανούς τύπους απόσπασης					
					
					</p><br>
					<p><strong>Παραδείγματα</strong></p>
					<p class="small"> 					
					Αναζήτηση των αποσπάσεων του έτους 2014-2016 των εκπαιδευτικών πληροφορικής (ΠΕ19-20) που έγιναν στα Πανεπιστήμια-ΤΕΙ<br>
					<a href="api.php?search_type=search&amp;eidikotita=ΠΕ19-20&amp;type=Πανεπιστήμια-ΤΕΙ&amp;year_apospasi=2015-2016">http://www.apospaseis.eu/api.php?search_type=search&amp;eidikotita=ΠΕ19-20&amp;type=Πανεπιστήμια-ΤΕΙ&amp;year_apospasi=2015-2016</a>
					</p>
					<p class="small">
					Αναζήτηση στατιστικών για τις αποσπάσεις των εκπαιδευτικών πληροφορικής (ΠΕ19-20)<br>
					<a href="api.php?search_type=statistics&amp;eidikotita=ΠΕ19-20">http://www.apospaseis.eu/api.php?search_type=statistics&amp;eidikotita=ΠΕ19-20</a>
					<p class="small">
					Αναζήτηση των αποσπάσεων που έχουν πάρει οι εκπαιδευτικοί με επώνυμο που περιέχει του χαρακτήρες "παδόπουλο"<br>
					<a href="api.php?search_type=search&amp;lastname=παδόπουλο">http://www.apospaseis.eu/api.php?search_type=search&amp;lastname=παδόπουλο</a>
					</p>
					<p class="small">
					Αναζήτηση των αποσπάσεων που έχουν πάρει ο εκπαιδευτικός με αριθμό μητρώου 567891<br>
					<a href="api.php?search_type=search&amp;am=567891">http://www.apospaseis.eu/api.php?search_type=search&amp;am=567891</a>
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
