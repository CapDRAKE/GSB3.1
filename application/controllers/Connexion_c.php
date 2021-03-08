<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
    
    class Connexion_c extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->library('session');
        }
        
        function connexionVisiteur()
        {
            $data['content'] = "visiteur/connexion";
            $this->load->view('template', $data);
        }
        
        function deconnexionVisiteur()
        {
            $this->session->unset_userdata('user');
            $data['content'] = "visiteur/connexion";
            $this->load->view('template', $data);
        }

        function connexionResponsable()
        {
            $data['content'] = "Responsable/connexion";
            $this->load->view('template', $data);
        }
        
        function deconnexionResponsable()
        {
            $this->session->unset_userdata('user');
            $data['content'] = "Responsable/connexion";
            $this->load->view('template', $data);
        }
        
        public function index()
        {
            $this->session->unset_userdata('user');
            $data['content'] = "visiteur/connexion";
            $this->load->view('template', $data);
        }
    }
    /* End of file connexion_c.php */
    /* Location: ./application/controllers/connexion_c.php */
?>