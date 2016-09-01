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
		
        <div class="row text-center" >
            <div class="box">
                <div class="col-sm-4 col-xs-4">					
                    <a href=https://ma.ellak.gr/>
                       <img src="img/ma.jpg" alt="ma" width=140 height=100>
                    </a>
                 </div>   
				 <div class="col-sm-4 col-xs-4">					
					<a href="https://www.grnet.gr/">
						<img src="img/grnet.jpg" alt="grnet" width=140 height=100>
					</a>
				 </div>	
				 <div class="col-sm-4 col-xs-4">					
					<a href="http://www.digitalplan.gov.gr">
						<img src="img/ps.jpeg" alt="digitalplan" width=140 height=100>
					</a>
				 </div>
				 <div class="col-lg-12">						
		            <p class="text-center">
						To <a href="index.php">@pospaseis</a> αναπτύχθηκε στα πλαίσια του υπο-έργου "Χρηματική Ενίσχυση για έργα ανάπτυξης ΕΛ/ΛΑΚ" του έργου <a href="https://www.grnet.gr/el/ellak">"Ηλεκτρονικές Υπηρεσίες για την Ανάπτυξη και Διάδοση του Ανοιχτού Λογισμικού"</a> που υλοποιείται από την <a href="https://www.grnet.gr/">ΕΔΕΤ Α.Ε.</a> 						
					</p>		            
					<p class="text-center">
					Επισκεφθείτε την σελίδα του έργου στο <a href="https://github.com/ellak-monades-aristeias/apospaseis">GitHub</a>
					</p>
                </div>
            </div>
        </div>     	
		
        <div class="row">
            <div class="box">
                <div class="col-xs-12">
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
                <div class="col-xs-12 text-center">
                    <p>Ευχαριστούμε τον <a href="http://vbanos.gr/%CE%B1%CF%81%CF%87%CE%B9%CE%BA%CE%AE-%CF%83%CE%B5%CE%BB%CE%AF%CE%B4%CE%B1/">Βαγγέλη Μπάνο</a> για την πολύτιμη βοήθεια του</p>
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

              <p class='small'>Χιλιάδες εκπαιδευτικοί κάθε χρόνο προσδοκούν μια μετάθεση ώστε να βρεθούν όσο δυνατό πιο κοντά στον τόπο συμφερόντων τους. Ωστόσο, τα τελευταία χρόνια, αυτό συνήθως δεν είναι εφικτό. Ελάχιστοι είναι οι μετατεθέντες κάθε χρόνο ενώ δεν υπάρχουν καθόλου μεταθέσεις σε συγκεκριμένες ειδικότητες. Οι εν λόγω εκπαιδευτικοί στρέφονται προς την προσωρινή λύση της ετήσιας απόσπασης τους είτε σε σχολείο είτε σε κάποιο φορέα του Υπουργείου Παιδείας Έρευνας και Θρησκευμάτων (ΥΠΠΑΙΘ) στον τόπο συμφερόντων τους. Αν και τα τελευταία χρόνια έχει γίνει προσπάθεια στο να υπάρξει διαφάνεια στη διαδικασία των αποσπάσεων, οι αποσπάσεις εκπαιδευτικών εξακολουθούν να καλύπτονται από ένα "πέπλο" αδιαφάνειας και καχυποψίας.
              
              </p><p class='small' >Σε αντίθεση με τις μεταθέσεις, οι οποίες ανακοινώνονται από το ΥΠΠΑΙΘ μια φόρα το χρόνο σε ένα ενιαίο αρχείο, οι αποσπάσεις εκπαιδευτικών συνήθως ανακοινώνονται κατά τη διάρκεια του δεύτερου εξάμηνου κάθε έτους μέσω ενός μεγάλου αριθμού αποφάσεων. Ενδεικτικά, σημειώνεται ότι το σχολικό έτος 2014-2015, "ανέβηκαν" στο διαδικτυακό τόπο του υπουργείου περίπου εξήντα (60) αποφάσεις αποσπάσεων. Ο αντίστοιχος αριθμός για το σχολικό έτος 2013-2014, ήταν μεγαλύτερος από εβδομήντα (70). Ως εκ τούτου, σημαντική πληροφορία αναφορικά με τις αποσπάσεις παραμένει “κρυμμένη” στην πληθώρα αρχείων (doc, pdf, excel) που αναρτώνται στο διαδικτυακό τόπο του ΥΠΠΑΙΘ. Το περιεχόμενο στα αρχεία αυτά δεν ακολουθεί συγκεκριμένες προδιαγραφές. Έτσι, το κείμενο κάθε απόφασης είναι διαφορετικό (π.χ. αποφάσεις που έχουν πίνακες με ονόματα και άλλες όχι, διαφορετικός τρόπος καταχώρισης της ίδιας έννοιας, αποφάσεις που περιλαμβάνουν τα ονόματα πατρός των εκπαιδευτικών και άλλες που δεν τα περιλαμβάνουν κ.α.)
              
              </p><p class='small'>Οι παραπάνω παρατηρήσεις αποτελούν τα κίνητρα για την υλοποίηση του έργου @pospaseis. Το έργο συνεισφέρει την ανάπτυξη της διαδικτυακής υπηρεσίας @pospaseis. Μια υπηρεσία που διευκολύνει τους εκπαιδευτικούς στο να ανακαλύψουν την κρυμμένη πληροφορία που κρύβουν τα πολυάριθμα και χωρίς συγκεκριμένες προδιαγραφές αρχεία αποφάσεων απόσπασης που εκδίδει το ΥΠΠΑΙΘ. Αυτό επιτυγχάνεται μέσω μιας μηχανής αναζήτησης πολλαπλών κριτηρίων που επιτρέπει το χρήστη να αναζητήσει στοχευμένα τις πληροφορίες που τον ενδιαφέρουν. Συνεπώς, ο χρήστης της υπηρεσίας θα μπορεί να "ανακαλύψει", για παράδειγμα, πόσοι, ποιοι και τι ειδικότητας εκπαιδευτικοί αποσπάστηκαν σε συγκεκριμένο φορέα. Επίσης, η υπηρεσία δίνει τη δυνατότητα στους χρήστες της να πλοηγηθούν στα προτότυπα αρχεία αποφάσεων του ΥΠΠΑΙΘ.
              
              </p><p class='small'>Η υπηρεσία δεν απευθύνεται μόνο σε χρήστες που είναι φυσικά πρόσωπα. Στα πλαίσια του έργου αναπτύχθηκε μια υπηρεσία ιστού (web service) που προσφέρει μια διεπαφή προγραμματισμού εφαρμογών (Application Programming Interface – API) με την οποία επιτρέπεται η ανάκτηση των δεδομένων των αποσπάσεων σε μορφή <a href=https://en.wikipedia.org/wiki/JSON>JSON</a> μέσω αιτημάτων http. Έτσι, To @pospaseis δίνει τη δυνατότητα σε οποιονδήποτε προγραμματιστή να πραγματοποιήσει αναζητήσεις μέσα από την εφαρμογή του ή το site του. Με αυτό τον τρόπο, οι αποσπάσεις ακολουθούν τη λογική των <a href="https://en.wikipedia.org/wiki/Open_data">ανοιχτών δεδομένων</a>.
              
              </p><p class='small'>Εν κατακλείδι, η υπηρεσία έχει ως στόχο το να αποτελέσει ένα εργαλείο για τον εκπαιδευτικό που θα τον διευκολύνει στο να επιλέξει το φορέα ή την περιοχή (ΠΥΣΔΕ, ΠΥΣΠΕ) που θα αιτηθεί απόσπαση. Επίσης, ένας πιο φιλόδοξος στόχος είναι το να συμβάλλει στη διαφάνεια στη διαδικασία των αποσπάσεων.
              </p>
              <p><strong>Χρήστες της Υπηρεσίας</strong></p>

              <p class='small'>H υπηρεσία απευθύνεται κυρίως σε εκπαιδευτικούς καθώς και σε εμπλεκόμενους με θέματα εκπαίδευσης (διοικούντες της εκπαίδευσης, δημοσιογράφοι του εκπαιδευτικού ρεπορτάζ κ.α.). Επίσης, η υπηρεσία απευθύνεται σε προγραμματιστές, αφού προσφέρει μια διεπαφή προγραμματισμού εφαρμογής (Application Programming Interface - API) που παρέχει έναν εύχρηστο τρόπο ανάκτησης των αποτελεσμάτων μιας αναζήτησης σε μορφή JSON. Έτσι, To @pospaseis δίνει τη δυνατότητα σε οποιονδήποτε προγραμματιστή να πραγματοποιήσει αναζητήσεις μέσα από την εφαρμογή του ή το site του. 
              </p> 
              <p><strong>Τεχνολογίες</strong></p>

              <p class='small'>Η υπηρεσία αναπτύχθηκε αξιοποιώντας τεχνολογίες ανοιχτού λογισμικού. Συγκεκριμένα:
              </p><p class='small'>για τη αποθήκευση των δεδομένων σχεδιάστηκε Βάση Δεδομένων (ΒΔ) αξιοποιώντας το σύστημα διαχείρισης βάσεων δεδομένων <a href="https://mariadb.org/">MariaDB</a>
              </p><p class='small'>για την εισαγωγή των αποσπάσεων παλαιότερων ετών στη ΒΔ, αναπτύχθηκε PHP scrip
              </p><p class='small'>για την ανάπτυξη της διεπαφής της υπηρεσίας χρησιμοποιήθηκε η τεχνολογία HTML/CSS. 
              </p><p class='small'>Δόθηκε ιδιαίτερη έμφαση στο πως θα εμφανίζεται το web site σε διαφορετικές συσκευές (υπολογιστές, ταμπλέτες, κινητά τηλέφωνα). Για το λόγω αυτό θα αξιοποιήθηκε η τεχνολογία <a href="http://getbootstrap.com/">Bootstrap</a> 
              </p><p class='small'>για τον προγραμματισμό από την μεριά του εξυπηρετητή (server side programming) χρησιμοποιήθηκε η γλώσσα PHP
              </p><p class='small'>για τον προγραμματισμό από την μεριά του πελάτη (client side programming) χρησιμοποιήθηκε η γλώσσα Java Script. Στην πραγματικότητα, η Java Script χρησιμοποιήθηκε για την επικύρωση των κριτηρίων αναζήτησης που ορίζει ο χρήστης στην διεπαφή ιστού. 
              </p><p class='small'>για την ανάπτυξη του API ακολουθήθηκε η λογική <a href="https://en.wikipedia.org/wiki/Representational_state_transfer">REST</a>. Τα δεδομένα αποσπάσεων  ανακτώνται σε μορφή <a href=https://en.wikipedia.org/wiki/JSON>JSON</a> κατόπιν αποστολής <a href="apiinfo.php">κατάλληλου διαμορφωμένου http αιτήματος</a>
              </p><p class='small'>Το @pospaseis αποτρέπει <a href="https://en.wikipedia.org/wiki/SQL_injection">SQL injections</a> μέσω προχωρημένων τεχνικών προγραμματισμού
              </p><p class='small'>Το @pospaseis παρέχει στατιστικά χρήσης μέσω της υπηρεσίας <a href="http://www.google.com/analytics/">google analytics</a>
              </p><p class='small'>Το @pospaseis φιλοξενείται σε εικονικό εξυπηρετητή του <a href="https://okeanos.grnet.gr/home/">okeanos</a> με λειτουργικό σύστημα <a href="https://www.debian.org/">Linux/Debian</a> και με εξυπηρετητή ιστού <a href="http://www.apache.org/">apache</a>
              </p><p class='small'>Για την προ-επεξεργασία των δεδομένων των αποσπάσεων των τελευταίων σχολικών ετών χρησιμοποιήθηκαν τα εργαλεία: <a href="http://www.geany.org/">Geany editor</a>, <a href="http://tabula.technology/">Tabula</a> και <a href="https://en.wikipedia.org/wiki/Pdftotext">pdftotext</a>
              </p>
              <p><strong>Παραδοτέα</strong>
              </p><p class='small'><a href="https://github.com/ellak-monades-aristeias/apospaseis/tree/master/deliverable1"><strong>Π1</strong></a> Εκπονήθηκε μελέτη σχετικά με την ανάλυση και τη σχεδίαση της υπηρεσίας. Επίσης, ορίστηκαν οι τεχνολογίες που θα χρησιμοποιηθούν κατά την ανάπτυξη της υπηρεσίας.
              </p><p class='small'><a href="https://github.com/ellak-monades-aristeias/apospaseis/tree/master/deliverable2"><strong>Π2</strong></a> Ανακτήθηκαν από το διαδίκτυο όλα τα αρχεία αποφάσεων απόσπασης που εκδόθηκαν από το ΥΠΠΑΙΘ κατά τη διάρκεια των τελευταίων τεσσάρων σχολικών ετών. Τα αρχεία αυτά προ-επεξεργάστηκαν (κρατήθηκε η χρήσιμη πληροφορία) και τα δεδομένα τους αποθηκεύτηκαν σε ένα ενιαίο αρχείο. Την ίδια περίοδο αναπτύχθηκε η Βάση Δεδομένων (ΒΔ) της υπηρεσίας, η οποία αποτελείται από τρεις πίνακες. Τα δεδομένα του ενιαίου αρχείου καταχωρήθηκαν στη ΒΔ μέσω μιας <a href="https://github.com/ellak-monades-aristeias/apospaseis/tree/master/deliverable3/uploader">μικροεφαρμογής</a> που αναπτύχθηκε για τον σκοπό αυτό. Το Π2 περιλαμβάνει το ενιαίο αρχείο σε μορφή xls και αντίγραφο της ΒΔ.
              </p><p class='small'><a href="https://github.com/ellak-monades-aristeias/apospaseis/tree/master/deliverable3"><strong>Π3</strong></a> Αναπτύχθηκε το website της υπηρεσίας (πηγαίος κώδικας). ο website δίνει τη δυνατότητα αναζήτησης αποσπάσεων και στατιστικών σχετικά με τις αποσπάσεις. Επίσης δίνει τη δυνατότητα πλοήγησης στα πρωτότυπα αρχεία αποφάσεων απόσπασης. Το παραδοτέο αυτό περιλαμβάνει και τη μικροεφαρμογή που αναφέρθηκε παραπάνω. 
              </p><p class='small'><a href="https://github.com/ellak-monades-aristeias/apospaseis/tree/master/deliverable4"><strong>Π4</strong></a> Αναπτύχθηκε το API μέσω του οποίου τα αποτελέσματα των αναζητήσεων ανακτώνται σε μορφή JSON κατόπιν αιτήματος http. Το API και οδηγίες σχετικά με τη χρήση του ενσωματώθηκε στο website. Ο συνολικός κώδικας του @pospaseis είναι διαθέσιμος σε αυτό το παραδοτέο.
              </p><p class='small'><a href="https://github.com/ellak-monades-aristeias/apospaseis/tree/master/deliverable5"><strong>Π5</strong></a> Συντάχθηκε μια εργασία που παρουσιάζει την υπηρεσία και τα στάδια ανάπτυξης της. Δείτε την εργασία <a href="http://users.uom.gr/~stoug/CD/ConferencesGR/p1.pdf">εδώ</a>. Η εργασία έγινε δεκτή κατόπιν κρίσης στο <a href="http://hcicte2016.etpe.gr/el/">10ο Πανελλήνιο και Διεθνές Συνέδριο "Οι ΤΠΕ στην Εκπαίδευση"</a>. 
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
                    <p><a href="https://creativecommons.org/licenses/by-sa/4.0/"><img src="img/cc.png"  alt="cc"></a> @pospaseis 2015 - Designed using <a href="http://startbootstrap.com/template-categories/all/">Bootstrap templates</a></p>
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
