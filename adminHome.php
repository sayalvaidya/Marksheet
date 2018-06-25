<?php
include("functions.php");
//login checked here to prevent direct url hitting if user is not logged in

if(checkLogin()===false){ // check if user is logged in, if not redirect to login page
	redirect('adminLogin.php');
}
include("loginHeader.php");
?>
<div class="container">
	<div>
		<h2>
			Links to different pages below:
		</h2>
		<hr/>
	</div>
	<div class="row">
 		<div class="col-lg-6">
 			<h3>
 				Admin Pages
 			</h3>
 			<a href="admin/addAdmin.php?action=aadd" class="btn btn-primary">Add Admin</a>
 			<a href="admin/adminList.php" class="btn btn-danger">View Admin List</a>
 		</div>
 		<div class="col-lg-6">
 			<h3>
 				Student Pages links
 			</h3>
 			<!-- <a href="student/addUser.php" class="btn btn-primary">Add Users</a> -->
 			<a href="student/studentList.php" class="btn btn-danger">View Student List</a>
 		</div>
	</div>
</div>
<?php
include("footer.php");
?>