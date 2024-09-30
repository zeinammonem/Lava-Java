<?php 
$sname= "localhost:3306";
$unmae= "root";
$password = "";

$db_name = "lavajava";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}

if (isset($_POST['feedback']) && isset($_POST['email']) ) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$feedback = validate($_POST['feedback']);
    

	if (empty($feedback)) {
		echo "<script type = 'text/javascript'>
            alert('Please fill out our form completely');
        document.location = 'feedback.php';
        </script>";
	    exit();
	}
    

	else{

	    $sql = "SELECT * FROM userdata WHERE email='$email' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) == 0) { //email not found
			echo "<script type = 'text/javascript'>
            alert('Email isnt registered, sign up first');
        document.location = 'SignUp.php';
        </script>";
	        exit();
		} else {

            $sql2 = "UPDATE userdata SET feedback='$feedback' WHERE email='$email'";
            $result2 = mysqli_query($conn, $sql2);
            if ($result2) {
                echo "<script type = 'text/javascript'>
            alert('Feedback sent successfully');
        document.location = 'index.html';
        </script>";
                exit();
            } else {
                echo "<script type = 'text/javascript'>
            alert('Unknown Error Occurred');
        document.location = 'index.html';
        </script>";
                exit();
            }
        }
		
	}
	
}else{
	header("Location: feedback.php? error=idk eh el hasal");
	exit();
}