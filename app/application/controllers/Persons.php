<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Users class.
 * 
 * @extends CI_Controller
 */
class Persons extends CI_Controller
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
//$this->load->model('user');
        $this->load->model('person');
    }

    public function index()
    {
        
    }

    private function getDataOptions()
    {
        $data["optionsCenter"] = array(
            0 => "Elegí un centro barrial",
            1 => "DON BOSCO (DB)",
            2 => "SAN JOSE (SJ)",
            3 => "SAN FRANCISCO (SF)",
            4 => "JUAN PABLO II (JPII)",
            5 => "HURTADO (HU)");

        $data["optionsEducation"] = array(
            0 => "Sin especificar",
            1 => "Completo",
            2 => "En Curso",
        );

        $data["optionsJudicial"] = array(
            0 => "Sin especificar",
            1 => "Sin cargos",
            2 => "Pedido de captura",
            3 => "En Penal"
        );

        $data["optionsHospitals"] = array(
            "Elegir un hospital",
            1 => "Peña",
            2 => "Muñiz",
        );

        $data["diseases"] = array(
            array("id" => 1, "name" => "Tuberculosis"),
            array("id" => 2, "name" => "HIV")
        );
        return $data;
    }

    public function view($id)
    {
        $data = $this->getDataOptions();

        // create the data object
        $data["person"] = $this->person->getPerson($id);

        // load form helper and validation library
        $this->load->helper('form');
        $this->load->helper('persons');

        $this->load->view('header');
        $this->load->view('persons/view/main', $data);
        $this->load->view('footer');
    }

    public function create()
    {
        $this->edit(null);
    }

    public function center($centerId)
    {
        $data = $this->getDataOptions();

        if(!isset($data["optionsCenter"][$centerId])) {
            show_404("/person/center/".$centerId,$centerId." no encontrado como centro de dia");
        }

        $data["centerName"] = $data["optionsCenter"][$centerId];
        $data["persons"] = $this->person->getByCenterId($centerId);

        $this->load->view('header');
        $this->load->view('persons/lists/center', $data);
        $this->load->view('footer');
    }

    public function search()
    {
        $data = $this->getDataOptions();

        $data["persons"] = $this->person->get_all();

        $this->load->view('header');
        $this->load->view('persons/lists/search', $data);
        $this->load->view('footer');
    }

    public function download()
    {
        $data = $this->getDataOptions();

        $this->load->library("PHPExcel/PHPExcel", null, "PHPExcel");
        $data["persons"] = $this->person->get_all();

        $rows = $this->prepareForDownload($data["persons"]);

        $this->PHPExcel->getActiveSheet()->fromArray($rows, null, "A1");
        $this->PHPExcel->getActiveSheet()->setTitle('Lista Completa');
        // Redirect output to a client’s web browser (Excel2007)
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="01simple.xlsx"');
        header('Cache-Control: max-age=0');

        $objWriter = PHPExcel_IOFactory::createWriter($this->PHPExcel, 'Excel2007');
        $objWriter->save('php://output');
    }

    private function prepareForDownload($persons)
    {
        $opts = $this->getDataOptions();
        $rows = array();
        $rows[] = array("Id", "Nombre", "Apodo", "Apellido", "Cuil", "Genero",
            "Centro", "Telefono Referencia", "Nombre Referencia", "Familia",
            "Trabajo", "Educacion Primaria", "Educacion Secundaria", "Ocupacion",
            "Situacion Judicial", "Antecedentes Penales", "Enfermedades", "Tratamientos");
        foreach ($persons as $row) {
            $rows[] = array($row["id"], $row["name"], $row["nickname"],
                $row["lastname"], $row["cuil"], $row["gender"], $opts["optionsCenter"][$row["center"]],
                $row["reference_tel"], $row["reference_name"], $row["family"],
                $row["work_description"], $opts["optionsEducation"][$row["education_primary"]],
                $opts["optionsEducation"][$row["education_secondary"]],
                $row["occupation"], $opts["optionsJudicial"][$row["criminal_situation"]],
                $row["other_diseases"], $row["treatments"]);
        }
        return $rows;
    }

    public function edit($id = null)
    {
        $data = $this->getDataOptions();

// create the data object
        $data["person"] = ($id) ? $this->person->getPerson($id) : $this->person->getDefaultPerson();

// load form helper and validation library
        $this->load->helper('form');
        $this->load->helper('persons');
        $this->load->library('form_validation');

// set validation rules
        $this->form_validation->set_rules('person[name]', 'Nombre', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('person[firstdate]', 'Fecha de ingreso', '');

        if ($this->form_validation->run() === false) {
// validation not ok, send validation errors to the view
            $this->load->view('header');
            $this->load->view('persons/edit/main', $data);
            $this->load->view('footer');
        } else {

// set variables from the form
            $person = $this->input->post('person');

            $person["avatar"] = $this->uploadAvatar($data["person"]["avatar"], $person["name"] . " " . $person["lastname"]);

            if ($this->person->save($id, $person)) {
                redirect("/persons/view/{$id}");
            } else {
                $data["error"] = 'There was a problem creating this new person. Please try again.';
                $this->load->view('header');
                $this->load->view('persons/edit/main', $data);
                $this->load->view('footer');
            }
        }
    }

    private function uploadAvatar($previous, $newfilename)
    {
        $config['upload_path'] = '../uploads/avatars/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 1000;
        $config['max_width'] = 1524;
        $config['max_height'] = 1068;
        $config['file_name'] = $newfilename;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('avatar')) {
            $errors = $this->upload->display_errors();
            return $previous;
        } else {
            $data = $this->upload->data();
            return $data['file_name'];
        }
    }

}
