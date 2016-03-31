<?php

class StaffController extends CI_Controller {

    //default function
    public function index() {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['name'] = $session_data;
            //load the home model to the controller
            $this->load->model('HomeModel');
            //name the data records, which will be used to access it in the View
            $data['records'] = $this->HomeModel->getData();
            //sending $data to the HomeView and displaying the view
            $this->load->view('StaffView', $data);
        }else{
            //if no session, redirect to login page
            redirect('LoginController','refresh');
        }
    }

    function logout() {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('HomeController');
    }

}
