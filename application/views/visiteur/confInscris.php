<html>
<meta charset="UTF-8">
<head>
      <title>Contact</title>
</head>
<body>
    <h3>Se désinscrire à une conférence</h3>	
	<?php echo validation_errors();
	echo form_open('Administrer_c/supprInscription');
	echo form_fieldset("Conférence");
	echo form_label('Nom de la conférence : '), form_input('nom', set_value('nom')), br(2);
	echo form_submit('Suppression', "Suppression");
	echo form_fieldset_close();
	echo form_close();
	?>
	<h3>Liste des conférences</h3>	
      <table style = "text-align : center; border: 1px solid black;">
        <thead>
            <tr >
                <th style = "border-bottom: 1px solid black;">Horaire</th>
                <th style = "border-bottom: 1px solid black;">Nom</th>
                <th style = "border-bottom: 1px solid black;">Duree</th>
                <th style = "border-bottom: 1px solid black;">NbPlace</th>
                <th style = "border-bottom: 1px solid black;">DateP</th>
                <th style = "border-bottom: 1px solid black;">CodeC</th>
                <th style = "border-bottom: 1px solid black;">Code</th>
                <th style = "border-bottom: 1px solid black;">CodeSalle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
        <?php foreach($query as $item) {?>
               <td style = "border-bottom: 1px solid black;"><?php echo $item->horaire;?></td>
               <td style = "border-bottom: 1px solid black;"><?php echo $item->nom;?></td>
               <td style = "border-bottom: 1px solid black;"><?php echo $item->duree;?></td>
               <td style = "border-bottom: 1px solid black;"><?php echo $item->nbPlace;?></td>
               <td style = "border-bottom: 1px solid black;"><?php echo $item->dateP;?></td>
               <td style = "border-bottom: 1px solid black;"><?php echo $item->codeC;?></td>
               <td style = "border-bottom: 1px solid black;"><?php echo $item->code;?></td>
               <td style = "border-bottom: 1px solid black;"><?php echo $item->codeSalle;?></td>
            </tr>
        <?php }?>
        </tbody>
    </table>
</body>
</html>