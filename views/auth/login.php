<h2 class="titulo-pagina">Estetica Gísela</h2>
<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicia Sesión con tus datos</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form class="formulario" method="POST" action="/">
    <div class="campo">
        <label for="email">Correo</label>
        <input type="email" id="email" placeholder="Ingrese su correo" name="email" />
    </div>

    <div class="campo">
        <label for="password">Contraseña</label>
        <input type="password" id="password" placeholder="Ingrese contraseña" name="password" />
    </div>

    <input type="submit" class="boton" value="Iniciar Sesión" />
</form>

<div class="acciones">
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crea una</a>
    <a href="/olvide">¿Olvidastes tu password?</a>
</div>