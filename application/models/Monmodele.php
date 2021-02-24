<?php
class Monmodele extends CI_Model {
    function getContacts() {
        //$sql = "SELECT * FROM contacts";
        $query = $this->db->get('conference');
        return $query->result();
    }
    function ajoutContact($nom, $prenom, $email, $commentaire){
        $contact =  array('nom' => $nom, 'prenom'=> $prenom, 'email'=>$email, 'commentaire'=>$commentaire);
        $this->db->insert('contacts', $contact);
    }
    
    function suppContact($nom){
        $contact =  array('nom' => $nom);
        $this->db->delete('contacts', $contact);
    }
    
    function rechContact($nom){
        $sql = "SELECT * FROM contacts WHERE nom = '$nom';";
        $query = $this->db->query($sql);
        return $query->result();
    }
}
?>