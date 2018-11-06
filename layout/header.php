<!DOCTYPE html>
<html lang="en">
<head>
  <title>RATUL MOTORS</title>

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="css/vendor/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="css/vendor/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="css/jquery.bdt.css" type="text/css" rel="stylesheet">
    <link href="css/style.css" type="text/css" rel="stylesheet">

  
  <style>
    body {
        background: #eff4ff;
    }

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

    /* nav bar css code */
    .navbar {
        overflow: hidden;
        background-color: #333;
        position: fixed;
        top: 0;
        width: 100%;
        border-radius: 5px;
        z-index: 10;
      }

    .navbar a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 25px;
        text-decoration: none;
        font-size: 20px;
      }

    .navbar a:hover {
        background: #ddd;
        color: black;
        border-radius: 5px;
      }


  </style>
<body>
  <div class="row" >
    <div class="col-sm-12">
       <div class="navbar">
        <div  id="grad1" style=" padding: 10px;"><span id="text_head"> RATUL MOTORS</span></div>
        <a href="/dashboard.php" class="active"> <span class="glyphicon">&#xe116;</span> Orders</a>
        <a href="/products.php"> <span class="fa fa-truck" style="font-size: 22px;" >  Stocks</a>
        <a href="#contact"><span class="glyphicon">&#xe109;</span> Reports</a>
        <a style="float: right;" href="/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
        <a style="float: right;" href="#account"><span class="glyphicon glyphicon-user"></span> Account</a>
        </div>
    </div>
  </div>
 

</head>
