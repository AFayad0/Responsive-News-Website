<?php include "header.php" ?>
<?php include "connection.php" ?>

<div class="content_area">
    <div class="main_content floatleft">
        <?php    
                $sql = "SELECT Id, mediaPath, Title, content, Date FROM news WHERE Id='".$_GET["id"]."' order by Date desc";
            
             $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)) {
                 $path = $row["mediaPath"];
                 $id = $row["Id"];
                 $title = $row["Title"];
                 $content = $row["content"];
                 $date = $row["Date"];

            ?>
        <h2><?php echo $title; ?></h2> </a> <h4><?php echo $date; ?></h4>
            
        <?php if (endsWith($row["mediaPath"],"mp4")) { ?>    
          <video width="500" height="200" controls>
            <source src='<?php echo $path; ?>'type="video/mp4">
            Your browser does not support the video tag.
        </video> 
        <?php } else {?>
          <img width="500" height="200" src="<?php echo $path; ?>" alt="">
        <?php } ?>
        
        <p class="prev"><?php echo $content ?> 
 </p>
            
            <?php
                }
            ?>
    </div>
</div>

<?php include "footer.php" ?>