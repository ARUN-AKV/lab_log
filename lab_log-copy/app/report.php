<!DOCTYPE html>
<html>
<head>
	<title>report Display</title>
  <link rel="icon" href="images/logo.png">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/jquery.min.js"></script>
</head>
<body>

<?php  
	// error_reporting(0);
      $conn = mysqli_connect('localhost','root','','arun');
      if(!$conn)
      {
        die("connection failed");
      }
      $sql = "SELECT * FROM lablog where l_time like '%"."$_POST[date]"." %'";
  $result = mysqli_query($conn, $sql);
 echo '<div class="page-header"><h1>Report</h1></div> 
  <table class="table table-striped">
  <thead>
    <th>Rollno </th>
    <th>Department</th>
    <th>Hours</th>
    <th>Lab</th>
    <th>System No</th>
    <th>Purpose</th>
    <th>Date & Time</th>
  </thead>';

  while($row = mysqli_fetch_assoc($result))
  {
  echo "<tr>";
  echo "<td>".$row['rollno']."</td>";
  echo "<td>".$row['dept']."</td>";
  echo "<td>".$row['hours']."</td>";
  echo "<td>".$row['lab']."</td>";
  echo "<td>".$row['sysno']."</td>";
  echo "<td>".$row['purpose']."</td>";
   echo "<td>".$row['l_time']."</td>";

  echo "</tr>";
}

 
?>
</table>
</body>
</html>