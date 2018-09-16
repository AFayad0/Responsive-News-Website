<?php 
session_start(); 

if (!isset($_SESSION["admin"]))
    header("location: signin.php");

if(isset($_POST['SubmitButton']))
{
    extract($_POST);

    include 'connection.php';
    
    
    $target_dir = "../media/";
    $target_file = $target_dir . basename($_FILES["media"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["media"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    
    
    
    if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["media"]["tmp_name"], $target_file)) {
            
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    
    }

    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    
    $path = $target_dir.basename( $_FILES["media"]["name"]); 
    if(isset($subgenre))
    {
        $sql = "INSERT INTO news (title, genre, subgenre, date, content, mediapath)
        VALUES ('$title', '$genre', '$subgenre', '$newsDate', '$content', '$path')";
    }
    else
    {
        $sql = "INSERT INTO news (title, genre, date, content, mediapath)
        VALUES ('$title', '$genre', '$newsDate', '$content', '$path')";
    }
    if ($conn->query($sql) === TRUE) {
            
        ?>
        <script type="text/javascript">
         alert("Successfully Saved.")
        </script>
        <?php
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    $conn->close();

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

<title>Insert News</title>

</head>
<body>

<div class="insert">
  <form id="insert" action="" method="post" enctype="multipart/form-data">
    <a class="floatRight" href="/khabar.com/index.php" style="font-size: 15px;">Home</a>
    <h2>Insert News</h2>
    <label for="title">Title</label>
    <input type="text" id="title" name="title" placeholder="title.." required>

    <label for="newsDate">Date</label>
    <input type="Date" id="newsDate" name="newsDate" placeholder="The Date.." required>
        
    <label for="genre">Category</label>
        <select id="genre" name="genre" required>
          <option selected disabled>Choose one</option>
          <option value="WorldNews">WorldNews</option>
          <option value="Tech">Tech</option>
          <option value="Sports">Sports</option>
          <option value="Business">Business</option>
          <option value="Movies">Movies</option>
          <option value="Intertainment">Intertainment</option>
          <option value="Culture">Culture</option>
          <option value="Books">Books</option>
          <option value="Blogs">Blogs</option>
        </select> 
      
      <div id="subgenreNews" style="display: none;">
              <label for="subgenreNews">Sub-Category</label>
                <select id="newsSelc" name="subgenre"  required>
                  <option selected disabled>Choose one</option>
                  <option value="Africa">Africa</option>
                  <option value="Asia">Asia</option>
                  <option value="USCanada">US & Canada</option>
                  <option value="Europe">Europe</option>
                  <option value="Latin">Latin America</option>
                </select> 
      </div>
      
        <div id="subgenreSports" style="display: none;">
              <label for="subgenreSports">Sub-Category</label>
                <select id="sportsSelc" name="subgenre" required>
                  <option selected disabled>Choose one</option>
                  <option value="Football">Football</option>
                  <option value="Tennis">Tennis</option>
                  <option value="Basketball">Basketball</option>
                </select> 
       </div>
    
    <label for="content">Content</label>
    <textarea id="content" name="content"placeholder="News content.." required></textarea>
      
    <label for="media">Image/Video</label>
    <input type="file" id="media" name="media" placeholder="Image/Video.." required>
  
    <input type="submit" id="sb" value="Submit" name="SubmitButton" >
  </form>
    </div>
    <script type="text/javascript" src="/khabar.com/assets/js/jquery-min.js"></script> 
<script type="text/javascript" src="/khabar.com/assets/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="/khabar.com/assets/js/jquery.bxslider.js"></script> 
<script type="text/javascript" src="/khabar.com/assets/js/selectnav.min.js"></script> 
<script type="text/javascript" src="/khabar.com/assets/js/functions.js"></script> 
    </body>
</html>
