<html>
<meta charset="UTF-8">
<head>
      <title>Gestion des conférence</title>
</head>
<body>
	<h3>S'inscrire une conférence</h3>	
	<?php echo validation_errors();
	echo form_open('Administrer_c/');
	echo form_fieldset("Conférence");
	echo form_label('Nom de la conférence : '), form_input('nom', set_value('nom')), br(2);
	echo form_submit('Inscription', "Inscription");
	echo form_fieldset_close();
	echo form_close();
	?>

<h3>Liste des conférences</h3>	
      <?php foreach($query as $item) {?>
               <li><?php echo "Horaire : ",$item->horaire;?></li>
               <li><?php echo "Nom : ",$item->nom;?></li>
               <li><?php echo "Duree: ",$item->duree;?>
               <li><?php echo "NbPlace: ",$item->nbPlace;?>
               <li><?php echo "DateP: ",$item->dateP;?>
               <li><?php echo "CodeC: ",$item->CodeC;?>
               <li><?php echo "Code: ",$item->code;?>
               <li><?php echo "CodeSalle: ",$item->codeSalle, "</br>";?>
               </br>
           <?php }?>
</body>
</html>