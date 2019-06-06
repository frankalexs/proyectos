<?php
																			/*
																			$b_ref = 0;
																			$sella = "352309028131***131";
																			$banco = "352309028131";
																			$pos   = strpos($sella, "*");//para la referencia del Bancaribe
                                                                                if($pos !== false){
                                                                                    $pos1   = strpos($sella, $banco);//para la referencia del Bancaribe
                                                                                    if($pos1 !== false){
                                                                                        $b_ref = 1;
                                                                                        
                                                                                    }
                                                                                }
																				echo "b_ref:".$b_ref."</br>";
																				*/
																				
$fecha = "2019-02-28";
echo "fecha ingles:".$fecha."</br>";
$fecha2 = fecha_esp($fecha);

echo "fecha espanol:".$fecha2."</br>";
function fecha_esp($fecha) {
    if ($fecha == '' || mid($fecha, 1, 4) == '0000') {
        return '';
    } else {
        return substr($fecha, 8, 2) . '/' . substr($fecha, 5, 2) . '/' . substr($fecha, 0, 4);
    }
}	

function mid($texto, $desde, $hasta) {
    return(substr($texto, $desde - 1, $hasta));
}
?>