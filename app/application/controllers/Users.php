<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Users class.
 * 
 * @extends CI_Controller
 */
class Users extends CI_Controller
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
        //$this->load->library(array('session'));
        $this->load->helper(array('url'));
        $this->load->model('User');
    }

    public function index()
    {
        
    }

    /**
     * register function.
     * 
     * @access public
     * @return void
     */
    public function register()
    {

        // create the data object
        $data = new stdClass();

        // load form helper and validation library
        $this->load->helper('form');
        $this->load->library('form_validation');

        // set validation rules
        $this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|min_length[4]|is_unique[users.username]', array('is_unique' => 'Este usuario ya existe. Por favor elegí otro.',
            'required' => 'El campo Nombre de usuario es obligatorio',
            'alpha_numeric' => 'Por favor usa solo letras y numeros para el nombre de usuario',
            'min_length' => 'El nombre debe ser al menos de 4 caracteres'));
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]', array('is_unique' => 'Este Email ya existe. Por favor elegí otro.',
            'required' => 'El campo Email es obligatorio',
            'valid_email' => 'Por favor ingrese un email valido'));
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]', array('required' => 'El campo contraseña es obligatorio',
            'min_length' => 'La contraseña debe ser al menos de 6 caracteres'));
        $this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required|min_length[6]|matches[password]', array('required' => 'El campo confirmar contraseña es obligatorio',
            'min_length' => 'La contraseña debe ser al menos de 6 caracteres',
            'matches' => 'Las contraseñas no coinciden'));

        
        $this->load->view('header_guest');
        
        if ($this->form_validation->run() === false) {

            // validation not ok, send validation errors to the view
            $this->load->view('user/register/register', $data);
            
        } else {

            // set variables from the form
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            if ($this->User->create_user($username, $email, $password)) {

                // user creation ok
                $this->load->view('user/register/register_success', $data);
            } else {

                // user creation failed, this should never happen
                $data->error = 'There was a problem creating your new account. Please try again.';

                // send error to the view
                $this->load->view('user/register/register', $data);
            }
        }
        $this->load->view('footer_guest');
    }

    /**
     * login function.
     * 
     * @access public
     * @return void
     */
    public function login()
    {

        // create the data object
        $data = new stdClass();

        // load form helper and validation library
        $this->load->helper('form');
        $this->load->library('form_validation');

        // set validation rules
        $this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {

            // validation not ok, send validation errors to the view
            $this->load->view('header_guest');
            $this->load->view('user/login/login');
            $this->load->view('footer_guest');
        } else {

            // set variables from the form
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if ($this->User->resolve_user_login($username, $password)) {

                $user_id = $this->User->get_user_id_from_username($username);
                $user = $this->User->get_user($user_id);

                // set session user datas
                $_SESSION['user_id'] = (int) $user->id;
                $_SESSION['username'] = (string) $user->Username;
                $_SESSION['logged_in'] = (bool) true;
                $_SESSION['is_confirmed'] = (bool) $user->is_confirmed;
                $_SESSION['is_admin'] = (bool) $user->is_admin;

                
                redirect("/");
            } else {

                // login failed
                $data->error = 'Error en usuario o contraseña.';

                // send error to the view
                $this->load->view('header_guest');
                $this->load->view('user/login/login', $data);
                $this->load->view('footer_guest');
            }
        }
    }

    /**
     * logout function.
     * 
     * @access public
     * @return void
     */
    public function logout()
    {

        // create the data object
        $data = new stdClass();

        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {

            // remove session datas
            foreach ($_SESSION as $key => $value) {
                unset($_SESSION[$key]);
            }

            // user logout ok
            $this->load->view('header_guest');
            $this->load->view('user/logout/logout_success', $data);
            $this->load->view('footer_guest');
        } else {

            // there user was not logged in, we cannot logged him out,
            // redirect him to site root
            redirect('/');
        }
    }

    public function listing()
    {
        $data["users"] = $this->User->getAll();
        $this->load->helper('form');
        $this->load->view('header');
        $this->load->view('user/list', $data);
        $this->load->view('footer');
    }
    
    public function create()
    {
        $this->edit(null);
    }

    public function edit($id = null)
    {
        $data["user"] = ($id) ? $this->User->get_user($id) : $this->User->getDefault();

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('user[username]', 'Nombre de usuario', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('user[email]', 'Email', '');
        $this->form_validation->set_rules('user[is_confirmed]', 'Activo', '');
        $this->form_validation->set_rules('user[is_admin]', 'Tipo de usuario', '');

        if ($this->form_validation->run() === false) {
            $this->load->view('header');
            $this->load->view('user/edit', $data);
            $this->load->view('footer');
        } else {
            $user = $this->input->post('user');
            $user["is_confirmed"] = $this->input->post("user[is_confirmed]",0);
            
            if ($this->User->save($id, $user)) {
                redirect("/users/listing");
            } else {
                $data["error"] = 'Hubo un problema creando usuario. Intente devuelta.';
                $this->load->view('header');
                $this->load->view('user/edit', $data);
                $this->load->view('footer');
            }
        }
    }
    
}
