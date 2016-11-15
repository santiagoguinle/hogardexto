<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Users class.
 * 
 * @extends CI_Controller
 */
class Diseases extends CI_Controller
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
        $this->load->helper(array('url'));
        $this->load->model('Disease');
    }

    public function index()
    {
        $data["diseases"] = $this->Disease->getAllDiseases();
        $this->load->helper('form');
        $this->load->view('header');
        $this->load->view('diseases/list', $data);
        $this->load->view('footer');
    }
    
    public function create()
    {
        $this->edit(null);
    }

    public function edit($id = null)
    {
        $data["disease"] = ($id) ? $this->Disease->getById($id) : $this->Disease->getDefault();

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('disease[disease_name]', 'Nombre', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('disease[is_active]', 'Activo', '');

        if ($this->form_validation->run() === false) {
            $this->load->view('header');
            $this->load->view('diseases/edit', $data);
            $this->load->view('footer');
        } else {
            $disease = $this->input->post('disease');
            $disease["is_active"] = $this->input->post("disease[is_active]",0);
            
            if ($this->Disease->save($id, $disease)) {
                redirect("/diseases");
            } else {
                $data["error"] = 'Hubo un problema creando la enfermedad. Intente devuelta.';
                $this->load->view('header');
                $this->load->view('diseases/edit', $data);
                $this->load->view('footer');
            }
        }
    }
}
