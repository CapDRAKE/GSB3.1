<html>
<meta charset="UTF-8">
<head>
      <title>Contact</title>
</head>
<body>
	<h3>Supprimer un contact</h3>	
	<?php echo validation_errors();
	echo form_open('Administrer_c/supprimerContact');
	echo form_fieldset("Mon formulaire");
	echo form_label('Nom : '), form_input('nom', set_value('nom')), br(2);
	echo form_submit('Supprimer', "Supprimer");
	echo form_fieldset_close();
	echo form_close();
	?>
</body>
</html>