<?php session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

if (!isset($_SESSION["emailid"])) {
    header('Location: index.html');
    exit();
}?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Bus Reservation Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       
       <script src="js/jquery.table2excel.js"></script>
        <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="bookingv.php
">Bus Reservation Admin</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                       <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                           
                            <a class="nav-link" href="bookingv.php
"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <div class="sb-sidenav-menu-heading">View</div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Tables
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="userv.php">User</a>
                                    <a class="nav-link" href="busv.php">Bus</a>
                                    <a class="nav-link" href="datev.php">Date</a>
                                    <a class="nav-link" href="bookingv.php
">Bookings</a>
<a class="nav-link" href="placev.php">Place</a>
                                
                                </nav>
                            </div>

                            
                            
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
                                ><div class="sb-nav-link-icon"><i class="fas fa-pencil-alt"></i></div>
                                Update
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link" href="placeu.php">Place</a>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"
                                        >User
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                    ></a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="duseru.php">Activate/Deactivate User</a>
                                        <a class="nav-link" href="emailu.php">Email</a>
                                        <a class="nav-link" href="fnameu.php">First Name</a>
                                        <a class="nav-link" href="lnameu.php">Last Name</a>
                                    </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Booking
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="tdateu.php">Travel Date</a
                                            ><a class="nav-link" href="fromu.php">From</a>
                                            <a class="nav-link" href="tou.php">To</a>
                                            <a class="nav-link" href="seatsu.php">seats</a>
                                            <a class="nav-link" href="busnameu.php">Bus Name/Bus ID</a>
                                            <a class="nav-link" href="tcostu.php">Total Cost</a>

                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError1" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Date
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError1" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="resetseatu.php">Reset Seats</a>
                                            

                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError2" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Bus
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError2" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="rtu.php">Route & Time</a>
                                            <a class="nav-link" href="prieu.php">Price</a>
                                          
                                            <a class="nav-link" href="bseats.php">seats</a>
                                            <a class="nav-link" href="btypeu.php">Bus Type</a>
                                            <a class="nav-link" href="bbnameu.php">Bus Name</a>

                                        </nav>
                                    </div>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages1" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-plus-square"></i></div>
                                Insert
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages1" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="datei.php">Date</a>
                                    <a class="nav-link" href="busi.php">Bus</a>
                                    <a class="nav-link" href="bookingi.php">Booking</a>
                                    <a class="nav-link" href="useri.php">User</a>
                                    <a class="nav-link" href="placei.php">Place</a>
                                
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages11" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-trash-alt"></i></div>
                                Delete
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages11" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="userdel.php">User</a>
                                    <a class="nav-link" href="busdel.php">Bus</a>
                                    <a class="nav-link" href="datedel.php">Date</a>
                                    <a class="nav-link" href="bookingdel.php">Bookings</a>
                                    <a class="nav-link" href="placedel.php">Place</a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Export</div>
                            <a class="nav-link" href="exporting.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-file-export"></i></div>
                                Booked Passengers</a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $_SESSION["emailid"];?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                    <h1 class="mt-4">Export Bookings</h1>
                    <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="bookingv.php
">Dashboard</a></li>
                            <li class="breadcrumb-item">Export</a></li>
                            <li class="breadcrumb-item active">Booking</li>
                        </ol>
                    <div class="card mb-4">
                            <div class="card-body">
                            <form class="form-inline needs-validation" id="fupform" method="POST" novalidate>
                            <div class="input-group mb-2 col-md-4">
                                   
                                    <input list="bid" type="text" class="form-control" id="busid" name="busid" placeholder="Bus ID" required>
                                    <datalist id="bid">
 
                                    
                                               
 <?php 
 extract($_POST);
 $dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = '';
 $dbname = 'qTVuzqyMJn';
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
 
 if(! $conn ) {
     die('Could not connect: ' . mysqli_error());
 }

     $sql = "SELECT bus_id,bus_name FROM `busses`";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {

     while($row = $result->fetch_assoc()) {

     

         echo " <option value=\"".$row["bus_id"]."\">".$row["bus_id"]."-".$row["bus_name"]."</option>";


 }
 }

 
 ?>


</datalist>
                                    
                                    <div class="invalid-feedback">
                                    Please provide a valid Bus ID.
                                        </div>
                                    </div>

                                    <div class="input-group mb-2 mr-sm-2">
                                 <div class="input-group-prepend">
                                 <div class="input-group-text">Date</div>
                                 </div>
                               <input type="date" class="form-control" id="td" name="td"  required>
                               <div class="invalid-feedback">
                                       Please choose a Date
                                   </div>
                                  </div>
                                    
                                
                                <button type="button" id="submit" name="submit"  class="btn btn-dark mb-2">Get</button>
                                <div class="input-group mb-2 col-md-4">
                                <button type="button" disabled="true" id="ex" name="ex"  class="form-control btn btn-dark sm-2">Export</button>
</div>
                                </form>
                                
                                <script>

$(document).ready(function() {
    $('#submit').on('click', function() {
       
        var busid = $('#busid').val();
        var td = $('#td').val();
        
        if(busid!="" && td!=""){
            $.ajax({
                url: "exportingget.php",
                type: "POST",
                data: {
                    busid: busid,
                    td: td
                                    
                },
                cache: false,
                success: function(dataResult){
                    
                    $('#tb').html(dataResult);
                			$('#ex').attr("disabled",false);	
                       
                       
                    
                }
            });
        }
        else{
            alert('Please fill all the field !');
        }
    });
});
</script>
<script>
     
                    
                           $('#ex').on('click',function(){
                            $("#dataTable").table2excel({
  
    name: "Worksheet Name",
    filename: "SomeFile.xls", // do include extension
    preserveColors: false // set to true if you want background colors and font colors preserved
});
                           });
</script>

                            </div>
                        </div>
                        <h1 class="mt-4">Current Bookings</h1>
                        
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Bookings</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                            <tr>
                                                <th>Booking ID</th>
                                                <th>User ID</th>
                                                
                                                <th>No Of Seats</th>
                                                <th>From</th>
                                                <th>To</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        
                                        <tbody id="tb">
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
               
            </div>
        </div>
       
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
