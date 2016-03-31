<?php

class HomeController extends CI_Controller{
    
    //default function
    public function index(){
        //load the home model to the controller
        $this->load->model('HomeModel');
        //name the data records, which will be used to access it in the View
        $data['records'] = $this->HomeModel->getData();
        //sending $data to the HomeView and displaying the view
        $this->load->view('HomeView', $data);
    }
}