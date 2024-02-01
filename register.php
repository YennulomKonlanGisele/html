<?php
include("connection.php"); //to call the connection file to be registerd or connect when an action is taken
if(isset($_POST["submit"])){ //if clause to perform a task if the submit button from the form is clicked
	$first_number=$_POST["first_number"];
	$second_number=$_POST["second_number"];
	$Date=date("Y-m-d H:i:s");
	if(empty($first_number) || empty($last_number)){
		echo "EMPTY";
	}else{
		$insert="INSERT INTO calculator(calc_id, first_number, second_number, status, date_created) VALUES('', '$first_number', '$second_number''1', '$Date')";
		$insert=mysqli_query($connect, $insert) or die ("could not insert" .mysqli_error($connect))	;
		if ($insert) {
			echo "successfully inserted";
		}else{
			echo "was not inserted";
		}

	}

}
?>