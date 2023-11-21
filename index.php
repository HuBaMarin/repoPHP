<?php
$resultado="";
$msj = "";
require 'Operacion.php';
if (isset($_POST['submit'])) {

    $cadena = $_POST['submit'];
    $tipo_operacion = Operacion::tipoOperacion($cadena);
    var_dump($tipo_operacion);
    switch ($tipo_operacion) {
        case Operacion::OPERACION_RACIONAL:
            $msj = "La operación $cadena es Racional";
//            $operacion = new OperacionRacional($cadena);
//            $resultado.= $operacion->operar();
            break;
        case Operacion::OPERACION_REAL:
            $msj = "La operación $cadena es Real";
//            $operacion = new OperacionReal($cadena);
//            $resultado.= $operacion->operar();
            break;
        case Operacion::ERROR:
            $msj = "La operación $cadena es Errónea";
//            $resultado.= "Operación errónea";
            break;
    }

}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?= "echo $msj" ?>
<form action="index.php" method="post">
    <label for="op1">Numero 1</label>
    <input type="text" name="op1" id="op1">

    <input type="submit" value="submit" name="submit">
</form>
</body>
</html>
