<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Moncontroleur extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
    }
    
	public function index()
	{
		//echo 'Hello world !';
		//$this->load->view('lavue');
		//$this->mafonction();
	    //$data['todo_list'] = array('Me r�veiller !!', 'Apprendre le cours :DDD', 'Finir mon programme');
	    //$data['title'] = "Mon titre";
	    //$data['nom'] = "Yoda";
	    $this->load->database();
	    $this->load->model('Monmodele');   
	    $data['query'] = $this->Monmodele->getContacts();
	    $this->load->helper('html');
	    $this->load->helper('form');
	    $this->load->helper('url');
	    $this->load->library('calendar');
	    $this->mafonction($data);
	}
	public function mafonction($data) {
	    $this->load->view('lavue', $data);
	} 
	
	public function ajouterContact(){
	    $this->load->database();
	    $this->load->library('form_validation');
	    $this->form_validation->set_rules('nom', 'Nom', 'required');
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
}
/* End of file moncontroleur.php */
/* Location: ./application/controllers/moncontroleur.php */