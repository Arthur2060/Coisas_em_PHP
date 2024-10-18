<?php
    $numeroalvo = 22;
    $divisores = 0;
    
    for($i = 0; $i <= 100; $i++){
        if ($i%$numeroalvo == 0){
            $divisores++;
        }
    }
    
    if($divisores >= 3){
            echo "$numeroalvo não é primo!";
        }else if ($divisores < 3){
            echo "$numeroalvo é primo!";
        }
?>
