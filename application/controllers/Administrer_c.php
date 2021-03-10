<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Administrer_c extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('monmodele');
    }
    
    function index()
    {
        $data['content'] = 'visiteur/index';
        $this->generer_affichage($data);
    }
    
    function afficher()
    {
        $data['content'] = 'visiteur/afficher';
        $data['query'] = $this->monmodele->getConf();
        $this->generer_affichage($data);
    }


    function afficherAVenir()
    {
        $data['content'] = 'visiteur/confAVenir';
        $data['query'] = $this->monmodele->getConfaVenir();
        $this->generer_affichage($data);
    }
    
    function ajoutConf(){
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->helper('url');
        $data['content'] = 'visiteur/ajouter';
        $this->generer_affichage($data);
    }

    function reserverConf(){
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->helper('url');
        $data['content'] = 'visiteur/reserver';
        $data['query'] = $this->monmodele->getConf();
        $this->generer_affichage($data);
    }
    
    function suppContact(){
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->helper('url');
        $data['content'] = 'visiteur/supprimer';
        $this->generer_affichage($data);
    }
    
    function rechConf(){
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->helper('url');
        $data['content'] = 'visiteur/rechercher';
        $this->generer_affichage($data);
    }
    
    function rechOk(){
        $data['content'] = 'visiteur/rechOk';
        $this->generer_affichage($data);
    }
    
    function rechPasOk(){
        $data['content'] = 'visiteur/rechPasOk';
        $this->generer_affichage($data);
    }
    
    function ajouterContact(){
        $this->load->database();
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'valid_email');
        $this->form_validation->set_rules('commentaire', 'Commentaire', 'max_length[100]');
        
        if($this->form_validation->run() == TRUE) {
            $nom = $this->input->post('nom');
            $prenom = $this->input->post('prenom');
            $email = $this->input->post('email');
            $commentaire = $this->input->post('commentaire');
            
            $this->load->model('Monmodele');
            $this->Monmodele->ajoutContact($nom, $prenom, $email, $commentaire);
        }
        $this->index();
        
    }
    
    function supprimerContact(){
        $this->load->database();
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nom', 'Nom', 'required');
        
        if($this->form_validation->run() == TRUE) {
            $nom = $this->input->post('nom');
            $this->load->model('Monmodele');
            $this->Monmodele->suppContact($nom);
        }

        $this->suppContact();
        
    }
    
    function rechercherConf(){
        $this->load->database();
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nom', 'Nom', 'required');
        
        if($this->form_validation->run() == TRUE) {
            $nom = $this->input->post('nom');
            $this->load->model('Monmodele');
            if($this->Monmodele->rechConf($nom)){
                $this->rechOk();
            }
            else{
                $this->rechPasOk();
            }
        }
        else{
            $data['content'] = "visiteur/rechNom";
            $this->generer_affichage($data);
        }
    }

    function reservConf(){
        $this->load->database();
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nom', 'Nom', 'required');
        
        if($this->form_validation->run() == TRUE) {
            $nom = $this->input->post('nom');
            $this->load->model('Monmodele');
            if($this->Monmodele->reservConf($nom)){
                $data['content'] = "visiteur/reservOK";
                $this->generer_affichage($data);
            }
            else{
                $data['content'] = "visiteur/pasreserver";
                $this->generer_affichage($data);
            }

        }
        else{
            $data['content'] = "visiteur/rechNom";
            $this->generer_affichage($data);
        }
    }

    function supprConf(){
        $this->load->helper('form');
        $data['content'] = 'visiteur/confInscris';
        $data['query'] = $this->monmodele->getConfInscris();
        $this->generer_affichage($data);
    }

    function supprInscription(){
        $this->load->database();
        $this->monmodele->supprInscri();
        $data['content'] = 'visiteur/confInscris';
        $data['query'] = $this->monmodele->getConfInscris();
        $this->generer_affichage($data);
    }
    
    
    function voir($id)
    {
        $data['content'] = 'visiteur/ajouter';
        $data['contact'] = $this->contacts_model->get_un_contact($id);
        $this->generer_affichage($data);
    }
    
    function modifier($id)
    {
        $this->contacts_model->modifier_contact($id, $this->input->post());
        $data['content'] = 'visiteur/detail_contact_view';
        $data['message'] = 'Le contact a �t� mis � jour.';
        $data['contact'] = $this->contacts_model->get_un_contact($id);
        $this->generer_affichage($data);
    }
    
    function supprimer($id)
    {
        $data['content'] = 'visiteur/suppression_contact_view';
        $data['contact'] = $this->contacts_model->get_un_contact($id);
        $this->generer_affichage($data);
    }
    
    function validation_supprimer($id)
    {
        $this->contacts_model->supprimer_contact($id);
        $data['content'] = 'visiteur/affiche_contacts_view';
        $data['listeContacts'] = $this->contacts_model->get_les_contacts();
        $this->generer_affichage($data);
    }
}
/* End of file administrer_c.php */
/* Location: ./application/controllers/administrer_c.php */
?>