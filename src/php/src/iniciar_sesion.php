
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
    if (isset($_POST['correo'], $_POST['contrasena'])) {
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];
    
        validar_logueo($correo, $contrasena);
    } else {
        echo "xd";
    }

    function validar_logueo($correo, $contrasena){
        include("./conexion.php");
        $con = conectar();
        $id = null;

        $result = $con->query("select id, correo, contrasena, nombre from usuario");
        while($row = $result->fetch_assoc()){
            if($row['correo'] ==$correo && $row['contrasena'] ==$contrasena){
                $id = $row['id'];
                $nombre = $row['nombre'];
                session_start();
                $_SESSION['logged_user_id'] = $id;
                $_SESSION['logged_user_name'] = $nombre;
                    header("Location: ../../index.html");
                    die();
                return;
            }
        }
        $con->close();

        echo'<script type="text/javascript">
        alert("Usuario Incorrecto");
        window.location.href="../../formularios/form_ingreso.html";
        </script>';
    }
    ?>
</body>
</html>

        
        