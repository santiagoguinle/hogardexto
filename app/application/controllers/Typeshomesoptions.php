<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Users class.
 * 
 * @extends CI_Controller
 */
class Typeshomesoptions extends CI_Controller
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

    public function listof($parentId)
    {
        $data["typehome"] = $this->TypeHome->getById($parentId);
        $data["typehomesoptions"] = $this->TypeHomeOption->getByParent($parentId);
        $this->load->helper('form');
        $this->load->view('header');
        $this->load->view('typehomeoptions/list', $data);
        $this->load->view('footer');
    }

    public function create($parentId)
    {
        $this->edit($parentId, null);
    }

    public function edit($parentId, $id = null)
    {
        $data["typehome"] = $this->TypeHome->getById($parentId);
        $data["typehomeoption"] = ($id) ? $this->TypeHomeOption->getById($id) : $this->TypeHomeOption->getDefault();

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('typehomeoption[name]', 'Nombre', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('typehomeoption[active]', 'Activo', '');

        if ($this->form_validation->run() === false) {
            $this->load->view('header');
            $this->load->view('typehomeoptions/edit', $data);
            $this->load->view('footer');
        } else {
            $typehomeoption = $this->input->post('typehomeoption');
            $typehomeoption["typehomeparent"] = $parentId;
            $typehomeoption["active"] = $this->input->post("typehomeoption[active]",0);
            
            if ($this->TypeHomeOption->save($id, $typehomeoption)) {
                redirect("/typeshomesoptions/listof/" . $parentId);
            } else {
                $data["error"] = 'Hubo un problema creando la opcion. Intente devuelta.';
                $this->load->view('header');
                $this->load->view('typehomeoptions/edit', $data);
                $this->load->view('footer');
            }
        }
    }

}
