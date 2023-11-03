<?php

$mensaje = "";
$interval1 = $_POST['interval1'];
$interval2 = $_POST['interval2'];
$interval3 = $_POST['interval3'];

$adivina = rand($interval1, $interval3);

/*if ($interval1 = $_POST['interval1']) {
    if () {
        $mensaje = "Más grande";
    } elseif ($adivina > $interval1) {
        $mensaje = "Más pequeño";
    } else {
        $mensaje = "Igual";
    }
} elseif ($interval2 = $_POST['interval2']) {
    if ($adivina < $interval2) {
        $mensaje = "Más grande";
    } elseif ($adivina > $interval2) {
        $mensaje = "Más pequeño";
    } else {
        $mensaje = "Igual";
    }
} elseif ($interval3 = $_POST['interval3']) {
    if ($adivina < $interval3) {
        $mensaje = "Más grande";
    } elseif ($adivina > $interval3) {
        $mensaje = "Más pequeño";
    } else {
        $mensaje = "Igual";
    }
} else {
    echo "Error, valor no especificado";
}
*/


?>

<!DOCTYPE html>
<html>

<body>
    <p>El número es: <?= $adivina ?>?</p>

    <p>
        <?php

        switch ($adivina) {
            case $adivina > $interval1:
                echo " <label for='resp'>Mayor</label> ";
                echo "<input type='radio' name='resp' checked>";
                break;
            case $adivina < $interval2:
                echo "<label for='resp'>Menor";
                break;
            default:

                break;
        }
        ?>
    </p>
</body>

</html>