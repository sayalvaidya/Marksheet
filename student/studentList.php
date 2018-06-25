<?php
require("../functions.php"); //including functions.php will automatically start session also

if(!checkLogin()){ // check if user is logged in, if not redirect to login page
	redirect('../adminLogin.php');
}
include("../loginHeader.php");
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
					<th>Action</th>

				</tr>
			</thead>
			<tbody>

			<?php
		$result =listAll(MARKS_TABLE); // we do have function listAll($tableName) to return all rows from given table in functions.php
		if(total_rows($result)>0){ //total_rows() function in functions.php
			while ($row = fetch_array($result)) { // fetch_array() function in function.php
				?>
				<tr>
					<td><?php echo $row['sroll'] ?></td>
					<td><?php echo $row['sname'] ?></td>
					<td><?php echo $row['semail'] ?></td>
					<td><?php echo $row['semester'] ?></td>
					<td><?php echo $row['term']; ?></td>
					<td><a href="student/viewDetails.php?action=viewDetails&sroll=<?php echo $row['sroll']?>" class="btn btn-primary">View Details</a>
						<a href="student/editStudent.php?action=edit&sroll=<?php echo $row['sroll']?>" class="btn btn-primary">Edit</a>
						<a href="student/generateMarksheet.php?action=generate&sroll=<?php echo $row['sroll']?>" class="btn btn-primary">Generate Marksheet</a>
						<a href="student/deleteStudent.php?action=delete&sroll=<?php echo $row['sroll']?>" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</a>
					</td>
				</tr>
				<?php
				# code...
			}


		}
		?>
</tbody>
</table>
</div>
</div>
<?php
include("../footer.php");
?>