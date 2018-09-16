<?php include "header.php" ?>
<?php
    if(isset($_POST["SubmitButton"])) 
    {
        extract($_POST);
        include "connection.php";
        $sql = "INSERT INTO contact (Name, Email, Message)
        VALUES ('$Name', '$Email', '$Message')";
    
        if (mysqli_query($conn, $sql)) {
            ?>
            <script type="text/javascript">alert("Thank you for contacting us.");</script>
        <?php
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>


<div class="insert">
  <form id="contact" action="" method="post" enctype="multipart/form-data">
    <h2>Contact Us</h2>
    <label for="Name">Name</label>
    <input type="text" id="Name" name="Name" placeholder="Name.." required>

    <label for="newsDate">Email</label>
    <input type="Email" id="Eamil" name="Email" placeholder="Eamil.." required>
        
       
    <label for="Message">Message</label>
    <textarea id="Message" name="Message"placeholder="Message.." required></textarea>
      
    <input type="submit" id="sb" value="Submit" name="SubmitButton" >
  </form>
</div>


<?php include "footer.php" ?>