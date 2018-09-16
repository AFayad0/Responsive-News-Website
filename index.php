<?php include "pages/header.php" ?>
<?php include "pages/connection.php" ?>

 <div class="slider_area">
      <div class="slider">
        <ul class="bxslider">
            <?php 
            $sql = "SELECT Id, mediaPath, Title FROM news order by Date desc";
            $result = mysqli_query($conn, $sql);
                $i = 0;
                while($row = mysqli_fetch_assoc($result)) {
                    if (endsWith($row["mediaPath"],"mp4"))
                        continue;
                    if($i == 3)
                        break;
                    $i++;
             $path = substr($row["mediaPath"], 1);  
             $id = $row["Id"];
            ?>

          <li><center><img width="500" height="200" src="<?php echo $path; ?>" alt="" title="<a style='color : white;' href='pages/single.php?id= <?php echo $id;?>'> <?php echo $row["Title"];?> </a>" /></center></li>
            <?php
                }
            ?>
          
          </ul>
      </div>
    </div>
    <div class="content_area">
      <div class="main_content floatleft">
        <div class="left_coloum floatleft">
          <div class="single_left_coloum_wrapper">
            <h2 class="title">from   around   the   world</h2>
            <a class="more" href="pages/genre.php?genre=WorldNews">more</a>

            <?php 
            $sql = "SELECT Id, mediaPath, Title, content FROM news WHERE genre = 'WorldNews' order by Date desc";
            $result = mysqli_query($conn, $sql);
                $i = 0;
                while($row = mysqli_fetch_assoc($result)) {
                    if (endsWith($row["mediaPath"],"mp4"))
                        continue;
                    if($i == 3)
                        break;
                    $i++;
             $path = substr($row["mediaPath"], 1);  
             $id = $row["Id"];
             $title = $row["Title"];
             $content = showPreview($row["content"], 100)."...";
            ?>

            <div class="single_left_coloum floatleft"> <img width="111" height="76.55" src="<?php echo $path; ?>" alt="" />
              <h3><?php echo $title;  ?></h3>
              <p> <?php echo $content; ?> </p>
              <a class="readmore" href="pages/single.php?id= <?php echo $id;?>">read more</a>
            </div>
              
              
            <?php
                }
            ?>
          
    
          </div>
            
            
          <div class="single_left_coloum_wrapper">
            <h2 class="title">latest  Blogs</h2>
            <a class="more" href="pages/genre.php?genre=Blogs">more</a>
           
            <?php 
            $sql = "SELECT Id, mediaPath, Title, content FROM news WHERE genre = 'Blogs' order by Date desc";
            $result = mysqli_query($conn, $sql);
                $i = 0;
                while($row = mysqli_fetch_assoc($result)) {
                    if (endsWith($row["mediaPath"],"mp4"))
                        continue;
                    if($i == 3)
                        break;
                    $i++;
             $path = substr($row["mediaPath"], 1);  
             $id = $row["Id"];
             $title = $row["Title"];
             $content = showPreview($row["content"], 100)."...";
            ?>

            <div class="single_left_coloum floatleft"> <img width="111" height="76.55" src="<?php echo $path; ?>" alt="" />
              <h3><?php echo $title;  ?></h3>
              <p> <?php echo $content; ?> </p>
              <a class="readmore" href="pages/single.php?id= <?php echo $id;?>">read more</a>
            </div>
              
              
            <?php
                }
            ?>
          </div>
            
            
            <div class="single_left_coloum_wrapper">
            <h2 class="title">All About Sports</h2>
            <a class="more" href="pages/genre.php?genre=Sports">more</a>
           
            <?php 
            $sql = "SELECT Id, mediaPath, Title, content FROM news WHERE genre = 'Sports' order by Date desc";
            $result = mysqli_query($conn, $sql);
                $i = 0;
                while($row = mysqli_fetch_assoc($result)) {
                    if (endsWith($row["mediaPath"],"mp4"))
                        continue;
                    if($i == 3)
                        break;
                    $i++;
             $path = substr($row["mediaPath"], 1);  
             $id = $row["Id"];
             $title = $row["Title"];
             $content = showPreview($row["content"], 100)."...";
            ?>

            <div class="single_left_coloum floatleft"> <img width="111" height="76.55" src="<?php echo $path; ?>" alt="" />
              <h3><?php echo $title;  ?></h3>
              <p> <?php echo $content; ?> </p>
              <a class="readmore" href="pages/single.php?id= <?php echo $id;?>">read more</a>
            </div>
              
              
            <?php
                }
            ?>
          </div>
            
            
         
       <div class="single_left_coloum_wrapper">
            <h2 class="title">Hot Tech News</h2>
            <a class="more" href="pages/genre.php?genre=Tech">more</a>
           
            <?php 
            $sql = "SELECT Id, mediaPath, Title, content FROM news WHERE genre = 'Tech' order by Date desc";
            $result = mysqli_query($conn, $sql);
                $i = 0;
                while($row = mysqli_fetch_assoc($result)) {
                    if (endsWith($row["mediaPath"],"mp4"))
                        continue;
                    if($i == 3)
                        break;
                    $i++;
             $path = substr($row["mediaPath"], 1);  
             $id = $row["Id"];
             $title = $row["Title"];
             $content = showPreview($row["content"], 100)."...";
            ?>

            <div class="single_left_coloum floatleft"> <img width="111" height="76.55" src="<?php echo $path; ?>" alt="" />
              <h3><?php echo $title;  ?></h3>
              <p> <?php echo $content; ?> </p>
              <a class="readmore" href="pages/single.php?id= <?php echo $id;?>">read more</a>
            </div>
              
              
            <?php
                }
            ?>
          </div>
        </div>
        
      </div>
      <div class="sidebar floatright">
        <div class="single_sidebar"> <img src="images/add1.png" alt="" /> </div>
        <div class="single_sidebar">
          <div class="news-letter">
            <h2>Sign Up for Newsletter</h2>
            <p>Sign up to receive our free newsletters!</p>
            <form action="pages/newsletter.php" method="post">
              <input type="text" Placeholder="Name" name="name" required />
              <input type="text" Placeholder="Email Address" name="email" required />
              <input type="submit" value="SUBMIT" id="form-submit" />
            </form>
            <p class="news-letter-privacy">We do not spam. We value your privacy!</p>
          </div>
        </div>
        <div class="single_sidebar">
          <div class="popular">
            <h2 class="title">Latest</h2>
            <ul>
                 <?php 
            $sql = "SELECT Id, Title, Date FROM news order by Date desc";
            $result = mysqli_query($conn, $sql);
                $i = 0;
                while($row = mysqli_fetch_assoc($result)) {
                    if($i == 5)
                        break;
                    $i++;
             $date = $row["Date"];
             $id = $row["Id"];
             $title = $row["Title"];
            ?>

           <li>
                <div class="single_popular">
                  <p><?php echo $date; ?></p>
                  <h3><?php echo $title; ?> <a class="readmore" href="pages/single.php?id= <?php echo $id;?>">read more</a>
                  </h3>
                </div>
              </li>
            <?php
                }
            ?>
              
            </ul>
            </div>
        </div>
        <div class="single_sidebar"> <img src="images/add1.png" alt="" /> </div>
       
      </div>
    </div>






<?php include "pages/footer.php" ?>