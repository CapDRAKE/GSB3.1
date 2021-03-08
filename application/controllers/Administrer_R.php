<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Administrer_R extends MY_Controller
{
    function __construct()
    {
        parent::responsable();
        $this->load->model('monmodele');
    }
    
    function index()
    {
        $data['content'] = 'Responsable/index';
        $this->generer_affichageResponsable($data);
    }

    function inscription()
    {
        $data['content'] = 'Responsable/statInscrits';
        $data['query'] = $this->monmodele->getInscription();
        $data['query2'] = $this->monmodele->getNomInscrits();
        $this->generer_affichageResponsable($data);
    }
    
    function inscriptionsSSparticipation(){
        $data['content'] = 'Responsable/statSSparticipation';
        $data['query'] = $this->monmodele->getInscriptionSSparticipation();
        $data['query2'] = $this->monmodele->getNomInscritsSSparticipation();
        $this->generer_affichageResponsable($data);
    }

    function participations(){
        $data['content'] = 'Responsable/statAVECparticipation';
        $data['query'] = $this->monmodele->getInscriptionAVECparticipation();
        $data['query2'] = $this->monmodele->getNomInscritsAVECparticipation();
        $this->generer_affichageResponsable($data);
    }


/* End of file administrer_r.php */
/* Location: ./application/controllers/administrer_r.php */
}?>