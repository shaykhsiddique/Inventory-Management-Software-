<?php include 'config/db_config.php' ?>

<?php
  $username = $POST['usrnm'];
  $pswrd = $POST['password']

  // to prevent SQL injection
  // $username = stripcslashes($username);
  // $pswrd = stripcslashes($pswrd);

  // $username = mysql_real_escape_string($username);
  // $pswrd = mysql_real_escape_string($pswrd);

  //connect to database with constructor 
  $db_login = new Database();
  //start quary
  $lg_quary = "select * from admin where username = '$username' and password = '$pswrd' ";
  $result = $db_login->select($lg_quary);
  if($result){
    echo ""
  }

?>