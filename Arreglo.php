<!DOCTYPE html>
<html lang="en">
    <head><title>Arreglos Asociativos</title></head>
<body>
<?php
   
    if(isset($_POST['btn']) && $_POST['btn'] == 'Guardar') {

        $Nombre = $_POST['nombre'];
        $Apellido = $_POST['apellido'];
        $Cedula = $_POST['cedula'];
        $Sueldo = $_POST['sueldo'];
        $Departamento = $_POST['departamento'];
        $Localizacion = $_POST['localizacion'];

        $Nombre2 = $_POST['nombre2'];
        $Apellido2 = $_POST['apellido2'];
        $Cedula2 = $_POST['cedula2'];
        $Sueldo2 = $_POST['sueldo2'];
        $Departamento2 = $_POST['departamento2'];
        $Localizacion2 = $_POST['localizacion2'];

        $Nombre3 = $_POST['nombre3'];
        $Apellido3 = $_POST['apellido3'];
        $Cedula3 = $_POST['cedula3'];
        $Sueldo3 = $_POST['sueldo3'];
        $Departamento3 = $_POST['departamento3'];
        $Localizacion3 = $_POST['localizacion3'];

        if(!empty($Nombre) or !empty($Apellido) or !empty($Cedula) or !empty($Sueldo) or !empty($Departamento)or !empty($Localizacion)
        or !empty($Nombre3) or !empty($Departamento2) or !empty($Cedula2) or !empty($Cedula3) or !empty($Nombre2))  {

      	    if(is_numeric($Sueldo) && is_numeric($Cedula) && is_numeric($Cedula2) && is_numeric($Cedula3)
              && is_numeric($Sueldo2) && is_numeric($Sueldo3))  {

                echo "<h2 align='center'>Lista de Datos</h2>";
                echo"<br><br>";
                
                $ArrayAsociativo1 = array("ID"=>'1' );
                $ArrayAsociativo2 = array("ID"=>'2' );
                $ArrayAsociativo3 = array("ID"=>'3' );

                $ArrayAsociativo1['Nombre'] = $Nombre;
                $ArrayAsociativo1['Apellido'] = $Apellido;
                $ArrayAsociativo1['Cedula'] = $Cedula;
                $ArrayAsociativo1['Sueldo'] = $Sueldo;
                $ArrayAsociativo1['Departamento'] = $Departamento;
                $ArrayAsociativo1['Localizacion'] = $Localizacion;

                $ArrayAsociativo2['Nombre2'] = $Nombre2;
                $ArrayAsociativo2['Apellido2'] = $Apellido2;
                $ArrayAsociativo2['Cedula2'] = $Cedula2;
                $ArrayAsociativo2['Sueldo2'] = $Sueldo2;
                $ArrayAsociativo2['Departamento2'] = $Departamento2;
                $ArrayAsociativo2['Localizacion2'] = $Localizacion2;

                $ArrayAsociativo3['Nombre3'] = $Nombre3;
                $ArrayAsociativo3['Apellido3'] = $Apellido3;
                $ArrayAsociativo3['Cedula3'] = $Cedula3;
                $ArrayAsociativo3['Sueldo3'] = $Sueldo3;
                $ArrayAsociativo3['Departamento3'] = $Departamento3;
                $ArrayAsociativo3['Localizacion3'] = $Localizacion3;


                foreach($ArrayAsociativo1 as $clase=>$Dato){
                    echo " " . $clase . " es " . $Dato;
                    echo "<br>";
                }
                echo"<br><br>";
                foreach($ArrayAsociativo2 as $clase2=>$Dato2){
                    echo " " . $clase2 . " es " . $Dato2;
                    echo "<br>";
                }
                echo"<br><br>";
                foreach($ArrayAsociativo3 as $clase3=>$Dato3){
                    echo " " . $clase3 . " es " . $Dato3;
                    echo "<br>";
                }
                echo"<br><br>";
                echo"<br><br>";
                


                //Para verificar que los datos se guardaron en el array correcto
                print_r($ArrayAsociativo1);
                echo"<br><br>";
                print_r($ArrayAsociativo2);
                echo"<br><br>";
                print_r($ArrayAsociativo3);
                //
                echo "<br/><br/>";

                echo "<a href='Arreglos.html'>Retornar</a>";
       	    }else{
                echo "Se debe ingresar un valor numerico en Sueldo y Cedula";
                echo "<a href='Arreglos.html'>Retornar</a>";}
        }else{
            echo "Los valores no pueden ser nulos";
            echo "<a href='Arreglos.html'>Retornar</a>";}
    }else{
        echo "debe de presionar el botón de Guardar";
	    echo "<a href='Arreglos.html'>Retornar</a>";} 
?>
</body>
</html>