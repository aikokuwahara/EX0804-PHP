<?php	
	
    $a = 0;
    $d = $_POST['$d'];
    $b = 0;
    $cem = $d;
    $cinq = $d;
    $vinte = $d;
    $dez = $d;
    $cinco = $d;
    $dois = $d;
    $um = $d;

    do {
        
        $cem -=  100;
        $b++;

    } while ($cem >= 100);

    echo "Em notas de R$100,00: " .$b ."<br>";
    $b = 0;



    do {
        
        $cinq -=  50;
        $b++;

    } while ($cinq >= 50);

    echo "Em notas de R$50,00: " .$b ."<br>";
    $b = 0;



    do {
        
        $vinte -=  20;
        $b++;

    } while ($vinte >= 20);

    echo "Em notas de R$20,00: " .$b ."<br>";
    $b = 0;



    do {
        
        $dez -=  10;
        $b++;

    } while ($dez >= 10);

    echo "Em notas de R$10,00: " .$b ."<br>";
    $b = 0;



    do {
        
        $cinco -=  5;
        $b++;

    } while ($cinco >= 5);

    echo "Em notas de R$5,00: " .$b ."<br>";
    $b = 0;



    do {
        
        $dois -=  2;
        $b++;

    } while ($dois >= 2);

    echo "Em notas de R$2,00: " .$b ."<br>";
    $b = 0;



    do {
        
        $um -=  1;
        $b++;

    } while ($um >= 1);

    echo "Em moedas de R$1,00: " .$b ."<br>";
    $b = 0;




	
			
?>