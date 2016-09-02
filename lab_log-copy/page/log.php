<html>
<head>
  <title>
    Login Page
  </title>
  <link rel="icon" href="images/logo.png">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <style type="text/css">
    input,select
    {
      margin-bottom: 2em;
    }
    </style>
</head>
  <body>
<div class="container">
        <form method="post" action="../app/db.php">
          <h1 class="page-header">Log Entry</h1>
          <input class="form-control transparent-input" type="name" placeholder="Roll No" name="rollno" autofocus required><br />
          <input class="form-control transparent-input" type="name" placeholder="Department" name="dept"  required><br />
          <input class="form-control transparent-input" type="text" placeholder="No of Hours" name="hour" required><br />
          <select class="form-control transparent-select" name="lab">
              <option>select lab</option>
              <option>Lab 1</option>
              <option>Lab 2</option>
          </select>
          <input class="form-control transparent-input" type="text" name="sysno" placeholder="system no" required><br/>
          <input class="form-control transparent-input" type="text" name="purpose" placeholder="Purpose" required><br/>
          <button class="btn">Submit</button>
        </form>
      </div>
    </div>
</body>
</html>
