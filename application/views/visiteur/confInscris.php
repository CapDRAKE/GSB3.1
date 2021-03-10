<html>
<meta charset="UTF-8">
<head>
      <title>Contact</title>
</head>
<body>
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
                <th style = "border-bottom: 1px solid black;">Suppression</th>
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
               <td style = "border-bottom: 1px solid black;"><button type="button" onclick="<?php echo base_url()?>Administer_c/supprInscription">suppression</button></td>
            </tr>
        <?php }?>
        </tbody>
    </table>
</body>
</html>