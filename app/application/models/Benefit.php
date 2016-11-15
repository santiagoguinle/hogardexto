<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Benefit extends CI_Model
{

    CONST CACHE_TIME = 3600;

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function saveToPerson($id, $benefits)
    {
        if (!$id)
            return;

        $this->db->where("person_id", $id);
        $this->db->delete("benefits_by_persons");

        foreach ($benefits as $benefit) {
            $this->db->insert('benefits_by_persons', array("person_id" => $id, "benefit_id" => $benefit));
        }
    }

    public function benefitsOfPerson($id)
    {
        $this->db->select("person_id,benefit_id,name");
        $this->db->where("person_id = {$id}");
        $this->db->where('is_deleted = 0');
        $this->db->join("benefits_by_persons", "benefits_by_persons.benefit_id = benefits.id", "left");
        $result = $this->db->get('benefits');

        $benefits = $result->row_array();
        return $benefits;
    }

    public function getAll()
    {
        $this->db->select();
        $this->db->from('benefits');
        $benefits = $this->db->get()->result_array();
        return $benefits;
    }

    public function create($name, $active)
    {

        $data = array(
            'name' => $name,
            'active' => $active,
            'created_at' => date("Y-m-d H:i:s")
        );
        $this->db->insert('benefits', $data);
        return $this->db->insert_id();
    }

    public function save(&$id, $data)
    {
        if ($id == null) {
            $id = $this->create($data["name"], $data["active"]);
        }

        $this->db->where("id", $id);
        $result = $this->db->update('benefits', $data);

        return $result;
    }

    public function getById($id)
    {
        $this->db->select();
        $this->db->from('benefits');
        $this->db->where("id = '{$id}'");

        return $this->db->get()->result_array()[0];
    }

    public function getActives()
    {
        $cacheKey = get_class($this) . "getActives";
        $memcache = new Memcached();
        $benefits = $memcache->get($cacheKey);
        if (!$benefits) {
            $this->db->select();
            $this->db->from('benefits');
            $this->db->where('active = 1');
            $this->db->where('is_deleted = 0');
            $benefits = $this->db->get()->result_array();
            $memcache->set($cacheKey, $benefits, self::CACHE_TIME);
        }
        return $benefits;
    }

    public function getDefault()
    {
        return array("id" => "", "name" => "", "active" => 1);
    }

}
