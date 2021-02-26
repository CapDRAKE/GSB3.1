<?php $this->load->helper('url'); ?>
<h3>Espace Visiteur 
<?php echo $this->session->userdata('user'); ?>
</h3>
<ul id="menu">
<li>
		<?php echo anchor('administrer_c/index',' Accueil '); ?>
	</li>
	<li>
		<?php echo anchor('administrer_c/afficher',' Afficher les conférences '); ?>
	</li>
	<li>
		<?php echo anchor('administrer_c/rechConf',' Rechercher une conférence '); ?>
	</li>
	<li>
		<?php echo anchor('administrer_c/reserverConf',' Inscription à une conférence '); ?>
	</li>
	<li>
		<?php echo anchor('connexion_c/deconnexionVisiteur',' Déconnexion '); ?>
	</li>
</ul>