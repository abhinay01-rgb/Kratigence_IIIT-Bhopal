<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Internship</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/internship.css" rel="stylesheet" />
        <style>

.carousel-inner img {
    width: 30%;
    height: 30%;
  }
            hr.new4 {
  border: 1px solid green;
}
body {
  background-image: url('img/a.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand mr-auto" href="index.html"> <img src="img/logo.png" height="30" width="41">Krati-Gence</a> 
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="about.html">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="internship1.php">Internship</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="contact.html">Contact</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="event.html">Events</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="team.html">Team</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="payment.php">Payment</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="sponsor.html">Sponsors</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="blogs.html">Blogs</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gen = $_POST['gen'];
        $qualii= $_POST['qualii'];
        $yog = $_POST['yog'];
        $college = $_POST['college'];
        $contact = $_POST['contact'];
        $country = $_POST['country'];
        $duration = $_POST['duration'];
        $hired = $_POST['hired'];
        $exper = $_POST['exper'];
    
        
        
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "internship";

     
      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn)
      {
          
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        
        // Submit these to a database
        // Sql query to be executed 
        $sql="INSERT INTO `intern` (`sno`, `name`, `email`, `gen`, `quali`, `yog`, `college`, `contact`, `country`, `duration`, `hired`, `exp`) VALUES ('', '$name', '$email', '$gen', '$qualii', '$yog', '$college', '$contact', '$country', '$duration', '$hired', '$exper')";
        
        $result = mysqli_query($conn, $sql);
 
        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
        else{
            //echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }

      }

    }    
?>


        <br><br><br><br>
        <div class="container mt-3">
        
       <p><h5 class="text-white-50 "> Web development is the work involved in developing a Web site for the Internet (World Wide Web) or an intranet (a private network).
         Web development can range from developing a simple single static page of plain text to complex Web-based Internet applications (Web apps), electronic businesses, and social network services. 
         A more comprehensive list of tasks to which Web development commonly refers, may include Web engineering, Web design, Web content development, client liaison, client-side/server-side scripting, Web server and network security configuration, and e-commerce development.

        Among Web professionals, "Web development" usually refers to the main non-design aspects of building Web sites: writing markup and coding.
        Web development may use content management systems (CMS) to make content changes easier and available with basic technical skills</h5></p>
        <hr class="new4">
        <br>
        
        <div class="note">
                    <p>Apply for Web Development Internship.</p>
                </div> 
                <br>
            <form action="/Task3/internship1.php" method="post">
        <div class="form-group">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" Placeholder="Name" id="name" aria-describedby="emailHelp">
                            </div>
                        
                            <div class="form-group">
                                
                                <input type="email" name="email" class="form-control" Placeholder="Email" id="email" aria-describedby="emailHelp"> 
                            </div>
                        
                            <div class="form-group">
                                <input type="text" class="form-control" name="gen" id="gen" Placeholder="M/F/T" >
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="qualii" id="qualii" Placeholder="Highest Academic Qualification (Btech,Mtech,Bsc,MCA,BCA..etc)"> 
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="yog" id="yog" Placeholder="Year of Graduation" >
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="college" id="college" Placeholder="College/University" >
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="contact" id="contact" Placeholder="Conact Number" >
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="country" id="country" Placeholder="Country" >
                            </div>
                           
                            <div class="form-group">
                                <input type="text" class="form-control" name="duration" id="duration" Placeholder="Duration in month i.e 1,2,3" >
                            </div>
                            <div class="form-group">
                                <textarea  class="form-control" name="hired" id="hired" Placeholder="Why should you be hired for this role ?" ></textarea>
                            </div>
                            <div class="form-group">
                                <textarea  class="form-control" name="exper" id="exper" Placeholder="Do you have any prior experience in this kind of field ?" ></textarea>
                            </div>
                            
</div>
            <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br>
<br>
<hr class="new4">


<p><h2 class="text-white-50 ">Past Interns </h2></p>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="https://www.linkedin.com"><img src="img/intern1.png" alt="Intern1" width="300" height="300"></a>
      <a href="https://www.linkedin.com"><img src="img/intern1.png" alt="Intern1" width="300" height="300"></a>
      <a href="https://www.linkedin.com"><img src="img/intern1.png" alt="Intern1" width="300" height="300"></a>

    </div>
    <div class="carousel-item">
    <a href="https://www.linkedin.com"><img src="img/intern1.png" alt="Intern1" width="300" height="300"></a>
      <a href="https://www.linkedin.com"><img src="img/intern1.png" alt="Intern1" width="300" height="300"></a>
      <a href="https://www.linkedin.com"><img src="img/intern1.png" alt="Intern1" width="300" height="300"></a>

    </div>
    <div class="carousel-item">
    <a href="https://www.linkedin.com"><img src="img/intern1.png" alt="Intern1" width="300" height="300"></a>
      <a href="https://www.linkedin.com"><img src="img/intern1.png" alt="Intern1" width="300" height="300"></a>
      <a href="https://www.linkedin.com"><img src="img/intern1.png" alt="Intern1" width="300" height="300"></a>

    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<br>

<hr class="new4">


<p><h2 class="text-white-50 ">Featured Interns </h2></p>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="https://www.linkedin.com"><img src="img/intern1.png" alt="Intern1" width="300" height="300"></a>
      <a href="https://www.linkedin.com"><img src="img/intern1.png" alt="Intern1" width="300" height="300"></a>
      <a href="https://www.linkedin.com"><img src="img/intern1.png" alt="Intern1" width="300" height="300"></a>

    </div>
    <div class="carousel-item">
    <a href="https://www.linkedin.com"><img src="img/intern1.png" alt="Intern1" width="300" height="300"></a>
      <a href="https://www.linkedin.com"><img src="img/intern1.png" alt="Intern1" width="300" height="300"></a>
      <a href="https://www.linkedin.com"><img src="img/intern1.png" alt="Intern1" width="300" height="300"></a>

    </div>
    <div class="carousel-item">
    <a href="https://www.linkedin.com"><img src="img/intern1.png" alt="Intern1" width="300" height="300"></a>
      <a href="https://www.linkedin.com"><img src="img/intern1.png" alt="Intern1" width="300" height="300"></a>
      <a href="https://www.linkedin.com"><img src="img/intern1.png" alt="Intern1" width="300" height="300"></a>

    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>



 

























                </div>

                
<br><br><br><br><br><br>

         <footer class="footer">
        <div class="container">
           
            <div class="row">
                <div class="text-white-50 col-4 offset-1 col-sm-2">             
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.hml">Contact</a></li>
                        <li><a href="event.html">Event</a></li>
                        <li><a href="internship1.php">Internship</a></li>
                        <li><a href="team.html">Team</a></li>
                    </ul>
                </div>
                <div class="text-white-50 col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
                      New Teaching Block<br>
                      IIIT | MANIT Campus<br>
                      Bhopal, Madhya Pradesh - 462003<br>India<br>
                      <i class="fa fa-phone fa-lg"></i>: +XXX XXXX XXXXX<br>
                      <i class="fa fa-fax fa-lg"></i>: +XXX XXXX XXXX<br>
                      <i class="fa fa-envelope fa-lg"></i>: <a href="info@kratigence.com">info@kratigence.com</a>
                   </address>
                </div>
           
           
                </div>
           <div class="row justify-content-center">             
                <div class="text-white-50 col-auto">
                   <p>Copyright © 2020 All rights reserved | Kratigence</p>
                </div>
           </div>
        </div>
    </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
