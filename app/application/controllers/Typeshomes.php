<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Users class.
 * 
 * @extends CI_Controller
 */
class Typeshomes extends CI_Controller
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
        $this->load->model('TypeHome');
        $this->load->model('TypeHomeOption');
    }

    public function index()
    {
        $data["typehomes"] = $this->TypeHome->getAll();
        $data["modes"] = $this->TypeHome->getModes();
        $this->load->helper('form');
        $this->load->view('header');
        $this->load->view('typehome/list', $data);
        $this->load->view('footer');
    }
    
    public function create()
    {
        $this->edit(null);
    }

    public function edit($id = null)
    {
        $data["optionsModes"] = $this->TypeHome->getModes();
        $data["typehome"] = ($id) ? $this->TypeHome->getById($id) : $this->TypeHome->getDefault();

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('typehome[name]', 'Nombre', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('typehome[mode]', 'Modo de ingreso', '');
        $this->form_validation->set_rules('typehome[active]', 'Activo', '');

        if ($this->form_validation->run() === false) {
            $this->load->view('header');
            $this->load->view('typehome/edit', $data);
            $this->load->view('footer');
        } else {
            $typehome = $this->input->post('typehome');
            $typehome["active"] = $this->input->post("typehome[active]",0);
            
            if ($this->TypeHome->save($id, $typehome)) {
                redirect("/typeshomes");
            } else {
                $data["error"] = 'Hubo un problema creando el tipo de vivienda. Intente devuelta.';
                $this->load->view('header');
                $this->load->view('typehome/edit', $data);
                $this->load->view('footer');
            }
        }
    }
}
