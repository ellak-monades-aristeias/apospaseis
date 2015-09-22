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
        $conn = new mysqli("userdb","stoug","yourpwd", "stoug-db1");                                                                                  						  
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
		            <p align=center>
						To <a href="index.php">@pospaseis</a> αναπτύχθηκε στα πλαίσια του υπο-έργου "Χρηματική Ενίσχυση για έργα ανάπτυξης ΕΛ/ΛΑΚ" του έργου <a href="https://www.grnet.gr/el/ellak">"Ηλεκτρονικές Υπηρεσίες για την Ανάπτυξη και Διάδοση του Ανοιχτού Λογισμικού"</a> που υλοποιείται από την <a href="https://www.grnet.gr/">ΕΔΕΤ Α.Ε.</a> 						
					</p>		            
					<p align=center>
					Επισκεφθείτε την σελίδα του έργου στο <a href="https://github.com/ellak-monades-aristeias/apospaseis">GitHub</a>
					</p>
                </div>
            </div>
        </div>     	
		
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Ομαδα εργου</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-2 col-sm-4" >
                    <img class="img-responsive img-border-left" src="img/stoug.jpg" width=100 alt="">               
                </div>
                <div class="col-md-4 col-sm-8">
                    <p><strong>Στέφανος Ουγιάρογλου</strong></p>    
                    <p>Μηχανικός Πληροφορικής<br>Ph.D. και M.Sc. στην Πληροφορική<br>Εκπαιδευτικός Πληροφορικής (ΠΕ20)</p>
                    <p>W: <a href="http://users.uom.gr/~stoug">http://users.uom.gr/~stoug</a><br>E: <a href="mailto:stoug@uom.gr">stoug (at) uom.gr</a><p>                  
                </div>   
                <div class="col-md-2 col-sm-4">
                    <img class="img-responsive img-border-left" src="img/gevan.jpg" width=105  alt="">
                </div>  
                <div class="col-md-4 col-sm-8">
                    <p><strong>Γεώργιος Ευαγγελίδης</strong></p>    
                    <p>Καθηγητής<br>Τμήμα Εφαρμοσμένης Πληροφορικής<br>Πανεπιστήμιο Μακεδονίας</p>
                    <p>W: <a href="http://users.uom.gr/~gevan">http://users.uom.gr/~gevan</a><br>E: <a href="mailto:gevan@uom.gr">gevan (at) uom.gr</a><p>                       
                </div>      
                <div class="clearfix"></div>
            </div>
        </div>		
		
		
   

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
				    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Πληροφοριες Για το @pospaseis</strong>
                    </h2>
                    <hr>	


              <p><strong>Κίνητρα και συνεισφορά</strong></p>

              <p class='small'>Χιλιάδες εκπαιδευτικοί κάθε χρόνο προσδοκούν μια μετάθεση ώστε να βρεθούν όσο δυνατό πιο κοντά στον τόπο συμφερόντων τους. Ωστόσο, τα τελευταία χρόνια, αυτό συνήθως δεν είναι εφικτό. Ελάχιστοι είναι οι μετατεθέντες κάθε χρόνο ενώ δεν υπάρχουν καθόλου μεταθέσεις σε συγκεκριμένες ειδικότητες. Οι εν λόγω εκπαιδευτικοί στρέφονται προς την προσωρινή λύση της ετήσιας απόσπασης τους είτε σε σχολείο είτε σε κάποιο φορέα του υπουργείου παιδείας στον τόπο συμφερόντων τους. Αν και τα τελευταία χρόνια έχει γίνει προσπάθεια στο να υπάρξει διαφάνεια στη διαδικασία των αποσπάσεων, οι αποσπάσεις εκπαιδευτικών εξακολουθούν να καλύπτονται από ένα "πέπλο" αδιαφάνειας και καχυποψίας.
              
              </p><p class='small' >Σε αντίθεση με τις μεταθέσεις, οι οποίες ανακοινώνονται από το Υπουργείο Πολιτισμού, Παιδείας και Θρησκευμάτων (ΥΠΟΠΑΙΘ) μια φόρα το χρόνο σε ένα ενιαίο αρχείο, οι αποσπάσεις εκπαιδευτικών συνήθως ανακοινώνονται κατά τη διάρκεια του δεύτερου εξάμηνου κάθε έτους μέσω ενός μεγάλου αριθμού αποφάσεων. Ενδεικτικά, σημειώνεται ότι το σχολικό έτος 2014-2015, "ανέβηκαν" στο διαδικτυακό τόπο του ΥΠΟΠΑΙΘ περίπου εξήντα (60) αποφάσεις αποσπάσεων. Ο αντίστοιχος αριθμός για το σχολικό έτος 2013-2014, ήταν μεγαλύτερος από εβδομήντα (70). Ως εκ τούτου, σημαντική πληροφορία αναφορικά με τις αποσπάσεις παραμένει "κρυμμένη" στην πληθώρα αρχείων (doc, pdf, excel) που αναρτώνται στο διαδικτυακό τόπο του ΥΠΟΠΑΙΘ. Το κείμενο στα αρχεία αυτά δεν ακολουθεί συγκεκριμένες προδιαγραφές. Έτσι, το κείμενο κάθε απόφασης είναι διαφορετικό (π.χ. αποφάσεις έχουν πίνακες με ονόματα και άλλες όχι, διαφορετικός τρόπος καταχώρισης της ίδιας έννοιας, αποφάσεις που περιλαμβάνουν τα ονόματα πατρός των εκπαιδευτικών και άλλες που δεν τα περιλαμβάνουν κ.α.)
              
              </p><p class='small'>Το έργο @pospaseis αφορά το σχεδιασμό και την ανάπτυξη μιας διαδικτυακής υπηρεσίας που θα διευκολύνει τους εκπαιδευτικούς στο να ανακαλύψουν αυτή την κρυμμένη πληροφορία προσφέροντας τους μια μηχανή αναζήτησης πολλαπλών κριτηρίων που επιτρέπει την εύκολη πλοήγηση στην πληθώρα των αποφάσεων αποσπάσεων που αναρτώνται στο διαδικτυακό τόπο του ΥΠΟΠΑΙΘ. Με τον τρόπο αυτό, ο επισκέπτης της υπηρεσίας μπορεί να "ανακαλύψει", για παράδειγμα, πόσοι, ποιοι και τι ειδικότητας εκπαιδευτικοί αποσπάστηκαν σε συγκεκριμένο φορέα.
              </p><p class='small'>Επιπρόσθετα, στα πλαίσια του έργου αναπτύχθηκε μια υπηρεσία ιστού (web service) που προσφέρει μια διεπαφή προγραμματισμού εφαρμογών (Application Programming Interface – API) με την οποία επιτρέπεται η ανάκτηση των δεδομένων των αποσπάσεων μέσω αιτημάτων http.
              </p><p class='small'>Εν κατακλείδι, η υπηρεσία έχει ως στόχο το να αποτελέσει ένα εργαλείο για τον εκπαιδευτικό που θα τον διευκολύνει στο να επιλέξει το φορέα ή την περιοχή (ΠΥΣΔΕ, ΠΥΣΠΕ) που θα αιτηθεί απόσπαση. Επίσης, ένας πιο φιλόδοξος στόχος είναι το να συμβάλλει στη διαφάνεια στη διαδικασία των αποσπάσεων.
              </p>
              <p><strong>Χρήστες της Υπηρεσίας</strong></p>

              <p class='small'>H υπηρεσία απευθύνεται κυρίως σε εκπαιδευτικούς καθώς και σε εμπλεκόμενους με θέματα εκπαίδευσης (διοικούντες της εκπαίδευσης, δημοσιογράφοι του εκπαιδευτικού ρεπορτάζ κ.α.). Επίσης, η υπηρεσία απευθύνεται σε προγραμματιστές, αφού μέσω του API της υπηρεσίας, εφαρμογές θα μπορούν να αποκτούν πρόσβαση στα δεδομένα των αποσπάσεων. Με αυτό τον τρόπο, οι αποσπάσεις θα ακολουθούν τη λογική των ανοιχτών δεδομένων (<a href="https://en.wikipedia.org/wiki/Open_data">https://en.wikipedia.org/wiki/Open_data</a>)
              </p> 
              <p><strong>Τεχνολογίες</strong></p>

              <p class='small'>Η υπηρεσία αναπτύχθηκε αξιοποιώντας τεχνολογίες ανοιχτού λογισμικού. Συγκεκριμένα:
              </p><p class='small'>για τη αποθήκευση των δεδομένων σχεδιάστηκε Βάση Δεδομένων (ΒΔ) αξιοποιώντας το σύστημα διαχείρισης ΒΔ MySQL (<a href="https://www.mysql.com/">https://www.mysql.com/</a>).
              </p><p class='small'>για την εισαγωγή των αποσπάσεων παλαιότερων ετών στη ΒΔ, αναπτυχθηκαν PHP scripts.
              </p><p class='small'>για την ανάπτυξη της διεπαφής της υπηρεσίας χρησιμοποιήθηκε η τεχνολογία HTML/CSS. Δόθηκε ιδιαίτερη έμφαση στο πως θα εμφανίζεται το web site σε διαφορετικές συσκευές (υπολογιστές, ταμπλέτες, κινητά τηλέφωνα). Για το λόγω αυτό θα αξιοποιήθηκε η τεχνολογία Bootstrap (<a href="http://getbootstrap.com/">http://getbootstrap.com/</a>)
              </p><p class='small'>για τον προγραμματισμό από την μεριά του εξυπηρετητή (server side programming) χρησιμοποιήθηκε η γλώσσα PHP
              </p><p class='small'>για τον προγραμματισμό από την μεριά του πελάτη (client side programming) χρησιμοποιήθηκε η γλώσσα Java Script
              </p><p class='small'>για την ανάπτυξη του API ακολουθήθηκε η λογική REST (<a href="https://en.wikipedia.org/ wiki/Representational_state_transfer">https://en.wikipedia.org/ wiki/Representational_state_transfer</a>). Τα δεδομένα αποσπάσεων  ανακτώνται σε μορφή XML κατόπιν αποστολής κατάλληλου διαμορφωμένου http αιτήματος
              </p><p class='small'>η υπηρεσία αποτρέπει SQL injections (<a href="https://en.wikipedia.org/wiki/SQL_injection">https://en.wikipedia.org/wiki/SQL_injection</a>) μέσω προχωρημένων τεχνικών προγραμματισμού
              </p><p class='small'>η υπηρεσία παρέχει στατιστικά χρήσης μέσω της υπηρεσίας google analytics (<a href="http://www.google.com/analytics/">http://www.google.com/analytics/</a>)
              </p><p class='small'>η υπηρεσία φιλοξενείται σε υπολογιστή με λειτουργικό σύστημα Linux και με εξυπηρετητή ιστού apache (<a href="http://www.apache.org/">http://www.apache.org/</a>)
              </p>
              <p><strong>Παραδοτέα</strong>
              </p><p class='small'><strong>Π1</strong> Μελέτη που περιλαμβάνει τη διερεύνηση απαιτήσεων, τεκμηρίωση της σχεδίασης της υπηρεσίας και τις τεχνικές προδιαγραφές
              </p><p class='small'><strong>Π2</strong> Βάση δεδομένων με τις αποσπάσεις τεσσάρων (4) παλαιότερων σχολικών ετών
              </p><p class='small'><strong>Π3</strong> Υπηρεσία: Κώδικας της βασικής υπηρεσίας (web site και μηχανισμοί τροφοδότησης της ΒΔ με δεδομένα αποσπάσεων)
              </p><p class='small'><strong>Π4</strong> API: Κώδικας API με την κατάλληλη τεκμηρίωση και οδηγίες χρήσης του API
              </p><p class='small'><strong>Π5</strong> Εργασία που πρόκείται να υποβληθεί προς κρίση σε συνέδριο. Η εργασία θα αφορά την παρουσίαση του έργου
              </p>
    
              <p><strong>Προωθητικές ενέργειες</strong>
              </p><p class='small'>καταχώρηση domain name και δημοσίευση της υπηρεσίας στο διαδίκτυο
              </p><p class='small'>Ανάρτηση των παραδοτέων στο διαδίκτυο
              </p><p class='small'>Συμμετοχή σε συνέδριο με εργασία που θα αφορά την παρουσίαση της υπηρεσίας
              </p><p class='small'>Προώθηση της υπηρεσίας σε διαδικτυακούς τόπους εκπαιδευτικού ρεπορτάζ, κοινωνικά δίκτυα κ.α.
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
