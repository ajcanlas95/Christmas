<!doctype html>

<?php
  session_start();
  if ($_SESSION["login"] == "yes"){
    header("Location: ./admin.php");
  }
  $msg="none";
  if ($_GET["msglevel"]){
    if ($_GET["msglevel"]=="ERROR"){
        $msg="Not Registered User";
    } elseif ($_GET["msglevel"]=="PASSWORD") {
        $msg="Invalid Password";
    } elseif ($_GET["msglevel"]=="LOGOUT") {
        $msg="See you again!";
    }
  }
?>

<html lang="en">
  <head>
    <title>Login to Admin Panel</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    <?php
      if ($msg!="none"){
        if ($_GET["msglevel"]=="LOGOUT"){
          echo "<div class='alert alert-success' role='alert'>";
          echo $msg;
          echo "</div>";
        }else{
          echo "<div class='alert alert-danger' role='alert'>";
          echo $msg;
          echo "</div>";
        }
      }
    ?>
    <div class="container" style="padding-top:15%;">
      <div class="col-lg-4 mx-auto">
        <form method="POST" action="./login.php">
          <div class="form-group">
            <label for="InputUser">Username:</label>
            <input type="text" class="form-control" id="InputUser" name="user" placeholder="Username" required>
          </div>
          <div class="form-group">
            <label for="InputPassword">Password:</label>
            <input type="password" class="form-control" id="InputPassword" name="pw" placeholder="Password" required>
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
