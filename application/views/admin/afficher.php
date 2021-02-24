<html>
<meta charset="UTF-8">
<head>
      <title>Contact</title>
</head>
<body>
	<h3>Liste des contacts</h3>	
	  <?php foreach($query as $item) {?>
               <li><?php echo "horaire : ",$item->horaire;?>
               <li><?php echo "duree: ",$item->duree;?>
               <li><?php echo "nbPlace: ",$item->nbPlace;?>
               <li><?php echo "dateP: ",$item->dateP;?>
               <li><?php echo "CodeC: ",$item->CodeC;?>
               <li><?php echo "Code: ",$item->Code;?>
               <li><?php echo "codeSalle: ",$item->codeSalle;?>
           <?php }?>
</body>
</html>