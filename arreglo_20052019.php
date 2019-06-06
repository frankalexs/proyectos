<?php
$arreglo = array(5=>array('odd'=>'-90','odd_a'=>'1.74','factor'=>'7.5'),6=>array('odd'=>'-120','odd_a'=>'2.1','factor'=>'4.5'),10=>array('odd'=>'-130','odd_a'=>'2.45','factor'=>'6.5'),11=>array('odd'=>'-140','odd_a'=>'2.4','factor'=>'7.0'),12=>array('odd'=>'-80','odd_a'=>'1.47','factor'=>'5.5'),13=>array('odd'=>'-90','odd_a'=>'1.1','factor'=>'5.5'));
//$variable = array(5=>array('odd'=>'-140','odd_a'=>'1.74','factor'=>'7.5'),6=>array('odd'=>'-120','odd_a'=>'2.1','factor'=>'4.5'),10=>array('odd'=>'-130','odd_a'=>'2.45','factor'=>'6.5'),11=>array('odd'=>'-140','odd_a'=>'2.4','factor'=>'7.0'),12=>array('odd'=>'-80','odd_a'=>'1.47','factor'=>'5.5'),13=>array('odd'=>'-90','odd_a'=>'1.1','factor'=>'5.5'));
//$arreglo = array(5=>array('odd'=>'-140','odd_a'=>'1.74','factor'=>'7.5'),6=>array('odd'=>'-120','odd_a'=>'2.1','factor'=>'4.5'),12=>array('odd'=>'-80','odd_a'=>'1.47','factor'=>'5.5'),13=>array('odd'=>'-90','odd_a'=>'1.1','factor'=>'5.5'));
//$arreglo = array(5=>array('odd'=>'-160','odd_a'=>'1.74','factor'=>'7.5'),6=>array('odd'=>'-120','odd_a'=>'2.1','factor'=>'4.5'));
var_dump($arreglo);
//$variable = '{"5":{"odd":110,"odd_a":2.06,"factor":"8.5"},"6":{"odd":-130,"odd_a":1.77,"factor":"8.5"},"10":{"odd":100,"odd_a":2.06,"factor":"8.5"},"11":{"odd":-30,"odd_a":1.77,"factor":"8.5"},"12":{"odd":60,"odd_a":2.06,"factor":"8.5"},"13":{"odd":-80,"odd_a":1.77,"factor":"8.5"}}';

//$variable = '{"10":{"odd":160,"odd_a":2.06,"factor":"8.5"},"11":{"odd":-130,"odd_a":1.77,"factor":"8.5"}}';

//$variable = '{"5":{"odd":110,"odd_a":2.06,"factor":"8.5"},"6":{"odd":-160,"odd_a":1.77,"factor":"7.5"}}';
/*
var_dump($variable);
$arreglo = json_decode($variable,true); 
var_dump($arreglo);
*/
$solucion = arreglo_sella($arreglo);
echo "<pre>";
print_r($solucion);
echo "</pre>";

//echo "solucion".$solucion."</br>";
//$variable2 = json_encode($solucion);
//var_dump($variable2);

//echo "variable".$solucion;

//var_dump($solucion);
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
                    var_dump($arreglo_definitivo);
                }//fin del if(isset($arreglo[$i]))    
            } else if($i == 6 || $i == 11 || $i == 13){//Si es baja
                if(isset($arreglo[$i])){
                    $logro = $arreglo[$i]['odd'];
                    $logro_a = $arreglo[$i]['odd_a'];
                    $factor = $arreglo[$i]['factor'];
                    var_dump($arreglo_definitivo);
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
        /*
        $arreglo_definitivo = json_encode($arreglo_definitivo);
        $arreglo_definitivo = substr($arreglo_definitivo, 1);
        $arreglo_definitivo = substr($arreglo_definitivo, 0, -1);
        */
        var_dump($arreglo_definitivo);
        
        $aux = array();
            foreach($arreglo_definitivo as $r){
                $aux[key($r)] = $r[key($r)];
                if(count($r) > 1){
                    $r2 = key($r) + 1;
                    $aux[$r2] = $r[$r2];
                }
            }
        $arreglo_definitivo = $aux;   
        
    } else
        $arreglo_definitivo = $arreglo;
    
    return $arreglo_definitivo;
}//fin de la funtion arreglo_sella($arreglo)

function arreglo_datos($i,$logro,$factor,$factor2,$bandera,$bandera2){
    var_dump($logro);
    $pos2 = strpos($logro, "-");//Se captura si el valor es negativo
        if ($pos2 !== false) {
            $logro = str_replace('-', '', $logro);
            $bandera = 1;
        }
        var_dump($logro);
        if(($i == 6 || $i == 11 || $i == 13)) {
            if($logro >= 135 && $logro < 150) {
                $bandera2 = 1;
                $factor = $factor - "0.5";
                $factor2 = $factor2 - "0.5";
            } else if($logro >= 150) {
                $bandera2 = 1;
                $factor = $factor - "1.0";
                $factor2 = $factor2 - "1.0";
            } 
        } else if(($i == 5 || $i == 10 || $i == 12)){
            if($logro >= 135 && $logro < 150) {
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