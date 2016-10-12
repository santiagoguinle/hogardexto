<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Person extends CI_Model
{

    public function __construct()
    {

        parent::__construct();
        $this->load->database();
    }

    public function create($name, $firstdate)
    {

        $data = array(
            'name' => $name,
            'firstdate' => $firstdate,
            'created_at' => date("Y-m-d H:i:s")
        );
        $this->db->insert('persons', $data);
        return $this->db->insert_id();
    }

    public function save($id, $data)
    {
        if ($id == null) {
            $id = $this->create($data["name"], $data["firstdate"]);
        }
        
        if (isset($data["diseases"])) {
            $diseases = $data["diseases"];
            unset($data["diseases"]);
            //   $this->load->model("disease");
            //   $this->diseases->saveToPerson($id, $data["diseases"]);
        }

        $this->db->where("id", $id);
        $result = $this->db->update('persons', $data);
        
        if (isset($diseases)) {
            $data["diseases"] = $diseases;
        }
        return $result;
    }

    public function get_all()
    {
        $this->db->select();
        $this->db->from('persons');
        $this->db->where('is_deleted = 0');

        return $this->db->get()->result_array();
    }

    public function getPerson($id)
    {
       $this->db->where("id",$id);
       $result = $this->db->get('persons');
       $person = $result->row_array();
       // $this->load->model("disease");
       // $person["diseases"] = $this->diseases->diseasesOfPerson($id);
        return $person;
    }

    public function getDefaultPerson()
    {
        return array("name" => "",
            "lastname" => "",
            "birthdate" => "",
            "avatar" => "",
            "cuil" => "",
            "firstdate" => date("Y-m-d"),
            "nickname" => "",
            "gender" => "",
            "center" => "",
            "reference_tel" => "",
            "reference_name" => "",
            "family" => "",
            "has_work" => 0,
            "work_description" => "",
            "education_primary" => "",
            "education_secondary" => "",
            "has_occupation" => "",
            "occupation" => "",
            "criminal_record" => "",
            "criminal_situation" => "",
            "diseases" => array(),
            "other_diseases" => "",
            "treatments" => "");
    }

}
