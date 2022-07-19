<?php
require 'includes/app.php';
inclurTemplate('header');


//importar conexion a base de datos.
$db = conexionDb();

$resultado = $_GET['resultado'] ?? null;

$mensaje = '<p class="alerta exito">Cuenta creada correctamente. Ya puede loguearse!</p>';

$errores = [];
$usuario = '';
$password = '';

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $usuario = mysqli_real_escape_string($db, filter_var($_POST['usuario'], FILTER_DEFAULT));
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (!$usuario) {
        $errores[] = 'DEBE ESCRIBIR UN NOMBRE DE USUARIO';
    }

    if (!$password) {
        $errores[] =  'DEBE ESCRIBIR UNA CONTRASENA';
    }


    if (empty($errores)) {
        $query = " SELECT finanzasId, usuario, password FROM usuarios WHERE usuario = '${usuario}' ";
        $consulta = mysqli_query($db, $query);


        if ( $consulta-> num_rows ) {
            $usuarioDB = mysqli_fetch_assoc( $consulta );
            $auth = password_verify($password, $usuarioDB['password']);
          
            
            if($auth){

                session_start();
                $_SESSION['usuario'] = $usuarioDB['usuario'];
                $_SESSION['finanzas'] = $usuarioDB['finanzasId'];
                $_SESSION['login'] = true;
                header('location: admin/');

            }else{
                $errores[] = 'el password es incorrecto';
            }



        } else {
            $errores[] = 'Usuario no existe';
        }
    }
}


?>
<!-- FINAL DEL HEADER -->

<main class="login-container">

    <?php if (intval($resultado) === 1) :
        echo $mensaje;
    endif;
    ?>
    <form class="formularioLogin" method="POST" action="">
        <div>
            <h2>Iniciar sesión</h2>
        </div>

        <?php foreach ($errores as $error) : ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <input type="text" name="usuario" value="<?php echo $usuario ? $usuario : '' ?>" placeholder="Usuario">
        <input type="password" name="password" value="<?php echo $password ? $password : '' ?>" placeholder="password">
        <button type="submit" class="btn"> Entrar</button>
        <p>Aun no tienes una cuenta?</p>
        <a href="registrarse.php">Registrate Aqui!</a>
    </form>
</main>



<?php
inclurTemplate('footer');
?>