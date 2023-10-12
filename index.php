<!-- inclusion de el script que permite realizar la conexion a bd -->
<?php include_once("includes/db.php");  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>survey</title>
</head>
<body>
    <form action="#" method="post">
        <h2>What is your favorite programming language?</h2>

        <!-- obciones de la encuesta -->
        <input type="radio" name="language" id="" value="c"> C <br>
        <input type="radio" name="language" id="" value="c++"> C++ <br>
        <input type="radio" name="language" id="" value="java"> Java <br>
        <input type="radio" name="language" id="" value="swift"> Swift <br>
        <input type="radio" name="language" id="" value="python"> Python <br>

        <!-- boton para votar -->
        <input type="submit" value="vote!">
    </form>

    <!-- prueba de la conexion a la bd-->
    <?php //$db = new DB(); $db->connect(); ?>

</body>
</html>