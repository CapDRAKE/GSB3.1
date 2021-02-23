<html>
<meta charset="UTF-8">
<head>
      <title>Contact</title>
</head>
<body>
	<h1><?php echo "Bienvenue dans ma page"?></h1>
	<h3>Ma liste de ouf</h3>	
	  <?php foreach($query as $item) {?>
               <li><?php echo "Nom : ",$item->nom;?>
               <li><?php echo "Prenom: ",$item->prenom;?>
           <?php }?>
	<?php echo validation_errors();
	echo form_open('Moncontroleur/ajouterContact');
	echo form_fieldset("Mon formulaire");
	echo form_label('Nom : '), form_input('nom', set_value('nom')), br(2);
	echo form_label('Prenom : '), form_input('prenom', set_value('prenom')), br(2);
	echo form_label('Email : '), form_input('email', set_value('email')), br(2);
	echo form_label('Commentaire : '), form_input('commentaire', set_value('commentaire')), br(2);
	echo form_submit('Envoyer', "Envoyer");
	echo form_fieldset_close();
	echo form_close();
	?>
	<?php echo $this->calendar->generate(); ?>
</body>
</html>