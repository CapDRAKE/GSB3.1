<?php
class Monmodele extends CI_Model {
    function getConf() {
        $sql = "SELECT * FROM conference WHERE dateP > NOW();";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function getConfaVenir() {
        $array = $this->session->userdata();
        //$name = $this->session->get_userdata();
        $name = $array['user'];
        $sql1 = "SELECT id FROM visiteur WHERE login = '$name'";
        $idUtilisateur = $this->db->query($sql1);
        foreach ($idUtilisateur->result() as $row){
            $fin1 = $row->id;
        }
        $sql = "SELECT DISTINCT Conference.nom, Conference.horaire, Conference.duree, Conference.dateP, Conference.codeSalle FROM conference, inscris WHERE inscris.id = conference.id AND inscris.code = '$fin1' AND conference.dateP > NOW() AND inscris.participation = '0';";
        $query = $this->db->query($sql);
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

    function setParticiper($nom){
        $verifier=false;
        $array = $this->session->userdata();
        $name = $array['user'];
        $sql1 = "SELECT id FROM visiteur WHERE login = '$name';";
        $idUtilisateur = $this->db->query($sql1);
        foreach ($idUtilisateur->result() as $row){
            $fin1 = $row->id;
        }
        $verif = "SELECT conference.nom, inscris.id FROM inscris, conference WHERE inscris.id = conference.id AND  inscris.code = '$fin1';";
        $query = $this->db->query($verif);
        foreach ($query->result() as $row){
            $nom1 = $row->nom;
            if($nom1 == $nom){
                $id = $row->id;
                $verifier = true;
            }
          }
        if($verifier = true){

            $this->db->set('participation', '1');
            $this->db->where('id', $id);
            $this->db->update('inscris');
            return true;
        }
        else{
            return false;
        }
    }

    function reservConf($nom){
        $verifier=false;
        $verif = "SELECT * FROM conference WHERE dateP > NOW();";
        $query = $this->db->query($verif);
        foreach ($query->result() as $row){
            $id = $row->nom;
            if($id == $nom){
                $verifier = true;
            }
          }
        if($verifier = true){
            $ok=true;
            $array = $this->session->userdata();
            $name = $array['user'];
            $sql1 = "SELECT id FROM visiteur WHERE login = '$name';";
            $idUtilisateur = $this->db->query($sql1);
            foreach ($idUtilisateur->result() as $row){
                $fin1 = $row->id;
            }
            $sql2 = "SELECT id FROM conference WHERE nom = '$nom';";
            $idConf = $this->db->query($sql2);
            foreach ($idConf->result() as $row){
                $fin2 = $row->id;
            }
            $sql3 = "SELECT theme.CodeC FROM theme, conference WHERE theme.CodeC = conference.CodeC AND Conference.nom = '$nom';";
            $codC = $this->db->query($sql3);
            foreach ($codC->result() as $row){
                $fin3 = $row->CodeC;
            }
            $inscris =  array('code' => $fin1, 'id'=> $fin2, 'CodeC'=>$fin3, 'participation'=>'0');
            $sql4 =  "SELECT id FROM inscris;";
            $result = $this->db->query($sql4);
            foreach ($result->result() as $row){
                $id = $row->id;
                echo $id;
                echo $fin2;
                if($id == $fin2){
                    $ok = false;
                }
            }
            if(!$ok){
                return false;
            }
            else{
                $this->db->insert('inscris', $inscris);
                return true;
            }
        }
        else{
            return false;
        }
    }
}
?>