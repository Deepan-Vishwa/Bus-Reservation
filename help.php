<?php
session_start();
?>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bus Reservation</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link href="animation.css" rel="stylesheet" type="text/css">
        <link href="result.css" rel="stylesheet" type="text/css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.15.0/css/mdb.min.css" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.15.0/js/mdb.min.js"></script>


        
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
            <a class="navbar-brand" href="#"><img src="logo.png" style="height: 30px; padding-left: 20px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item " style="padding-right: 5px;">
                  <a class="nav-link" href="main_page.php">Home </a>
                </li>
                <li class="nav-item" style="padding-right: 5px;">
                  <a class="nav-link" href="my_trips.php">My Trips</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    My Account
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="logout.php">Log Out</a>
                  </div>
                </li>
                <li class="nav-item active" style="padding-right: 5px;">
                    <a class="nav-link" href="#">Help<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item" style="padding-right: 5px;">
                    <a class="nav-link " href="faq.php">FAQ </a>
                  </li>
               
              </ul>
            </div>
          </nav>
          <div style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(back2.jpg);height: 100%;width: 100%;background-size: cover;background-position: center; display:flex;
          justify-content:center;
          position:fixed;">
            
            <div class="container" style="background-color: white;overflow-y: auto;max-height: 90%; margin-top: 1%;">




<!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id ="contact-form" name="contact-form" action="mail.php" method="POST"  onsubmit="return validateForm()" >

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            
                                <input type="text" id="name" name="name" class="form-control">
                                <label for="name" class="">Your name</label>
                          
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            
                                <input type="text" id="email" name="email" class="form-control">
                                <label for="email" class="">Your email</label>
                        
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" class="form-control md-textarea"></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="validateForm()">Send</a>
            </div> <div class="status" id="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>No 132A , 5th Main Road,Perumal Nagar,Old Pallavaram, Chennai- 600117, Tamil Nadu, India</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+91 7550188018</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>srdeepansr@gmail.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->




</div>



</div>



<!-- SCRIPTS -->
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.js"></script>
    <!--Custom scripts-->
    <script>

function validateForm() {
    // var x =  document.getElementById('name').value;
    // if (x == "") {
    //     document.getElementById('status').innerHTML = "Name cannot be empty";
    //     return false;
    // }
    // x =  document.getElementById('email').value;
    // if (x == "") {
    //     document.getElementById('status').innerHTML = "Email cannot be empty";
    //     return false;
    // } else {
    //     var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    //     if(!re.test(x)){
    //         document.getElementById('status').innerHTML = "Email format invalid";
    //         return false;
    //     }
    // }
    // x =  document.getElementById('subject').value;
    // if (x == "") {
    //     document.getElementById('status').innerHTML = "Subject cannot be empty";
    //     return false;
    // }
    // x =  document.getElementById('message').value;
    // if (x == "") {
    //     document.getElementById('status').innerHTML = "Message cannot be empty";
    //     return false;
    // }
 //get input field values data to be sent to server
    document.getElementById('status').innerHTML = "Sending...";
    formData = {
        'name'     : $('input[name=name]').val(),
        'email'    : $('input[name=email]').val(),
        'subject'  : $('input[name=subject]').val(),
        'message'  : $('textarea[name=message]').val()
    };


   $.ajax({
    url : "mail.php",
    type: "POST",
    data : formData,
    success: function(data, textStatus, jqXHR)
    {

        $('#status').text(data.message);
        if (data.code) //If mail was sent successfully, reset the form.
        $('#contact-form').closest('form').find("input[type=text], textarea").val("");
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
        $('#status').text(jqXHR);
    }
});



}
    </script>
</body>
</html>