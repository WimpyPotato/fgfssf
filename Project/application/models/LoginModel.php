<?php

class LoginModel extends CI_Model {

    public function login($name, $pass) {
        $this->db->select('username', 'password'); //reading from the columns "username" and "password"
        $this->db->from('login'); //reading from the login table
        $this->db->where('username', $name); //check if username in the database matches the username provided
        $this->db->where('password', $pass); //check if password matches

        $query = $this->db->get(); //get all the results from the database given the conditions

        if ($query->num_rows() == 1) {//if the username and password matches a row in the database
            return true;
        } else {
            return false;
        }
    }

    public function checkLevel($name) {
//function to find level of user
        //read entire login table
        $query = $this->db->get('login');
        //gives login the results from the query as objects per row
        $login = $query->result();
        //for each row object
        foreach ($login as $r) {
            //if the username matches the one inputted
            if ($r->username == $name) {
                //get the value of their level and store it in level
                $level = $r->level;
                return $level;
            }
        }
    }
}
