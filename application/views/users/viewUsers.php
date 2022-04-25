<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>View</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
	   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  </head>
  <body class="container p-4">
      <div class="row">
              <?php
                  $this->load->view('alert');
                ?>
      </div>

      <div class="row">
          <div class="col-md-10">
              <h1>View All users</h1>
          </div>
          <div class="col-md-2">
              <a href="addNewUserForm" class="btn btn-info">Add New User</a>
          </div>
      </div>


        <hr>

        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Time</th>
                <th>Action</th>
            </tr>
          <?php

              // print_r($users);
              $loopIndex = 1;

              if (!empty($user)) {

              foreach ($user as $uv) {

                  ?>

                    <tr>
                        <td><?php echo $loopIndex++; ?></td>
                        <td><?php echo $uv['name']; ?></td>
                        <td><?php echo $uv['email']; ?></td>
                        <td><?php echo $uv['contact']; ?></td>
                        <td><?php echo $uv['created_at']; ?></td>
                        <td>
                          <a href="<?php echo base_url('user/edit/'.$uv['id']); ?>" class="btn btn-sm btn-success">Edit</a>
                          <a href="<?php echo base_url('user/remove/'.$uv['id']); ?>" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>

                  <?php

              } //foreach ends

            }//if ends
            else{

              ?>

                <tr>
                  <td>No record found.</td>
                </tr>

              <?php
            }

           ?>
       </table>
  </body>
</html>
