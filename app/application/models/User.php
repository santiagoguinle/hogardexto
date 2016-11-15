<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class User extends CI_Model
{

    /**
     * __construct function.
     * 
     * @access public
     * @return void
     */
    public function __construct()
    {

        parent::__construct();
        $this->load->database();
    }

    /**
     * create_user function.
     * 
     * @access public
     * @param mixed $username
     * @param mixed $email
     * @param mixed $password
     * @return bool true on success, false on failure
     */
    public function create_user($username, $email, $password)
    {

        $data = array(
            'username' => $username,
            'email' => $email,
            'password' => $this->hash_password($password),
            'created_at' => date('Y-m-j H:i:s'),
        );

        return $this->db->insert('users', $data);
    }

    /**
     * resolve_user_login function.
     * 
     * @access public
     * @param mixed $username
     * @param mixed $password
     * @return bool true on success, false on failure
     */
    public function resolve_user_login($username, $password)
    {

        $this->db->select('password');
        $this->db->from('users');
        $this->db->where('username', $username);
        $hash = $this->db->get()->row('password');

        return $this->verify_password_hash($password, $hash);
    }

    /**
     * get_user_id_from_username function.
     * 
     * @access public
     * @param mixed $username
     * @return int the user id
     */
    public function get_user_id_from_username($username)
    {

        $this->db->select('id');
        $this->db->from('users');
        $this->db->where('username', $username);

        return $this->db->get()->row('id');
    }

    public function get_user($user_id)
    {

        $this->db->from('users');
        $this->db->where('id', $user_id);
        return $this->db->get()->row();
    }

    private function hash_password($password)
    {

        return password_hash($password, PASSWORD_BCRYPT);
    }

    private function verify_password_hash($password, $hash)
    {

        return password_verify($password, $hash);
    }

    public function getAll()
    {
        $this->db->from('users');
        return $this->db->get()->result_array();
    }
    
    
    public function save(&$id, $data)
    {
        if ($id == null) {
            $id = $this->create($data["name"], $data["is_confirmed"]);
        }

        $this->db->where("id", $id);
        $result = $this->db->update('users', $data);

        return $result;
    }
}
