<?php 
    include ("connection.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
            <a class="navbar-brand" href="test.php" style="font-size: 40px; font-family: 'Bebas Neue', cursive; color: red">KENFLIX</a>
              <ul class="nav-menu" id="nav-menu">
                  <li><a href="test.php#home">Home</a></li>
                  <li><a href="test.php#movies">Movies</a></li>
                  <li><a href="test.php#about">About</a></li>
                  <li>
                      <a href="login.php" class="btn btn-hover">
                          <span>Sign in</span>
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

<!-- FRONT MOVIE -->
    <div class="hero-section" id="home">
        <div class="hero-slide-item" id="front">
            <img src="erdbanner.jpg" alt="edvildeadrise">
            <div class="hero-slide-item-content">
                <div class="item-content-wraper">
                </div>
            </div>
        </div>  
    </div>
    <div class="container d-flex flex-row justify-content-center">
        <div class="container-movie d-flex gap-4 justify-content-center">
            <div class="movie-card" ><img src="edr.jpg" alt=""></div>
                <div class="info">
                    <div class="title"><h1>Evil Dead Rise</h1></div>
                        <p>A twisted tale of two estranged sisters whose reunion is cut short by the rise of flesh-possessing demons, thrusting them into a primal battle for survival as they face the most nightmarish version of family imaginable.</p>
                    <div class="movie-infos">
                        <div class="movie-info">
                        <i class="bx bxs-star" id="star"></i>
                            <span>7.3</span>
                        </div>
                        <div class="movie-info">
                            <i class="bx bxs-time"></i>
                            <span>1h 58m</span>
                        </div>
                        <div class="movie-info">
                            <span>2015</span>
                        </div>
                        <div class="movie-info">
                            <span>PG</span>
                        </div>
                    </div>
                </div>
        </div>

        <div class="container-cast">
            <div class="cast-header">
                <h1>Cast</h1>
            </div>
                
            <div class="row row-cols-1 row-cols-md-5 g-3">
            <div class="col">
                    <div class="card h-100">
                        <img src="edr-cast_3.jpg" alt="cast">
                        <div class="card-body">
                            <h5 class="card-title">Lily Sullivan</h5>
                            <p class="card-text">Beth</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="edr-cast_1.jpg" alt="cast">
                        <div class="card-body">
                            <h5 class="card-title">Alyssa Sutherland</h5>
                            <p class="card-text">Ellie</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="edr-cast_2.jpg" alt="cast">
                        <div class="card-body">
                            <h5 class="card-title">Morgan Davies</h5>
                            <p class="card-text">Danny</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="edr-cast_4.jpg" alt="cast">
                        <div class="card-body">
                            <h5 class="card-title">Gabrielle Echols</h5>
                            <p class="card-text">Bridget</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="edr-cast_6.jpg" alt="cast">
                        <div class="card-body">
                            <h5 class="card-title">Nell Fisher</h5>
                            <p class="card-text">Kassie</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="edr-cast_8.jpg" alt="cast">
                        <div class="card-body">
                            <h5 class="card-title">Billy Reynolds-McCarthy</h5>
                            <p class="card-text">Jake</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="edr-cast_9.jpg" alt="cast">
                        <div class="card-body">
                            <h5 class="card-title">Jayden Daniels</h5>
                            <p class="card-text">Gabriel</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="edr-cast_10.jpg" alt="cast">
                        <div class="card-body">
                            <h5 class="card-title">Anna-Maree Thomas</h5>
                            <p class="card-text">Jessica</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="edr-cast_14.jpg" alt="cast">
                        <div class="card-body">
                            <h5 class="card-title">Tai Wano</h5>
                            <p class="card-text">Scott</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="edr-cast_11.jpg" alt="cast">
                        <div class="card-body">
                            <h5 class="card-title">Mirabai Pease</h5>
                            <p class="card-text">Teresa</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="edr-cast_12.jpg" alt="cast">
                        <div class="card-body">
                            <h5 class="card-title">Mark Mitchinson</h5>
                            <p class="card-text">Mr. Fonda</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="edr-cast_13.jpg" alt="cast">
                        <div class="card-body">
                            <h5 class="card-title">Nedim Jahić</h5>
                            <p class="card-text">Ben</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="edr-cast_15.jpg" alt="cast">
                        <div class="card-body">
                            <h5 class="card-title">Richard Crouchley</h5>
                            <p class="card-text">Caleb</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="edr-cast_16.jpg" alt="cast">
                        <div class="card-body">
                            <h5 class="card-title">Noah Paul</h5>
                            <p class="card-text">Bruce</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="edr-cast_17.jpg" alt="cast">
                        <div class="card-body">
                            <h5 class="card-title">Bryan Shaw</h5>
                            <p class="card-text">Lorem.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="edr-cast_5.jpg" alt="cast">
                        <div class="card-body">
                            <h5 class="card-title">Bruce Campbell</h5>
                            <p class="card-text">Dissenting Voice on Recording</p>
                        </div>
                    </div>
                </div>
        </div>
    </div>

  <!-- CAST -->
    
  <!-- END CAST -->
<!-- END FRONT MOVIE -->
   
<!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="app.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
   
<!-- END SCRIPTS -->

</body> 
</html>