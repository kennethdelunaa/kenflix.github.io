<?php 
    include("connection.php");
    session_start();

    // $email = $_SESSION['login-email'];
    // $password = $_SESSION['login-password'];
    // $_SESSION['login-password'] = $password; 
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
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
                  <li><a href="#home">Home</a></li>
                  <li><a href="#movies">Movies</a></li>
                  <li><a href="#about">About</a></li>
                  <li style="font-size: 1.25rem; font-weight: 700; cursor: context-menu;">HELLO 
                  <?php 
                  while($row = mysqli_fetch_array($query_run)){ 
                    ?>
                   <?php echo strtoupper('<span style="font-weight: 700; font-size: 1.25rem; margin-right: 15px;"> ' . $row['name'] . '<span>');?>
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
    <!-- FRONT MOVIE -->
    <div class="hero-section" id="home">
      <div class="hero-slide-item" id="front">
        <img src="8.jpg" alt="doctorstrange">
        <div class="overlay"></div>
        <div class="hero-slide-item-content">
          <div class="item-content-wraper">
            <div class="item-content-title">
              <h1>Doctor Strange in the Multiverse of Madness</h1>
            </div>
            <div class="movie-infos">
              <div class="movie-info">
                <i class="bx bxs-star" id="star"></i>
                  <span>6.9</span>
                  </div>
                <div class="movie-info">
                  <i class="bx bxs-time"></i>
                  <span>2h 6m</span>
                </div>
                <div class="movie-info">
                  <span>2022</span>
                </div>
                <div class="movie-info">
                  <span>PG</span>
                </div>
            <div class="item-content-description">
            In Marvel Studios’ “Doctor Strange in the Multiverse of Madness”, the MCU unlocks the Multiverse and pushes its boundaries further than ever before. Journey into the unknown with Doctor Strange, who, with the help of mystical allies both old and new, traverses the mind-bending and dangerous alternate realities of the Multiverse to confront a mysterious new adversary.
            </div>
            <div class="item-action">
              <a href="#" class="btn btn-hover">
                <i class="bx bxs-right-arrow"></i>
                <span>Watch now</span>
              </a>
          </div>
        </div>
      </div>
    </div>
</div>
</div>  
      </div>
      <!-- END FRONT MOVIE -->
<!-- TRENDS MOVIES -->
      <div class="section" id="movies">
        <div class="container">
          <div class="section-header">
            Trends
          </div>
          <div class="movie-slide carousel-nav-center owl-carousel">
          <!-- MOVIE ITEM -->
            <a href="loggedinMovie.php" class="movie-item">
              <img src="edr.jpg" alt="">
              <div class="movie-item-content">
                <div class="movie-item-title">
                  Evil Dead Rise
                </div>
                <div class="movie-infos">
                  <div class="movie-info">
                    <i class="bx bxs-star" id="star"></i>
                    <span>7.2</span>
                  </div>
                  <div class="movie-info">
                    <i class="bx bxs-time" id="time"></i>
                    <span>1h 36m</span>
                  </div> 
                  <div class="movie-info">
                    <span>2023</span>
                  </div> 
                  <div class="movie-info">
                    <span>R-18</span>
                  </div> 
                </div>
              </div>
            </a>
            <!-- END MOVIE ITEM -->

            <!-- MOVIE ITEM -->
            <a href="#" class="movie-item">
              <img src="gog.jpg" alt="">
              <div class="movie-item-content">
                <div class="movie-item-title">
                  Guardians of the Galaxy Vol. 3
                </div>
                <div class="movie-infos">
                  <div class="movie-info">
                    <i class="bx bxs-star" id="star"></i>
                    <span id="star-span">8.2</span>
                  </div>
                  <div class="movie-info">
                    <i class="bx bxs-time" id="time"></i>
                    <span id="time-span">2h 30m</span>
                  </div> 
                  <div class="movie-info">
                    <span>2023</span>
                  </div> 
                  <div class="movie-info">
                    <span>PG</span>
                  </div> 
                </div>
              </div>
            </a>
            <!-- END MOVIE ITEM -->

            <!-- MOVIE ITEM -->
            <a href="#" class="movie-item">
              <img src="dd.jpg" alt="">
              <div class="movie-item-content">
                <div class="movie-item-title">
                  Dungeon & Dragons: Honor Among Thieves
                </div>
                <div class="movie-infos">
                  <div class="movie-info">
                    <i class="bx bxs-star" id="star"></i>
                    <span>7.4</span>
                  </div>
                  <div class="movie-info">
                    <i class="bx bxs-time" id="time"></i>
                    <span>2h 14m</span>
                  </div> 
                  <div class="movie-info">
                    <span>2023</span>
                  </div> 
                  <div class="movie-info">
                    <span>PG</span>
                  </div> 
                </div>
              </div>
            </a>
            <!-- END MOVIE ITEM -->

            <!-- MOVIE ITEM -->
            <a href="#" class="movie-item">
              <img src="mario.jpg" alt="">
              <div class="movie-item-content">
                <div class="movie-item-title">
                  Super Mario Bros. Movie
                </div>
                <div class="movie-infos">
                  <div class="movie-info">
                    <i class="bx bxs-star" id="star"></i>
                    <span>7.5</span>
                  </div>
                  <div class="movie-info">
                    <i class="bx bxs-time" id="time"></i>
                    <span>1h 32m</span>
                  </div> 
                  <div class="movie-info">
                    <span>2023</span>
                  </div> 
                  <div class="movie-info">
                    <span>PG</span>
                  </div> 
                </div>
              </div>
            </a>
            <!-- END MOVIE ITEM -->

            <!-- MOVIE ITEM -->
            <a href="#" class="movie-item">
              <img src="pe.jpg" alt="">
              <div class="movie-item-content">
                <div class="movie-item-title">
                  The Pope's Exorcist
                </div>
                <div class="movie-infos">
                  <div class="movie-info">
                    <i class="bx bxs-star" id="star"></i>
                    <span>7.2</span>
                  </div>
                  <div class="movie-info">
                    <i class="bx bxs-time" id="time"></i>
                    <span>1h 43m</span>
                  </div> 
                  <div class="movie-info">
                    <span>2023</span>
                  </div> 
                  <div class="movie-info">
                    <span>R-13</span>
                  </div> 
                </div>
              </div>
            </a>
            <!-- END MOVIE ITEM -->

            <!-- MOVIE ITEM -->
            <a href="#" class="movie-item">
              <img src="antman.jpg" alt="">
              <div class="movie-item-content">
                <div class="movie-item-title">
                  Ant-Man and the Wasp: Quantumania
                </div>
                <div class="movie-infos">
                  <div class="movie-info">
                    <i class="bx bxs-star" id="star"></i>
                    <span>6.2</span>
                  </div>
                  <div class="movie-info">
                    <i class="bx bxs-time" id="time"></i>
                    <span>2h 4m</span>
                  </div> 
                  <div class="movie-info">
                    <span>2023</span>
                  </div> 
                  <div class="movie-info">
                    <span>PG</span>
                  </div> 
                </div>
              </div>
            </a>
            <!-- END MOVIE ITEM -->

            <!-- MOVIE ITEM -->
            <a href="#" class="movie-item">
              <img src="air.jpg" alt="">
              <div class="movie-item-content">
                <div class="movie-item-title">
                  Air
                </div>
                <div class="movie-infos">
                  <div class="movie-info">
                    <i class="bx bxs-star" id="star"></i>
                    <span>7.6</span>
                  </div>
                  <div class="movie-info">
                    <i class="bx bxs-time" id="time"></i>
                    <span>2h 4m</span>
                  </div> 
                  <div class="movie-info">
                    <span>2021</span>
                  </div> 
                  <div class="movie-info">
                    <span>PG</span>
                  </div> 
                </div>
              </div>
            </a>
            <!-- END MOVIE ITEM -->

            <!-- MOVIE ITEM -->
            <a href="#" class="movie-item">
              <img src="mother.jpg" alt="">
              <div class="movie-item-content">
                <div class="movie-item-title">
                  The Mother
                </div>
                <div class="movie-infos">
                  <div class="movie-info">
                    <i class="bx bxs-star" id="star"></i>
                    <span>5.6</span>
                  </div>
                  <div class="movie-info">
                    <i class="bx bxs-time" id="time"></i>
                    <span>1h 55m</span>
                  </div> 
                  <div class="movie-info">
                    <span>2023</span>
                  </div> 
                  <div class="movie-info">
                    <span>R-13</span>
                  </div> 
                </div>
              </div>
            </a>
            <!-- END MOVIE ITEM -->

            <!-- MOVIE ITEM -->
            <a href="#" class="movie-item">
              <img src="tc.jpg" alt="">
              <div class="movie-item-content">
                <div class="movie-item-title">
                  The Covenant
                </div>
                <div class="movie-infos">
                  <div class="movie-info">
                    <i class="bx bxs-star" id="star"></i>
                    <span>7.6</span>
                  </div>
                  <div class="movie-info">
                    <i class="bx bxs-time" id="time"></i>
                    <span>2h 3m</span>
                  </div> 
                  <div class="movie-info">
                    <span>2023</span>
                  </div> 
                  <div class="movie-info">
                    <span>R-13</span>
                  </div> 
                </div>
              </div>
            </a>
            <!-- END MOVIE ITEM -->

            <!-- MOVIE ITEM -->
            <a href="#" class="movie-item">
              <img src="scream.jpg" alt="">
              <div class="movie-item-content">
                <div class="movie-item-title">
                  Scream VI
                </div>
                <div class="movie-infos">
                  <div class="movie-info">
                    <i class="bx bxs-star" id="star"></i>
                    <span>6.7</span>
                  </div>
                  <div class="movie-info">
                    <i class="bx bxs-time" id="time"></i>
                    <span>2h 2m</span>
                  </div> 
                  <div class="movie-info">
                    <span>2023</span>
                  </div> 
                  <div class="movie-info">
                    <span>R-18</span>
                  </div> 
                </div>
              </div>
            </a>
            <!-- END MOVIE ITEM -->

            <!-- MOVIE ITEM -->
            <a href="#" class="movie-item">
              <img src="ren.jpg" alt="">
              <div class="movie-item-content">
                <div class="movie-item-title">
                  Renfield
                </div>
                <div class="movie-infos">
                  <div class="movie-info">
                    <i class="bx bxs-star" id="star"></i>
                    <span>6.4</span>
                  </div>
                  <div class="movie-info">
                    <i class="bx bxs-time" id="time"></i>
                    <span>1h 33m</span>
                  </div> 
                  <div class="movie-info">
                    <span>2023</span>
                  </div> 
                  <div class="movie-info">
                    <span>R-16</span>
                  </div> 
                </div>
              </div>
            </a>
            <!-- END MOVIE ITEM -->

            <!-- MOVIE ITEM -->
            <a href="#" class="movie-item">
              <img src="peterpan.jpg" alt="">
              <div class="movie-item-content">
                <div class="movie-item-title">
                  Peter Pan & Wendy
                </div>
                <div class="movie-infos">
                  <div class="movie-info">
                    <i class="bx bxs-star" id="star"></i>
                    <span>4.1</span>
                  </div>
                  <div class="movie-info">
                    <i class="bx bxs-time" id="time"></i>
                    <span>1h 46m</span>
                  </div> 
                  <div class="movie-info">
                    <span>2023</span>
                  </div> 
                  <div class="movie-info">
                    <span>PG</span>
                  </div> 
                </div>
              </div>
            </a>
            <!-- END MOVIE ITEM -->

            <!-- MOVIE ITEM -->
            <a href="#" class="movie-item">
              <img src="crater.jpg" alt="">
              <div class="movie-item-content">
                <div class="movie-item-title">
                  Crater
                </div>
                <div class="movie-infos">
                  <div class="movie-info">
                    <i class="bx bxs-star" id="star"></i>
                    <span>4.9</span>
                  </div>
                  <div class="movie-info">
                    <i class="bx bxs-time" id="time"></i>
                    <span>1h 45m</span>
                  </div> 
                  <div class="movie-info">
                    <span>2023</span>
                  </div> 
                  <div class="movie-info">
                    <span>PG</span>
                  </div> 
                </div>
              </div>
            </a>
            <!-- END MOVIE ITEM -->

            <!-- MOVIE ITEM -->
            <a href="#" class="movie-item">
              <img src="avatar.jpg" alt="">
              <div class="movie-item-content">
                <div class="movie-item-title">
                  Avatar: The Way of Water
                </div>
                <div class="movie-infos">
                  <div class="movie-info">
                    <i class="bx bxs-star" id="star"></i>
                    <span>7.7</span>
                  </div>
                  <div class="movie-info">
                    <i class="bx bxs-time" id="time"></i>
                    <span>3h 12m</span>
                  </div> 
                  <div class="movie-info">
                    <span>2022</span>
                  </div> 
                  <div class="movie-info">
                    <span>PG</span>
                  </div> 
                </div>
              </div>
            </a>
            <!-- END MOVIE ITEM -->

            <!-- MOVIE ITEM -->
            <a href="#" class="movie-item">
              <img src="ghosted.jpg" alt="">
              <div class="movie-item-content">
                <div class="movie-item-title">
                  Ghosted
                </div>
                <div class="movie-infos">
                  <div class="movie-info">
                    <i class="bx bxs-star" id="star"></i>
                    <span>5.8</span>
                  </div>
                  <div class="movie-info">
                    <i class="bx bxs-time" id="time"></i>
                    <span>1h 56m</span>
                  </div> 
                  <div class="movie-info">
                    <span>2023</span>
                  </div> 
                  <div class="movie-info">
                    <span>R-13</span>
                  </div> 
                </div>
              </div>
            </a>
            <!-- END MOVIE ITEM -->

            <!-- MOVIE ITEM -->
            <a href="#" class="movie-item">
              <img src="johnwick.jpg" alt="">
              <div class="movie-item-content">
                <div class="movie-item-title">
                  John Wick: Chapter 4
                </div>
                <div class="movie-infos">
                  <div class="movie-info">
                    <i class="bx bxs-star" id="star"></i>
                    <span>8.2</span>
                  </div>
                  <div class="movie-info">
                    <i class="bx bxs-time" id="time"></i>
                    <span>2h 49m</span>
                  </div>
                  <div class="movie-info">
                    <span>2023</span>
                  </div> 
                  <div class="movie-info">
                    <span>R-16</span>
                  </div>  
                </div>
              </div>
            </a>
            <!-- END MOVIE ITEM -->

            <!-- MOVIE ITEM -->
            <a href="#" class="movie-item">
              <img src="shazam.jpg" alt="">
              <div class="movie-item-content">
                <div class="movie-item-title">
                 Shazam Fury of the Gods
                </div>
                <div class="movie-infos">
                  <div class="movie-info">
                    <i class="bx bxs-star" id="star"></i>
                    <span>6.0</span>
                  </div>
                  <div class="movie-info">
                    <i class="bx bxs-time" id="time"></i>
                    <span>2h 10m</span>
                  </div> 
                  <div class="movie-info">
                    <span>2023</span>
                  </div> 
                  <div class="movie-info">
                    <span>PG</span>
                  </div> 
                </div>
              </div>
            </a>
            <!-- END MOVIE ITEM -->

             <!-- MOVIE ITEM -->
             <a href="#" class="movie-item">
              <img src="fast10.jpg" alt="">
              <div class="movie-item-content">
                <div class="movie-item-title">
                 Fast X
                </div>
                <div class="movie-infos">
                  <div class="movie-info">
                    <i class="bx bxs-star" id="star"></i>
                    <span>7.0</span>
                  </div>
                  <div class="movie-info">
                    <i class="bx bxs-time" id="time"></i>
                    <span>2h 21m</span>
                  </div> 
                  <div class="movie-info">
                    <span>2023</span>
                  </div> 
                  <div class="movie-info">
                    <span>R-13</span>
                  </div> 
                </div>
              </div>
            </a>
            <!-- END MOVIE ITEM -->

             <!-- MOVIE ITEM -->
             <a href="#" class="movie-item">
              <img src="simulant.jpg" alt="">
              <div class="movie-item-content">
                <div class="movie-item-title">
                 Simulant
                </div>
                <div class="movie-infos">
                  <div class="movie-info">
                    <i class="bx bxs-star" id="star"></i>
                    <span>5.1</span>
                  </div>
                  <div class="movie-info">
                    <i class="bx bxs-time" id="time"></i>
                    <span>1h 35m</span>
                  </div> 
                  <div class="movie-info">
                    <span>2023</span>
                  </div> 
                  <div class="movie-info">
                    <span>PG</span>
                  </div> 
                </div>
              </div>
            </a>
            <!-- END MOVIE ITEM -->

            <!-- MOVIE ITEM -->
            <a href="#" class="movie-item">
              <img src="aka.jpg" alt="">
              <div class="movie-item-content">
                <div class="movie-item-title">
                 AKA
                </div>
                <div class="movie-infos">
                  <div class="movie-info">
                    <i class="bx bxs-star" id="star"></i>
                    <span>6.7</span>
                  </div>
                  <div class="movie-info">
                    <i class="bx bxs-time" id="time"></i>
                    <span>2h 2m</span>
                  </div> 
                  <div class="movie-info">
                    <span>2023</span>
                  </div> 
                  <div class="movie-info">
                    <span>R-16</span>
                  </div> 
                </div>
              </div>
            </a>
            <!-- END MOVIE ITEM -->
          </div>
        </div>
      </div>
<!-- END TRENDS MOVIES -->
      
<!-- TOP RATED MOVIES -->
<div class="section">
  <div class="container">
    <div class="section-header">
      TOP RATED
    </div>
    <div class="movie-slide carousel-nav-center owl-carousel">
    
      <!-- MOVIE ITEM -->
      <a href="#" class="movie-item">
        <img src="tsr.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
            The Shawshank Redemption
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span id="star-span">9.3</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span id="time-span">2h 22m</span>
            </div> 
            <div class="movie-info">
              <span>1994</span>
            </div> 
            <div class="movie-info">
              <span>R-13</span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->

      <!-- MOVIE ITEM -->
      <a href="#" class="movie-item">
        <img src="tgf.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
            The Godfather
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span>9.2</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span>2h 55m</span>
            </div> 
            <div class="movie-info">
              <span>1972</span>
            </div> 
            <div class="movie-info">
              <span>R-18</span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->

      <!-- MOVIE ITEM -->
      <a href="#" class="movie-item">
        <img src="tgd2.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
            The Godfather Part II
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span>9.0</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span>3h 22m</span>
            </div> 
            <div class="movie-info">
              <span>1974</span>
            </div> 
            <div class="movie-info">
              <span>R-18</span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->

      <!-- MOVIE ITEM -->
      <a href="#" class="movie-item">
        <img src="schi.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
            Schindler's List
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span>9.0</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span>3h 15m</span>
            </div> 
            <div class="movie-info">
              <span>1993</span>
            </div> 
            <div class="movie-info">
              <span>R-18</span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->

      <!-- MOVIE ITEM -->
      <a href="#" class="movie-item">
        <img src="12.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
            12 Angry Man
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span>9.0</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span>1h 36m</span>
            </div> 
            <div class="movie-info">
              <span>1957</span>
            </div> 
            <div class="movie-info">
              <span>PG-13</span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->

      <!-- MOVIE ITEM -->
      <a href="#" class="movie-item">
        <img src="spirited.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
            Spirited Away
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span>8.6</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span>2h 5m</span>
            </div> 
            <div class="movie-info">
              <span>2001</span>
            </div> 
            <div class="movie-info">
              <span>PG-13</span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->

      <!-- MOVIE ITEM -->
      <a href="#" class="movie-item">
        <img src="suzume.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
            Suzume
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span>7.8</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span>2h 2m</span>
            </div> 
            <div class="movie-info">
              <span>2022</span>
            </div> 
            <div class="movie-info">
              <span>PG</span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->

       <!-- MOVIE ITEM -->
    <a href="#" class="movie-item">
      <img src="chicago.jpg" alt="">
      <div class="movie-item-content">
        <div class="movie-item-title">
          The Trial of the Chicago 7
        </div>
        <div class="movie-infos">
          <div class="movie-info">
            <i class="bx bxs-star" id="star"></i>
            <span>7.7</span>
          </div>
          <div class="movie-info">
            <i class="bx bxs-time" id="time"></i>
            <span>2h 9m</span>
          </div> 
          <div class="movie-info">
            <span>2020</span>
          </div> 
          <div class="movie-info">
            <span>R-16</span>
          </div> 
        </div>
      </div>
    </a>
    <!-- END MOVIE ITEM -->

      <!-- MOVIE ITEM -->
      <a href="#" class="movie-item">
        <img src="Athlete.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
            Athlete A
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span>7.6</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span>1h 43m</span>
            </div> 
            <div class="movie-info">
              <span>2020</span>
            </div> 
            <div class="movie-info">
              <span>PG-13</span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->
    </div>
  </div>
</div>
<!-- END TOP RATED MOVIES -->

<!-- LATEST MOVIES -->
<div class="section">
  <div class="container">
    <div class="section-header">
      Latest Movies
    </div>
    <div class="movie-slide carousel-nav-center owl-carousel">
    <!-- MOVIE ITEM -->
      <a href="#" class="movie-item">
        <img src="edr.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
            Evil Dead Rise
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span>7.2</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span>1h 36m</span>
            </div> 
            <div class="movie-info">
              <span>2023</span>
            </div> 
            <div class="movie-info">
              <span>R-18</span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->

      <!-- MOVIE ITEM -->
      <a href="#" class="movie-item">
        <img src="gog.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
            Guardians of the Galaxy Vol. 3
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span id="star-span">8.2</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span id="time-span">2h 30m</span>
            </div> 
            <div class="movie-info">
              <span>2023</span>
            </div> 
            <div class="movie-info">
              <span>PG</span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->

      <!-- MOVIE ITEM -->
      <a href="#" class="movie-item">
        <img src="dd.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
            Dungeon & Dragons: Honor Among Thieves
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span>7.4</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span>2h 14m</span>
            </div> 
            <div class="movie-info">
              <span>2023</span>
            </div> 
            <div class="movie-info">
              <span>PG</span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->

      <!-- MOVIE ITEM -->
      <a href="#" class="movie-item">
        <img src="mario.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
            Super Mario Bros. Movie
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span>7.5</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span>1h 32m</span>
            </div> 
            <div class="movie-info">
              <span>2023</span>
            </div> 
            <div class="movie-info">
              <span>PG</span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->

      <!-- MOVIE ITEM -->
      <a href="#" class="movie-item">
        <img src="pe.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
            The Pope's Exorcist
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span>7.2</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span>1h 43m</span>
            </div> 
            <div class="movie-info">
              <span>2023</span>
            </div> 
            <div class="movie-info">
              <span>R-13</span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->

      <!-- MOVIE ITEM -->
      <a href="#" class="movie-item">
        <img src="antman.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
            Ant-Man and the Wasp: Quantumania
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span>6.2</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span>2h 4m</span>
            </div> 
            <div class="movie-info">
              <span>2023</span>
            </div> 
            <div class="movie-info">
              <span>PG</span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->

      <!-- MOVIE ITEM -->
      <a href="#" class="movie-item">
        <img src="air.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
            Air
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span>7.6</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span>2h 4m</span>
            </div> 
            <div class="movie-info">
              <span>2021</span>
            </div> 
            <div class="movie-info">
              <span>PG</span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->

      <!-- MOVIE ITEM -->
      <a href="#" class="movie-item">
        <img src="mother.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
            The Mother
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span>5.6</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span>1h 55m</span>
            </div> 
            <div class="movie-info">
              <span>2023</span>
            </div> 
            <div class="movie-info">
              <span>R-13</span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->

      <!-- MOVIE ITEM -->
      <a href="#" class="movie-item">
        <img src="tc.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
            The Covenant
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span>7.6</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span>2h 3m</span>
            </div> 
            <div class="movie-info">
              <span>2023</span>
            </div> 
            <div class="movie-info">
              <span>R-13</span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->

      <!-- MOVIE ITEM -->
      <a href="#" class="movie-item">
        <img src="scream.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
            Scream VI
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span>6.7</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span>2h 2m</span>
            </div> 
            <div class="movie-info">
              <span>2023</span>
            </div> 
            <div class="movie-info">
              <span>R-18</span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->

      <!-- MOVIE ITEM -->
      <a href="#" class="movie-item">
        <img src="ren.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
            Renfield
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span>6.4</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span>1h 33m</span>
            </div> 
            <div class="movie-info">
              <span>2023</span>
            </div> 
            <div class="movie-info">
              <span>R-16</span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->

      <!-- MOVIE ITEM -->
      <a href="#" class="movie-item">
        <img src="peterpan.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
            Peter Pan & Wendy
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span>4.1</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span>1h 46m</span>
            </div> 
            <div class="movie-info">
              <span>2023</span>
            </div> 
            <div class="movie-info">
              <span>PG</span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->

      <!-- MOVIE ITEM -->
      <a href="#" class="movie-item">
        <img src="crater.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
            Crater
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span>4.9</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span>1h 45m</span>
            </div> 
            <div class="movie-info">
              <span>2023</span>
            </div> 
            <div class="movie-info">
              <span>PG</span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->

      <!-- MOVIE ITEM -->
      <a href="#" class="movie-item">
        <img src="avatar.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
            Avatar: The Way of Water
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span>7.7</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span>3h 12m</span>
            </div> 
            <div class="movie-info">
              <span>2022</span>
            </div> 
            <div class="movie-info">
              <span>PG</span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->

      <!-- MOVIE ITEM -->
      <a href="#" class="movie-item">
        <img src="ghosted.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
            Ghosted
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span>5.8</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span>1h 56m</span>
            </div> 
            <div class="movie-info">
              <span>2023</span>
            </div> 
            <div class="movie-info">
              <span>R-13</span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->

      <!-- MOVIE ITEM -->
      <a href="#" class="movie-item">
        <img src="johnwick.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
            John Wick: Chapter 4
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span>8.2</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span>2h 49m</span>
            </div>
            <div class="movie-info">
              <span>2023</span>
            </div> 
            <div class="movie-info">
              <span>R-16</span>
            </div>  
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->

      <!-- MOVIE ITEM -->
      <a href="#" class="movie-item">
        <img src="shazam.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
           Shazam Fury of the Gods
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span>6.0</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span>2h 10m</span>
            </div> 
            <div class="movie-info">
              <span>2023</span>
            </div> 
            <div class="movie-info">
              <span>PG</span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->

       <!-- MOVIE ITEM -->
       <a href="#" class="movie-item">
        <img src="fast10.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
           Fast X
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span>7.0</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span>2h 21m</span>
            </div> 
            <div class="movie-info">
              <span>2023</span>
            </div> 
            <div class="movie-info">
              <span>R-13</span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->

       <!-- MOVIE ITEM -->
       <a href="#" class="movie-item">
        <img src="simulant.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
           Simulant
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span>5.1</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span>1h 35m</span>
            </div> 
            <div class="movie-info">
              <span>2023</span>
            </div> 
            <div class="movie-info">
              <span>PG</span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->

      <!-- MOVIE ITEM -->
      <a href="#" class="movie-item">
        <img src="aka.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
           AKA
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span>6.7</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span>2h 2m</span>
            </div> 
            <div class="movie-info">
              <span>2023</span>
            </div> 
            <div class="movie-info">
              <span>R-16</span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->
    </div>
  </div>
</div>
<!-- END LATEST MOVIES -->

<!-- TOP ANIME MOVIES -->
<div class="section">
  <div class="container">
    <div class="section-header">
      Top Anime Movies
    </div>
    <div class="movie-slide carousel-nav-center owl-carousel">
    
      <!-- MOVIE ITEM -->
      <a href="#" class="movie-item">
        <img src="jujutsu.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
            Jujutsu Kaisen 0
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span id="star-span">7.8</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span id="time-span">1h 45m</span>
            </div> 
            <div class="movie-info">
              <span>2021</span>
            </div> 
            <div class="movie-info">
              <span>R-13</span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->

      <!-- MOVIE ITEM -->
      <a href="#" class="movie-item">
        <img src="kimetsu.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
            Demon Slayer The Movie: Mugen Train
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span>8.2</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span>1h 57m</span>
            </div> 
            <div class="movie-info">
              <span>2020</span>
            </div> 
            <div class="movie-info">
              <span>R-13</span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->

      <!-- MOVIE ITEM -->
      <a href="#" class="movie-item">
        <img src="silent.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
            A Silent Voice
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span>8.9</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span>2h 9m</span>
            </div> 
            <div class="movie-info">
              <span>2016</span>
            </div> 
            <div class="movie-info">
              <span>G</span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->

      <!-- MOVIE ITEM -->
      <a href="#" class="movie-item">
        <img src="fireworks.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
            Fireworks
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span>5.5</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span>1h 30m</span>
            </div> 
            <div class="movie-info">
              <span>2017</span>
            </div> 
            <div class="movie-info">
              <span>PG-13</span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->

      <!-- MOVIE ITEM -->
      <a href="#" class="movie-item">
        <img src="hero.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
            My Hero Academia: World Heroes' Mission
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span>7.1</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span>1h 45m</span>
            </div> 
            <div class="movie-info">
              <span>2021</span>
            </div> 
            <div class="movie-info">
              <span>PG-13</span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->

      <!-- MOVIE ITEM -->
      <a href="#" class="movie-item">
        <img src="spirited.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
            Spirited Away
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span>8.6</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span>2h 5m</span>
            </div> 
            <div class="movie-info">
              <span>2001</span>
            </div> 
            <div class="movie-info">
              <span>PG-13</span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->

      <!-- MOVIE ITEM -->
      <a href="#" class="movie-item">
        <img src="suzume.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
            Suzume
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span>7.8</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span>2h 2m</span>
            </div> 
            <div class="movie-info">
              <span>2022</span>
            </div> 
            <div class="movie-info">
              <span>PG</span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->

       <!-- MOVIE ITEM -->
    <a href="#" class="movie-item">
      <img src="ponyo.jpg" alt="">
      <div class="movie-item-content">
        <div class="movie-item-title">
          Ponyo
        </div>
        <div class="movie-infos">
          <div class="movie-info">
            <i class="bx bxs-star" id="star"></i>
            <span>7.6</span>
          </div>
          <div class="movie-info">
            <i class="bx bxs-time" id="time"></i>
            <span>1h 51m</span>
          </div> 
          <div class="movie-info">
            <span>2008</span>
          </div> 
          <div class="movie-info">
            <span>G</span>
          </div> 
        </div>
      </div>
    </a>
    <!-- END MOVIE ITEM -->

      <!-- MOVIE ITEM -->
      <a href="#" class="movie-item">
        <img src="seven.jpg" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
            The Seven Deadly Sins the Movie: Prisoners of the Sky
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span>7.1</span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span>1h 39m</span>
            </div> 
            <div class="movie-info">
              <span>2018</span>
            </div> 
            <div class="movie-info">
              <span>PG-13</span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->
    </div>
  </div>
</div>
<!-- END TOP ANIME MOVIES -->

<!-- SPECIAL MOVIE SECTION -->
<div class="section">
        <div class="hero-slide-item">
          <img src="Heneral-20.jpg" alt="heneral">
          <div class="overlay"></div>
          <div class="hero-slide-item-content">
            <div class="item-content-wraper">
              <div class="item-content-title">
                <h1>Heneral Luna</h1>
              </div>
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
              <div class="item-content-description">
                General Antonio Luna (John Arcilla), commander of the revolutionary army, is spoiling for a fight. After three hundred years as a Spanish colony, the Philippines must endure a new foreign power: the United States of America. General Luna wants to fight for freedom but members of the elite want to strike a deal with the Americans. The infighting is fierce in the new cabinet but General Luna and his loyal men forge ahead even as his military decisions are met with resistance from soldiers who are loyal only to President Aguinaldo (Mon Confiado). Ultimately, it is the general’s legendary temper and pride that bring him to his death when a pack of presidential guards assassinate him in broad daylight. While American newspapers blame Aguinaldo, the mystery of General Luna’s assassination was never completely solved and his killers never put to justice.
              </div>
              <div class="item-action">
                <a href="#" class="btn btn-hover">
                  <i class="bx bxs-right-arrow"></i>
                  <span>Watch now</span>
                </a>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>  
<!-- END SPECIAL MOVIE SECTION -->

<!-- PRICING SECTION -->
  <!-- <div class="section">
    <div class="container" id="pricing-container">
      <div class="pricing">
        <div class="pricing-header">
          <a class="navbar-brand" href="#" style="cursor: context-menu; font-size: 50px; font-family: 'Bebas Neue', cursive; color: red">KENFLIX</a><a href="#" style="cursor: context-menu; font-size: 50px; font-family: 'Bebas Neue', cursive; color: white;">PRICING</a>
        </div>
        <div class="pricing-list">
          <div class="row">
          <div class="col-4 col-md-12 col-sm-12">
            <div class="pricing-box">
              <div class="pricing-box-header">
                <div class="pricing-name">
                  Basic
                </div>
                <div class="pricing-price">
                  Free
                </div>
              </div>
              <div class="pricing-box-content">
                <p>Originals</p>
                <p>Switch Plans Anytime</p>
                <p><del>65+ Top Live</del></p>
                <p><del>TV Channels</del></p>
              </div>
              <div class="pricing-box-action">
                <a href="login.html" class="btn btn-hover">
                  <span>Subscribe Now</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-4 col-md-12 col-sm-12">
            <div class="pricing-box highlight">
              <div class="pricing-box-header">
                <div class="pricing-name">
                  Premium
                </div>
                <div class="pricing-price">
                  ₱299 <span>/month</span>
                </div>
              </div>
              <div class="pricing-box-content">
                <p>Originals</p>
                <p>Switch Plans Anytime</p>
                <p>65+ Top Live</p>
                <p><del>TV Channels</del></p>
              </div>
              <div class="pricing-box-action">
                <a href="login.html" class="btn btn-hover">
                  <span>Subscribe Now</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-4 col-md-12 col-sm-12">
            <div class="pricing-box">
              <div class="pricing-box-header">
                <div class="pricing-name">
                  VIP
                </div>
                <div class="pricing-price">
                  ₱599 <span>/month</span>
                </div>
              </div>
              <div class="pricing-box-content">
                <p>Originals</p>
                <p>Switch Plans Anytime</p>
                <p>65+ Top Live</p>
                <p>TV Channels</p>
              </div>
              <div class="pricing-box-action">
                <a href="login.html" class="btn btn-hover">
                  <span>Subscribe Now</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div> -->
<!-- END PRICING SECTION -->

<!-- FOOTER SECTION -->
<footer class="section" id="about">
  <div class="container" id="footer-container">
    <div class="row">
      <div class="col-4 col-md-6 col-sm-12">
        <div class="content">
          <a class="navbar-brand" href="#" style="cursor: context-menu; font-size: 50px; font-family: 'Bebas Neue', cursive; color: red">KENFLIX</a>
        </div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo esse neque quod veniam fugiat. Iusto ipsa officiis fugiat iste minima error, facere dolorem rem, sapiente inventore magnam soluta voluptas dignissimos?
        </p>
        <div class="social-list">
          <a href="https://www.facebook.com/kenneth.deluna17" class="social-item" target="_blank" rel="noopener noreferrer" id="facebook">
            <i class="bx  bxl-facebook"></i>
          </a>
          <a href="https://twitter.com/kknntthh" class="social-item" target="_blank" rel="noopener noreferrer" id="twitter">
            <i class="bx  bxl-twitter"></i>
          </a>
          <a href="https://www.instagram.com/knnthdl_07/" target="_blank" rel="noopener noreferrer" class="social-item" id="instagram">
            <i class="bx  bxl-instagram"></i>
          </a>
        </div>
      </div>
      <div class="col-8 col-md-6 col-sm-12" id="footer-2ndcol">
        <div class="row" >
          <div class="col-3 col-md-6 col-sm-12">
            <div class="content">
              <p><b>Kenflix</b></p>
              <ul class="footer-menu">
                <li id="footer-items"><a href="#">About Us</a></li>
                <li id="footer-items"><a href="#">My Profile</a></li>
                <li id="footer-items"><a href="#">Pricing Plans</a></li>
                <li id="footer-items"><a href="#">Contacts</a></li>
              </ul>
            </div>
          </div>

          <div class="col-3 col-md-6 col-sm-12">
              <div class="content">
                <p><b>Help</b></p>
                <ul class="footer-menu">
                  <li id="footer-items"><a href="#">About Us</a></li>
                  <li id="footer-items"><a href="#">My Profile</a></li>
                  <li id="footer-items"><a href="#">Pricing Plans</a></li>
                  <li id="footer-items"><a href="#">Contacts</a></li>
                </ul>
            </div>
          </div>
          <div class="col-3 col-md-6 col-sm-12">
              <div class="content">
                <p><b>Download App</b></p>
                <ul class="footer-menu">
                  <li id="footer-items"><a href="#">
                    <img src="googleplay.png" alt="">
                  </a></li>
                  <li id="footer-items"><a href="#">
                    <img src="appstore.png" alt="">
                  </a></li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- END FOOTER SECTION -->

  <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="app.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
   
  <!-- END SCRIPTS -->

</body> 
</html>