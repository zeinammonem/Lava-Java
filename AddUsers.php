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

if (isset($_POST['floatingEmail']) && isset($_POST['floatingPassword']) && isset($_POST['floatingInput']) && isset($_POST['number'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['floatingEmail']);
	$pass = validate($_POST['floatingPassword']);
    $user_name = validate($_POST['floatingInput']);
    $phone_number= validate($_POST['number']);


	if (empty($email) && empty($pass) && empty($user_name) && empty($phone_number)) {
		echo "<script type = 'text/javascript'>
            alert('Please Fill outall required fields');
        document.location = 'SignUp.php';
        </script>";
	    exit();
	}
    else if (empty($email)) {
		echo "<script type = 'text/javascript'>
            alert('Email is required');
        document.location = 'SignUp.php';
        </script>";
	    exit();
	}else if(empty($pass)){
		echo "<script type = 'text/javascript'>
		alert('Password is required');
	document.location = 'SignUp.php';
	</script>";
	    exit();
	}
    else if(empty($user_name)){
        echo "<script type = 'text/javascript'>
            alert('Name is required');
        document.location = 'SignUp.php';
        </script>";
	    exit();
	}
    else if(empty($phone_number)){
        echo "<script type = 'text/javascript'>
            alert('Phone number is required');
        document.location = 'SignUp.php';
        </script>";
	    exit();
	}
    

	else{

	    $sql = "SELECT * FROM userdata WHERE email='$email' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			echo "<script type = 'text/javascript'>
            alert('Email is already taken, try another one');
        document.location = 'SignUp.php';
        </script>";
	        exit();
		}else {
           $sql2 = "INSERT INTO userdata( email,password,name,phoneNum) VALUES('$email', '$pass','$user_name','$phone_number')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
			echo "<script type = 'text/javascript'>
            alert('Your account has been created successfully!');
        document.location = 'index.html';
        </script>";
	         exit();
           }else {
			echo "<script type = 'text/javascript'>
            alert('Unknown Error Occurred');
        document.location = 'SignUp.php';
        </script>";
		        exit();
           }
		}
	}
	
}else{
	header("Location: index.html");
	exit();
}