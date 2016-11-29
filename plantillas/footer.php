<?php settings_errors();?>
<form method="post" action="options.php">
<?php settings_fields('footer');
do_settings_sections('tema_distincomer');

submit_button('Guardar' ,'primary','submit')
?>

</form>

