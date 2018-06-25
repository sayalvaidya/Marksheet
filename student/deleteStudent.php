<?php
require("../functions.php");
//login checked here to prevent direct url hitting if user is not logged in

if(!checkLogin()){ // check if user is logged in, if not redirect to login page
	redirect('../adminLogin.php');
}

if(isset($_GET['action'])&&$_GET['action']=='delete'){
	if(isset($_GET['sroll'])){
		$condition = ['sroll'=>$_GET['sroll']];
		if(delete(MARKS_TABLE,$condition)){
			$_SESSION['message']="User Deleted Successfully";
			redirect("studentList.php");
		}
	}
	else{
		$_SESSION['error'][]="Error !!! ID not provided";
		redirect("studentList.php");
	}
}
?>