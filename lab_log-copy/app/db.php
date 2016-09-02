<?php
      $conn = mysqli_connect('localhost','root','','arun');
      if($conn->connect_error)
      {
        die("connection failed".$conn->connect_error);
      }
      // $sql= "CREATE TABLE lablog (id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,rollno VARCHAR(20) NOT NULL,dept VARCHAR(10) NOT NULL,hours INT(4) NOT NULL,purpose VARCHAR(50) NOT NULL,l_time TIMESTAMP)";
       $sql = "INSERT INTO lablog (rollno, dept, hours,lab,sysno,purpose) VALUES ('".$_POST[rollno]."','".$_POST[dept]."', '".$_POST[hour]."', '".$_POST[lab]."','".$_POST[sysno]."', '".$_POST[purpose]."')";
      if($conn->query($sql) === TRUE ) {
        header("Location:../page/final_page.html");
         echo "SUCCESS";
      }
      else
      {
        echo "Could not connect: ". $conn->error;
      }
      mysqli_close($conn);
  ?>