<?php

session_start();

$auth = $_SESSION['login'];

if(!$auth){
    header('location: /index.php');
}

include '../../includes/templates/header.php';

require '../database.php';

$db;

$finanzas = $_SESSION['finanzas'];


$query ="SELECT * FROM finanzas WHERE id = '${finanzas}'";

$stmt = $db->prepare($query);

$stmt->execute();

$stmt->bind_result($id, $deposito, $ganancias, $retiros);

$stmt->fetch();

var_dump($id, $deposito, $ganancias, $retiros);


?>

        <div class="panel_monetario">
            <div>
               <p>DEPOSITO:</p>
               <p><span class="material-icons">
                    attach_money
                    </span><?php echo $deposito ?? false ? $deposito : '0' ?>$</p>

            </div>

            <div>
                <p> GANACIAS:</p>  
                <p><span class="material-icons">
                    attach_money
                    </span><?php echo $ganancias ?? false ? $ganancias : '0' ?>$</p>
            </div>

            <div>
    
                <p>RETIRO:</p>
                <p><span class="material-icons">
                    attach_money
                    </span><?php echo $retiros ?? false ? $retiros : '0' ?>$</p>
            </div>
        </div>
        <nav class="nav__panel">
            <ul class="nav__panel__links">
                <li><a class="nav__panel__link" href="/admin/">atras</a></li>
                <li><a  class="nav__panel__link" href="">Salir</a></li>
            </ul>
        </nav>

        <section class="formulario deposito">
        <form class="form formulario-deposito" action="" method="post">
            <fieldset>
            <legend> Formulario de deposito:</legend>
            <label for="nombre">Nombre y Apellido:</label>
            <input type="text" name="nombre" placeholder="nombre y apellido">

            <label for="nombre">cartera de donde realiza el deposito:</label>
            <input type="text" name="cartera" placeholder="Numero de su cartera">

            <label for="file">Captura de pantalla o comprobante del envio:</label>
            <input type="file" name="file" placeholder="captura de deposito">

            <input type="submit" value="ENVIAR">
            </fieldset>

        </form>
        </section>


<?php

include '../../includes/templates/footer.php';

?>
