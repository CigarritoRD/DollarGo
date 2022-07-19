<?php

require 'includes/app.php';
use App\Usuario;

$db = conexionDb();



// variables para almacenar los datos del registro
$nombre = '';
$apellido = '';
$usuario = '';
$password = '';
$email = '';
$cartera = '';

//VALIDACION DE EXISTENCIA DE VARIABLES
if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $user = new Usuario($_POST);

    $errores = $user->validarErrores();
    
    if(!$errores){
        $user->guardar();

        header('location: /login.php?resultado=1');
    }
    

    //VALIDANDO LOS INPUTS
    

        // // HACE UNA CONSULTA Y VALIDA SI EL usuario EXISTE Y ARROJA ERROR SI EXISTE
        // $usuario_a_validar = $_POST['usuario'];
        // $validate_usuario = "SELECT usuario FROM usuarios WHERE usuario = '${usuario_a_validar}'";
        // $consulta_usuario_duplicate = mysqli_query($db, $validate_usuario);
        // $countusuario = mysqli_fetch_assoc($consulta_usuario_duplicate);

        // if (isset($countusuario['usuario']) === $usuario_a_validar) {
        //     $errorUsuario = 'Usuario ya existe, intente con otro';
        // } else {

        //     $usuario = $_POST['usuario'];
        // }


        // if (empty($_POST['password'])) {
        //     $errorPassword = 'el campo PASSWORD es requerido';
        // } else {
        //     $password = $_POST['password'];
        //     $passwordhash = password_hash($password, PASSWORD_DEFAULT);
        // }

        // if (empty($_POST['email'])) {
        //     $errorEmail = 'el campo EMAIL es requerido';
        // } else {

        //     // HACE UNA CONSULTA Y VALIDA SI EL EMAIL EXISTE Y ARROJA ERROR SI EXISTE
        //     $email_a_validar = $_POST['email'];
        //     $validate_email = "SELECT email FROM usuarios WHERE email = '${email_a_validar}'";
        //     $consulta_email_duplicate = mysqli_query($db, $validate_email);
        //     $countemail = mysqli_fetch_assoc($consulta_email_duplicate);

        //     if ($countemail['email'] === $email_a_validar) {
        //         $errorEmail = 'correo ya existe, intente con otro';
        //     } else {

        //         $email = $_POST['email'];
        //     }
        // }

        // if (empty($_POST['cartera'])) {
        //     $errorCartera = 'el campo CARTERA es requerido';
        // } else {
        //     $cartera = $_POST['cartera'];
        // }




    
};
?>
<?php


inclurTemplate('header');

?>

<!-- formulario de registro -->
<div class="background-formulario">

</div>
<div class="formulario">
    <form id="formulario" class="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <fieldset>
            <div class="dorado">
                <legend>REGISTRATE</legend>
            </div>
            <div class="campos__formulario">
                <label for="nombre">nombre</label>
                <input type="text" name="nombre" value="<?php echo $nombre ? $nombre : ''; ?>" id="nombre" placeholder="nombre">
                <span class="Mensaje__error">*<?php echo $errores['nombre'] ?? ''; ?></span>

                <label for="nombre">apellido</label>
                <input type="text" name="apellido" id="nombre" value="<?php echo $apellido ? $apellido : ''; ?>" placeholder="apellido">
                <span class="Mensaje__error">*<?php echo $errores['apellido'] ?? ''; ?></span>

                <label for="usuario">usuario</label>
                <input type="text" name="usuario" id="usuario" value="<?php echo $usuario ? $usuario : ''; ?>" placeholder="usuario">
                <span class="Mensaje__error">*<?php echo $errores['usuario'] ?? ''; ?></span>

                <label for="password">password</label>
                <input type="password" name="password" id="password" placeholder="password">
                <span class="Mensaje__error">*<?php echo $errores['password'] ?? ''; ?></span>

                <label for="email">email</label>
                <input type="email" name="email" id="email" value="<?php echo $email ? $email : ''; ?>" placeholder="email">
                <span class="Mensaje__error">*<?php echo $errores['email'] ?? ''; ?></span>

                <label for="cartera">cartera TRON</label>
                <input type="text" name="cartera" id="cartera" value="<?php echo $cartera ? $cartera : ''; ?>" placeholder="cartera de TRON">
                <span class="Mensaje__error">*<?php echo $errores['cartera'] ?? ''; ?></span>

                <input class="btn-submit" type="submit" value="REGISTRARSE">
            </div>
        </fieldset>
    </form>
</div>

<!-- formulario de registro -->

<?php inclurTemplate('footer'); ?>