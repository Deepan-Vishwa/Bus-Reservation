
<?php
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

if (!isset($_SESSION["login"])) {
    header('Location: index.html');
    exit();
}
?>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bus Reservation</title>
        <link rel="stylesheet" href="main_page.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <link href="animation.css" rel="stylesheet" type="text/css">
        

        
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
            <a class="navbar-brand" href="#"><img src="logo.png" style="height: 30px; padding-left: 20px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active" style="padding-right: 5px;">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
                  <li class="nav-item" style="padding-right: 5px;">
                    <a class="nav-link" href="faq.php">FAQ</a>
                  </li>
                
              </ul>
            </div>
          </nav>
          <div style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(back2.jpg);height: 100%;width: 100%;background-size: cover;background-position: center; position:fixed;">


            <div style="position: absolute; width: 100%; height: 80px; padding-top: 17%;">
                <h1 class="animation a1" style="vertical-align: center;">Search for Bus Tickets online</h1>
            </div>
                
            <div class="ali1">
              <form class="form-inline" style="width:100%" action="result.php" method="POST">
              <select class="form-control animation a2 ali"  id="from" name="from">
                <option>From</option>
                <option value="chennai beach">Chennai Beach</option>
                <option value="chennai fort">Chennai Fort</option>
                <option value="chennai park">Chennai Park</option>
                <option value="chetpet">Chetpet</option>
                <option value="nungambakkam">Nungambakkam</option>
                <option value="kodambakkam">Kodambakkam</option>
                <option value="mambalam">Mambalam</option>
                <option value="saidapet">Saidapet</option>
                <option value="guindy">Guindy</option>
                <option value="st thomas mount">St Thomas Mount</option>
                <option value="palavanthangal">Palavanthangal</option>
                <option value="minambakkam">Minambakkam</option>
                <option value="tirusulam">Tirusulam</option>
                <option value="chrompet">Chrompet</option>
                <option value="tambaram sanatorium">Tambaram Sanatorium</option>
                <option value="tambaram">Tambaram</option>
                <option value="perungalathur">Perungalathur</option>
                <option value="vandalur">Vandalur</option>
                <option value="urappakkam">Urappakkam</option>
                <option value="guduvancheri">Guduvancheri</option>
                <option value="potheri">Potheri</option>

              
              </select>
              <select class="form-control animation a3 ali" id="to" name="to">
                <option>To</option>
                <option value="chennai beach">Chennai Beach</option>
                <option value="chennai fort">Chennai Fort</option>
                <option value="chennai park">Chennai Park</option>
                <option value="chetpet">Chetpet</option>
                <option value="nungambakkam">Nungambakkam</option>
                <option value="kodambakkam">Kodambakkam</option>
                <option value="mambalam">Mambalam</option>
                <option value="saidapet">Saidapet</option>
                <option value="guindy">Guindy</option>
                <option value="st thomas mount">St Thomas Mount</option>
                <option value="palavanthangal">Palavanthangal</option>
                <option value="minambakkam">Minambakkam</option>
                <option value="tirusulam">Tirusulam</option>
                <option value="chrompet">Chrompet</option>
                <option value="tambaram sanatorium">Tambaram Sanatorium</option>
                <option value="tambaram">Tambaram</option>
                <option value="perungalathur">Perungalathur</option>
                <option value="vandalur">Vandalur</option>
                <option value="urappakkam">Urappakkam</option>
                <option value="guduvancheri">Guduvancheri</option>
                <option value="potheri">Potheri</option>
              </select>
              <input class="form-control animation a4 ali" type="text" id="date"  placeholder="Date" name="date" onfocus="(this.type='date')">
                    <button class="form-control btn btn-danger animation a5 ali" type="submit" id="search"  name="submit">Search</button>
              </form>
            </div>
            

          </div>

</body>
</html>