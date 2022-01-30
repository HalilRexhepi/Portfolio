<?php
include_once('config.php');
session_start();
?>
<?php

if(isset($_POST['shto'])) {	
	$m_title = mysqli_real_escape_string($conn,$_POST['m_title']);
	$m_description = mysqli_real_escape_string($conn,$_POST['m_description']);
	$m_pic = mysqli_real_escape_string($conn,$_POST['m_pic']);

    

	
	if(empty($m_title) || empty($m_description) || empty($m_pic) ) {
				
		if(empty($m_title)) {
			echo "<font color='red'>m_title field is empty.</font><br/>";
		}
		
		if(empty($m_description)) {
			echo "<font color='red'>m_description field is empty.</font><br/>";
		}
		if(empty($m_pic)) {
			echo "<font color='red'>m_pic field is empty.</font><br/>";
        }
       
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		
		$result = mysqli_query($conn, "INSERT INTO main (m_title,m_description,	m_pic) VALUES('$m_title','$m_description','$m_pic') ");
		
		if($result){
			$_SESSION['add_main_message'] = "<p style='color:green;font-weight:800'>Te dhenat u shtuan me sukses</p>";
			header('location:edit_main.php');
		}else{
			$_SESSION['add_main_message'] = "<p style='color:red;font-weight:800'>Pati gabim ne shtimin e te dhenave, provoni me vone!</p>";
			header('location:edit_main.php');
		}
	}
}
?>