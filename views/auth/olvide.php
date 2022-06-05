<h1 class="nombre-pagina">Olvidaste tu Contraseña</h1>
<p class="descripcion-pagina">Reestablece tu contraseña escribiendo tu correo a continuación</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form class="formulario" action="/olvide" method="POST">
    <div class="campo">
        <label for="email">Correo</label>
        <input type="email" id="email" name="email" placeholder="Ingrese tu correo" />
    </div>

    <input type="submit" class="boton" value="Validar Correo">
</form>


<div class="acciones">
    <a href="/">Volver al Inicio</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crea una</a>
</div>