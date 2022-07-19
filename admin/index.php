<?php

session_start();

$auth = $_SESSION['login'];

if(!$auth){
    header('location: /index.php');
}

include '../includes/templates/header.php';

require 'database.php';

$db;

$finanzas = $_SESSION['finanzas'];


$query ="SELECT * FROM finanzas WHERE id = '${finanzas}'";

$consulta = mysqli_query($db, $query);

$resultado = mysqli_fetch_assoc($consulta);


?>


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
                    </span><?php echo isset($resultado['ganacias']) ? $resultado['ganacias'] : '0' ?>$</p>
            </div>

            <div>
    
                <p>RETIRO:</p>
                <p><span class="material-icons">
                    attach_money
                    </span><?php echo isset($resultado['retiros']) ? $resultado['retiros'] : '0' ?>$</p>
            </div>
        </div>
        <nav class="nav__panel">
            <ul class="nav__panel__links">
                <li><a class="nav__panel__link" href="/admin/depositar/deposito.php">Depositar</a></li>
                <li><a  class="nav__panel__link" href="/admin/retirar/retirar.php">Retirar</a></li>
                <li><a  class="nav__panel__link" href="">Referidos</a></li>
                <li><a  class="nav__panel__link" href="">Configuracion</a></li>
                <li><a  class="nav__panel__link" href="">Salir</a></li>
            </ul>
        </nav>
        
<?php

include '../includes/templates/footer.php';

?>