
<HTML>

<HEAD>
   <meta http-equiv="Content-Language" content="el">
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  
</HEAD>
<BODY>

   <DIV align="center">


<Center>
<?php
		         
mysql_connect("userdb","stoug","yourpwd");
mysql_select_db("stoug-db1");
mysql_query("SET NAMES 'utf8'");
$row = 0;
if (($handle = fopen("uptext-example", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);                
        $row++; 
        
        mysql_query("INSERT INTO TEACHER (AM, LASTNAME, FIRSTNAME, VATHMIDA, KLADOS) VALUES ($data[0],'$data[1]','$data[2]', '$data[3]', '$data[4]')");
        $result = mysql_query("SELECT count(*) AS N FROM FOREAS WHERE NAME = '$data[6]' AND TYPE = '$data[7]'");
        $c = mysql_fetch_assoc($result);        
        echo "$row ",$c['N'],"<br>";        
        if ($c['N'] == 0){
           mysql_query("INSERT INTO FOREAS (NAME, TYPE) VALUES ('$data[6]','$data[7]')");
        }        
        $pou = mysql_query("SELECT ID FROM FOREAS WHERE NAME='$data[6]' AND TYPE ='$data[7]'");
        $row2 = mysql_fetch_assoc($pou);                
        $p_id = $row2['ID'];        
        mysql_query("INSERT INTO APOSPASI (TAM, POU_ID, YEAR_APOSPASI, COMMENT1, COMMENT2, APO) VALUES ($data[0],$p_id,'$data[8]','$data[9]','$data[10]','$data[5]')");                
    }
    echo "$row were inserted";
    fclose($handle);
}
mysql_close();
   
	         
?>
</center>

</DIV>
</BODY>

</html>


