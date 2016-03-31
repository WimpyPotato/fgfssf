<?php

class SuperAdminController extends CI_Controller {

    public function index() {
        if($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['name'] = $session_data;
            $this->load->view('SuperAdminView', $data);
        }else{
            //if no session, redirect to login page
            redirect('LoginController','refresh');
        }        
    }
    function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('HomeController');
    }
}