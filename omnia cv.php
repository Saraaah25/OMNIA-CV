<?php

if(isset($_POST['submit'])){

    include "index.php";
    
    $Name     = $_POST['Name'];
    $Email    = $_POST['Email'];
    $Message  = $_POST['Message'];
    
    $stmt = $conn->prepare("INSERT INTO Omnia(name, email, message, date)
                                     VALUES(:N, :E, :M,now())");
     $stmt ->excute(array(
         'N' => $Name,
         'E' => $Email,
         'M' => $Message,
     ));
}

?>

<html>
<head>
    <meta charset = "UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
   Team Task
    </title>
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/bootstrap%20-%20edited.css">
    <link rel="stylesheet" href="CSS/all.min.css">
    
    
    <link rel="stylesheet" href="CSS/omnia%20_cv.css">
    <link rel="stylesheet" href="CSS/hover-min.css">
    <link rel="stylesheet" href="CSS/animate.min.css">
     <link rel="stylesheet" href="CSS/animate.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
    
    <script> src="html5shiv.min.js"</script>
    <script> src="respond.min.js"</script>
    </head>
<body>

<form action="<?php echo $_SERVER['php_self'] ; ?>" method="post">   
    <div class="container">
    <div class="row">
        <div class="col-lg-12 col-xs-12">
        <a class="navbar-brand hvr-pop" href="#"> Personal information </a> <hr/>
            <p class="lead text-center">
            omnia elsafty
            <br>
          <i class="fa fa-map-marker-alt"></i> Elmahalla elkobra Egypt
            <br>
           <i class="fa fa-mobile-alt"></i> 01066080201
            <br>
                <i class="fa fa-envelope"> omniaelsafty15@gmail.com </i>
            </p>
        </div>
            </div>
    <!-- row -->
        <br>
            <div class="row">
        <div class="col-lg-12 col-xs-12">
        <a class="navbar-brand hvr-pop" href="#"> work experience </a> <hr/>
            <p class="lead text-center">
          2015 - 2017 community pharmacy
            <br>
           2017 - 2019 Elmahalla Chest Hospital
            </p>
        </div>
    <!-- row 2 -->
        </div>
        <br>
                  <div class="row">
        <div class="col-lg-12 col-xs-12">
        <a class="navbar-brand hvr-pop" href="#"> Education </a> <hr/>
            <p class="lead text-center">
          2016 Bachelor's degree of pharmacy
            <br>
           2018 Pharm-D doctor
            </p>
        </div>
    <!-- row 3 -->
        </div>
        <br>
         <div class="row">
        <div class="col-lg-12 col-xs-12">
        <a class="navbar-brand hvr-pop" href="#"> Personal skills </a> <hr/>
            <p class="lead text-center">
         languages
            </p>
         
            
        </div>
    <!-- row 4 -->
        </div>
        <div class="row ">
            <div class="col-xs-12">
       <h1 class="text-center"> Contact us </h1> <br> <br>
       Name    : <input type="text" placeholder="Enter your name"> <br> <br>
       Email  : <input type="text" placeholder="Enter your E-mail"> <br> <br>
       Message : <input class="message text-center" type="text" placeholder="write your message here"><br> <br>
                 <input type="submit" name="submit" value="send">
    </div>
    </div>
        
        <!-- container -->
            </div>
        
    
    
    
    <script src="JS/jquery-3.5.1.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
    <script src="JS/wow.min.js"></script>
     <script> new WOW().init(); </script>
    
    <script src="JS/plugins.js"></script>
    
</form>

</body>
</html>