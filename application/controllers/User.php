<?php

    /**
     *
     */
    class User extends CI_Controller
    {

        public function __construct()
        {
          parent::__construct();

          $this->load->library('form_validation');
          $this->load->library('email');
          // $this->load->library('session');

          //load model
          $this->load->model('user_model');
        }

      public function index()
    	{
          $data = [
                'user' => $this->user_model->getData()
          ];
          $this->load->view('users/viewUsers',$data);
    	}


      // public function addNewUserForm()
      // {
      //       $this->load->view('users/createUser');
      //
      // }

      public function add()
      {

          $this->load->library('form_validation');

          //validate here if validate then move ahead
          $this->form_validation->set_rules('name','Name','required');
          $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[user.email]');
          $this->form_validation->set_rules('contact','Contact','required|regex_match[/^[0-9]{10}$/]');
          $this->form_validation->set_rules('password','Password','required');

          if ($this->form_validation->run() == false) {

                $this->load->view('users/createUser');
          }
          else{

              //send to database


              $data   = array();
              $data['name'] =  $this->input->post('name');
              $data['email'] =  $this->input->post('email');
              $data['contact'] =  $this->input->post('contact');
              $data['password'] =  $this->input->post('password');
              $this->user_model->saveNewUserData($data);

              //if success return
              $this->load->helper('url');
              $this->session->set_flashdata('success','Record added.');
              redirect('user');


          }



      }


      //edit userform
      // public function edit($id)
      // {
      //     //get data load with form
      //     $this->load->model('user');
      //     $user  = $this->user->getEditUserData($id);
      //
      //     //get and send to edit form
      //     $data = array();
      //     $data['user'] = $user;
      //     $this->load->view('users/editUser',$data);
      //
      // }


      //update user
      public function edit($id = NULL)
      {

          //if id got
          if (isset($id)) {

            $this->load->library('form_validation');
            //get data load with form
            $this->load->model('user_model');

            $user  = $this->user_model->getEditUserData($id);
            if (!empty($user)) {
              //validate here if validate then move ahead
              $this->form_validation->set_rules('name','Name','required');
              $this->form_validation->set_rules('email','Email','required|valid_email');
              $this->form_validation->set_rules('contact','Contact','required|regex_match[/^[0-9]{10}$/]');
              $this->form_validation->set_rules('password','Password','required');

              if ($this->form_validation->run() == false) {
                  $data = array();
                  $data['user'] = $user;
                  $this->load->view('users/editUser',$data);
              }
              else{
                  $data   = array();
                  $data['name'] =  $this->input->post('name');
                  $data['email'] =  $this->input->post('email');
                  $data['contact'] =  $this->input->post('contact');
                  $data['password'] =  $this->input->post('password');
                  $data['updated_at'] =  date('Y-m-d h:i:s');
                  $this->user_model->updateUser($id,$data);

                  //if success return
                  // $this->load->helper('url');
                  $this->session->set_flashdata('success','Record updated.');
                  redirect('user');


              }
            }
            else{
                    $this->session->set_flashdata('error','No record found.');
                    redirect('user');
            }


          }
          else{
                redirect('user');
          }



      }

      //remove user
      public function remove($id)
      {
              if (isset($id)) {
                $this->user_model->removeUser($id);
                $this->load->helper('url');
                $this->session->set_flashdata('success','Record removed.');
              }
              redirect('user');
      }
    }//main controller ends




 ?>
