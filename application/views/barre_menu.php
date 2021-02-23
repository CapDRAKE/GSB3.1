<?php
	$this->load->helper('url');
?>
<ul id="menu">
<li>
		<li> <?php echo anchor('connexion_c/connexion',' Administrer '); ?> </li>
	</li>
	<li>
		<?php echo anchor('Moncontroleur/index',' Afficher les contacts '); ?>
	</li>
	<li>
		<?php echo anchor('Moncontroleur/index',' Ajouter des contacts '); ?>
	</li>
	<li>
		<?php echo anchor('administrer_c',' Administrer '); ?>
	</li>
</ul>
