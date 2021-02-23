<?php $this->load->helper('url'); ?>
<h3>Espace administrateur 
<?php echo $this->session->userdata('user'); ?>
</h3>
<ul id="menu">
<li>
		<?php echo anchor('administrer_c/index',' Accueil '); ?>
	</li>
	<li>
		<?php echo anchor('administrer_c/afficher',' Afficher les contacts '); ?>
	</li>
	<li>
		<?php echo anchor('administrer_c/ajoutContact',' Ajouter les contacts '); ?>
	</li>
	<li>
		<?php echo anchor('administrer_c/rechContact',' Rechercher un contact '); ?>
	</li>
	<li>
		<?php echo anchor('administrer_c/suppContact',' Supprimer un contact '); ?>
	</li>
	<li>
		<?php echo anchor('connexion_c/deconnexion',' Déconnexion '); ?>
	</li>
</ul>