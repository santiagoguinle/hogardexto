<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        if (!isset($_SESSION["username"])) {
            redirect("login");
        }
        
        $data["optionsCenter"] = array(
            0 => "Elegí un centro barrial",
            1 => "DON BOSCO (DB)",
            2 => "SAN JOSE (SJ)",
            3 => "SAN FRANCISCO (SF)",
            4 => "JUAN PABLO II (JPII)",
            5 => "HURTADO (HU)");

        
        
        $this->load->model("Person");
        $data["birthdates"]=$this->Person->nextBirthdates();
        $data["lastpersons"]=$this->Person->lastPersons();
        
        $this->load->view('header');
        $this->load->view('welcome', $data);
        $this->load->view('footer');
    }

    public function search()
    {
        
    }

}
