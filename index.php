<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Virtual</title>
</head>
<body>
<P>Hola Mundo</P>
<?php echo "Hola Mundo en PHP"; 
require_once "controladores/plantilla.controlador.php";
$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();

?>
</body>
</html>


