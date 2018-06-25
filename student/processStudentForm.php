<?php
require("../functions.php");
//login checked here to prevent direct url hitting if user is not logged in
if(!checkLogin()){ // check if user is logged in, if not redirect to login page
	redirect('../adminLogin.php');
}

if(isset($_POST['addStudent'])){

	foreach($_POST as $key=>$value){

		$$key = check($value);
	}
		// $username = $_POST['username'];
		// $email = $_POST['email'];
		// $password = $_POST['password'];
		// $phone = $_POST['phone'];
		// $isActive = isset($_POST['isActive'])?$_POST['isActive']:0;
	//validation starts
    if(empty($sroll)){
		$_SESSION['error'][]="Roll Number of student is Mandatory";
	}
	if(empty($sname)){
		$_SESSION['error'][]="Name of Student is Mandatory";
	}
	if(empty($semail)){
		$_SESSION['error'][]="Email of student is Mandatory";
	}
	if(empty($semester)){
		$_SESSION['error'][]="Semester is Mandatory";
	}
	if(empty($term)){
		$_SESSION['error'][]="Term is Mandatory";
	}
	
	//validation ends
	if(empty($_SESSION['error'])){
		/*$query = "INSERT INTO users (username, password, email, phone,isActive)";
		$query.= " VALUES ('$username','$password','$email','$phone','$isActive')"; 
		$result = mysqli_query($con, $query) or die("error".mysqli_error($con)); 
		*/

		// form a associative array with key as column name of db and values from form.
		// pass this $data array to insert function with $tableName to insert to DB 
		$tableName = MARKS_TABLE;
		$data = ['sroll'=>$sroll,
		'sname'=>$sname,
		'semail'=>$semail,
		'semester'=>$semester,
		'term'=>$term,
		'toc'=>$toc,
		'sad'=>$sad,
		'dbms'=>$dbms,
		'cg'=>$cg,
		'cs'=>$cs,
		'tw'=>$tw
		];
		if(isset($_GET['action'])&&$_GET['action']=='edit'){
			$condition=['sroll'=>$sroll];
			if(update($data,$condition,$tableName)){
				$_SESSION['message']= 'User updated successfully'; 
				redirect('studentList.php');
			} 
		}
	}
	else{
		$_SESSION['oldData']=$_POST;
		redirect('editStudent.php');
	}
}

?>