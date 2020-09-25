<?php
$name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$residence = $_POST['residence'];
$place = $_POST['place'];
$comment = $_POST['comment'];

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "db7star";
    //create connection
    $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
    try{
        $query="insert into rateus(name,contact,email,residence,place,comment)
        values('$name','$contact','$email','$residence','$place','$comment')";
      mysqli_query($conn,$query);
       $message = "Thank you,$name your comment is highly appreciated!";
       echo "<script>alert('$message');</script>";
      
    }
    catch (Exception $e){
        echo '<div class="alert-warning">';
            echo $e->getMessage();
        }
    
?>