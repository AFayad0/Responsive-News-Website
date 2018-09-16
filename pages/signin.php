<?php
session_start(); 

if (isset($_SESSION["admin"]))
    header("location: ../index.php");

if (isset($_POST["SubmitButton"]))
{
include 'connection.php';
extract($_POST);
$sql = "SELECT username, password FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        if ($row["username"] == $username && $row["password"] == $password)
            $_SESSION["admin"] = "ok"; 
    }
}

    if(isset($_SESSION["admin"]))
    {
        ?>
        <script type="text/javascript"> 
            alert("Successfully loged in. \n Redirecting to home page.");
            location.href = "../index.php";
        </script>
        <?php 
    }
    
    else
    {
        ?>
        <script type="text/javascript"> 
            alert("Wrong combination of username and password.");
        </script>
        <?php
    }
}
?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" type="text/css" href="/khabar.com/assets/font/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="/khabar.com/assets/font/font.css" />
<link rel="stylesheet" type="text/css" href="/khabar.com/assets/css/bootstrap.min.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/khabar.com/assets/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/khabar.com/assets/css/responsive.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/khabar.com/assets/css/jquery.bxslider.css" media="screen" />

<title>Admin Sign in</title>

</head>
<body>

<div class="insert">
  <form id="signin" action="" method="post" enctype="multipart/form-data">
      <h2>Admin Log In</h2>
    <label for="title">Username</label>
    <input type="text" id="un" name="username" placeholder="Username.." required>

    <label for="newsDate">Password</label>
    <input type="Password" id="pw" name="password" placeholder="Password.." required>
    <label>Hint: </label>
      <p>Default username & password is 'admin'.</p>
    <input type="submit" id="sb" value="Submit" name="SubmitButton" >
  </form>
    </div>
    </body>
</html>