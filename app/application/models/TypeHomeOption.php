<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TypeHomeOption extends CI_Model
{

    public function __construct()
    {

        parent::__construct();
        $this->load->database();
    }

    public function create($name, $parent, $active)
    {

        $data = array(
            'name' => $name,
            'typehomeparent' => $parent,
            'active' => $active,
            'created_at' => date("Y-m-d H:i:s")
        );
        $this->db->insert('typeshomesoptions', $data);
        return $this->db->insert_id();
    }

    public function save(&$id, $data)
    {
        if ($id == null) {
            $id = $this->create($data["name"], $data["typehomeparent"], $data["active"]);
        }

        $this->db->where("id", $id);
        $result = $this->db->update('typeshomesoptions', $data);

        return $result;
    }

    public function getActiveByParent($parentId)
    {
        $this->db->select();
        $this->db->from('typeshomesoptions');
        $this->db->where("typehomeparent = '{$parentId}'");
        $this->db->where("active = 1");
        
        return $this->db->get()->result_array();
    }

    public function getByParent($parentId)
    {
        $this->db->select();
        $this->db->from('typeshomesoptions');
        $this->db->where("typehomeparent = '{$parentId}'");

        return $this->db->get()->result_array();
    }

    public function getById($id)
    {
        $this->db->select();
        $this->db->from('typeshomesoptions');
        $this->db->where("id = '{$id}'");

        return $this->db->get()->result_array()[0];
    }

    public function getActives()
    {
        $this->db->select();
        $this->db->from('typeshomesoptions');
        $this->db->where('active = 1');

        return $this->db->get()->result_array();
    }

    public function getDefault()
    {
        return array("id" => "", "name" => "", "active" => 1);
    }

}
