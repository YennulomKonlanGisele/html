<?php
include("connection.php"); //to call the connection file to be registerd or connect when an action is taken
if(isset($_POST["submit"])){ //if clause to perform a task if the submit button from the form is clicked
	$first_number=$_POST["first_number"];
	$second_number=$_POST["second_number"];
	$mode_of_operation=$_POST["mode_of_operation"];
	$date=date("Y-m-d H:i:s");
	$answer=0;

	$length_required=15;
	$characters="0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$character_length=strlen($characters);
	$id="";
	for ($i=0; $i <$length_required ; $i++) { 
		$id.=$characters[rand(0,$character_length-1)];
	}
	$id;
	if(empty($first_number) || empty($second_number)){
		echo "EMPTY";
	}elseif ($mode_of_operation=="add"){
		$answer=$first_number+$second_number;
		}elseif($mode_of_operation=="subtract"){
			$answer=$first_number-$second_number;
		}elseif($mode_of_operation=="multiply"){
			$answer=$first_number*$second_number;
		}elseif($mode_of_operation=="divide"){
			$answer=$first_number/$second_number;
		}
	

		$insert="INSERT INTO calc(calc_id, first_number, second_number, mode_of_operation, answer, status, date_created) VALUES('$id', '$first_number', '$second_number', '$mode_of_operation', '$answer', '1', '$date')";
		$insert=mysqli_query($connect, $insert) or die ("could not insert" .mysqli_error($connect))	;
		if ($insert) {
			echo $answer;
		}else{
			echo "was not inserted";
		}


	}



		

?>