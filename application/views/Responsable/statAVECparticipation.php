<html>
<meta charset="UTF-8">
<head>
      <title>Statistiques Inscrits</title>
</head>
<body>
	<h3>Statistiques inscrits pour chaque conférences</h3>
    <table style = "text-align : center; border: 1px solid black;">
        <thead>
            <tr >
                <th style = "border-bottom: 1px solid black;">Nom Conférence</th>
                <th style = "border-bottom: 1px solid black;">Nombre Inscrits avec participations</th>
            </tr>
        </thead>
        <tbody>
            <tr>
        <?php foreach($query as $item) {?>
               <td style = "border-bottom: 1px solid black;"><?php echo $item->nom;?></td>
               <td style = "border-bottom: 1px solid black;"><?php echo $item->nbInscrits;?></td>
            </tr>
        <?php }?>
        </tbody>
    </table>
</body>
</html>