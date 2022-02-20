<!DOCTYPE html>
<html lang="en">
    <head><title>Calculo del area de un octagono regular</title></head>
<body>
<?php
   
    if(isset($_POST['btn']) && $_POST['btn'] == 'Calcular') {

        $Lado = $_POST['lado'];
        $Apotema = $Lado/0.83;
        $area   = null;

        if(!empty($Lado))  {

      	    if(is_numeric($Lado))  {

                echo "<h2 align='center' style='font-family: Arial;'>Calculo del area de un octagono regular</h2>";

                $area = (($Lado * 8) * $Apotema) / 2;

                echo "<br>Lado: " . $Lado;
                echo "<br>Apotema: " . $Apotema;

                echo "<br><br>";

                echo "<br>Área del octagono: " . $area . " cm^2 <br>";

                echo "<br><br>";

                echo "<a href='octagono.html'>Regresar</a>";
       	    }else{
                echo "El valor de base o de la Altura deben de ser numéricos";
                echo "<a href='octagono.html'>Regresar</a>";}
        }else{
            echo "El valor de base o de la Altura no deben de estar vacíos";
            echo "<a href='octagono.html'>Regresar</a>";}
    }else{
        echo "debe de realizar el envío pulsado el botón de calcular";
	    echo "<a href='octagono.html'>Regresar</a>";} 
?>
</body>
</html>
