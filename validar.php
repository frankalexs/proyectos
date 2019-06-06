<?php
/*
	$dia = "15";
	$fin = "31";
	$mes = "07";
	$year = "2019";
	$fechaini =$year."-".$mes."-".$dia;
	$fechafin =$year."-".$mes."-".$fin;
    $valor = calculo_dias_quincena($fechaini, $fechafin);
    */
    
    /* Se valida si een la data de sella es de la forma referencia_fecha, en caso de ser afirmativo se coloca solo la referencia*/
    /*
    $referencia = "25578242663_27052019";
    
	$posreferencia = strpos($referencia, "_");
		if($posreferencia !== false)
            $referencia = substr($referencia, 0, $posreferencia) ;    
    */
    //$arreglo = array(329201122271,329201122361,329201122352,329201122321,329201122182,329201122183,329200112272,329201122151,329201122351,329201122152,329201122181,329200112242,329200112243,329200112247,329200112271,329200112241,329200112244,329200112245,329200112246,329200112111,329212223515,329212223516,329212223517,329212223511,329212223512,329212223513,329212223514,329212223510,329212223518,329201222361,329201222410,329201222355,329201222358,329201222359,329201222351,329201222352,329201222357,329201222353,329201222354,329201222412,329201222413,329201222356,329201222411,329201222321,329201222182,329201222183,329200122282,329201222111,329201222154,329201222181,329200122249,329200122271,329201222152,329201222153,329200122281,329201222112,329201222151,329201222184,329200122248,329200122241,329201222426,329201222427,329201222419,329201222424,329201222425,329201222415,329201222416,329201222422,329201222423,329201222417,329201222418,329201222420,329201222421,329201222428,329201222414,329200122242,329200122243,329200122246,329200122247,329200122244,329200122245,329200122111,329201221114,329201221115,329200122115,329200122118,329201221112,329201221113,329201221111,329200122116,329200122117,329200122114,329201221110,329200122119,329200122112,329201221124,329201221125,329201221120,329201221126,329201221117,329201221118,329201221127,329201221128,329201221121,329201221129,329201221130,329201221116,329201221122,329201221123,329201221119,329200122113,329201221136,329201221131,329201221137,329201221133,329201221134,329201221135,329201221139,329201221140,329201221138,329201221132,329201221167,329201221155,329201221162,329201221159,329201221166,329201221152,329201221153,329201221164,329201221156,329201221163,329201221154,329201221151,329201221142,329201221149,329201221147,329201221145,329201221144,329201221171,329201221170,329201221172,329201221183,329201221168,329201221184,329201221169,329201221185,329201221200,329201221196,329201221192,329201221199,329201221198,329201221205,329201221204,329201221194,329201221195,329201221197,329201221202,329201221201,329201221190,329201221188,329201221189);
    //$referencia = "329200272243";
    //$referencia2 = $referencia;
    /*
    $arreglo_referencia = array();
    for($i=0; $i<=count($arreglo);$i++){
        $pos = strpos($arreglo[$i], "32920");//
            if($pos !== false){
                $referencia = intval(substr($arreglo[$i],-7));	        
                $referencia = ltrim($referencia, "0"); //Se elimina ceros a la derecha de la referencia
                array_push($arreglo_referencia, array('referencia' => $arreglo[$i], 'referencia_banco' => trim($referencia)));
            }
    }
    */
    $monto = "2,389,109.18";
    $monto2 =  $monto;
    $pos = strpos($monto, ",");
    if($pos !== false)
        $monto = str_replace(',', '', $monto);
    echo "monto defintitivo:".$monto."<br>";
    
    /*
    echo "<pre>";
    print_r($arreglo_referencia); 
    echo "</pre>";
        
    echo "referencia original :".$referencia2."</br>";
    echo "referencia modificada :".$referencia."</br>";
      */      
            /*
echo "dias laborales :".$valor."</br>";
echo "dias laborales :".$mes."</br>";
*/
function calculo_dias_quincena($fechaini, $fechafin) {//calculos de dias por quincena
    $cont = 0;
    $band = dias_transcurridos($fechaini, $fechafin); //preguntamos si ya pasamos el fin de mes o el final del rango de fecha 
    for ($i = 0; $i < $band; $i++) {
        $texto1 = date('w', strtotime($fechaini));
        if (($texto1 != 0) && ($texto1 != 6)) { //si el dia es diferente de sabado y domingo, se incrementa
            $cont++;
        }
        $year1 = substr($fechaini, 0, 4);
        $dia1 = substr($fechaini, 8, 2);
        $mes1 = substr($fechaini, 5, 2);
        $dia1 = $dia1 + 1;
        $dia1 = dia_con_cero($dia1);
        $fechaini = $year1 . "-" . $mes1 . "-" . $dia1;
    }
    return $cont;
}

function dias_transcurridos($fecha_i, $fecha_f) {
    $dias = (strtotime($fecha_i) - strtotime($fecha_f)) / 86400;
    $dias = abs($dias);
    $dias = floor($dias);
    return $dias + 1;
}

function dia_con_cero($dia) {//función que retorna el dia en formato de doble dígito cuando sea necesario y recibe como parámetro el dia en formato de 2 dígitos 
    if ($dia < 10) {
        $dia = "0" . $dia;
    }

    return $dia;
}
?>