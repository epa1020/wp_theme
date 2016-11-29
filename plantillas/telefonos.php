<?php settings_errors();?>
<form method="post" action="options.php">
<?php settings_fields('telefono_red');
do_settings_sections('telefono_red');

submit_button('Guardar' ,'primary','submit')
?>

</form>
