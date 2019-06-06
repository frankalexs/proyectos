<?php header('X-Accel-Buffering: no');?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHPCentral Progressbar</title>
        <style type="text/css">
            .barra{
                background-color: #f5f5f5;
                border-radius: 5px;
                height: 25px;
                width: 300px;
                border: solid 1px #ccc;
                box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset;
            }
            .progreso{
                border-radius: 5px;
                height: 25px;
                width: 0%;
                border-right: solid 1px #ccc;
                background-color: lightblue;
                background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
            }
            .porcentaje{
                padding-right: 7px;
                padding-top: 2px;
                text-align: right;
            }
        </style>
    </head>
    <body>
        <h3>PHPCentral Progressbar</h3>
        <div class="barra">
            <div class="progreso"><div class="porcentaje"></div></div>
        </div>
    </body>
</html>
<?php
@ob_flush();
flush();
$total = 200;
for ($i = 0; $i <= $total; $i = $i + 10):
    $actual = $i;
    $porcentaje = round(($actual / $total) * 100, 0);
    ?>
    <script type="text/javascript">
        document.getElementsByClassName("progreso")[0].style.width = "<?php echo $porcentaje; ?>%";
        document.getElementsByClassName("porcentaje")[0].innerHTML = "<?php echo $porcentaje; ?>%";
    </script>
    <?php
    @ob_flush();
    flush();
    usleep(500000);
endfor;
?>

