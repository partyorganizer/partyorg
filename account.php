<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Title & Logo -->
    <title>Besher - بِشر</title>
    <link rel="shortcut icon"
       href="img/logo21.png"width="16" height="16"/>
      
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
    <link href="css/login-register.css" rel="stylesheet">
      
      
                <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Contact form JavaScript -->
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>

        <!-- Custom scripts for this template -->
        <script src="js/agency.min.js"></script>
      
      
      <style>
      /* Modal Style */
          /* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #9a9a9a;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #9a9a9a;
    color: white;
}
      
      </style>
      
      
  </head>

  <body id="page-top" style="background-color:#f1f1f1">

    <!-- Navigation -->
    <nav style="background-color:#5b6771;" class="navbar navbar-expand-lg navbar-dark fixed-top " id="mainNav" >
      
        <div class="container">
          <!-- Login Modal & Button -->
        <?php
        if (isset($_SESSION['cid'])){
            $cid = $_SESSION['cid'];
            $db=mysqli_connect('localhost','root','','partyorg');
            $result=mysqli_query($db,"SELECT fname FROM customer WHERE customer_id=$cid");
            $row=mysqli_fetch_row($result);
            $fname=$row[0];
            ?>
            <div class="dropdown">
            <button class="dropbtn" type="button"><i class="fa fa-chevron-circle-down"></i> <?php echo $fname;?></button>
            <div class="dropdown-content">
                <a href="account.php"><i class="fa fa-user"></i> Account</a>
                <a href="#"id="myBtn"><i class="fa fa-bars"></i> Party Plan

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Modal Header</h2>
    </div>
    <div class="modal-body">
      <p>Some text in the Modal Body</p>
      <p>Some other text...</p>
    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>
                </a>
                
                <a href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
            </div>
            </div>
            <?php            
            } else {
            ?>
            <button class="login-btn" type="button" onclick="document.getElementById('id01').style.display='block'">Login</button>
            <?php } ?>
            
            <!-- Logo to the left -->
      <a class="navbar-brand js-scroll-trigger" href="index.php"><img src ="img/Logo33.png"width="80" height="40"/></a>
            <!-- Navigation Mennu -->
          <button class="navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto text-left">
                <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Categories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="faq.html">FAQ</a>
              </li>
          </ul>
     
        </div>
      </div>
        <!-- The Modal -->
        <div id="id01" class="modal">
            
        <!-- Modal Content -->
            
        <form class="loginform modal-content animate" action="login.php" method="post">
         <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <div class="imgcontainer">
        <img src="img/Logo33.png" alt="log" width="30%" height="">
        </div>
        <div class="container">
        <label><b >E-mail</b></label>
        <input type="email" placeholder="Enter Email" name="email" required>
        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>
        </div>
        <div class="container registerc" style="background-color:#f1f1f1">
        <button class="loginb" type="submit">Login</button>
        <label>Not A member?</label>
        <button type="button" class="loginb regbtn"  onclick= "window.location.href='register.php';" >Register Now!</button>
        </div>
        </form>
        </div>
   </nav>
        
        <section class="bg-light">
            <div class="container">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                    <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">profile</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#pass" role="tab" data-toggle="tab">Update Password</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#histo" role="tab" data-toggle="tab">History</a>
                    </li>
                </ul>

                <!-- Tab panes -->
            <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="profile">
                <?php
                if(isset($_SESSION['cid'])){
                    $db = mysqli_connect("localhost","root","","partyorg");
                    $cid = $_SESSION['cid'];
                    $result1 = mysqli_query($db,"SELECT fname,lname,password,email,location_id FROM customer WHERE customer_id=$cid");
                    $row1 = mysqli_fetch_row($result1);
                    $fname = $row1[0];
                    $lname = $row1[1];
                    $email = $row1[3];
                    $pass = $row1[2];
                    $location = $row1[4];
                    
                    echo "<form method='POST' action='update.php'>";
                    echo "<div class='form-group'>";
                    echo "<b>First Name: </b><input type='text' class='form-control' name='newfname' value='$fname'><br>";
                    echo "<b>Last Name: </b><input type='text' class='form-control' name='newlname' value='$lname'><br>";
                    echo "<b>Email: </b><input type='email' class='form-control' name='newemail' value='$email'><br>";
                    echo "<b>City: </b>";
                    $city = mysqli_query($db,"SELECT location_id,location_name FROM location");
                    echo "<select name='newloc' class='form-control'>";
                    while($row2 = mysqli_fetch_row($city)){
                        if($row2 == $location){
                            printf("<option value='%d' selected> %s </option>",$row2[0],$row2[1]);
                        } else {
                           printf("<option value='%d'> %s </option>",$row2[0],$row2[1]); 
                        }
                    }
                    echo "</select>";
                    echo "</div>";
                    echo "<button type='submit' name='update' class='btn btn-primary'>Update</button> &nbsp;";
                    echo "<button type='reset' class='btn btn-secondary'>Reset</button>";
                    echo "</form>";
                }
                ?>            
                </div>
                <div role="tabpanel" class="tab-pane fade" id="pass">
                    <?php
                    if($cid){
                        $db = mysqli_connect("localhost","root","","partyorg");
                        $cid = $_SESSION['cid'];
                        
                        echo "<form method='POST' action='update.php'>";
                        echo "<div class='form-group'>";
                        echo "<b>New Password: </b><input type='password' class='form-control' placeholder='Enter the new password' name='newpass'><br/>";
                        echo "<b>Re-enter Password: </b><input type='password' class='form-control' placeholder='Re-enter the new password' name='passconfirm'><br/>";
                        echo "<b>Old Password: </b><input type='password' class='form-control' name='oldpass' placeholder='Enter old password'><br/>";
                        echo "</div>";
                        echo "<button type='submit' name='uppass' class='btn btn-primary'>Update</button> &nbsp;";
                        echo "<button type='reset' class='btn btn-secondary'>Reset</button>";
                        echo "</form>";
                    }
                    ?>
                
                </div>
            <div role="tabpanel" class="tab-pane fade" id="histo">
                <?php
                $sql2="SELECT party_id FROM party_plan WHERE c_id=$cid";
                $query2=mysqli_query($db,$sql2);
                $plan=mysqli_fetch_row($query2);
                if($plan!==NULL){
                    echo "Here";
                }else{
                    echo "<h4>No previous plans yet ..</h4>";
                }
                ?>
                </div>
                </div>
            </div>
            
            <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

            
            
        </section>

    <!-- Footer -->
    <footer  style="background-color:white">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; <b>Besher - بشر</b> Party Orgnizer 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram"></i>
                </a>
              </li>
                <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-snapchat"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
   
  </body>

</html>
