<!DOCTYPE html><html lang="en" xmlns="http://www.w3.org/1999/xhtml"><head>  
<head>
 <title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css' />
    <link href="style.css" rel="stylesheet" type="text/css" />

</head>

<body>

<div id="wrapper">    
	<div id="naglowek">
		<h3>Dobre myśli na każdy dzień - Version. 0.1.4</h3>
	</div>        
	<div id="navigation">
		Designed by <a href="http://www.metrobit.pl">metrobit.pl</a>
	</div>        
		<div id="left-column2">    
		<h1>Lista wszystkich myśli wprowadzonych do bazy:</h1>
		
<?php

$polaczenie=mysql_connect("localhost","metrobit_27","hasloMJU&1qaz"); /* Nawiązanie połączenia z bazą */

mysql_select_db("metrobit_27",$polaczenie); /* Wybranie odpowiedniej bazy danych */
mysql_query("SET NAMES utf8");
//$sql = 'SELECT * FROM cytaty2 where id='.$ilosc;
//$sql="SELECT imie,nazwisko FROM dane_pracownika";
//$wynik=mysql_query($sql); /* Zapytanie sql do bazy i zapisanie wyniku w $wynik */

$result = mysql_query('SELECT * FROM cytaty2', $polaczenie); 
$num_rows = mysql_num_rows($result); /*Użycie funkcji mysql_num_rows, która zlicza ilość rekordów z zapytania*/
$ilosc = rand(1,$num_rows); /*losowanie liczby z zakresu od 1 do "ilości rekordów"*/



for ($i=1; $i<=$num_rows; $i++)
{
echo "<tr>";
$wynik2 = mysql_query('SELECT * FROM cytaty2 WHERE id='.$i, $polaczenie);
$linia2=mysql_fetch_array($wynik2);
$czyparzysta = $i % 2;
if ($czyparzysta == 0)
{
echo "<span class=\"pacific\">";
}
echo "<td>Myśl nr ".$i.": </td><td>".$linia2["cytaty2"]."</td>";
if ($czyparzysta == 0)
{
echo "</span>";
}
echo "</tr>";
echo "</br></br>";
}


mysql_close($polaczenie);

       
			
?>			
		
			<br/>
						<a href="/"><button type="button" class="przycisk">Wróć na stronę główną </button></a>
						</br></br>
<?php
$dokument = $_SERVER['DOCUMENT_ROOT'];
echo $dokument;
$home = $_ENV['HOME'];
echo $home;
?>
			
		</div>        
		  
</div>
</body>
</html>
