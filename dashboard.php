<?php session_start();
include('config.php');?>
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
<div class="container">
  <div class="col-md-8 col-md-offset-2">
    <h1 class="text-center">Welcome To Our Project.. </h1><br/>
    <?php if(isset($_SESSION['user'])){
    ?>  <h4> WELCOME <mark> <?php echo $_SESSION['user']; ?></mark>.Have a Nice day !</h4>
    <?php }
    else{
      echo "<h1>Please login First</h1>";
    }
    ?>
    <h2> Users Data </h2>
      <div class="row">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Password</th>
              <th>Confirm Password</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php $result = $conn->query("SELECT * FROM admin");
                  while($row = mysqli_fetch_assoc($result))
                  {
            ?>
            <tr>
              <td><?php echo $row['fname'];?></td>
              <td><?php echo $row['lname'];?></td>
              <td><?php echo $row['email'];?></td>
              <td><?php echo $row['password'];?></td>
              <td><?php echo $row['cfpass'];?></td>
              <td><a href="edit.php?edit=<?php echo $row['id'];?>"><span class="glyphicon glyphicon-edit"></span> Edit</a></td>
              <td><a href="delete.php?delete=<?php echo $row['id'];?>"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
  </div>
</div>
    <!-- Footer -->
      <footer class="footer">
        <div class="container">
        <p class="text-center">&copy; Creative World, Inc.</p>
      </footer>
    </div>
    <!-- Bootstrap core JavaScript-->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
