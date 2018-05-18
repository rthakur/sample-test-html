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
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
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
        a {
        text-decoration: none !important;
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
          </button>
          <a class="navbar-brand" href="#">Creative World</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" action="logout.php" method="POST">
            <button type="submit" class="btn btn-success">LogOut</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
</div>
<hr>
<?php
include('config.php');

//$id = '';
if(isset($_GET["edit"]))
{
  $id = $_GET['edit'];
  $sql = "SELECT * FROM admin WHERE id = '$id'";
  $result = $conn->query($sql);
  if($row = mysqli_fetch_assoc($result))
  {
    $id = $row['id'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    $email = $row['email'];
    $password = $row['password'];
    $cfpass = $row['cfpass'];
  }
}
  ?>
  <html>
  <body>
  <div class="container">
    <div class=" col-md-6 col-md-offset-3">
      <h1>Update Your Personal Data</h1>
      <h4>It's free and safe.</h4><br/>
      <form method="POST" action="update.php" enctype="multipart/form-data">
        <div class="row">
          <div class="form-group col-md-12">

            <input type="hidden" name="id" class="form-control"  value="<?php echo $id; ?>">
          </div>
          <div class="form-group col-md-6">
            <label>First Name :</label>
            <input type="text" name="fname" class="form-control" placeholder="First Name" value="<?php echo $fname; ?>">
          </div>
          <div class="form-group col-md-6">
            <label>Last Name :</label>
            <input type="text" name="lname" class="form-control" placeholder="Last Name" value="<?php echo $lname; ?>">
          </div>
          <div class="form-group col-md-12">
            <label>Email Address :</label>
            <input type="email" name="email" class="form-control" placeholder="Enter Your Email" value="<?php echo $email; ?>">
          </div>
          <div class="form-group col-md-6">
            <label>Password :</label>
            <input type="password" name="password" class="form-control" placeholder="Enter Your Password" value="<?php echo $password; ?>">
          </div>
          <div class="form-group col-md-6">
            <label>Confirm Password :</label>
            <input type="password" name="cfpass" class="form-control" placeholder="Confirm Your Password" value="<?php echo $cfpass; ?>">
          </div>
          <div class="col-md-12">
            <button type="submit" name="update" class="btn btn-primary btn-block">Update</button>
          </div>
        </div>
      </form>
    </div>
  </div>
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
