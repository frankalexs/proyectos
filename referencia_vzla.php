<?php
//$arrayreferencia = array(329201122271,329201122361,329201122352,329201122321,329201122182,329201122183,329200112272,329201122151,329201122351,329201122152,329201122181,329200112242,329200112243,329200112247,329200112271,329200112241,329200112244,329200112245,329200112246,329200112111,329212223515,329212223516,329212223517,329212223511,329212223512,329212223513,329212223514,329212223510,329212223518,329201222361,329201222410,329201222355,329201222358,329201222359,329201222351,329201222352,329201222357,329201222353,329201222354,329201222412,329201222413,329201222356,329201222411,329201222321,329201222182,329201222183,329200122282,329201222111,329201222154,329201222181,329200122249,329200122271,329201222152,329201222153,329200122281,329201222112,329201222151,329201222184,329200122248,329200122241,329201222426,329201222427,329201222419,329201222424,329201222425,329201222415,329201222416,329201222422,329201222423,329201222417,329201222418,329201222420,329201222421,329201222428,329201222414,329200122242,329200122243,329200122246,329200122247,329200122244,329200122245,329200122111,329201221114,329201221115,329200122115,329200122118,329201221112,329201221113,329201221111,329200122116,329200122117,329200122114,329201221110,329200122119,329200122112,329201221124,329201221125,329201221120,329201221126,329201221117,329201221118,329201221127,329201221128,329201221121,329201221129,329201221130,329201221116,329201221122,329201221123,329201221119,329200122113,329201221136,329201221131,329201221137,329201221133,329201221134,329201221135,329201221139,329201221140,329201221138,329201221132,329201221167,329201221155,329201221162,329201221159,329201221166,329201221152,329201221153,329201221164,329201221156,329201221163,329201221154,329201221151,329201221142,329201221149,329201221147,329201221145,329201221144,329201221171,329201221170,329201221172,329201221183,329201221168,329201221184,329201221169,329201221185,329201221200,329201221196,329201221192,329201221199,329201221198,329201221205,329201221204,329201221194,329201221195,329201221197,329201221202,329201221201,329201221190,329201221188,329201221189);

$arrayreferencia = array(329200272243,329202722355,329200272271,329202722351,329202722352,329202722181,329202722182,329202722353,329202722354,329202722111,329202722151,329202722152,329202722153,329200272241,329200272242,329227021902,329200282115,329202821114,329202821113,329202821115,329202821110,329202821111,329202821116,329202821117,329202821112,329200282117,329202821161,329202821155,329202821160,329202821151,329202821153,329202821154,329202821159,329202821148,329202821158,329202821156,329202821149,329202821150,329202821152,329202821157,329200282119,329202821130,329202821131,329202821119,329202821132,329202821125,329202821122,329202821123,329202821126,329202821124,329202821129,329202821127,329202821128,329202821120,329202821121,329200282116,329202821166,329202821169,329202821175,329202821173,329202821164,329202821165,329202821174,329202821168,329202821167,329202821172,329202821162,329202821163,329202821170,329202821171,329200282118,329202821139,329202821147,329202821134,329202821140,329202821136,329202821142,329202821137,329202821133,329202821141,329202821135,329202821144,329202821145,329202821138,329202821146,329200282114,329200282111,329202821179,329202821182,329202821185,329202821176,329202821177,329202821181,329202821186,329202821180,329202821184,329202821178,329202821183,329200282112,329200282113);
$referencia = array();

foreach($arrayreferencia as $referencia2){
	$referencia[] = intval(substr($referencia2,-6));
}
 echo "<pre>";
   print_r($referencia); 
 echo "</pre>";
?>