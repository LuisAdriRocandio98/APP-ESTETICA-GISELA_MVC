<h1 class="nombre-pagina" >Crear Cuenta</h1>
<p class="descripcion-pagina">llena el siguiente formulario para crear una cuenta</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>
<form class="formulario" method="POST" action="/crear-cuenta">
    <div class="campo">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre" 
        value="<?php echo s($usuario->nombre); ?>" 
        /> 
    </div>

    <div class="campo">
        <label for="apellido">Apellido</label>
        <input type="text" id="apellido" name="apellido" placeholder="Ingresa tu apellido" 
        value="<?php echo s($usuario->apellido); ?>"  /> 
    </div>

    <div class="campo">
        <label for="apellido">Teléfono</label>
        <input type="tel" id="telefono" name="telefono" placeholder="Ingresa tu telefono" 
        value="<?php echo s($usuario->telefono); ?>" /> 
    </div>

    <div class="campo">
        <label for="email">Correo</label>
        <input type="email" id="email" name="email" placeholder="Ingresa tu Correo" 
        value="<?php echo s($usuario->email); ?>" /> 
    </div>

    <div class="campo">
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="Ingresa tu password" /> 
    </div>

    <input type="submit" value="Crear cuenta" class="boton"> 
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Iniciar Sesión</a>
    <a href="/olvide">¿Olvidastes tu password?</a>
</div>