<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
$this->load->view('setting/index');

    }
}

/* End of file Setting.php and path \application\controllers\Setting.php */
