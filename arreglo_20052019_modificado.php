<?php
$arreglo = array(5=>array('odd'=>'-110','odd_a'=>'1.74','factor'=>'7.5'),6=>array('odd'=>'-130','odd_a'=>'2.1','factor'=>'4.5'),10=>array('odd'=>'-135','odd_a'=>'2.45','factor'=>'6.5'),11=>array('odd'=>'-100','odd_a'=>'2.4','factor'=>'7.0'),12=>array('odd'=>'-140','odd_a'=>'1.47','factor'=>'5.5'),13=>array('odd'=>'-90','odd_a'=>'1.1','factor'=>'5.5'));
var_dump($arreglo);

$solucion = arreglo_sella($arreglo);

var_dump($solucion);
function arreglo_sella($arreglo){
    $arreglo_definitivo = array();
    $bandera = 0;
    $bandera2 = 0;
    $bandera5 = 0;
    $bandera6 = 0;
    $bandera10 = 0;
    $bandera11 = 0;
    $bandera12 = 0;
    $bandera13 = 0;
    $logro_a2 = 0;
    $factor2 = 0;
    $factor52 = 0;
    $valor = 0;
    
    if(count($arreglo) > 0) {
        for($i=5;$i<=13;$i++){
            switch($i){
                case "5"://es Alta
                    $logro = $arreglo[$i]['odd'];
                    $logro_a = $arreglo[$i]['odd_a'];
                    $factor = $arreglo[$i]['factor'];
                    $factor52 = $arreglo[$i+1]['factor'];
                    $pos2 = strpos($logro, "-");
                        if ($pos2 !== false) {
                            $logro = str_replace('-', '', $logro);
                            $bandera2 = 1;
                        }
                        if($logro > 135 && $logro < 150) {
                            $bandera5 = 1;
                            $factor = "0.5" + $factor;
                            $factor52 = "0.5" + $factor52;
                        } else if($logro >= 150) {
                            $bandera5 = 1;
                            $factor = "1.0" + $factor;
                            $factor52 = "1.0" + $factor52;
                        }
                        if($bandera2 == 1 && $bandera5 == 1)
                            $logro = "-110";
                        else if($bandera2 == 0 && $bandera5 == 1)
                            $logro = "110";
                        else if($bandera2 == 1 && $bandera5 == 0)
                            $logro = "-".$logro;
                    $factor =   number_format($factor, 2, '.', '.');
                    $factor52 =   number_format($factor52, 2, '.', '.');
                    
                    $logro5 = $logro;
                    $logro_a5 = $logro_a;
                    $factor5 = $factor;
                    $bandera2 = 0;
                    array_push($arreglo_definitivo, array($i => array("odd"=>$logro,"odd_a"=>$logro_a,"factor"=>$factor)));                   
                    
                break;            
                case "6"://es baja
                    $logro = $arreglo[$i]['odd'];
                    $logro_a = $arreglo[$i]['odd_a'];
                    $factor = $arreglo[$i]['factor'];
                    $pos2 = strpos($logro, "-");//Se captura si el valor es negativo
                        if ($pos2 !== false) {
                            $logro = str_replace('-', '', $logro);
                            $bandera2 = 1;
                        }
                        if($logro > 135 && $logro < 150) {
                            $bandera6 = 1;
                            $factor = $factor - "0.5";
                            if($factor52 != $factor)
                                $factor52 = $factor5 - "0.5";
                        } else if($logro >= 150) {
                            $bandera6 = 1;
                            $factor = $factor - "1.0";
                            if($factor52 != $factor)
                                $factor52 = $factor5 - "1.0";
                        } 
                        
                        if($bandera2 == 1 && $bandera6 == 1)
                            $logro = "-110";
                        else if($bandera2 == 0 && $bandera6 == 1)  
                            $logro = "110";
                        else if($bandera2 == 1 && $bandera6 == 0)
                            $logro = "-".$logro;        
                        $factor =   number_format($factor, 2, '.', '.');
                        $factor52 =   number_format($factor52, 2, '.', '.');
                       
                        if($bandera5 == 1)
                            array_push($arreglo_definitivo, array($i => array("odd"=>$logro5,"odd_a"=>$logro_a,"factor"=>$factor52)));
                        else if($bandera6 == 1){
                            array_pop($arreglo_definitivo);
                            array_push($arreglo_definitivo, array($i-1 => array("odd"=>$logro,"odd_a"=>$logro_a5,"factor"=>$factor52),$i => array("odd"=>$logro,"odd_a"=>$logro_a,"factor"=>$factor)));
                        }else {    
                            array_push($arreglo_definitivo, array($i => array("odd"=>$logro,"odd_a"=>$logro_a,"factor"=>$factor)));
                        }
                        $bandera2 = 0; 
                break; 
                case "10"://es Alta
                    $logro = $arreglo[$i]['odd'];
                    $logro_a = $arreglo[$i]['odd_a'];
                    $factor = $arreglo[$i]['factor'];
                    $factor52 = $arreglo[$i+1]['factor'];
                    $pos2 = strpos($logro, "-");
                        if ($pos2 !== false) {
                            $logro = str_replace('-', '', $logro);
                            $bandera2 = 1;
                        }
                        if($logro > 135 && $logro < 150) {
                            $bandera10 = 1;
                            $factor = "0.5" + $factor;
                            $factor52 = "0.5" + $factor52;
                        } else if($logro >= 150) {
                            $bandera10 = 1;
                            $factor = "1.0" + $factor;
                            $factor52 = "1.0" + $factor52;
                        }
                        if($bandera2 == 1 && $bandera10 == 1)
                            $logro = "-120";
                        else if($bandera2 == 0 && $bandera10 == 1)
                            $logro = "120";
                        else if($bandera2 == 1 && $bandera10 == 0)
                            $logro = "-".$logro;
                    $factor =   number_format($factor, 2, '.', '.');
                    $factor52 =   number_format($factor52, 2, '.', '.');
                    
                    $logro10 = $logro;
                    $logro_a10 = $logro_a;
                    $factor10 = $factor;
                    $bandera2 = 0;
                    array_push($arreglo_definitivo, array($i => array("odd"=>$logro,"odd_a"=>$logro_a,"factor"=>$factor)));                   
                    
                break;            
                case "11"://es baja
                    $logro = $arreglo[$i]['odd'];
                    $logro_a = $arreglo[$i]['odd_a'];
                    $factor = $arreglo[$i]['factor'];
                    $pos2 = strpos($logro, "-");//Se captura si el valor es negativo
                        if ($pos2 !== false) {
                            $logro = str_replace('-', '', $logro);
                            $bandera2 = 1;
                        }
                        if($logro > 135 && $logro < 150) {
                            $bandera11 = 1;
                            $factor = $factor - "0.5";
                            if($factor52 != $factor)
                                $factor52 = $factor10 - "0.5";
                        } else if($logro >= 150) {
                            $bandera11 = 1;
                            $factor = $factor - "1.0";
                            if($factor52 != $factor)
                                $factor52 = $factor10 - "1.0";
                        } 
                        
                        if($bandera2 == 1 && $bandera11 == 1)
                            $logro = "-120";
                        else if($bandera2 == 0 && $bandera11 == 1)  
                            $logro = "120";
                        else if($bandera2 == 1 && $bandera11 == 0)
                            $logro = "-".$logro;        
                        $factor =   number_format($factor, 2, '.', '.');
                        $factor52 =   number_format($factor52, 2, '.', '.');
                       
                        if($bandera10 == 1)
                            array_push($arreglo_definitivo, array($i => array("odd"=>$logro10,"odd_a"=>$logro_a,"factor"=>$factor52)));
                        else if($bandera11 == 1){
                            array_pop($arreglo_definitivo);
                            array_push($arreglo_definitivo, array($i-1 => array("odd"=>$logro,"odd_a"=>$logro_a10,"factor"=>$factor52),$i => array("odd"=>$logro,"odd_a"=>$logro_a,"factor"=>$factor)));
                        }else {    
                            array_push($arreglo_definitivo, array($i => array("odd"=>$logro,"odd_a"=>$logro_a,"factor"=>$factor)));
                        }
                        $bandera2 = 0; 
                break;   
                case "12"://es Alta
                    $logro = $arreglo[$i]['odd'];
                    $logro_a = $arreglo[$i]['odd_a'];
                    $factor = $arreglo[$i]['factor'];
                    $factor52 = $arreglo[$i+1]['factor'];
                    $pos2 = strpos($logro, "-");
                        if ($pos2 !== false) {
                            $logro = str_replace('-', '', $logro);
                            $bandera2 = 1;
                        }
                        if($logro > 135 && $logro < 150) {
                            $bandera12 = 1;
                            $factor = "0.5" + $factor;
                            $factor52 = "0.5" + $factor52;
                        } else if($logro >= 150) {
                            $bandera12 = 1;
                            $factor = "1.0" + $factor;
                            $factor52 = "1.0" + $factor52;
                        }
                        if($bandera2 == 1 && $bandera12 == 1)
                            $logro = "-120";
                        else if($bandera2 == 0 && $bandera12 == 1)
                            $logro = "120";
                        else if($bandera2 == 1 && $bandera12 == 0)
                            $logro = "-".$logro;
                    $factor =   number_format($factor, 2, '.', '.');
                    $factor52 =   number_format($factor52, 2, '.', '.');
                    
                    $logro12 = $logro;
                    $logro_a12 = $logro_a;
                    $factor12 = $factor;
                    $bandera2 = 0;
                    array_push($arreglo_definitivo, array($i => array("odd"=>$logro,"odd_a"=>$logro_a,"factor"=>$factor)));                   
                    
                break;            
                case "13"://es baja
                    $logro = $arreglo[$i]['odd'];
                    $logro_a = $arreglo[$i]['odd_a'];
                    $factor = $arreglo[$i]['factor'];
                    $pos2 = strpos($logro, "-");//Se captura si el valor es negativo
                        if ($pos2 !== false) {
                            $logro = str_replace('-', '', $logro);
                            $bandera2 = 1;
                        }
                        if($logro > 135 && $logro < 150) {
                            $bandera13 = 1;
                            $factor = $factor - "0.5";
                            if($factor52 != $factor)
                                $factor52 = $factor12 - "0.5";
                        } else if($logro >= 150) {
                            $bandera13 = 1;
                            $factor = $factor - "1.0";
                            if($factor52 != $factor)
                                $factor52 = $factor12 - "1.0";
                        } 
                        
                        if($bandera2 == 1 && $bandera13 == 1)
                            $logro = "-120";
                        else if($bandera2 == 0 && $bandera13 == 1)  
                            $logro = "120";
                        else if($bandera2 == 1 && $bandera13 == 0)
                            $logro = "-".$logro;        
                        $factor =   number_format($factor, 2, '.', '.');
                        $factor52 =   number_format($factor52, 2, '.', '.');
                       
                        if($bandera12 == 1)
                            array_push($arreglo_definitivo, array($i => array("odd"=>$logro12,"odd_a"=>$logro_a,"factor"=>$factor52)));
                        else if($bandera13 == 1){
                            array_pop($arreglo_definitivo);
                            array_push($arreglo_definitivo, array($i-1 => array("odd"=>$logro,"odd_a"=>$logro_a12,"factor"=>$factor52),$i => array("odd"=>$logro,"odd_a"=>$logro_a,"factor"=>$factor)));
                        }else {    
                            array_push($arreglo_definitivo, array($i => array("odd"=>$logro,"odd_a"=>$logro_a,"factor"=>$factor)));
                        }
                        $bandera2 = 0; 
                break;              
            }//fin del switch($i)    
        }//fin del for($i=0;$i<count($arreglo);$i++)
    } else
        $arreglo_definitivo = $arreglo;
    
    return $arreglo_definitivo;
}//fin de la funtion arreglo_sella($arreglo)

?>