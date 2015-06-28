<html>
<head>
<style type="text/css">
body {margin: 0px; padding: 0px;}
h1 {background: #555; padding: 0px; margin:0px;}
#wrapper {width: 300px; margin: 0 auto 0 auto; border: 1px solid; padding: 0px; background: #888;}
.srodek {text-align: center;}
.prawa {text-align: right; background: #cc0033;}
.wynik {text-align: center; background: #cc0033;}
#tabela {width: 300px; border-spacing: 0px; border: 1px solid black; border-collapse: seperate;}
#tytul, #tytul2 {background: #777;}
</style>
</head>
<body>
<div id="wrapper">
<table id="tabela" borger="1" rules="all">
<tr>
<td colspan="2">
<h1><div class="srodek">KALKULATOR</h1>
</td>
</tr>
<tr>
<td colspan="2" class="srodek" id="tytul"><p>Podaj liczby:</p></td>
<form method="get">
 </tr>
 <tr>
	<td>Podaj pierwszą liczbę:</td>
	<td class="srodek"><input class="srodek" type="text" name="arg1" /></td>
</tr>
<tr> 
	<td> Podaj drugą liczbę: </td>
	<td class="srodek"><input class="srodek" type="text" name="arg2" /><br/>
</tr>
 <tr>
	<td colspan="2" class="srodek" id="tytul2"> Wybierz działanie:<br/></td>
</tr>
<tr>
	<td>Dodawanie</td>
	<td class="srodek"><input type="radio" name="operacja" value="dodawanie" /> </td>
</tr>
<tr>
	<td>Odejmowanie</td>
	<td class="srodek"><input type="radio" name="operacja" value="odejmowanie" /> </td>
</tr>
<tr>
	<td>Mnożenie</td>
	<td class="srodek"><input type="radio" name="operacja" value="mnozenie" /> </td>
</tr>
<tr>
	<td>Dzielenie</td>
	<td class="srodek"><input type="radio" name="operacja" value="dzielenie" /></td>
</tr>
<tr>
	<td colspan="2" class="srodek"><input type="submit" name="Oblicz" value="Oblicz" /></td>
</tr>
	<input type="hidden" name="checker"  value="1"/>

</form>

 
 <tr>
 <td class="prawa">WYNIK:</td>
 <td class="wynik">
<?php
if($_GET['checker'] == "1")
{
$arg1 = $_GET['arg1'];
$arg2 = $_GET['arg2'];
$zero = 0;
 if ($_GET['operacja'] == "dodawanie")
 {
 $wynik = $arg1 + $arg2;
 echo $wynik;
 }
 else if ($_GET['operacja'] == "odejmowanie")
 {
 $wynik = $arg1 - $arg2;
 echo $wynik;
 }
 else if ($_GET['operacja'] == "mnozenie")
 {
 $wynik = $arg1 * $arg2;
 echo $wynik;
 }
 else if ($_GET['operacja'] == "dzielenie") 
 {
 if ($arg2 != $zero)
 {
 $wynik = $arg1 / $arg2;
 echo $wynik;
 }
 else
 echo "Nie można dzielić przez 0";
 }else
 echo "Wybierz działanie";
 }
 else
 echo '';
 ?>
 </td>
 </tr>
 <td colspan="2" class="srodek">
Powered by <a href="http://metrobit.pl">metrobit.pl</a> v.0.2
</td>
</tr>
 </table>
</div>
</body>
</html>