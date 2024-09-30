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

if (isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['country']) && $_POST['country']!='NA' && isset($_POST['state']) && $_POST['state']!='NA' && isset($_POST['orderr'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$firstName = validate($_POST['firstName']);
    $lastName = validate($_POST['lastName']);
    $email = validate($_POST['email']);
    $address = validate($_POST['address']);
    $country = validate($_POST['country']);
    $state = validate($_POST['state']);
    $orderr  = validate($_POST['orderr']);


	if(empty($firstName)){
        header("Location: CheckOut.php?error=firstName is required");
        exit();
    }
    else if(empty($lastName)){
        header("Location: CheckOut.php?error=lastName is required");
        exit();
    }
    else if(empty($email)){
        header("Location: CheckOut.php?error=email is required");
        exit();
    }
    else if(empty($address)){
        header("Location: CheckOut.php?error=address is required");
        exit();
    }
    else if(empty($country)){
        header("Location: CheckOut.php?error=country is required");
        exit();
    }
    else if(empty($state)){
        header("Location: CheckOut.php?error=state is required");
        exit();
    }
    else if(empty($orderr)){
        header("Location: CheckOut.php?error=orderr is required");
        exit();
    }
    

	else{

	    $sql = "SELECT * FROM checkout WHERE email='$email' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			
            $sql2 = "UPDATE checkout SET address='$address',country='$country',state='$state',orderr='$orderr' WHERE email='$email'";
            $result2 = mysqli_query($conn, $sql2);
            $_SESSION['email'] = $emaill;
            if($result2){ 
                // if(!empty($_POST['checkoutsave'])){
                //     $remember_checkbox = $_POST['checkoutsave'];
                //     //set cookie
                //     setcookie('firstName', $firstName, time()+86400);
                //     setcookie('lastName', $lastName, time()+86400);
                //     setcookie('email', $email, time()+86400);
                //     setcookie('address', $address, time()+86400);
                //     setcookie('country', $country, time()+86400);
                //     setcookie('state', $state, time()+86400);
                    
                // }
                // else{
                //     setcookie('email', $emaill, time()-30);
                //     setcookie('password', $passwordd, time()-30);
                // }
                echo "<script type = 'text/javascript'>
                alert('Email Already registered, Order has been updated');
            document.location = 'CheckOut.php';
            </script>";
                exit();
            }
            else{
                echo "<script type = 'text/javascript'>
                alert('Unknown error Occurred);
            document.location = 'CheckOut.php';
            </script>";
		        exit();
            }

		}else {
            $sql2 = "INSERT INTO checkout(firstname,lastname,email,address, country,state,orderr) VALUES('$firstName', '$lastName','$email','$address', '$country', '$state', '$orderr')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
            // if(!empty($_POST['checkoutsave'])){
            //     $remember_checkbox = $_POST['checkoutsave'];
            //     //set cookie
            //     setcookie('firstName', $firstName, time()+86400);
            //     setcookie('lastName', $lastName, time()+86400);
            //     setcookie('email', $email, time()+86400);
            //     setcookie('address', $address, time()+86400);
            //     setcookie('country', $country, time()+86400);
            //     setcookie('state', $state, time()+86400);
                
            // }
            // else{
            //     setcookie('email', $emaill, time()-30);
            //     setcookie('password', $passwordd, time()-30);
            // }
            echo "<script type = 'text/javascript'>
            alert('Your Order has been Successfully added! ');
        document.location = 'CheckOut.php';
        </script>";
	         exit();
           }else {
            echo "<script type = 'text/javascript'>
                alert('Unknown error Occurred);
            document.location = 'CheckOut.php';
            </script>";
		        exit();
           }
		}
	}
	
}else{
   
	header("Location: CheckOut.php");
	exit();
}