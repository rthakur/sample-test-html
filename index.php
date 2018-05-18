<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Creative World</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="jumbotron.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
    <style>
    .footer {
              position: fixed;
              left: 0;
              bottom: 0;
              width: 100%;
              background-color: #101010;
              color: white;
              text-align: center;
            }
</style>
  </head>
  <body>
<div class="nav">
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Creative World</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" method="POST" action="login.php" >
            <div class="form-group">
              <input type="text" name="email" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" name="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" name="login" class="btn btn-success">Sign in</button>
          </form>
        </div>
      </div>
    </nav>
</div>
<hr>
    <div class="container">
      <div class=" col-md-6 col-md-offset-3">
        <h1>Create An Account</h1>
        <h4>It's free and always will be.</h4><br/>
        <form method="POST" action="insert.php" enctype="multipart/form-data">
          <div class="row">
            <div class="form-group col-md-6">
              <label>First Name :</label>
              <input type="text" name="fname" class="form-control" placeholder="First Name">
            </div>
            <div class="form-group col-md-6">
              <label>Last Name :</label>
              <input type="text" name="lname" class="form-control" placeholder="Last Name">
            </div>
            <div class="form-group col-md-12">
              <label>Email Address :</label>
              <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
            </div>
            <div class="form-group col-md-6">
              <label>Password :</label>
              <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
            </div>
            <div class="form-group col-md-6">
              <label>Confirm Password :</label>
              <input type="password" name="cfpass" class="form-control" placeholder="Confirm Your Password">
            </div>
            <div class="col-md-12">
              <button type="submit" name="submit" class="btn btn-primary btn-block">SignUp</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- Footer -->
      <footer class="footer">
        <div class="container">
        <p class="text-center">&copy; Creative World, Inc.</p>
      </footer>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
