<?php
	
	$s_id = $_GET['s_id'];
	
	$limit = $_GET['canteenlimit'];
	
	$conn = mysqli_connect("localhost", "root", "", "tictechtoe");
	
	$query = " SELECT * FROM `student_details` WHERE s_id='$s_id' ";
	
	$result = $conn->query($query);

	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_array($result);
		
		$canteen_limit = (int)$row['canteen_limit'];
		
		
		//$limit = $limit + $canteen_limit;
		
		$query1 = "UPDATE `student_details` SET `balance`='$amount', `canteen_limit`='$limit' WHERE s_id='$s_id' ";
		
		if($conn->query($query1) == true)
		{
			echo "updated<br>"; 
		}
		else
		{
			echo "no update<br>";
		}
	}
	else
	{
		echo "no student id found...!!<br>";
	}

	echo "<script>window.open('updatelimit.php', '_self')</script>";

?>