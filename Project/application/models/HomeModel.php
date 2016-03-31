<?php

class HomeModel extends CI_Model{
    
    public function getData(){
        //get all records from the database, 'data' is the name of the table
        $query = $this->db->get('data'); 
        //result is an array of objects from the table
        return $query->result();
    }
}