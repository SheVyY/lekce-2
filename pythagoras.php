
<?php 

$a = 10;
$b = 20;
$obdelnikobsah = $a * $b;
echo "Obsah obdelníku o stranách a: $a cm a b: $b cm je $obdelnikobsah cm2" . "<br>";

 ?>

<?php

$strana = 6;
$uhel = 60;
$vyska = $strana * sin(deg2rad($uhel));

$trojuhelnikobsah = $strana * $vyska / 2;
$trojuhelnikobsah = round($trojuhelnikobsah);

echo "Rovnostranný trojúhelník o straně délky $strana cm a úhlu $uhel stupňů má obsah $trojuhelnikobsah cm2";

?>