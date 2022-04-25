<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
    <title>Create</title>
  </head>
  <body class="container p-4">
      <div class="row card-body ">
          <div class="col-md-6 offset-md-3 card-header border-bottom-0">
              <h1>Add New User</h1>
          </div>
          <div class="col-md-6 offset-md-3 card-header border-bottom-0">
              <form class="" method="POST">
                
                <div class="form-group">
                    <input type="text" name="name" class="form-control" value="<?php echo set_value('name') ?>" placeholder="Name">
                    <?php  echo form_error('name'); ?>
                </div>
                <div class="form-group">
                    <input type="text" name="email" class="form-control" value="<?php echo set_value('email') ?>" placeholder="Email">
                    <?php  echo form_error('email'); ?>
                </div>
                <div class="form-group">
                    <input type="text" name="contact" class="form-control" value="<?php echo set_value('contact') ?>" placeholder="Contact" maxlength="10">
                    <?php  echo form_error('contact'); ?>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" value="<?php echo set_value('password') ?>" placeholder="Password">
                    <?php  echo form_error('password'); ?>
                </div>
                <div class="form-group">
                    <input type="submit" name="btn" class="btn btn-primary" value="Save">
                </div>
              </form>
          </div>
      </div>





  </body>
</html>
