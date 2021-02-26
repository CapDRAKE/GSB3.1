<?php
class Monmodele extends CI_Model {
    function getConf() {
        $query = $this->db->get('conference');
        return $query->result();
    }
    
    function rechConf($nom){
        $sql = "SELECT * FROM conference WHERE nom = '$nom';";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function getInscription(){
        $sql = "SELECT nom, COUNT(inscris.id) AS nbInscrits FROM inscris, conference WHERE inscris.id = conference.id GROUP BY inscris.id;";
        $query = $this->db->query($sql);
        return $query->result();
    }
}
?>