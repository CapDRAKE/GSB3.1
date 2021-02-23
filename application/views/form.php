<html>
<meta charset="UTF-8">
<?php echo heading($title) ?>
<head>
</head>
<body>
	<?php echo form_open();
	echo form_fieldset("Mon formulaire");
	echo form_label('Nom : '), form_input('nom'), br(2);
	echo form_label('Prenom : '), form_input('prenom'), br(2);
	echo form_label('Email : '), form_input('email'), br(2);
	echo form_label('Commentaire : '), form_input('commentaire'), br(2);
	echo form_submit('Envoyer', "Envoyer");
	echo form_close();
	?>
</body>
</html>