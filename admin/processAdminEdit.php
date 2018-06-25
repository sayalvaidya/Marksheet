<?php
require("../functions.php");
//login checked here to prevent direct url hitting if user is not logged in
if(!checkLogin()){ // check if user is logged in, if not redirect to login page
	redirect('../adminLogin.php');
}

if(isset($_POST['updateAdmin'])){

	foreach($_POST as $key=>$value){

		$$key = check($value);
	}
		
	if(empty($aname)){
		$_SESSION['error'][]="Name of Admin is Mandatory";
	}
	if(empty($aemail)){
		$_SESSION['error'][]="Email of Admin is Mandatory";
	}
	if(empty($username)){
		$_SESSION['error'][]="Username is Mandatory";
	}
	if(empty($password)){
		$_SESSION['error'][]="Password is Mandatory";
	}
	
	//validation ends
	if(empty($_SESSION['error'])){
		/*$query = "INSERT INTO users (username, password, email, phone,isActive)";
		$query.= " VALUES ('$username','$password','$email','$phone','$isActive')"; 
		$result = mysqli_query($con, $query) or die("error".mysqli_error($con)); 
		*/

		// form a associative array with key as column name of db and values from form.
		// pass this $data array to insert function with $tableName to insert to DB 
		$tableName = ADMIN_TABLE;
		$data = ['aid'=>$aid,
		'aname'=>$aname,
		'username' => $username,
		'password' => $password,
		'aemail'=>$aemail
		];
		if(isset($_GET['action'])&&$_GET['action']=='aedit'){
			$condition=['aid'=>$aid];
			if(update($data,$condition,$tableName)){
				$_SESSION['message']= 'Successfully Updated'; 
				redirect('../adminHome.php');
			} 
		}
	}
	else{
		$_SESSION['oldData']=$_POST;
		redirect('adminHome.php');
	}
}

?>