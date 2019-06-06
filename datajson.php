<?php
/*
$variable = '[["01\/03\/2019","211779084","13000.00","ERROR EN FECHA"],["01\/03\/2019","211777234","1000.00","ERROR EN FECHA"],["01\/03\/2019","211776892","2000.00","ERROR EN FECHA"],["01\/03\/2019","211774581","1000.00","ERROR EN FECHA"],["01\/03\/2019","211775295","8000.00","ERROR EN FECHA"],["01\/03\/2019","211769576","1690.00","ERROR EN FECHA"],["01\/03\/2019","211765419","21450.00","ERROR EN FECHA"],["01\/03\/2019","211761530","4000.00","ERROR EN FECHA"],["01\/03\/2019","211754824","1800.00","ERROR EN FECHA"],["01\/03\/2019","211743942","2000.00","ERROR EN FECHA"],["01\/03\/2019","211741456","6000.00","ERROR EN FECHA"],["01\/03\/2019","211741805","3000.00","ERROR EN FECHA"],["01\/03\/2019","211726581","1300.00","ERROR EN FECHA"],["01\/03\/2019","211726097","20000.00","ERROR EN FECHA"],["01\/03\/2019","211722516","3000.00","ERROR EN FECHA"],["01\/03\/2019","211721142","2000.00","ERROR EN FECHA"],["01\/03\/2019","211689516","3400.00","ERROR EN FECHA"],["01\/03\/2019","211686602","2500.00","ERROR EN FECHA"],["01\/03\/2019","211676215","2000.00","ERROR EN FECHA"],["01\/03\/2019","211675706","5986.00","ERROR EN FECHA"],["01\/03\/2019","211660907","3000.00","ERROR EN FECHA"],["01\/03\/2019","211659603","6000.00","ERROR EN FECHA"],["01\/03\/2019","211655822","1000.00","ERROR EN FECHA"],["01\/03\/2019","211653475","1100.00","ERROR EN FECHA"],["01\/03\/2019","211649882","4000.00","ERROR EN FECHA"],["01\/03\/2019","211646520","5000.00","ERROR EN FECHA"],["01\/03\/2019","211641874","1000.00","ERROR EN FECHA"],["01\/03\/2019","211640789","9500.00","ERROR EN FECHA"],["01\/03\/2019","211637606","-390.00","ERROR EN FECHA"],["01\/03\/2019","211637606","-390000.00","ERROR EN FECHA"],["01\/03\/2019","0","-7.80","ERROR EN FECHA"],["01\/03\/2019","211639255","3200.00","ERROR EN FECHA"],["01\/03\/2019","211638811","-300.00","ERROR EN FECHA"],["01\/03\/2019","211638811","-300000.00","ERROR EN FECHA"],["01\/03\/2019","0","-6.00","ERROR EN FECHA"],["01\/03\/2019","211627799","11000.00","ERROR EN FECHA"],["01\/03\/2019","211622206","2000.00","ERROR EN FECHA"],["01\/03\/2019","0","-0.24","ERROR EN FECHA"],["01\/03\/2019","0","-12.08","ERROR EN FECHA"],["01\/03\/2019","211615920","1648.00","ERROR EN FECHA"],["01\/03\/2019","211606227","2000.00","ERROR EN FECHA"],["28\/02\/2019","211601019","5000.00","ERROR EN REFERENCIA"],["28\/02\/2019","211531527","5000.00","ERROR EN REFERENCIA"],["28\/02\/2019","211513628","1000.00","ERROR EN REFERENCIA"],["28\/02\/2019","22","3000.00","ERROR EN REFERENCIA"],["28\/02\/2019","0","-10.62","ERROR EN REFERENCIA"],["28\/02\/2019","0","-531.00","ERROR EN REFERENCIA"],["28\/02\/2019","211284445","5000.00","ERROR EN REFERENCIA"],["28\/02\/2019","29","1000.00","ERROR EN REFERENCIA"]]';
$variable = json_decode(json_encode($variable),true);
$variable = json_decode($variable,true);
echo "<pre>";												
	print_r($variable);	
echo "</pre>";
*/
/*
$variable = "PNCASH-PAGO A PROV  00000000";
$pos = strpos($variable, "Inicial :");

echo "pos:".$pos."<br>";

$variable = "C./A. IGTF MOV.D: 000554772.";
$pos = strpos($variable, "Final:");

*/

//$fecha = fecha_esp(fecha_hoy());

//echo "fecha:".$fecha."<br>";
/*
$date1 = new DateTime("2019-02-28");
$date2 = new DateTime("2019-03-04");
$diff = $date1->diff($date2);
// will output 2 days
echo $diff->days . ' days ';
*/
$date = "2019-02-28";
//Incrementando 2 dias
//$date = date("Y-m-d");
//$date = new DateTime("2019-02-28");
/*
$mod_date = strtotime($date."+ 1 days");
echo date("Y-m-d",$mod_date) . "\n";
*/
/*
$monto2 = "6825,67-";
$pos2 = strpos($monto2, "-");
	if($pos2 !== false)
		$monto2 = substr($monto2,0,-1);
	
echo $monto2 . "\n";
*/
$fecha = "2019-02-01";
$hasta = "2019-02-02";
$fecha_desde = new DateTime($fecha);
$fecha_hasta = new DateTime($hasta);
$diff = $fecha_desde->diff($fecha_hasta);
$diferencia_fecha = $diff->days;
/*
$fechaini = $fecha;
//for($i=0;$i<$diferencia_fecha;$i++) {
for($i=0;$i <= intval($diferencia_fecha);$i++) {
	echo $i."<br>";
	echo intval($diferencia_fecha)."<br>"; 
	echo $fechaini."<br>"; 
	//$diferencia_fecha--;
	$path = '../../repositorio/conciliacion/'.$fechaini .'/';
	echo $path."<br>";
	$fechaini = date("Y-m-d",strtotime($fechaini."+ 1 days"));
	*/
$fechaini = $fecha;
								for($i=0;$i <= intval($diferencia_fecha);$i++) {
									var_dump($fechaini);
									var_dump($i);
									var_dump(intval($diferencia_fecha));
									$path = '../../repositorio/conciliacion/'.$fechaini .'/';
									
									var_dump($path);
									$fechaini = date("Y-m-d",strtotime($fechaini."+ 1 days"));
									var_dump($fechaini);
}

?>