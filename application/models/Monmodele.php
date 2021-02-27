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

    function getNomInscrits(){
        $sql = "SELECT conference.nom AS nomConf, visiteur.nom AS nomVis FROM inscris, conference, visiteur WHERE visiteur.id = inscris.code AND conference.id = inscris.id;";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function getInscriptionSSparticipation(){
        $sql = "SELECT nom, COUNT(inscris.id) AS nbInscrits FROM inscris, conference WHERE inscris.id = conference.id AND participation = 0 GROUP BY inscris.id";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function getNomInscritsSSparticipation(){
        $sql = "SELECT conference.nom AS nomConf, visiteur.nom AS nomVis FROM inscris, conference, visiteur WHERE visiteur.id = inscris.code AND conference.id = inscris.id AND participation = 0";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function getInscriptionAVECparticipation(){
        $sql = "SELECT nom, COUNT(inscris.id) AS nbInscrits FROM inscris, conference WHERE inscris.id = conference.id AND participation = 1 GROUP BY inscris.id";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function getNomInscritsAVECparticipation(){
        $sql = "SELECT conference.nom AS nomConf, visiteur.nom AS nomVis FROM inscris, conference, visiteur WHERE visiteur.id = inscris.code AND conference.id = inscris.id AND participation = 1;";
        $query = $this->db->query($sql);
        return $query->result();
    }
}
?>