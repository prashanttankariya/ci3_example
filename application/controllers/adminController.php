<?php

    /**
     *
     */
    class userController extends CI_Controller
    {

        public function __construct()
        {
          parent::__construct();

          $this->load->library('form_validation');
          $this->load->library('email');
          $this->load->library('session');
        }

      public function index()
    	{
          // $this->load->model('admin');
          // $data['admin'] = $this->user->getData();
          $this->load->view('admin/adminLogin');
    	}

    }//main controller ends




 ?>
