<p>Wpisz jakieœ zdanie, a ja je podzielê i ka¿de s³owo umieszczê w tablicy</p>
<form method="POST">
<input type="text" name="zdanie" size="70" />
<input type="submit"  value="Wyslij zdanie"/>
<input type="hidden" value="1" name="checker" />
</form>

<?php
$licznik = 1; 

$zdanie = $_POST['zdanie'];

$tablica = explode(" ", $zdanie);

if ($_POST['checker'] == 1)

    {
    echo "<pre>";
    print_r($tablica);
    echo "</pre>";
    
    }
?>

