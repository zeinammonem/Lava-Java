<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservations</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Anonymous+Pro&family=Poppins:wght@100;200;300;400;600;700&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anonymous+Pro&family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css"
        integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.rtlcss.com/bootstrap/v4.5.3/js/bootstrap.bundle.min.js"
        integrity="sha384-40ix5a3dj6/qaC7tfz0Yr+p9fqWLzzAXiwxVLt9dw7UjQzGYw6rWRhFAnRapuQyK"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="reservation.css">
    <link rel="stylesheet" href="navbar.css">
</head>

<body>
  
<!-- NAV BAR -->

<header class="main-header">
    <div class="container">
      <nav class="navbar navbar-expand-lg main-nav px-0">
        <a class="navbar-brand" href="index.html">
            <img src="pics/logoname2.png" alt="Lava Java">
          </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar icon-bar-1"></span>
                        <span class="icon-bar icon-bar-2"></span>
                        <span class="icon-bar icon-bar-3"></span>
                    </button>
        <div class="collapse navbar-collapse" id="mainMenu">
        <ul class="navbar-nav ml-auto text-uppercase f1">
            <li>
              <a href="index.html" class="active active-first">home</a>
            </li>
            <li>
              <a href="menu.html">menu</a>
            </li>

            <li>
                <a href="reservation.php">Reservations</a>
            </li>

            <li>
              <a href="feedback.php">Feedback</a>
            </li>


            <li>
                <a href="bestoffers.html">offers</a>
            </li>

            <li>
                <a href="CheckOut.php">Delivery</a>
            </li>

            <li><a href="CheckOut.php"><i class="fas fa-shopping-cart" style="color: white;"></i></a>
                
            </li>

            <li>
                <a href="SignIn.php">Login</a>
            </li>


            <li class="nav-item dropdown">
             
              <a href="about.html">About Us</a>
            </a>
            
          </li>

             


            <li class="nav-item dropdown">
                <ul class="navbar-nav">
                    <!-- Avatar -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        <img
                          src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp"
                          class="rounded-circle"
                          height="22"
                          alt="Portrait of a Woman"
                          loading="lazy"
                        />
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="SignUp.php">Sign-Up</a>
                      </div>
                    </li>
                  </ul>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!-- /.container -->
  </header>


  
    <div class="row no-gutters">

        <div class="col no-gutters">
            <div class="leftside d-flex justify-content-center align-items-center">
                <h1>Book a Table</h1>
                <div class="bg1"><img src="imgs/reservation.jpg" alt="food"></div>
                <div class="back1 overlay justify-content-center align-items-center text-align-center"></div>
            </div>
        </div>



        <div class="col no-gutters">

            <div class="rightside">

                <img class="logo" src="pics/logo.png" alt="Brand Image" width="300" height="300">
                <h2 style="color: #E2DCC8" class="h3 mb-3 fw-normal">Reservation</h2>
                <form action="addreservation.php" method="post">

                    <div class="form">
                        <label class="label">
                            <h3>Name</h3>
                        </label>
                        <label class="label">
                            <h3>Number of Guests</h3>
                        </label>
                        <br>
                        <input type="text" class="input" placeholder="Name" id="name" name="name" required>


                        <input type="text" class="input" placeholder="2" id="nofguests" name="nofguests" required>
                    </div>
                    <br>

                    <div class="form2">
                        <label class="label2">
                            <h3>Date</h3>
                        </label>
                        <label class="label2">
                            <h3>Time</h3>
                        </label>
                        <br>
                        <input type="text" class="input2" placeholder="dd-mm-yyyy" id="date" name="date" required>

                        <input type="text" class="input2" placeholder="00:00 24hr" id="time" name="time" required>
                    </div>
                    <br>
                    <button class="btn btn-lg btn-primary" type="submit">Book a Table</button>
                </form>
            </div>
        </div>

    </div>


    <!-- FOOTER -->
    <footer class="mainfooter" role="contentinfo">
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h4>Contact Us</h4>
                            <ul class="list-unstyled">
                                <li><a href="#"></a></li>
                                <li><a href="#">LavaJava@gmail.com</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h4>About Us</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Learn more our team!</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h4>Give us Feedback</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Write your own feedback!</a></li>

                                <li>
                                    <a href="#"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h4>Follow Us</h4>
                        <ul class="social-network social-circle">
                            <li><a href="https://www.facebook.com/" class="icoFacebook" title="Facebook"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/" class="icoLinkedin" title="Linkedin"><i
                                        class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/" class="icoInstagram" title="Instagram"><i
                                        class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 copy">
                        <p class="text-center">&copy; Copyright 2022 - Lava Java. All rights reserved.</p>
                    </div>
                </div>


            </div>
        </div>
    </footer>
<script type = "text/javascript">
function validation(){
        var name_input = document.getElementById("name");
        var nofguests_input = document.getElementById("nofguests");
        var date_input = document.getElementById("date");
        var time_input = document.getElementById("time");
        var regex_name = /^[a-zA-Z ]{2,30}$/;
        var regex_nofguests = /^\d+$/;
        var regex_date = /^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$/;
        var regex_time = /^([0-1]?[0-9]|2[0-3]):[0-5][0-9]$/;
        if(!name_input.value.match(regex_name)){
            alert("please enter valid name");
            return false;
        }
        if(!nofguests_input.value.match(regex_nofguests)){
            alert("please enter valid number of guests");
            return false;
        }
        if(nofguests_input.value ==0){
            alert("number of guests can't be zero");
            return false;
        }
        if(!date_input.value.match(regex_date)){
            alert("please enter the date dd-mm-yyyy format");
            return false;
        }
        if(!time_input.value.match(regex_time)){
            alert("please enter the time 24 format, 16:00 example");
            return false;
        }
        alert("booked succssfully!!");
        window.open('index.html');
        return true;
}

</script>

</body>

</html>