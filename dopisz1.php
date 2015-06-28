<!DOCTYPE html><html lang="en" xmlns="http://www.w3.org/1999/xhtml"><head>    <meta charset="utf-8" />    <title></title>    <link href="style.css" rel="stylesheet" type="text/css" />

</head>

<body>

<div id="wrapper">    
	<div id="naglowek">
		<h3>Dobre myśli na każdy dzień - Version. 0.1.4</h3>
	</div>        
	<div id="navigation">
		Designed by <a href="http://www.metrobit.pl">metrobit.pl</a>
	</div>        
		<div id="left-column">            
			<b>Dziękujemy za przesłanie myśli!!!</b> 
			<br/><br/>Myśl, którą przesłałeś ma następującą treść: <br/><br/>
			<?
			echo "<h2>";
			print $_GET['cytat'];
			echo "</h2>";
			$cytat=$_GET['cytat'];
			$polaczenie=mysql_connect("localhost","metrobit_27","hasloMJU&1qaz"); /* Nawiązanie połączenia z bazą */
			mysql_select_db("metrobit_27",$polaczenie); /* Wybranie odpowiedniej bazy danych */
			mysql_query("SET NAMES utf8");
			mysql_query("INSERT INTO cytaty2 (`id`, `cytaty2`) VALUES ('','$cytat')");
			echo "</br></br>";
			echo "Została ona dopisana do bazy jako pozycja nr. ";
			$result = mysql_query('SELECT * FROM cytaty2', $polaczenie); 
			$num_rows = mysql_num_rows($result); 
			echo $num_rows;
			echo "<br /><br />";
			?>
			<a href="/"><button type="button" class="przycisk">Wróć na stronę główną</button></a>
			
		</div>        
		<div id="right-column">        
			<div id="title-right">
			</div>        
		</div>    
</div>
dopisz2
</body>
</html>