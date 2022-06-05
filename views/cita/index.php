<h1 class="nombre-pagina" >Crear Nueva Cita</h1>
<div class="barra">
    <h3>Hola Bienvenido <?php echo $nombre ?? ''; ?></h3>
    <a class="boton" href="/logout">Cerrar Sesión</a>
</div>
<p class="descripcion-pagina">Elige tus Servicios y colocas tus datos</p>

<div id="app">

    <nav class="tabs">
        <button class="actual" type="button" data-paso="1">Servicios</button>
        <button type="button" data-paso="2">Información</button>
        <button type="button" data-paso="3">Resumen</button>
    </nav>

    <div id="paso-1" class="seccion">
        <h2>Servicios</h2> 
        <p class="descripcion-pagina">Elige tus servicios a continuación</p>
        <div id="servicios" class="listado-servicios"></div>
    </div>
    <div id="paso-2" class="seccion">
        <h2>Tus Datos y Cita</h2> 
        <p class="descripcion-pagina">Coloca tus datos y fecha de tu cita</p>
        <form class="formulario">
            <div class="campo">
                <label class="nombre-datos" for="nombre">Nombre</label>
                <input class="text-center" id="nombre" type="text" placeholder="Ingrese su nombre"
                value="<?php echo $nombre; ?>" disabled />
            </div>
            <div class="campo">
                <label for="fecha">Fecha</label>
                <input class="text-center" id="fecha" type="date"
                min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" />
            </div>
            <div class="campo">
                <label for="hora">Hora</label>
                <input class="text-center" id="hora" type="time" />
            </div>
            <input type="hidden" id="id" value="<?php echo $id; ?>">
        </form>
       
    </div>
    <div id="paso-3" class="seccion contenido-resumen">
        <h2>Resumen de tu cita</h2> 
        <p class="descripcion-pagina">Verifica que la información sea correcta</p>
        
    </div>

    <div class="paginacion">
        <button id="anterior" class="boton">
            &laquo; Anterior
        </button>
        <button id="siguiente" class="boton">
            Siguiente &raquo;
        </button>
    </div>

</div>


<?php
    $script = "
    <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script src='build/js/app.js'></script>
    ";
?>