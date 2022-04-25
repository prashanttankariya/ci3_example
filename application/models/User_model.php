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
          //now select data from database
          $this->db->select('*');
          $this->db->from('user');
          $objQuery = $this->db->get();
          return $objQuery->result_array();
      }


      public function all()
      {
          //now select data from database
          $this->db->select('*');
          $this->db->from('user');
          $objQuery = $this->db->get();
          return $objQuery->num_rows();

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
