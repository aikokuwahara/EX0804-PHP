
<?php

$n1 = $_POST['$n1'];
$t=0;

do {
    $r = rand(0,10);
    $sub = $n1 - $r;
    $t++;
} while ($sub != 0);

echo "O número aleatório gerado foi: " .$r ."<br>";
echo "O número aleatório foi gerado " .$t. " vezes " ."<br>";
echo "O resultado da subtração foi: ". $sub;





?>