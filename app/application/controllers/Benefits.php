<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Users class.
 * 
 * @extends CI_Controller
 */
class Benefits extends CI_Controller
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
        $this->load->model('Benefit');
    }

    public function index()
    {
        $data["benefits"] = $this->Benefit->getAll();
        $this->load->helper('form');
        $this->load->view('header');
        $this->load->view('benefits/list', $data);
        $this->load->view('footer');
    }
    
    public function create()
    {
        $this->edit(null);
    }

    public function edit($id = null)
    {
        $data["benefit"] = ($id) ? $this->Benefit->getById($id) : $this->Benefit->getDefault();

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('benefit[name]', 'Nombre', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('benefit[active]', 'Activo', '');

        if ($this->form_validation->run() === false) {
            $this->load->view('header');
            $this->load->view('benefits/edit', $data);
            $this->load->view('footer');
        } else {
            $benefit = $this->input->post('benefit');
            $benefit["active"] = $this->input->post("benefit[active]",0);
            
            if ($this->Benefit->save($id, $benefit)) {
                redirect("/benefits");
            } else {
                $data["error"] = 'Hubo un problema creando el beneficio. Intente devuelta.';
                $this->load->view('header');
                $this->load->view('benefits/edit', $data);
                $this->load->view('footer');
            }
        }
    }
}
