<?php

class LoginController extends CI_Controller {

    public function index() {
        $this->load->view('LoginView');
    }

    public function checkLogin() {
        //form validation.. checking that the user inputs a username and password
        //username is the name of the variable, Username is how it appears to the user, 
        //and required means it will produce an error message if the form is not filled in 
        $this->form_validation->set_rules('username', 'Username', 'required');
        //same for password
        $this->form_validation->set_rules('password', 'Password', 'required|callback_verifyUser');

        if ($this->form_validation->run() == false) { //if there are any errors in the form validation
            //reload the login view
            $this->load->view('LoginView');
        } else {      
            $name = $this->input->post('username');
            $this->load->model('LoginModel');
            if ($this->LoginModel->checkLevel($name) == 3) {
                redirect('SuperAdminController');
            } else if ($this->LoginModel->checkLevel($name) == 2) {
                redirect('AdminController');
            }else{
                redirect('StaffController');
            }
        }
    }

    public function verifyUser() {
        //assign the password from the form to $pass
        $pass = $this->input->post('password');
        //assign the username from the form to $name
        $name = $this->input->post('username');
        //loading the Login Model
        $this->load->model('LoginModel');

        //if this returns true from the Model, the user exists in the database
        if ($this->LoginModel->login($name, $pass)) {
            //set session
            $this->session->set_userdata('logged_in', $name);
            //give control back to the checkLogin function, in the else brackets where validation will be true
            return true;
        } else {
            //send a message to user, if the username or password dont match any row in the database
            $this->form_validation->set_message('verifyUser', 'Incorrect Username or Password. Please try again.');
            return false;
        }
    }

}
