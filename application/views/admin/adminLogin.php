<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
	   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  </head>
  <body>

        <div class="container">
            <div class="jumbotron">
                <div class="row">
                    <div class="col-md-6 offset-md-2">
                          <div class="card">
                              <div class="card-header">
                                  <h3>Admin Login</h3>
                              </div>
                              <div class="card-body">
                                  <form action="index.html" method="POST">
                                      <div class="form-group">
                                          <input type="text" name="username" placeholder="Username" class="form-control">
                                      </div>
                                      <div class="form-group">
                                          <input type="text" name="password" placeholder="Password" class="form-control">
                                      </div>
                                      <div class="form-group">
                                          <button type="submit" name="btn" class="btn btn-primary">Login</button>
                                      </div>
                                  </form>
                              </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>

  </body>
</html>
