<?php 

defined('BASEPATH') OR exit('No direct script allowed');
class Program extends CI_Controller
{
    public function index()
    {
        $this->load->view('viewprogram');
    }
}

?>