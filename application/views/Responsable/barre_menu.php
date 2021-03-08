<?php $this->load->helper('url'); ?>
<h3>Espace Responsable
<?php echo $this->session->userdata('user'); ?>
</h3>
<ul id="menu">
<li>
		<?php echo anchor('Administrer_R/index',' Accueil '); ?>
	</li>
	<li>
		<?php echo anchor('Administrer_R/inscription',' Statistiques des inscriptions'); ?>
	</li>
	<li>
		<?php echo anchor('Administrer_R/inscriptionsSSparticipation',' Statistiques des inscriptions sans participations'); ?>
	</li>
	<li>
		<?php echo anchor('Administrer_R/participations',' Statistiques des participations'); ?>
	</li>
	<li>
		<?php echo anchor('connexion_c/deconnexionResponsable',' Déconnexion '); ?>
	</li>
</ul>