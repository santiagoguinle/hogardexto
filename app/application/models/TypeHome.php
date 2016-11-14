<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TypeHome extends CI_Model
{

    CONST MODE_OPTIONS = 1;
    CONST MODE_COMPLETE = 2;
    CONST MODE_FINAL = 3;

    public function __construct()
    {

        parent::__construct();
        $this->load->database();
    }

    public function getModes()
    {
        return array(
            self::MODE_OPTIONS => "Lista de opciones",
            self::MODE_COMPLETE => "Completar Campo",
            self::MODE_FINAL => "Es opcion final");
    }

    public function create($name, $mode, $active)
    {

        $data = array(
            'name' => $name,
            'mode' => $mode,
            'active' => $active,
            'created_at' => date("Y-m-d H:i:s")
        );
        $this->db->insert('typeshomes', $data);
        return $this->db->insert_id();
    }

    public function save(&$id, $data)
    {
        if ($id == null) {
            $id = $this->create($data["name"], $data["mode"], $data["active"]);
        }

        $this->db->where("id", $id);
        $result = $this->db->update('typeshomes', $data);

        return $result;
    }

    public function getAll()
    {
        $this->db->select();
        $this->db->from('typeshomes');

        return $this->db->get()->result_array();
    }

    public function getById($id)
    {
        $this->db->select();
        $this->db->from('typeshomes');
        $this->db->where("id = '{$id}'");

        return $this->db->get()->result_array()[0];
    }

    public function getActives()
    {
        $this->db->select();
        $this->db->from('typeshomes');
        $this->db->where('active = 1');

        return $this->db->get()->result_array();
    }

    public function getDefault()
    {
        return array("id" => "", "name" => "", "mode" => self::MODE_OPTIONS, "active" => 1);
    }

}
