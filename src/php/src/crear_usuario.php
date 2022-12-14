
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="estilos_2.css">
	<title></title>
</head>
<body>
    <?php
    session_unset();
    session_destroy();
    if (isset($_POST['nombre'], $_POST['correo'],$_POST['contrasena'],
            $_POST['contrasena2'], $_POST['edad'], $_POST['genero'], $_POST['numero'], $_POST['drone'])) {
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];
        $contrasena2 = $_POST['contrasena2'];
        $edad = $_POST['edad'];
        $genero = $_POST['genero'];
        $numero = $_POST['numero'];
        $drone = $_POST['drone'];

        if($contrasena==$contrasena2){
            crear_usuario();
        }else{
            echo'<script type="text/javascript">
        alert("Contraseñas diferentes");
        window.location.href="../../formularios/form_usuario.html";
        </script>';
        }
    } else { 
        echo'<script type="text/javascript">
        alert("Error al crear usuario");
        window.location.href="../../formularios/form_usuario.html";
        </script>';
    }

    function crear_usuario(){
        include("./conexion.php");
        $con = conectar();
        $oracion_sql="insert into usuario(nombre, correo, contrasena, edad, genero, numero, tipo_usuario) values($nombre, $correo, $contrasena, $edad, $genero, $numero, $drone);";
        $result = $con->query($oracion_sql);

        $con->close();

        echo'<script type="text/javascript">
        alert("Error al crear usuario");
        window.location.href="../../formularios/form_usuario.html";
        </script>';
    }
    ?>
</body>
</html>

        
        