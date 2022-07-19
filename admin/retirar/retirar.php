<?php

session_start();

$auth = $_SESSION['login'];

if(!$auth){
    header('location: /index.php');
}
include '../../includes/templates/app.php';

include '../../includes/templates/header.php';

$db;


$finanzas = $_SESSION['finanzas'];


$query ="SELECT * FROM finanzas WHERE id = '${finanzas}'";

$consulta = mysqli_query($db, $query);

$resultado = mysqli_fetch_assoc($consulta);


?>

    <body>
        <div class="panel_monetario">
            <div>
               <p>DEPOSITO:</p>
               <p><span class="material-icons">
                    attach_money
                    </span><?php echo $resultado['deposito'] ?? false ? $resultado['deposito'] : '0' ?>$</p>

            </div>

            <div>
                <p> GANACIAS:</p>  
                <p><span class="material-icons">
                    attach_money
                    </span><?php echo $resultado['deposito'] ?? false ? $resultado['deposito'] : '0' ?>$</p>
            </div>

            <div>
    
                <p>RETIRO:</p>
                <p><span class="material-icons">
                    attach_money
                    </span><?php echo $resultado['deposito'] ?? false ? $resultado['deposito'] : '0' ?>$</p>
            </div>
        </div>
        <nav class="nav__panel">
            <ul class="nav__panel__links">
                <li><a class="nav__panel__link" href="/admin/">Atras</a></li>
                <li><a class="nav__panel__link" href="">Salir</a></li>
            </ul>
        </nav>

        <section class="formulario deposito">
        <form class="form formulario-deposito" action="" method="post">
            <fieldset>
            <legend> RETIRO:</legend>
            <label for="nombre">Nombre y Apellido:</label>
            <input type="text" name="nombre" placeholder="nombre y apellido">

            <label for="nombre">Cartera TRX:</label>
            <input type="text" name="cartera" placeholder="Numero de su cartera">
            <label for="retirar">Monto a retirar:</label>
            <input type="number" min="10" name="retirar" placeholder="Ej: 10">

            <input type="submit" value="RETIRAR">
            </fieldset>

        </form>
        </section>
    </body>
    

</html>