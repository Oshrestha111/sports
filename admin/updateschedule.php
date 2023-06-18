
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sign";


if (isset($_POST['upload'])) {
  $team1 = $_POST['team1'];
  $team2 = $_POST['team2'];
$time = $_POST['time'];
$date = $_POST['date'];
$venue = $_POST['venue'];

  $filename1 = $_FILES["logo1"]["name"];
  $tempname1 = $_FILES["logo1"]["tmp_name"];  
  $filename2 = $_FILES["logo2"]["name"];
  $tempname2 = $_FILES["logo2"]["tmp_name"]; 

      $folder = "../images/gallery/".$filename1;   
      $folder2 = "../images/gallery/".$filename2;  


  // connect with the database

  $db = mysqli_connect("localhost", "root", "", "sign"); 

      // query to insert the submitted data

      // $sql = "INSERT INTO schedule (team1, logo1, team2,logo2, time, date, venue) VALUES ('$team1', '$filename1','$team2','$filename2', '$time', '$date','$venue')";
      $sql = "UPDATE `schedule` SET `team1` = '$team1', `logo1`='$filename1',`team2`='$team2', `logo2`='$filename2', `time`='$time', `date`='$date', `venue`='$venue' WHERE `schedule`.`id` = 0";

      // function to execute above query

      mysqli_query($db, $sql);       

      // Add the image to the "image" folder"

      header("location: form.php");

  }




?>
