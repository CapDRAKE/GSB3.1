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
        $data['content'] = 'responsable/index';
        $this->generer_affichageResponsable($data);
    }

    function inscription()
    {
        $data['content'] = 'responsable/statInscrits';
        $data['query'] = $this->monmodele->getInscription();
       
        $this->generer_affichageResponsable($data);
    }
    
    function inscriptionsSSparticipation(){
        $data['content'] = 'responsable/statSSparticipation';
        $data['query'] = $this->monmodele->getInscriptionSSparticipation();
        $this->generer_affichageResponsable($data);
    }

    function participations(){
        $data['content'] = 'responsable/statAVECparticipation';
        $data['query'] = $this->monmodele->getInscriptionAVECparticipation();
        $this->generer_affichageResponsable($data);
    }


/* End of file administrer_r.php */
/* Location: ./application/controllers/administrer_r.php */
}?>