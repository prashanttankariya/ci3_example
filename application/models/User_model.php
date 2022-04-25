<?php

    /**
     *
     */
    class User_model extends CI_Model
    {


      public function __construct()
      {
          parent::__construct();
          $this->load->database('testing_ci3');


      }

      public function getData()
      {
          // return ['user'=> 'prashant','age' => 25];
          //now select data from database
          $this->db->select('*');
          $this->db->from('user');
          $objQuery = $this->db->get();
          return $objQuery->result_array();

      }


      //add data
      public function saveNewUserData($data)
      {
          //add query
          $ins = $this->db->insert('user',$data);
      }


      //get edit userdata
      public function getEditUserData($id)
      {

          $this->db->where('id',$id);
          return $this->db->get('user')->row_array();

      }

      //get edit userdata
      public function updateUser($id,$formData)
      {
          $this->db->where('id',$id);
          $this->db->update('user',$formData);
      }


      //remove user data
      public function removeUser($id)
      {
          //add query
          $this->db->where('id',$id);
          $this->db->delete('user');
      }


    }// main model ends
 ?>
