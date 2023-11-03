<?php 
    include ("connection.php");
    session_start();
    $movie = mysqli_real_escape_string($conn, $_GET['v']);
    $mail = $_SESSION['email'];
    $query = "select * from registration where email = '$mail'";
    $query_run = mysqli_query($conn, $query);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="movie.css">
    <link rel="stylesheet" href="grid.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    
    <title>Netflix Philippines Duplicated Watch TV Shows Online, Watch Movies Online</title>
    <link rel="website icon" type="png" href="netflix logo.png">


</head>
<body oncontextmenu="return false">

<!-- NAV -->
    <div class="nav-wrapper">
      <div class="container" >
          <div class="nav">
            <a class="navbar-brand" href="loggedinTest.php" style="font-size: 40px; font-family: 'Bebas Neue', cursive; color: red">KENFLIX</a>
              <ul class="nav-menu" id="nav-menu">
                  <li><a href="loggedinTest.php#home">Home</a></li>
                  <li><a href="loggedinTest.php#movies">Movies</a></li>
                  <li><a href="loggedinTest.php#about">About</a></li>
                  <li style="font-size: 1.25rem; font-weight: 700; cursor: context-menu;">HELLO 
                  <?php 
                  while($row = mysqli_fetch_array($query_run)){ 
                    ?>
                   <?php echo strtoupper('<span style=" font-weight: 700; font-size: 1.25rem; margin-right: 15px;"> ' . $row['name'] . '<span>');?>
                    <?php
                  }
                  ?></li>
                      <a href="test.php" >
                      <i class='pt-2 bx bx-log-out bx-sm'></i>
                      </a>
                  </li>
              </ul>
              <!-- MOBILE MENU TOGGLE -->
              <div class="hamburger-menu" id="hamburger-menu">
                  <div class="hamburger"></div>
              </div>
          </div>
      </div>
  </div>
<!-- END NAV -->

<!-- MOVIE DETAILS -->
    <?php 
        $query = " SELECT * FROM `movie` WHERE `movie-name`= '$movie'";
        $query_run = mysqli_query($conn, $query);
        while($row = mysqli_fetch_array($query_run)){
        ?>

        <div class="hero-section" id="home">
            <div class="hero-slide-item" id="front">
            <img src="banner/<?=$row['movie-banner']?>" alt="Banner" style="width: 100%;">
                <div class="hero-slide-item-content">
                    <div class="item-content-wraper">
                    </div>
                </div>
            </div>  
        </div>

        <div class="container-movie-info justify-content-center gap-5">
            <div class="container-movie d-flex gap-4 justify-content-center">
                <div class="movie-card"><img src="poster/<?=$row['movie-img']?>" alt="Image" style="width: 300px;"></div>
                    <div class="info">
                        <div class="title"><h1><?php echo $row['movie-title'];?></h1></div>
                            <p><?php echo $row['movie-desc'];?></p>
                        <div class="movie-infos">
                            <div class="movie-info">
                            <i class="bx bxs-star" id="star"></i>
                                <span><?php echo $row['movie-star'];?></span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span><?php echo $row['movie-dur'];?></span>
                            </div>
                            <div class="movie-info">
                            <i class='bx bx-calendar-alt'></i>
                                <span><?php echo $row['movie-year'];?></span>
                            </div>
                            <div class="movie-info">
                            <i class='bx bx-camera-movie'></i>
                                <span><?php echo $row['movie-rate']?></span>
                            </div>
                        </div>
                    </div>
            </div>
        <?php
                }
                    ?>
<!-- END MOVIE DETAILS -->

<!-- CAST -->
    <?php 
        $query = "SELECT * FROM `casts` WHERE `movie-name`= '$movie'";
        $query_run = mysqli_query($conn, $query);
    ?>
        <div class="container-cast">
            <div class="cast-header">
                <h1>Cast</h1>
            </div>
           
            <div class="row row-cols-1 row-cols-md-5 g-3">
             
             <?php 
                while($row = mysqli_fetch_array($query_run)){
                ?>
            <div class="col">
                    <div class="card h-100">
                    <img src="casts/<?php echo $row['cast-image']; ?>" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['cast-name'];?></h5>
                            <p class="card-text"><?php echo $row['cast-char'];?></p>
                        </div>
                    </div>
                </div>
               <?php } 
               ?>
               
        </div>
    </div>
<!-- END CAST -->

<!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="app.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>             
<!-- END SCRIPTS -->

</body> 
</html>