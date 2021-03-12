<?php



for($contador = 0; $contador <= 100; $contador++){
    $resto = $contador % 2;
    if($resto > 0){
        echo "#$contador" . PHP_EOL;
    }
}

/* Feito em aula

for($contador = 0; $contador <= 100; $contador++){
    if($contador % 2 != 0){
        echo "#$contador" . PHP_EOL;
    }
}
*/
