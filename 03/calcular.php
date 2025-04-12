<?php

$r = rand(0,100); 
$t=0;

do {
    $n = rand(0,100);
    $t++;
    echo $n. " " . " " ."<br>";

} while ($n != $r);

echo "<br>" ."<br>" . "O número aleatório gerado foi: " .$r ."<br>";
echo "O número de vezes que foi gerado até acertar foi: " .$t ."<br>";
echo "O número sorteado foi: ". $n;





?>