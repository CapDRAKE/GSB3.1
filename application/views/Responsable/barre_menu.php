<?php $this->load->helper('url'); ?>
<h3>Espace Responsable
<?php echo $this->session->userdata('user'); ?>
</h3>
<ul id="menu">
<li>
		<?php echo anchor('administrer_c/index',' Accueil '); ?>
	</li>
	<li>
		<?php echo anchor('administrer_c/afficher',' Statistiques des inscriptions'); ?>
	</li>
	<li>
		<?php echo anchor('administrer_c/rechConf',' Statistiques des participations'); ?>
	</li>
	<li>
		<?php echo anchor('connexion_c/deconnexionResponsable',' Déconnexion '); ?>
	</li>
</ul>