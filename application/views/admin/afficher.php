<html>
<meta charset="UTF-8">
<head>
      <title>Contact</title>
</head>
<body>
	<h3>Liste des contacts</h3>	
	  <?php foreach($query as $item) {?>
               <li><?php echo "Nom : ",$item->nom;?>
               <li><?php echo "Prenom: ",$item->prenom;?>
           <?php }?>
</body>
</html>