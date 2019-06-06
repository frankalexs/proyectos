<?php
$fecha1 = "12-2-2019";
$fecha2 = "1-2-2019";
$fecha3 = "1-12-2019";
$fecha4 = "1-2-19";
$fecha5 = "11-12-19";
$fecha6 = "1-10-19";
$fecha7 = "11-1-19";

//echo "fecha:" .$fecha1."<br>";
/*
$fecha = date_create_from_format('j-M-Y', $fecha);
echo "fecha".date_format($fecha, 'm-d-Y')."<br>";
*/
/*
$formato = 'd-m-Y';
$fecha = DateTime::createFromFormat($formato, $fecha1);
echo "Fecha1: ".$fecha1." formateada: " . $fecha->format('Y-m-d') . "<br>";
$fecha = DateTime::createFromFormat($formato, $fecha2);
echo "Fecha2: ".$fecha2." formateada: " . $fecha->format('Y-m-d') . "<br>";
$fecha = DateTime::createFromFormat($formato, $fecha3);
echo "Fecha3: ".$fecha3." formateada: " . $fecha->format('Y-m-d') . "<br>";
$fecha = DateTime::createFromFormat($formato, $fecha4);
echo "Fecha4: ".$fecha4." formateada: " . $fecha->format('Y-m-d') . "<br>";
$fecha = DateTime::createFromFormat($formato, $fecha5);
echo "Fecha5: ".$fecha5." formateada: " . $fecha->format('Y-m-d') . "<br>";
$fecha = DateTime::createFromFormat($formato, $fecha6);
echo "Fecha6: ".$fecha6." formateada: " . $fecha->format('Y-m-d') . "<br>";
$fecha = DateTime::createFromFormat($formato, $fecha7);
echo "Fecha7: ".$fecha7." formateada: " . $fecha->format('Y-m-d') . "<br>";
*/

//echo "obj_fecha:" .$obj_fecha."<br>";


//echo "year:".$year."<br>";

 //$referencia = substr($referencia,1);
 $ref_sella = "0365-*365";
 echo "valor2:" .$ref_sella."<br>";
 $pos   = strpos($ref_sella, "-");//para la referencia dle mercantil
 if($pos !== false)
 {
	$valor = substr($ref_sella,0,1);
	var_dump($valor);
	if($valor == 0)
		$ref_sella = substr($ref_sella, 1,$pos-1);
	else
		$ref_sella = substr($ref_sella, 0,$pos);	
  }
  
 
 /*
 echo "fecha:" .$fecha."<br>";
 $fecha = substr($fecha, 0,10)  ; 
 */
 echo "valor2:" .$ref_sella."<br>";
 
 /*
 echo "fecha1: ".$fecha."<br>";
 
 //echo "year: ".$year."<br>";
 $pos = strpos($fecha, "/");
    if ($pos === false) //Si no existe en la fecha se arregla la fecha del excel pasandola a formato en español
    {
      $year = intval(substr($fecha,-4));
	  if(strlen($year) == 4)
	  {
			$formato = 'd-m-Y';
			$fecha = DateTime::createFromFormat($formato, $fecha);
			$fecha = $fecha->format('d/m/Y');
	  }
	  else
	  {
			$formato = 'd-m-y';
			$fecha = DateTime::createFromFormat($formato, $fecha);
			$fecha = $fecha->format('d/m/Y');
	  }
	}
	else
	{
		$year = intval(substr($fecha,-4));
		if(strlen($year) == 4)
		{
			$formato = 'd/m/Y';
			$fecha = DateTime::createFromFormat($formato, $fecha);
			$fecha = $fecha->format('d/m/Y');
		}
		else
		{
			$formato = 'd/m/y';
			$fecha = DateTime::createFromFormat($formato, $fecha);
			$fecha = $fecha->format('d/m/Y');
		}
	}	


echo "valor2:" .$fecha."<br>";

function valormonto($monto2) {
    $pos1 = strpos($monto2, ".");
    $pos2 = strpos($monto2, ",");
    if(strlen($monto2) == 6)
    {
        if($pos1 !== false)
        {
            $monto2 = str_replace('.', ',', $monto2);		
        }   
    }
    else{
        if($pos1 !== false) 
        {
            $monto2 = str_replace('.', '', $monto2);
            $monto2 = str_replace(',', '.', $monto2);
            $monto2 = round ($monto2,2);
        }
        else if($pos2 !== false)
        {
            $monto2 = str_replace(',', '.', $monto2);
            $monto2 = round ($monto2,2);
        }
    }
    return $monto2;
}

*/
$r = "../system4data_conciliacion_01032019/";
echo "
 
<script type='text/javascript' src='" . $r . "ref/js/plugins/bootstrap/bootstrap-datepicker.js'></script>     

";
//echo "<link rel='stylesheet' type='text/css' id='theme' href='" . $r . "ref/css/theme-default_29.css'/><link rel='stylesheet' type='text/css' id='theme' href='" . $r . "ref/css/style_8.css'/>  ";

$fecha = '12-02-2019';
?>

<div class="col-xs-6 col-sm-6"  style= "max-width: 150px;" >
                            <input type="text" class="dp text-center form-control" placeholder="click" id="fecha" name='fecha' value="<?php echo $fecha; ?>"  >
                            <input type="hidden" id="fechaold" value="<?php echo $fecha; ?>"/>
                            <script type="text/javascript">
                                $(document).ready(function () {
                                   $('#fecha').datepicker({
                                        format: "dd/mm/yyyy"
                                    });

                                    $('.dp').on('change', function () {
                                        $('.datepicker').hide();
                                        });
                                });
                            </script>
                           
                    </div>  