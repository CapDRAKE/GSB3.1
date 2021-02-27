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

    function getNomDesConf(){
        $sql = "SELECT nom FROM conference, inscris WHERE conference.id = inscris.id";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function getNomDesInscrits(){
        $sql = "SELECT nom FROM visiteur, inscris WHERE visiteur.id = inscris.code AND inscris.id = 1";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function getInscriptionSSparticipation(){
        $sql = "SELECT nom, COUNT(inscris.id) AS nbInscrits FROM inscris, conference WHERE inscris.id = conference.id AND participation = 0 GROUP BY inscris.id";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function getInscriptionAVECparticipation(){
        $sql = "SELECT nom, COUNT(inscris.id) AS nbInscrits FROM inscris, conference WHERE inscris.id = conference.id AND participation = 1 GROUP BY inscris.id";
        $query = $this->db->query($sql);
        return $query->result();
    }
}
?>