<?php
session_start();
?>
<?php
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

require_once '../modelo/loginModel.php';

$cont = new login_model();
$datos = $cont->get_login($usuario, $contrasena);

if ($datos != null) {
    $_SESSION['loggedin'] = true;
    $_SESSION['id'] = $row['id'];
    $_SESSION['username'] = $usuario;
    $_SESSION['rol'] = $row['rol'];
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (30 * 60);
    
    header('location: ../vista/inicio/inicio.php');
} else {
    echo '<script>alert ("Usuario o contraseña incorrectos");</script><meta http-equiv="refresh" content="0; url=../index.php">';
}