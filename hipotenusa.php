<!DOCTYPE html>
<html lang="en">
    <head><title>Calculo de la hipotenusa de un triangulo rectangulo</title></head>
<body>
<?php
   
    if(isset($_POST['btn']) && $_POST['btn'] == 'Calcular') {

        $altura = $_POST['altura'];
        $base   = $_POST['base'];
        $areaE  = null;
        $area   = null;

        if(!empty($base) or !empty($altura))  {

      	    if(is_numeric($base) or is_numeric($altura))  {

                echo "<h2 align='center'>Calculo de la hipotenusa de un triangulo rectangulo</h2>";

                $areaE = ($base * $base) + ($altura * $altura);
                $area  = sqrt($areaE);

                echo "<br>Base: " . $base;
                echo "<br>Altura: " . $altura;
                echo "<br/><br/>";

                echo "<br>Hipotenusa del Triangulo Rectángulo: " . $area ." cm<br>";

                echo "<a href='index.html'>Retornar</a>";
       	    }else{
                echo "Se deben ingresar valores numericos en la base y altura";
                echo "<a href='index.html'>Retornar</a>";}
            }else{
            echo "Los valores no pueden ser nulos";
            echo "<a href='index.html'>Retornar</a>";}
    }else{
        echo "debe de presionar el botón de calcular";
	    echo "<a href='index.html'>Retornar</a>";} 
?>
</body>
</html>
