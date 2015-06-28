<!DOCTYPE html><html lang="en" xmlns="http://www.w3.org/1999/xhtml"><head>  
<head>
 <title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
		<div id="left-column">    
		<h2>Twoja myśl na dzisiejszy dzień to:</h2></br></br>
		<h1>
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


$wynik = mysql_query('SELECT * FROM cytaty2 WHERE id='.$ilosc, $polaczenie);
$linia=mysql_fetch_array($wynik);
echo $linia["cytaty2"];
/*
while($linia=mysql_fetch_array($wynik)) 
//Pętla dopóki istnieją dane
 {

echo $licznik++." ";
echo $linia["cytaty"]; 
echo "</br>";
echo "</br>";
}
*/

mysql_close($polaczenie);

       
			
?>			
		
			</h1><br/>
			<a href="dopisz2.php"><button type="button" class="przycisk">Losuj ponownie</button></a><br/><br/>
			<a href="/"><button type="button" class="przycisk">Wróć na stronę główną </button></a>
			
		</div>        
		<div id="right-column">        
			<div id="title-right">
			</div>        
		</div>    
</div>
</body>
</html>
