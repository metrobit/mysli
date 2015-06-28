<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <?php
        include_once 'header.php';
        ?>
        <title></title>
        <style type="text/css">                
            img:hover {     opacity: 0.4;    }   </style>    
    </head>
    <body>
       
     
    </body>
</html>

<?php
/**
 * @author Adam Smolarek <adam.smolarek@metrobit.pl>
 */
$tablica = array(0=>"kolo",1=>"kwadrat",2=>"prostokat",3=>"romb",4=>"rownoleglobok");
$wzory = array(0=>"P=Pi*r2",1=>"kwadrat",2=>"prostokat",3=>"romb",4=>"rownoleglobok");
$lottery = count($tablica);
$maxInt = $lottery - 1;

//losujemy jedną figurę z tablicy pięcioelementowej
$lottery_rand = rand(0,$maxInt);
  

//przypisujemy wylosowaną liczbę do miejsca pierwszego
$miejsce_pierwsze = $lottery_rand;

//sprawdzamy czy druga wylosowana liczna jest różna od pierwszej wylosowanej
do
{
    $lottery_rand = rand(0,$maxInt);
}
while (!($lottery_rand != $miejsce_pierwsze));

    $miejsce_drugie = $lottery_rand;
   

    
do
{
    $lottery_rand = rand(0,$maxInt);
}
while (!(($lottery_rand != $miejsce_pierwsze)&($lottery_rand != $miejsce_drugie)));

    $miejsce_trzecie = $lottery_rand;

do
{
    $lottery_rand = rand(0,$maxInt);
}
while (!(($lottery_rand != $miejsce_pierwsze)&($lottery_rand != $miejsce_drugie)&
        ($lottery_rand!=$miejsce_trzecie)));

    $miejsce_czwarte = $lottery_rand;
 
    
    do
{
    $lottery_rand = rand(0,$maxInt);
}
while (!(($lottery_rand != $miejsce_pierwsze)&($lottery_rand != $miejsce_drugie)&
        ($lottery_rand!=$miejsce_trzecie)&($miejsce_czwarte!=$lottery_rand)));

    $miejsce_piate = $lottery_rand;
  
    
echo "<img src=\"".$tablica[$miejsce_pierwsze].".png\"/>";
echo "<img src=\"".$tablica[$miejsce_drugie].".png\"/>";
echo "<img src=\"".$tablica[$miejsce_trzecie].".png\"/>";


?>
