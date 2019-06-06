<?php
$variable = "{'id':'','0':'','id_empleado':'10','1':'10','fechacreacion':'2019-05-31 10:04:18','2':'2019-05-31 10:04:18','fechamodificacion':'2019-05-31 10:04:18','3':'2019-05-31 10:04:18','tipo':'1','4':'1','transaccion':'8','5':'8','referencia':' ','6':' ','monto':'10','7':'10','id_usuario':'237','8':'237','nota':'CARGA DESDE: 27-05-2019 / HASTA: 31-05-2019','9':'CARGA DESDE: 27-05-2019 / HASTA: 31-05-2019','archivo':'','10':'','estatus':'1','11':'1','tipopago':'1','12':'1'}"; 
var_dump($variable);

$v2 = json_decode($variable, true); 

var_dump($v2);

?>