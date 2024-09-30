<?php 
session_start(); 
$sname= "localhost:3306";
$unmae= "root";
$password = "";
$db_name = "lavajava";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}

if (isset($_POST['name']) && isset($_POST['nofguests']) && isset($_POST['date']) && isset($_POST['time'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
	$noofguests = validate($_POST['nofguests']);
    $date = validate($_POST['date']);
    $time= validate($_POST['time']);


	if (empty($name) && empty($noofguests) && empty($date) && empty($time)) {
		echo "<script type = 'text/javascript'>
            alert('Please fill out all required fields');
        document.location = 'reservation.php';
        </script>";
	    exit();
	}
    else if (empty($name)) {
		echo "<script type = 'text/javascript'>
            alert('Name is required');
        document.location = 'reservation.php';
        </script>";
	    exit();
	}else if(empty($noofguests)){
        echo "<script type = 'text/javascript'>
            alert('Number of Guests is required');
        document.location = 'reservation.php';
        </script>";
	    exit();
	}
    else if(empty($date)){
        echo "<script type = 'text/javascript'>
            alert('Date is required');
        document.location = 'reservation.php';
        </script>";
	    exit();
	}
    else if(empty($time)){
		echo "<script type = 'text/javascript'>
		alert('Time is required');
	document.location = 'reservation.php';
	</script>";
	    exit();
	}
    

	else{

	    $sql = "SELECT * FROM reservation WHERE name='$name' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			echo "<script type = 'text/javascript'>
            alert('This name already booked a table, try another one');
        document.location = 'reservation.php';
        </script>";
	        exit();
		}else {
           $sql2 = "INSERT INTO reservation(name,num_of_guests,date,time) VALUES('$name', '$noofguests','$date','$time')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
			echo "<script type = 'text/javascript'>
            alert('Your table has been reserved successfully');
        document.location = 'reservation.php';
        </script>";
	         exit();
           }else {
			echo "<script type = 'text/javascript'>
            alert('unknown error occurred');
        document.location = 'reservation.php';
        </script>";
		        exit();
           }
		}
	}
	
}else{
	header("Location: reservation.php");
	exit();
}