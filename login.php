<?php 
session_start();
if (isset($_SESSION['usrnm'])) { 
  header('location:dashboard.php');
}
  $message ='';


  if(isset($_POST['usrnm']) && isset($_POST['password'])){
    $username = $_POST['usrnm'];
    $password = $_POST['password'];
    //database connection
    include 'config/db_config.php';

    $login_db = new database();
    $query = "select * from admin where pswrd = '$password' and username = '$username'";

    $poster = $login_db->select($query);
    if(!$poster){
        $message = 'Wrong username or password.';
    }else{
      $result = $poster->fetch_assoc();
      if($result['pswrd'] == $password){
        $_SESSION['usrnm'] = $username;
        $url='dashboard.php';
        echo '<META HTTP-EQUIV=REFRESH CONTENT="0; '.$url.'">';
        //header('location:dashboard.php');
      }else{
        $message = 'Wrong username or password.';
      }
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>RATUL MOTORS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
  <style>

  #text_head {
  color: #d7ceb2;
  text-shadow: 3px 3px 0px #000000, 5px 5px 0px #b5b5b5;
  font: 60px 'BazarMedium';
  font-weight: bold;
  letter-spacing: 10px;
  }

    #grad1 {
    border-radius: 5px;
    height: 100px;
    background: black; /* For browsers that do not support gradients */
    background: linear-gradient(to bottom right, #161619, white); /* Standard syntax (must be last) */
    }

    .head_style{
      background:#DED9D9;
      height: 80px;
      padding: 5px;
      /*border: 0px solid black;*/
      border-radius: 10px;
    }
    .login_style{
      background: #dde8ff; 
      margin-left:10px;
      margin-right:10px;
      border-radius: 10px;

    }

    button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 10px;
    margin-top: 10px;
    margin-right: 13px;
    border: none;
    cursor: pointer;
    width: 25%;
    border-radius: 05px;
  }

  button:hover {
      opacity: 0.8;
  }
  </style>

</head>
<body> 
 <!-- header start -->

  <div  id="grad1" style=" padding: 10px;"><span id="text_head"> RATUL MOTORS</span></div>
  
    <!-- hedear end -->
<div class="row">
    <div class="col-sm-4">
    <!-- empty space left -->
    </div>
    <div class="col-sm-4" style="padding-top:50px;">
      <center><text style="font-size:20px; font-weight: bold; color:#1d01b7;">Admin Login</text></center>
      <br>
      <div class="panel panel-default login_style" style="padding:5px;">
        <div class="panel-body">
          <?php if(!empty($message)): ?>
          <div class="alert alert-danger">
            <?= $message; ?>
          </div>
        <?php endif; ?>
        <form action="" method="POST">
          <div class="input-group">
             <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
             <input id="usrnm" type="text" class="form-control" name="usrnm" placeholder="Username">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input id="password" type="password" class="form-control" name="password" placeholder="Password">
          </div>
          <br>
          <center>
            <button type="submit" id="btnlogin" style="font-weight:bold;">LOGIN</button><span class="psws"> <a href="#">Forgot password?</a></span>
          </center>
        </form>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
    <!-- empty space -->
    </div>
  </div>
</body>
</html>



