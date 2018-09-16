<?php 
session_start(); 
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Al-Khabar</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="/khabar.com/assets/font/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="/khabar.com/assets/font/font.css" />
<link rel="stylesheet" type="text/css" href="/khabar.com/assets/css/bootstrap.min.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/khabar.com/assets/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/khabar.com/assets/css/responsive.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/khabar.com/assets/css/jquery.bxslider.css" media="screen" />
</head>
<body>
<div class="body_wrapper">
  <div class="center">
    <div class="header_area">
      <div class="logo floatleft"><a href="/khabar.com/index.php"><img src="/khabar.com/images/logo.png" alt="" /></a></div>
        <div class="top_menu floatleft">
        <ul>
          <li><a href="/khabar.com/index.php">Home</a></li>
          <li><a href="/khabar.com/pages/contact.php">Contact us</a></li>
            <?php if(isset($_SESSION["admin"])) { ?>
          <li><a href="/khabar.com/pages/insert.php">Insert News</a></li>
          <li><a href="/khabar.com/pages/logout.php">Logout</a></li>
            <?php } else { ?>
          <li><a href="/khabar.com/pages/signin.php">Admin</a></li> <?php } ?>
        </ul>
      </div>
      <div class="social_plus_search floatright">
        <div class="social">
          <ul>
            <li><a href="http://www.twitter.com/alkhabar" class="twitter"></a></li>
            <li><a href="http://www.facebook.com/alkhabar" class="facebook"></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="main_menu_area">
      <ul id="nav">
        <li><a href="/khabar.com/pages/genre.php?genre=WorldNews">world news</a>
          <ul>
            <li><a href="/khabar.com/pages/genre.php?genre=WorldNews&subGenre=Africa">Africa</a></li>
            <li><a href="/khabar.com/pages/genre.php?genre=WorldNews&subGenre=Asia">Asia</a></li>
            <li><a href="/khabar.com/pages/genre.php?genre=WorldNews&subGenre=Europe">Europe</a></li>
            <li><a href="/khabar.com/pages/genre.php?genre=WorldNews&subGenre=USCanada">US & Canada</a></li>
            <li><a href="/khabar.com/pages/genre.php?genre=WorldNews&subGenre=Latin">Latin America</a></li>
          </ul>
        </li>
        <li><a href="/khabar.com/pages/genre.php?genre=Tech">Tech</a></li>
        <li><a href="/khabar.com/pages/genre.php?genre=Sports">Sports</a>
          <ul>
            <li><a href="/khabar.com/pages/genre.php?genre=Sports&subGenre=Football">Football</a></li>
            <li><a href="/khabar.com/pages/genre.php?genre=Sports&subGenre=Tennis">Tennis</a></li>
              <li><a href="/khabar.com/pages/genre.php?genre=Sports&subGenre=Basketball">Basketball</a></li>
          </ul>
        </li>
        <li><a href="/khabar.com/pages/genre.php?genre=Business">Business</a></li>
        <li><a href="/khabar.com/pages/genre.php?genre=Movies">Movies</a></li>
        <li><a href="/khabar.com/pages/genre.php?genre=Entertainment">Entertainment</a></li>
        <li><a href="/khabar.com/pages/genre.php?genre=Culture">Culture</a></li>
        <li><a href="/khabar.com/pages/genre.php?genre=Books">Books</a></li>
        <li><a href="/khabar.com/pages/genre.php?genre=blogs">blogs</a></li>
      </ul>
    </div>
   

<?php 
// general needed function
function endsWith($haystack, $needle)
{
    $length = strlen($needle);

    return $length === 0 || (substr($haystack, -$length) === $needle);
}
      
function showPreview($text, $length)
{
    if(strlen($text) > $length) {
        $text = substr($text, 0, strpos($text, ' ', $length));
    }

    return $text;
}
      
?>