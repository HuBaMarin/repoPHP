<?php
$interval1 = rand(1, 1024);
$interval2 = rand(1, 65536);
$interval3 = rand(1, 1048576);

?>
<!DOCTYPE html>
<html>

<body>
    <h2>Juego de adivinar número</h2>
    <form action="./game.php" method="post">
        <label for="interval1">Intervalo 1: (1,1024)</label>

        <input type="radio" name="intervalo" id="interval1" value="<?= $interval1 ?>"><br><br>

        <label for="interval2">Intervalo 2: (1,65536)</label>
        <input type="radio" name="intervalo" id="interval2" value="<?= $interval2 ?>"><br><br>

        <label for="interval3">Intervalo 3: (1,1048576)</label>
        <input type="radio" name="intervalo" id="interval3" value="<?= $interval3 ?>"><br><br>

        <input type="submit" value="Comenzar Juego">
    </form>
</body>

</html>