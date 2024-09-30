<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Anonymous+Pro&family=Poppins:wght@100;200;300;400;600;700&display=swap"
        rel="stylesheet">

        
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="feedback.css">
</head>

<body>

    <div class="row no-gutters">

        <div class="col no-gutters">
            <div class="leftside d-flex justify-content-center align-items-center">
                <h1>Give us a Feedback</h1>
                
                <div class="bg1"><img src="imgs/feedback.jpg" alt="food"></div>
            </div>
        </div>



        <div class="col no-gutters">

            <div class="rightside">

                <img class="logo" src="pics/logo.png" alt="Brand Image" width="300" height="300">
                <h2 style="color: #E2DCC8" class="h3 mb-3 fw-normal">Feedback</h2>
                <form action="addfeedback.php" method="post">

                    <div class="form">
                        <h4>Rate us!</h4>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                    <br>

                    

                    <div class="form2">
                        <h4>Write your feedback</h4>
                        <label>Your email:<br></label>
                        <br>
                        <input type="email" id='email' name='email' style="width: 50%; align-items: left;">
                        <textarea name="feedback" id="feedback" cols="70" rows="5" ></textarea>
                        <button class="btn btn-lg btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>

    </div>


    <script type = "text/javascript">
        function validation(){

            if (document.getElementById("input2").value == ""){
                alert("Enter the your honest review");
                document.getElementById("input2").focus();
                return false;
            }
              
                alert("Submitted successfully!!");
                window.open('index.html');
                return true;
    
            
    
    
               
        }
        
        </script>






</body>

</html>