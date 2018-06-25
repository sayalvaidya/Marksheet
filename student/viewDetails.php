<?php
require("../functions.php");
//login checked here to prevent direct url hitting if user is not logged in

if(!checkLogin()){ // check if user is logged in, if not redirect to login page
	redirect('../adminLogin.php');
}
include("../loginHeader.php");

if(isset($_GET['action'])&&$_GET['action']=='viewDetails'){
	if(isset($_GET['sroll'])){
		$condition = ['sroll'=>$_GET['sroll']];
?>
<div class="container">
	<?php
	if(isset($_SESSION['error'])){
		?>
		<div class="alert alert-danger">
			<?php
			foreach($_SESSION['error'] as $error){
				echo $error."<br>";
			}
			unset($_SESSION['error']);
			?>
		</div>
		<?php
	}
	?>

	<?php
	if(isset($_SESSION['message'])){
		?>
		<div class="alert alert-success">
			<?php echo $_SESSION['message'];?>
		</div>
		<?php
		unset($_SESSION['message']);
	}
	?>
	<div class="table-responsive">
		<table class="table table-stripped">
			<thead>
				<tr>
					<th>Roll No</th>
					<th>Full Name</th>
					<th>Email</th>
					<th>Semester</th>
					<th>Term</th>
					<th>TOC</th>
					<th>SAD</th>
                    <th>DBMS</th>
                    <th>CG</th>
                    <th>CS</th>
                    <th>TW</th>
                    <th>Actions</th>
				</tr>
			</thead>
			<tbody>

			<?php
				$result =listWhere(MARKS_TABLE,$condition); // we do have function listAll($tableName) to return all rows from given table in functions.php
				if(total_rows($result)>0){ //total_rows() function in functions.php
					while ($row = fetch_array($result)) { // fetch_array() function in function.php
						?>
						<tr>
							<td><?php echo $row['sroll'] ?></td>
							<td><?php echo $row['sname'] ?></td>
							<td><?php echo $row['semail'] ?></td>
							<td><?php echo $row['semester'] ?></td>
							<td><?php echo $row['term']; ?></td>
							<td><?php echo $row['toc']; ?></td>
							<td><?php echo $row['sad']; ?></td>
							<td><?php echo $row['dbms']; ?></td>
							<td><?php echo $row['cg']; ?></td>
							<td><?php echo $row['cs']; ?></td>
							<td><?php echo $row['tw']; ?></td>

							<td><a href="users/addUser.php?action=generate&sroll=<?php echo $row['sroll']?>" class="btn btn-primary">Generate Marksheet</a>
								<a href="student/deleteStudent.php?action=delete&sroll=<?php echo $row['sroll']?>" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</a>
							</td>
						</tr>
						<?php
						# code...
					}


				}
    }
}   
else{
	redirect("studentList.php");
}
				?>
			</tbody>
		</table>
    </div>
</div>
<?php
include("../footer.php");
?>		