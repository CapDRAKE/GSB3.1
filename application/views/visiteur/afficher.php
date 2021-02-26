<html>
<meta charset="UTF-8">
<head>
      <title>Contact</title>
</head>
<body>
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