<?php
function arreglo_sella($arreglo){
    $arreglo_definitivo = array();
    $bandera = 0;
    $bandera2 = 0;
    $logro_a2 = 0;
    $factor = 0;
    $factor2 = 0;
    $factor5 = 0;
    $valor = 0;
    
    if(count($arreglo) > 0) {
        for($i=5;$i<=13;$i++){
            if($i == 5 || $i == 10 || $i == 12){//Si es alta
                if(isset($arreglo[$i])){
                    $logro = $arreglo[$i]['odd'];
                    $logro_a = $arreglo[$i]['odd_a'];
                    $factor = $arreglo[$i]['factor'];
                    $factor2 = $arreglo[$i+1]['factor'];
                    $valor = arreglo_datos($i,$logro,$factor,$factor2,$bandera,$bandera2);
                    if($valor['logro'] != $logro){
                        $logro = $valor['logro'];
                        $factor = $valor['factor'];
                        $factor2 = $valor['factor2'];
                        $bandera = $valor['bandera'];
                        $bandera2 = $valor['bandera2'];
                    }
                    $logro5 = $logro;
                    $logro_a5 = $logro_a;
                    $factor5 = $factor;
                    array_push($arreglo_definitivo, array($i => array("odd"=>$logro,"odd_a"=>$logro_a,"factor"=>$factor)));   
                }//fin del if(isset($arreglo[$i]))    
            } else if($i == 6 || $i == 11 || $i == 13){//Si es baja
                if(isset($arreglo[$i])){
                    $logro = $arreglo[$i]['odd'];
                    $logro_a = $arreglo[$i]['odd_a'];
                    $factor = $arreglo[$i]['factor'];
                        if($bandera2 == 1){
                            array_push($arreglo_definitivo, array($i => array("odd"=>$logro5,"odd_a"=>$logro_a,"factor"=>$factor2)));
                            $bandera2 = 0;
                            continue;
                        }
                        $factor2 = $factor5;
                        $valor = arreglo_datos($i,$logro,$factor,$factor2,$bandera,$bandera2);
                        if($valor['logro'] != $logro){
                            $logro = $valor['logro'];
                            $factor = $valor['factor'];
                            $factor2 = $valor['factor2'];
                            $bandera = $valor['bandera'];
                            $bandera2 = $valor['bandera2'];
                        }
                        if($bandera2 == 1){
                            array_pop($arreglo_definitivo);
                            array_push($arreglo_definitivo, array($i-1 => array("odd"=>$logro,"odd_a"=>$logro_a5,"factor"=>$factor2),$i => array("odd"=>$logro,"odd_a"=>$logro_a,"factor"=>$factor)));
                        }else {    
                            array_push($arreglo_definitivo, array($i => array("odd"=>$logro,"odd_a"=>$logro_a,"factor"=>$factor)));
                        }
                    $bandera2 = 0;   
                }//fin del if(isset($arreglo[$i]))     
            }//fin del else if($i == 6 || $i == 11 || $i == 13)
        }//fin del for($i=0;$i<count($arreglo);$i++)
    } else
        $arreglo_definitivo = $arreglo;
    
    return $arreglo_definitivo;
}//fin de la funtion arreglo_sella($arreglo)

function arreglo_datos($i,$logro,$factor,$factor2,$bandera,$bandera2){
    $pos2 = strpos($logro, "-");//Se captura si el valor es negativo
        if ($pos2 !== false) {
            $logro = str_replace('-', '', $logro);
            $bandera = 1;
        }
        if(($i == 6 || $i == 11 || $i == 13)) {//Es baja
            if($logro > 135 && $logro < 150) {
                $bandera2 = 1;
                $factor = $factor - "0.5";
                $factor2 = $factor2 - "0.5";
            } else if($logro >= 150) {
                $bandera2 = 1;
                $factor = $factor - "1.0";
                $factor2 = $factor2 - "1.0";
            } 
        } else if(($i == 5 || $i == 10 || $i == 12)){//Es alta
            if($logro > 135 && $logro < 150) {
                $bandera2 = 1;
                $factor = $factor + "0.5";
                $factor2 = $factor2 + "0.5";
            } else if($logro >= 150) {
                $bandera2 = 1;
                $factor = $factor + "1.0";
                $factor2 = $factor2 + "1.0";
            } 
        }
        if($i == 5 || $i == 6){   
            if($bandera == 1 && $bandera2 == 1)
                $logro = "-110";
            else if($bandera == 0 && $bandera2 == 1)  
                $logro = "110";
            else if($bandera == 1 && $bandera2 == 0)
                $logro = "-".$logro;      
        } else {
            if($bandera == 1 && $bandera2 == 1)
                $logro = "-120";
            else if($bandera == 0 && $bandera2 == 1)  
                $logro = "120";
            else if($bandera == 1 && $bandera2 == 0)
                $logro = "-".$logro;      
        }         
        $factor =   number_format($factor, 2, '.', '.');
        $factor2 =   number_format($factor2, 2, '.', '.');
    return array("bandera"=>$bandera,"bandera2"=> $bandera2,"logro"=> $logro,"factor"=> $factor, "factor2" =>$factor2);                    
}
?>