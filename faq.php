<?php
include 'includes/app.php';
inclurTemplate('header');
?>

<!-- FINAL DEL HEADER -->
<main class="faq-container">
    <section class="faq">
        <h1>Preguntas frecuentes</h1>
        <ul>
            <li class="acordeon">
                <label class="faq-label" for="faq1">¿Cómo puedo invertir con DollarGO?</label>
                <input class="btn-acordeon" type="radio" name="faq" id="faq1">
                <div class="acordeon-contenido">
                    <p>Para realizar una inversión, primero debe convertirse en miembro de raddux.com hyip. Una vez registrado, puede
                        realizar su primer depósito. Todos los depósitos deben hacerse a través del Área de Miembros. Puede iniciar
                        sesión con el nombre de usuario y la contraseña de miembro que recibe al registrarse.</p>
                </div>
            </li>
            <li class="acordeon">
                <label class="faq-label" for="faq2" >¿Cómo puedo cambiar mi contraseña?</label>
                <input class="btn-acordeon" type="radio" name="faq" id="faq2">
                <div class="acordeon-contenido">
                    <p>Puede cambiar su contraseña directamente desde su área de miembros editándola en su perfil personal.</p>
                </div>
            </li>
            <li class="acordeon">
                <label class="faq-label" for="faq3">¿Puedo perder dinero?</label>
                <input class="btn-acordeon" type="radio" name="faq" id="faq3">
                <div class="acordeon-contenido">
                    <p>Existe un riesgo relacionado con la inversión en todos los programas de inversión de alto rendimiento. Sin
                        embargo, existen algunas formas sencillas que pueden ayudarlo a reducir el riesgo de perder más de lo que puede
                        permitirse. Primero, alinee sus inversiones con sus objetivos financieros, en otras palabras, mantenga el dinero
                        que pueda necesitar a corto plazo fuera de inversiones más agresivas, reservando esos fondos de inversión para
                        el dinero que pretende recaudar a largo plazo. Es muy importante que sepa que somos comerciantes reales y que
                        invertimos los fondos de los miembros en grandes inversiones.</p>
                </div>
            </li>
            <li class="acordeon">
                <label class="faq-label" for="faq4">¿Cual es el minimo para retirar?</label>
                <input class="btn-acordeon" type="radio" name="faq" id="faq4">
                <div class="acordeon-contenido">
                    <p>el minimo de retiro es de 15$ USDT</p>
                </div>
            </li>
            <li class="acordeon">
                <label class="faq-label" for="faq5">¿Cómo puedo retirar fondos?</label>
                <input class="btn-acordeon" type="radio" name="faq" id="faq5">
                <div class="acordeon-contenido">
                    <p>Inicie sesión en su cuenta con su nombre de usuario y contraseña y consulte la sección Retirar.</p>
                </div>
            </li>
        </ul>

    </section>
</main>



<?php
inclurTemplate('footer');
?>