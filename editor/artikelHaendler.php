 <style type="text/css">
 	div{
 		width:300px;
 		font-size:16px;
 		padding:10px;
 		color:#fff;
 	}
 	div.err{
 		background-color:#e91f1f;
 	}
 	div.success{
 		background-color:#2cad2c;
 	}
 	span{
 		width:50px;
 		height:20px;	
 		display:block;
 		margin:5px;
 	}
 	span a{
 		color:#fff;
 		fontsize:15px;
 		padding: 5px 10px;
 		background-color: #b93737;
 		text-decoration: none;
 		border:1px solid #ccc;
 		border-radius: 3px;
 	}
 </style>
 
 <?php
include('helper.php');
checks();


 $typ         = $_REQUEST['artikeltyp'];
 $artikeltext = $_REQUEST['html-output'];

echo $artikeltext; 
 
 $myclass     =  ($typ == 'vorspann' ? "intro" : "artikeltext");
 // 

 if ($typ =='other'){
	$destfile    = 	"artikel";
 }else{
 	$destfile    =  ($typ == 'vorspann' ? "artikelvorspann" : "artikeltext");
 }

 $destfile   .= ".html";
 $txt        = $artikeltext;


$myfile = fopen( 'template/'.$destfile, "w") or die("Unable to open file!");


$fwrite = fwrite($myfile, $txt);
if($fwrite ===false){
	echo "<div class='err'>OPPPS es wurde einen Fehler passiert</div>";
}
else{
	echo "<div class='success'>Die Datei wurde erfolgreich aktualisiert</div>";

}
fclose($myfile);

?>
<span>
<a href="artikelInput.html" target="_self">Zur&uuml;ck</a>
</span>


 