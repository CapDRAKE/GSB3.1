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
        $data['content'] = 'admin/index';
        $this->generer_affichage($data);
    }
    
    function afficher()
    {
        $data['content'] = 'admin/afficher';
        $data['query'] = $this->monmodele->getContacts();
        $this->generer_affichage($data);
    }
    
    function ajoutContact(){
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->helper('url');
        $data['content'] = 'admin/ajouter';
        $this->generer_affichage($data);
    }
    
    function suppContact(){
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->helper('url');
        $data['content'] = 'admin/supprimer';
        $this->generer_affichage($data);
    }
    
    function rechContact(){
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->helper('url');
        $data['content'] = 'admin/rechercher';
        $this->generer_affichage($data);
    }
    
    function rechOk(){
        $data['content'] = 'admin/rechOk';
        $this->generer_affichage($data);
    }
    
    function rechPasOk(){
        $data['content'] = 'admin/rechPasOk';
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
    
    function rechercherContact(){
        $this->load->database();
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nom', 'Nom', 'required');
        
        if($this->form_validation->run() == TRUE) {
            $nom = $this->input->post('nom');
            $this->load->model('Monmodele');
            if($this->Monmodele->rechContact($nom)){
                $this->rechOk();
            }
            else{
                $this->rechPasOk();
            }
        }
    }
    
    function voir($id)
    {
        $data['content'] = 'admin/ajouter';
        $data['contact'] = $this->contacts_model->get_un_contact($id);
        $this->generer_affichage($data);
    }
    
    function modifier($id)
    {
        $this->contacts_model->modifier_contact($id, $this->input->post());
        $data['content'] = 'admin/detail_contact_view';
        $data['message'] = 'Le contact a été mis à jour.';
        $data['contact'] = $this->contacts_model->get_un_contact($id);
        $this->generer_affichage($data);
    }
    
    function supprimer($id)
    {
        $data['content'] = 'admin/suppression_contact_view';
        $data['contact'] = $this->contacts_model->get_un_contact($id);
        $this->generer_affichage($data);
    }
    
    function validation_supprimer($id)
    {
        $this->contacts_model->supprimer_contact($id);
        $data['content'] = 'admin/affiche_contacts_view';
        $data['listeContacts'] = $this->contacts_model->get_les_contacts();
        $this->generer_affichage($data);
    }
}
/* End of file administrer_c.php */
/* Location: ./application/controllers/administrer_c.php */
?>