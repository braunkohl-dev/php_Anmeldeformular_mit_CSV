<html>



<head>

<link rel="shortcut icon" type="image/x-icon" href="http://URL-ZUR-ANWENDUNG/impfanmeldung/favicon.ico">

<?php

$fileWrite = '';
$fileWrite1 = '';
$fileWrite2 = '';
$fileWrite3 = '';
$fileWrite4 = '';
$fileWrite5 = '';
$fileWrite6 = '';
$fileWrite7 = '';
$fileWrite8 = '';
$fileWrite9 = '';
$fileWrite10 = '';
$fileWrite11 = '';
$fileWrite12 = '';
$fileWrite13 = '';
$fileWrite14 = '';
$myFile = "anmeldungen.csv";




if(isset($_POST['fileWriteName']) && !empty($_POST['fileWriteName'])) {

$fileWrite1 = $_POST["fileWriteName"];
$fileWrite2 = $_POST["fileWriteVorname"];
$fileWrite3 = $_POST["fileWriteStreet"];
$fileWrite4 = $_POST["fileWritePLZ"];
$fileWrite5 = $_POST["fileWriteOrt"];
$fileWrite6 = $_POST["fileWriteGeburtsdatum"];
$fileWrite7 = $_POST["fileWriteHandynummer"];
$fileWrite8 = $_POST["fileWritePrivNumber"];
$fileWrite9 = $_POST["fileWritePrivMail"];
$fileWrite10 = $_POST["fileWriteWorkNumber"];
$fileWrite11 = $_POST["fileWriteWorkMail"];
$fileWrite12 = $_POST["fileWriteWorkTime"];
$fileWrite13 = $_POST["fileWriteOrg"];
$fileWrite14 = $datum = date("d.m.Y");


$fileWrite = $fileWrite1.";".$fileWrite2.";".$fileWrite3.";".$fileWrite4.";".$fileWrite5.";".$fileWrite6.";".$fileWrite7.";".$fileWrite8.";".$fileWrite9.";".$fileWrite10.";".$fileWrite11.";".$fileWrite12.";".$fileWrite13.";".$fileWrite14.PHP_EOL;
}
if($fileWrite) {
$fh = fopen($myFile, 'a') or die("can't open file"); //Make sure you have permission
fwrite($fh, utf8_decode($fileWrite));
fclose($fh);
header('refresh: 1; url=http://URL-ZUR-ANMELDUNG/impfanmeldung/thanks.html'); 
}

?>



</head>



<body>

<meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style type="text/css">
    body {
        background-color: #f0f0f2;
        margin: 0;
        padding: 0;
        font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        
    }
    div {
        width: 600px;
        margin: 5em auto;
        padding: 2em;
        background-color: #fdfdff;
        border-radius: 0.5em;
        box-shadow: 2px 3px 7px 2px rgba(0,0,0,0.02);
    }
    a:link, a:visited {
        color: #38488f;
        text-decoration: none;
    }
    @media (max-width: 700px) {
        div {
            margin: 0 auto;
            width: auto;
        }
    }
	
	.button {
		box-shadow:inset 0px 1px 0px 0px #d9fbbe;
		background:linear-gradient(to bottom, #b8e356 5%, #a5cc52 100%);
		background-color:#b8e356;
		border-radius:6px;
		border:1px solid #83c41a;
		display:inline-block;
		cursor:pointer;
		color:#ffffff;
		font-family:Arial;
		font-size:15px;
		font-weight:bold;
		padding:6px 24px;
		text-decoration:none;
		text-shadow:0px 1px 0px #86ae47;
	}
	.button:hover {
		background:linear-gradient(to bottom, #a5cc52 5%, #b8e356 100%);
		background-color:#a5cc52;
	}
	.button:active {
		position:relative;
		top:1px;
	}
	
		input[type=button], input[type=submit], input[type=reset] {
		background-color: #27428E;
		border: none;
		color: white;
		padding: 16px 32px;
		text-decoration: none;
		margin: 4px 2px;
		cursor: pointer;
	}
	
	#myInput {
		background-image: url('/css/searchicon.png');
		background-position: 10px 10px;
		background-repeat: no-repeat;
		width: 90%;
		font-size: 16px;
		padding: 12px 20px 12px 40px;
		border: 1px solid #ddd;
		margin-bottom: 12px;
	}

	#myTable {
		border-collapse: collapse;
		width: 100%;
		border: 1px solid #ddd;
		font-size: 18px;
	}

	#myTable th, #myTable td {
		text-align: left;
	padding: 12px;
	}

	#myTable tr {
		border-bottom: 1px solid #ddd;
	}

	#myTable tr.header, #myTable tr:hover {
		background-color: #f1f1f1;
	}
	
    </style>  

<div>
<img src="DATEINAME_DES_LOGOS.jpg" alt="Mein Logo" align=center>
<h1>Vormerkung zur Corona-Impfung</h1>
<p>Beispieltext der hier angezeigt werden soll.</p>
<br/>
<form id="some" name="someName" method="post">
Name: <br/><input type="text" id="name" class="someClass" size="80" value="" name="fileWriteName"/><br/>
Vorname: <br/><input type="text" id="vorname" class="someClass" size="80" value="" name="fileWriteVorname"/><br/>
Straße und Hausnummer: <br/><input type="text" id="vorname" class="someClass" size="80" value="" name="fileWriteStreet"/><br/>
Postleitzahl: <br/><input type="text" id="vorname" class="someClass" size="80" value="" name="fileWritePLZ"/><br/>
Wohnort: <br/><input type="text" id="vorname" class="someClass" size="80" value="" name="fileWriteOrt"/><br/>
Geburtsdatum: <br/><input type="text" id="vorname" class="someClass" size="80" value="" name="fileWriteGeburtsdatum"/><br/>
Handynummer: <br/><input type="text" id="vorname" class="someClass" size="80" value="" name="fileWriteHandynummer"/><br/>
private Rufnummer: <br/><input type="text" id="privatecallnr" class="someClass" size="80" value="" name="fileWritePrivNumber"/><br/>
private Mail Adresse: <br/><input type="text" id="privatemail" class="someClass" size="80" value="" name="fileWritePrivMail"/><br/>
dienstliche Rufnummer: <br/><input type="text" id="vorname" class="someClass" size="80" value="" name="fileWriteWorkNumber"/><br/>
dienstliche Mail Adresse: <br/><input type="text" id="workmail" class="someClass" size="80" value="" name="fileWriteWorkMail"/><br/>
Organisationseinheit: <br/><input type="text" id="workmail" class="someClass" size="80" value="" name="fileWriteOrg"/><br/>
Anwesenheit/Arbeitszeitmodell (z.B.: ungerade Wochen oder Mo., Mi., Fr. oder ähnlich): <br/><input type="text" id="workmail" class="someClass" size="80" value="" name="fileWriteWorkTime"/><br/>
<br/>
<input type="submit" value="absenden" class="submitClass"/>
</form>
<br/>
<p><i>Haben Sie bitte nach dem Absenden etwas Geduld. Bei einer erfolgreichen Eintragung werden Sie weitergeleitet.</i></p>
</div>
</body>
</html>