<?php
for($i = 0; $i < 51 ; $i++){
    echo $i;
    echo "<br>";
}
?>

<?php
$klasgenoten = array("kees", "karel", "kopenhagen", "kakkerlak", "kaas", "kroepkoek", "klaas", "krekel", "kevin", "kiki");
foreach ($klasgenoten as $leerling){
    echo $leerling;
    echo "<br>";
}
?>

<?php

$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December']; 

for($i = 0; $i < 12 ; $i++){
    echo $maanden[$i];
    echo "<br>";
}
?>

<?php

$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December']; 

foreach ($maanden as $invidueel){
    echo $invidueel;
    echo "<br>";
}
?>