
<?php
session_start();
extract($_POST);

?>
<html>
    <head>
        <title>Bus Reservation</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&display=swap" rel="stylesheet">
        <link href="animation.css" rel="stylesheet" type="text/css">
        <link href="booking.css" rel="stylesheet" type="text/css">


        <script>
            function cal(){


              var seat = <?php echo $avails ?>;
              console.log(seat);
                var input = document.getElementById('in').value;
                
                var result = input *<?php echo $price ?>;
                console.log(input);
                if(input >0 && input <= seat){
                  document.getElementById("bookbt").disabled = false;
                }
                else{
                  document.getElementById("bookbt").disabled = true;
                }
                if(!isNaN(result)){
            document.getElementById('res').innerHTML = result;
            document.getElementById('res2').innerHTML = result;
            document.getElementById('cbtoprice').value = result;
            document.getElementById('cbseat').value = input;
          }
            }

            function done(){
            document.getElementById('card1').className = "invisible";
            document.getElementById('card2').className = "invisible";
            document.getElementById('card3').className = "invisible";
            }
        </script>




        
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
                <li class="nav-item" style="padding-right: 5px;">
                    <a class="nav-link" href="help.php">Help</a>
                  </li>
                  
               
              </ul>
            </div>
          </nav>
          <div style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(back2.jpg);height: 100%;width: 100%;background-size: cover;background-position: center; display:flex;
          justify-content:center;
          position:fixed;">
           
          
            
            
            <div class="card animation a1 c1" id="card1">
              <h5 id="card2" class="card-header bg-danger text-white animation a2 ">Booking</h5>
              <div id="card3" class="card-body animation a3 ">
                <h2 class="card-title text-center c2"><?php echo $busname ?></h2>
                <p class="card-text text-center text-primary c3"><span class="badge badge-success cs1">Bus Type:</span><?php echo $btype ?></p>
                <p class="card-text text-center text-primary c4"><span class="badge badge-success cs1">Price Per Seat:</span>Rs.<?php echo $price ?></p>
                <h5 class="card-text text-center text-primary c5"><span class="badge badge-success cs1">From:</span><?php echo $bfrom ?></h4>
                <h5 class="card-text text-center text-primary c6"><span class="badge badge-success cs1">To:</span><?php echo $bto ?></h4>
                
                <h5 class="card-text text-center text-primary c7" ><span class="badge badge-success cs1">Date:</span><?php echo $bdate ?></h4>
                <p class="card-text text-center text-primary c8"><span class="badge badge-success cs1" >Departure Time:</span><?php echo $bdtime ?></p>
                <p class="card-text text-center text-primary c9"><span class="badge badge-success cs1" >Arrival Time:</span><?php echo $batime ?></p>
                <p class="card-text text-center text-primary c10"><span class="badge badge-success cs2">Your ID:</span><?php echo $user ?></p>
                <input class="form-control align" type="number" id="in" name="seats" placeholder="Enter No of Seats" min="1" max="<?php echo $avails ?>" onkeyup="cal()">
                <h5 class="card-text text-center text-primary c11"><span class="badge badge-success cs3">Total Cost:</span><span class="text-primary cs3" id="res" ></span></h4>
                
                <button type="button" disabled= "true" class="btn btn-primary c12" data-toggle="modal" data-target="#exampleModal" id="bookbt" data-target="confirmmodal" >Book</button>
              </div>
            </div>
          
          


           
</div>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h2 class="card-title text-center" style=" font-family: 'Pacifico', cursive; font-size: 40px;"><?php echo $busname ?></h2>
                <p class="card-text text-center text-primary" style="font-family: 'Arvo', serif; padding-top: 10px; float: left;"><span class="badge badge-success" style="margin-right:5px;">Bus Type:</span><?php echo $btype ?></p>
                <p class="card-text text-center text-primary" style="font-family: 'Arvo', serif; padding-top: 10px; float: right;"><span class="badge badge-success" style="margin-right:5px;">Price Per Seat:</span>Rs.<?php echo $price ?></p>
                <h5 class="card-text text-center text-primary" style="font-family: 'Arvo', serif; padding-top: 50px;"><span class="badge badge-success" style="margin-right:5px;">From:</span><?php echo $bfrom ?></h4>
                <h5 class="card-text text-center text-primary" style="font-family: 'Arvo', serif;"><span class="badge badge-success" style="margin-right:5px;">To:</span><?php echo $bto ?></h4>
                <h5 class="card-text text-center text-primary" style="font-family: 'Arvo', serif;"><span class="badge badge-success" style="margin-right:5px;">Date:</span><?php echo $bdate ?></h4>
                <p class="card-text text-center text-primary c8"><span class="badge badge-success cs1" >Departure Time:</span><?php echo $bdtime ?></p>
                <p class="card-text text-center text-primary c9"><span class="badge badge-success cs1" >Arrival Time:</span><?php echo $batime ?></p>
                <p class="card-text text-center text-primary" style="font-family: 'Arvo', serif; padding-top: 10px; float:"><span class="badge badge-success" style="margin-right:5px; margin-top:40px;">Your ID:</span><?php echo $user ?></p>
                <h5 class="card-text text-center text-primary"  style="font-family: 'Arvo', serif;"><span class="badge badge-success" style="margin-right:5px; margin-top:10px">Total Cost:</span><span class="text-primary" id="res2" style="margin-right:5px; margin-top:20px"></span></h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <form action="confirm.php" method="POST">
        <input type="hidden" id="cbusname" name="cbusname" value="<?php echo $busname ?>">
        <input type="hidden" id="cbustype" name="cbustype" value="<?php echo $btype ?>">
        <input type="hidden" id="cbusid" name="cbusid" value="<?php echo $busid ?>">
        <input type="hidden" id="cbfrom" name="cbfrom" value="<?php echo $bfrom ?>">
        <input type="hidden" id="cbto" name="cbto" value="<?php echo $bto ?>">
        <input type="hidden" id="cbdate" name="cbdate" value="<?php echo $bdate ?>">
        <input type="hidden" id="cbuser" name="cbuser" value="<?php echo $user ?>">
        <input type="hidden" id="cbprice" name="cbprice" value="<?php echo $price ?>">
        <input type="hidden" id="cbdtime" name="cbdtime" value="<?php echo $bdtime?>">
        <input type="hidden" id="cbatime" name="cbatime" value="<?php echo $batime?>">
      
        <input type="hidden" id="cbtoprice" name="cbtoprice" value="">
        
        <input type="hidden" id="cbseat" name="cbseat" value="">
        
        <button type="submit" id="submit" name="submit" data-toggle="modal" data-target="#exampleModal2" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="confirmmodal2" class="btn btn-primary" onclick="done()" >Confirm</button>
        </form>
      </div>
    </div>
  </div>
</div>



    </body>
    </html>