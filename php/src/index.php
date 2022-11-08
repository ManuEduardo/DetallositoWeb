<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>

<body>
    <h1><?php echo "PHP PARA PROYECTO" ?></h1>

    <form action="calculadora.php" method="post">
        <p>Numero 1: <input type="text" name="numero1" /></p>
        <p>Numero 2: <input type="text" name="numero2" /></p>
        <ul>
            <li>Ingrese 1 para sumar</li>
            <li>Ingrese 2 para restar</li>
            <li>Ingrese 3 para multiplicar</li>
            <li>Ingrese 4 para dividir</li>
            <li>Ingrese 5 para potenciar</li>
            <li>Ingrese otro para salir</li>
        </ul>
        <p>Operación : <input type="text" name="operacion" /></p>
        <p><input type="submit" /></p>
    </form>
</body>
</html>