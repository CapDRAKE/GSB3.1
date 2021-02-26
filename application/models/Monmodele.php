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
}
?>