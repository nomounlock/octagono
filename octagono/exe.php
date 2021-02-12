<html>
    <head><title>Calcular área de un octagono usando la longitud de sus lado</title></head>
        <body>
            <?php
            if(isset($_POST['btn'])&&$_POST['btn']=='calcular'){

$lado = $_POST['lado'];

$area = null;


if(!empty($lado)){

    echo "<h2 align = 'center'> Calcular área de un octagono usando la longitud de sus lados</h2>";
$area =2 * (1 + (sqrt(2)))*pow($lado, 2);

echo "<br/><br/>";
echo "<br>Area del octágono: ". $area;

echo "<br/><br/>";
echo "<a href ='datos.html'>Regresar</a>";
}
}

            
            ?>
            </body>
            </html>
