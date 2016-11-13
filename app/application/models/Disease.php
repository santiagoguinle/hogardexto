<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Disease extends CI_Model
{

    public function __construct()
    {

        parent::__construct();
        $this->load->database();
    }

    public function saveToPerson(&$id, $diseases)
    {
        if(!$id) return;
        
        $this->db->where("person_id",$id);
        $this->db->delete("diseases_by_persons");
        
        foreach($diseases as $disease){
            $result = $this->db->insert('diseases_by_persons', array("person_id"=>$id,"disease_id"=>$disease));
        }
        return $result;
    }

    public function diseasesOfPerson($id)
    {
       $this->db->select("person_id,disease_id,disease_name");
       $this->db->where("person_id",$id);
       $this->db->where('is_deleted = 0');
       $this->db->join("diseases_by_persons","diseases_by_persons.person_id = diseases.id","left");
       $result = $this->db->get('diseases');
       $diseases = $result->row_array();
       return $diseases;
    }

    public function getAllDiseases()
    {
        $this->db->select();
        $this->db->from('diseases');
        $this->db->where('is_deleted = 0');
        return $this->db->get()->result_array();
    }

}
