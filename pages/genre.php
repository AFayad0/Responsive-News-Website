<?php include "header.php" ?>
<?php include "connection.php" ?>

<div class="content_area">
    <div class="main_content floatleft">
        <?php 
            if(isset($_GET["subGenre"]))
                $sql = "SELECT Id, mediaPath, Title, content, Date FROM news WHERE genre='".$_GET["genre"]."' AND subGenre='".$_GET["subGenre"]."' order by Date desc";
            else    
                $sql = "SELECT Id, mediaPath, Title, content, Date FROM news WHERE genre='".$_GET["genre"]."' order by Date desc";
            
             $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)) {
             $path = $row["mediaPath"];
             $id = $row["Id"];
             $title = $row["Title"];
             $content = showPreview($row["content"], 250)."...";
             $date = $row["Date"];

            ?>
        <a style="text-decoration:none;" href="single.php?id=<?php echo $id; ?>"><h2><?php echo $title; ?></h2> </a> <h4><?php echo $date; ?></h4>
            
        <?php if (endsWith($row["mediaPath"],"mp4")) { ?>    
          <video width="500" height="200" controls>
            <source src='<?php echo $path; ?>'type="video/mp4">
            Your browser does not support the video tag.
        </video> 
        <?php } else {?>
          <img width="500" height="200" src="<?php echo $path; ?>" alt="">
        <?php } ?>
        
        <p class="prev"><?php echo $content ?> <a style="color:red;" href="single.php?id= <?php echo $id;?>">Read More</a>
 </p>
            
            <?php
                }
            ?>
    </div>
</div>

<?php include "footer.php" ?>