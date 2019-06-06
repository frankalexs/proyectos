<html>
<style type="text/css">
<!--
table {
    font: 11px Verdana, Arial, Helvetica, sans-serif;
    color: #777;
    padding:7px;
}
-->
</style>
<?php
$datosTabla = array(
        array( "Pedro", 160, "#BDDA4C"),
        array( "Walter", 220, "#FF9A68"),
        array( "Maria", 80, "#69ABBF"),
        array( "Fernando", 225, "#FFDE68"),
        array( "Eliana", 35, "#AB6487")
);
$maximo = 0;
foreach ( $datosTabla as $ElemArray ) { $maximo += $ElemArray[1]; }
?>
<body>
<table width="400" cellspacing="0" cellpadding="2">
<?php foreach( $datosTabla as $ElemArray ) {
$porcentaje = round((( $ElemArray[1] / $maximo ) * 100),2);
?>
<tr>
    <td width="20%"><strong><?php echo( $ElemArray[0] ) ?></strong></td>
    <td width="10%"><?php echo( $porcentaje ) ?>%</td>
    <td>
        <table width="<?php echo($porcentaje) ?>%" bgcolor="<?php echo($ElemArray[2]) ?>">
        <tr><td></td></tr>
    </table>
    </td>
    </tr>
    <?php } ?>
</table>
</body>
</html>