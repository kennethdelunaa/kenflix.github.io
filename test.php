<?php 
    include ("connection.php");
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
      <div class="container">
          <div class="nav">
            <a class="navbar-brand" href="test.php" style="font-size: 40px; font-family: 'Bebas Neue', cursive; color: red">KENFLIX</a>
              <ul class="nav-menu" id="nav-menu">
                  <li><a href="#home">Home</a></li>
                  <li><a href="#movies">Movies</a></li>
                  <li><a href="#about">About</a></li>
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
            In Marvel Studios’ “Doctor Strange in the Multiverse of Madness,” the MCU unlocks the Multiverse and pushes its boundaries further than ever before. Journey into the unknown with Doctor Strange, who, with the help of mystical allies both old and new, traverses the mind-bending and dangerous alternate realities of the Multiverse to confront a mysterious new adversary.
            </div>
            <div class="item-action">
              <a href="login.php" class="btn btn-hover">
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
          <!-- MOVIE ITEM --><?php 
            $query = "SELECT * FROM movie LIMIT 10";
            $query_run = mysqli_query($conn, $query);

            if(mysqli_num_rows($query_run) > 0){
                foreach($query_run as $movies){
                      ?>
            <a href="movie.php?v=<?php echo $movies['movie-name'];?>" class="movie-item rounded">
              <img src="poster/<?=$movies['movie-img'] ?>" alt="">
              <div class="movie-item-content">
                <div class="movie-item-title">
                  <?php echo $movies['movie-title'];?>
                </div>
                <div class="movie-infos">
                  <div class="movie-info">
                    <i class="bx bxs-star" id="star"></i>
                    <span><?php echo $movies['movie-star'];?></span>
                  </div>
                  <div class="movie-info">
                    <i class="bx bxs-time" id="time"></i>
                    <span><?php echo $movies['movie-dur'];?></span>
                  </div> 
                  <div class="movie-info">
                    <span><?php echo $movies['movie-year'];?></span>
                  </div> 
                  <div class="movie-info">
                    <span><?php echo $movies['movie-rate'];?></span>
                  </div> 
                </div>
              </div>
            </a>
            <!-- END MOVIE ITEM -->
            <?php 
                }
            }
            else{
                echo "<h5> No Record Found </h5>";
            }
        ?>
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
      <?php 
            $query = "SELECT * FROM movie WHERE `movie-star` >= '7.5' AND `movie-type` IS NULL ORDER BY `movie-star` DESC LIMIT 10";
            
            $query_run = mysqli_query($conn, $query);

            if(mysqli_num_rows($query_run) > 0){
                foreach($query_run as $movies){
                      ?>
            <a href="movie.php?v=<?php echo $movies['movie-name'];?>" class="movie-item rounded">
              <img src="poster/<?=$movies['movie-img'] ?>" alt="">
              <div class="movie-item-content">
                <div class="movie-item-title">
                  <?php echo $movies['movie-title'];?>
                </div>
                <div class="movie-infos">
                  <div class="movie-info">
                    <i class="bx bxs-star" id="star"></i>
                    <span><?php echo $movies['movie-star'];?></span>
                  </div>
                  <div class="movie-info">
                    <i class="bx bxs-time" id="time"></i>
                    <span><?php echo $movies['movie-dur'];?></span>
                  </div> 
                  <div class="movie-info">
                    <span><?php echo $movies['movie-year'];?></span>
                  </div> 
                  <div class="movie-info">
                    <span><?php echo $movies['movie-rate'];?></span>
                  </div> 
                </div>
              </div>
            </a>
            <!-- END MOVIE ITEM -->
            <?php 
                }
            }
            else{
                echo "<h5> No Record Found </h5>";
            }
        ?>
      </div>
    </div>
  </div>
<!-- END TOP RATED MOVIES -->

<!-- LATEST MOVIES -->
  <div class="section" id="movies">
        <div class="container">
          <div class="section-header">
            LATEST MOVIES
          </div>
          <div class="movie-slide carousel-nav-center owl-carousel">
          <!-- MOVIE ITEM --><?php 
            $query = "SELECT * FROM movie LIMIT 10";
            $query_run = mysqli_query($conn, $query);

            if(mysqli_num_rows($query_run) > 0){
                foreach($query_run as $movies){
                      ?>
            <a href="movie.php?v=<?php echo $movies['movie-name'];?>" class="movie-item rounded">
              <img src="poster/<?=$movies['movie-img'] ?>" alt="">
              <div class="movie-item-content">
                <div class="movie-item-title">
                  <?php echo $movies['movie-title'];?>
                </div>
                <div class="movie-infos">
                  <div class="movie-info">
                    <i class="bx bxs-star" id="star"></i>
                    <span><?php echo $movies['movie-star'];?></span>
                  </div>
                  <div class="movie-info">
                    <i class="bx bxs-time" id="time"></i>
                    <span><?php echo $movies['movie-dur'];?></span>
                  </div> 
                  <div class="movie-info">
                    <span><?php echo $movies['movie-year'];?></span>
                  </div> 
                  <div class="movie-info">
                    <span><?php echo $movies['movie-rate'];?></span>
                  </div> 
                </div>
              </div>
            </a>
            <!-- END MOVIE ITEM -->

            <?php 
                }
            }
            else{
                echo "<h5> No Record Found </h5>";
            }
        ?>
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
    
    <?php 
            $query = "SELECT * FROM movie WHERE `movie-type` = 'anime' ORDER BY `movie-star` DESC LIMIT 10";
            $query_run = mysqli_query($conn, $query);

            if(mysqli_num_rows($query_run) > 0){
                foreach($query_run as $movies){
                      ?>
      <!-- MOVIE ITEM -->
      <a href="movie.php?v=<?php echo $movies['movie-name']; ?>" class="movie-item rounded">
        <img src="poster/<?= $movies['movie-img'] ?>" alt="">
        <div class="movie-item-content">
          <div class="movie-item-title">
            <?php echo $movies['movie-title'];?>
          </div>
          <div class="movie-infos">
            <div class="movie-info">
              <i class="bx bxs-star" id="star"></i>
              <span id="star-span"><?php echo $movies['movie-star'];?></span>
            </div>
            <div class="movie-info">
              <i class="bx bxs-time" id="time"></i>
              <span id="time-span"><?php echo $movies['movie-dur'];?></span>
            </div> 
            <div class="movie-info">
              <span><?php echo $movies['movie-year'];?></span>
            </div> 
            <div class="movie-info">
              <span><?php echo $movies['movie-rate'];?></span>
            </div> 
          </div>
        </div>
      </a>
      <!-- END MOVIE ITEM -->
      <?php 
                }
            }
            else{
                echo "<h5> No Record Found </h5>";
            }
        ?>
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
              Set during the Philippine-American war, a short-tempered Filipino general faces an enemy more formidable than the American army: his own treacherous countrymen.
              </div>
              <div class="item-action">
                <a href="login.php" class="btn btn-hover">
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
  <div class="section" id="pricing-container">
    <div class="container">
      <div class="pricing">
        <div class="pricing-header">
          <a class="navbar-brand" href="#" style="cursor: context-menu; font-size: 50px; font-family: 'Bebas Neue', cursive; color: red">KENFLIX</a><a href="#" style="cursor: context-menu; font-size: 50px; font-family: 'Bebas Neue', cursive; color: white;">PRICING</a>
        </div>
        <div class="pricing-list">
          <div class="row">
          <div class="col-4 col-md-12 col-sm-12">
            <div class="pricing-box rounded ">
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
                <a href="login.php" class="btn btn-hover">
                  <span>Subscribe Now</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-4 col-md-12 col-sm-12">
            <div class="pricing-box highlight rounded shadow">
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
                <a href="login.php" class="btn btn-hover">
                  <span>Subscribe Now</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-4 col-md-12 col-sm-12">
            <div class="pricing-box rounded shadow">
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
                <a href="login.php" class="btn btn-hover">
                  <span>Subscribe Now</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
<!-- END PRICING SECTION -->

<!-- FOOTER SECTION -->
  <footer class="section">
  <div class="container" id="footer-container">
    <div class="row justify-content-center" id="about">

      <div class="col-4 col-md-6 col-sm-12">
        <div class="content">
          <a class="navbar-brand" href="test.php" style="cursor: context-menu; font-size: 50px; font-family: 'Bebas Neue', cursive; color: red">KENFLIX</a>
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

      <div class="col-4 col-md-6 col-sm-12 " id="footer-2ndcol">
        <div class="row justify-content-center">
          <div class="col-4 col-md-6 col-sm-12">
            <div class="content">
              <p><b>Kenflix</b></p>
              <ul class="footer-menu">
                <li id="footer-items"><a href="#about">About Us</a></li>
                <li id="footer-items"><a href="#">My Profile</a></li>
                <li id="footer-items"><a href="#pricing-container">Pricing Plans</a></li>
                <li id="footer-items"><a href="#">Contacts</a></li>
              </ul>
            </div>
          </div>

          <div class="col-8 col-md-6 col-sm-12">
              <div class="content">
                <p><b>Download App</b></p>
                <ul class="footer-menu">
                  <li id="footer-items"><a href="https://play.google.com" target="_blank">
                    <img src="googleplay.png" alt="">
                  </a></li>
                  <li id="footer-items"><a href="https://www.apple.com/ph/app-store/" target="_blank">
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

<!-- COPYRIGHT SECTION -->
            <div class="copyright">
              Copyright &#169; 2023 <a href="https://www.youtube.com/@tuattrananh" target="_blank">Tuat Tran Anh</a>
            </div>
<!-- END COPYRIGHT SECTION -->


<!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="app.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
   
<!-- END SCRIPTS -->

</body> 
</html>