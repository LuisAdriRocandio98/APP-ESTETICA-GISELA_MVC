<?php
    foreach($alertas as $key => $mensajes):
        foreach($mensajes as $mensaje):
?>
    <diV class="alerta <?php echo $key; ?> ">
        <?php echo $mensaje; ?>
    </diV>
<?php
        endforeach;
    endforeach;
?>