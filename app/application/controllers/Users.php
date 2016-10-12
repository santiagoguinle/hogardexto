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
        $this->load->model('user');
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

        if ($this->form_validation->run() === false) {

            // validation not ok, send validation errors to the view
            $this->load->view('header');
            $this->load->view('user/register/register', $data);
            $this->load->view('footer');
        } else {

            // set variables from the form
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            if ($this->user->create_user($username, $email, $password)) {

                // user creation ok
                $this->load->view('header');
                $this->load->view('user/register/register_success', $data);
                $this->load->view('footer');
            } else {

                // user creation failed, this should never happen
                $data->error = 'There was a problem creating your new account. Please try again.';

                // send error to the view
                $this->load->view('header');
                $this->load->view('user/register/register', $data);
                $this->load->view('footer');
            }
        }
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
            $this->load->view('header');
            $this->load->view('user/login/login');
            $this->load->view('footer');
        } else {

            // set variables from the form
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if ($this->user->resolve_user_login($username, $password)) {

                $user_id = $this->user->get_user_id_from_username($username);
                $user = $this->user->get_user($user_id);

                // set session user datas
                $_SESSION['user_id'] = (int) $user->id;
                $_SESSION['username'] = (string) $user->username;
                $_SESSION['logged_in'] = (bool) true;
                $_SESSION['is_confirmed'] = (bool) $user->is_confirmed;
                $_SESSION['is_admin'] = (bool) $user->is_admin;

                // user login ok
                $this->load->view('header');
                $this->load->view('user/login/login_success', $data);
                $this->load->view('footer');
            } else {

                // login failed
                $data->error = 'Wrong username or password.';

                // send error to the view
                $this->load->view('header');
                $this->load->view('user/login/login', $data);
                $this->load->view('footer');
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
            $this->load->view('header');
            $this->load->view('user/logout/logout_success', $data);
            $this->load->view('footer');
        } else {

            // there user was not logged in, we cannot logged him out,
            // redirect him to site root
            redirect('/');
        }
    }

}
