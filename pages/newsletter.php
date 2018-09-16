<?php
extract($_POST);
include 'connection.php';
$sql = "INSERT INTO newsletter (Name, Email)
        VALUES ('$name', '$email')";
    
    if ($conn->query($sql) === TRUE) {
?>
    <script type="text/javascript">
        alert("Thank you for registering.");
        location.href = "/khabar.com/index.php";
    </script>
<?php
    } else {
?>
   <script type="text/javascript">
        alert("An error has occured, please try again");
        location.href = "/khabar.com/index.php";
    </script>
<?php
    }

?>