<?php
$sella1 = array();
$estatus = 0;
array_push($sella1,array('08042019','51_08042019_1','1000.00',$estatus));
array_push($sella1,array('08042019','51_08042019_2','1010.00',$estatus));
//foreach ($sella1 as $b):
echo "<pre>";
print_r($sella1);
echo "<pre>";
echo "contador:".count($sella1)."<br>";
for($i=0;$i<count($sella1);$i++){
	//if($sella1[$i][4] == 0)
	echo "i:".$i." valor:".$sella1[$i][0]."estatus:".$sella1[$i][3] ."<br>";
	if($sella1[$i][3] == 0)
		$sella1[$i][3] = 1;
}		
//endforeach;
/*//$sella1 = ('0'=>'51_08042019_1','1'=>'51_08042019_2');

array_push($sella1,array('08042019','51_08042019_1','10000.00'));
array_push($sella1,array('08042019','51_08042019_2','1000.00'));
echo "<pre>";
print_r($sella1);
echo "<pre>";
*/
echo "<pre>";
print_r($sella1);
echo "<pre>";
/*
$banco = "51";
$variable = 0;
$si = 0;
	$pos = strpos($sella, "_");
	if($pos !== false){
		$variable = $sella;
		echo "pocision: ".$pos."<br>";
		$variable = substr($variable, 0,$pos);
		if($variable === $banco)
			$si = 1;
	}

echo "variable: ".$variable."<br>";
echo "si: ".$si."<br>";

echo "<pre>";
print_r($sella1);
echo "<pre>";
*/
?>