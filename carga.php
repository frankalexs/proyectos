<?php
$estatus = 0;
$sella1 = array();
$sella2 = array();
$aceptados = array();
array_push($sella1,array('fecha'=>'08042019','ref'=>'51_08042019_1','monto'=>'1000.00'));
array_push($sella1,array('fecha'=>'08042019','ref'=>'51_08042019_1','monto'=>'1000.00'));
array_push($sella1,array('fecha'=>'08042019','ref'=>'51_08042019_3','monto'=>'3000.00'));
array_push($sella1,array('fecha'=>'08042019','ref'=>'51_08042019_3','monto'=>'3000.00'));
array_push($sella1,array('fecha'=>'09042019','ref'=>'51_08042019_1','monto'=>'2000.00'));


foreach($sella1 as $a){
	$sella2[$a['ref']][$a['fecha']][$a['monto']][]=1;
}

echo "<pre>";
print_r($sella1);
print_r($sella2);
echo "</pre>";

if(!empty($sella2['51_08042019_1']['09042019']['2000.00'])){
	if(count($sella2['51_08042019_1']['09042019']['2000.00']) > 1){
		echo "si existe lo elimino<br>";
		//$aceptados = array_pop($sella2['51_08042019_1']['09042019']['2000.00']);
		array_push($aceptados,array_pop($sella2['51_08042019_1']['09042019']));
	}else{
		array_push($aceptados,$sella2['51_08042019_1']['09042019']);
		unset($sella2['51_08042019_1']['09042019']);
	}
		//unset($sella2[$as['ref']][$as['fecha']][$as['monto']]);
}else{
	echo "NO existe<br>";
}

/*foreach($a as $as){
	if(!empty($sella2[$as['ref']][$as['fecha']][$as['monto']])){
		echo "si existe lo elimino<br>";
		$aceptados = $sella2[$as['ref']][$as['fecha']][$as['monto']];
		unset($sella2[$as['ref']][$as['fecha']][$as['monto']]);
	}else{
		echo "NO existe<br>";
	}
}*/

echo "<pre>";
print_r($sella2);
print_r($aceptados);
echo "</pre>";

?>