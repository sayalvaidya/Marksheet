<!DOCTYPE html>
<html>
<head>
	<title>Generate your marksheet</title>
  <base href="http://localhost/Marksheet/adminHome.php" />
<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>   
<style>
/* Sticky footer styles
-------------------------------------------------- */
html {
  position: relative;
  min-height: 100%;
}
body {
  /* Margin bottom by footer height */
  margin-bottom: 40px;
}
.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 40px;
  background-color: #f5f5f5;
}

</style>
</head>
<body role="document">
 <!-- Fixed navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand brand-name" href="adminHome.php">
            	GM
            </a>
            </div>
            <div class="navbar-collapse navbar-left collapse">
            <ul class="nav navbar-nav ">
              <li><a href="index.php">Add Student Entry</a></li> 
              <li><a href="admin/editAdmin.php?action=aedit&aid=<?php echo $_SESSION['loggedInId'] ?>">Edit Your Profile</a></li>                       
            </ul>
          </div>
          <div class="navbar-collapse navbar-right collapse">
            <ul class="nav navbar-nav ">
              <li><a href="adminHome.php">Home</a></li> <!-- li class="active" to highlight active link -->
              <li><a href="admin/adminList.php">Admins</a></li>
              <li><a href="student/studentList.php">Students</a></li>
              <li><a href="adminLogout.php">Log Out  <span class="glyphicon glyphicon-log-out"></span></a></li>
             
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>