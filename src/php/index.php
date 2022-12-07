<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>
    <h1>Hola</h1>
    <?php
        include("./src/conexion.php");
        $con = conectar();

        $result = $con->query("select * from usuario");
        while($row = $result->fetch_assoc()){
            echo "<p>".$row["nombre"]." | ".$row["tipo_usuario"]." .</p>";
        }
        $con->close();
    ?>
</body>
</html>