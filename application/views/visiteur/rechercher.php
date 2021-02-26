<html>
<meta charset="UTF-8">
<head>
      <title>Gestion des conférence</title>
</head>
<body>
	<h3>Rechercher une conférence</h3>	
	<?php echo validation_errors();
	echo form_open('Administrer_c/rechercherConf');
	echo form_fieldset("Conférence");
	echo form_label('Nom de la conférence : '), form_input('nom', set_value('nom')), br(2);
	echo form_submit('Rechercher', "Rechercher");
	echo form_fieldset_close();
	echo form_close();
	?>
</body>
</html>