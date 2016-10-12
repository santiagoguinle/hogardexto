<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Users class.
 * 
 * @extends CI_Controller
 */
class Img extends CI_Controller
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
    }

    public function avatar($filename)
    {
        $this->output->set_content_type("jpg");
        $this->output->set_output(file_get_contents('../uploads/avatars/' . $filename));
    }

}
