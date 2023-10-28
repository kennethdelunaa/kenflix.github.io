<?php 
    include ("connection.php");
    session_start();
    $userid = $_POST['userid'];

    $sql = "SELECT * FROM `movie` WHERE `movie-id` =". $userid;
    $result = mysqli_query($conn, $sql);
    while( $row = mysqli_fetch_array($result) ){
        ?>
       <form action="" method="POST">
    <div class="hero-section" id="home">
        <div class="hero-slide-item pb-3 ">
        <img src="banner/<?=$row['movie-banner']?>" class="rounded" alt="Banner" style="width: 100%; height: 80%;">
            <div class="hero-slide-item-content">
                <div class="item-content-wraper">
                </div>
            </div>
        </div>  
    </div>

    <div class="container-movie-info justify-content-center gap-5">
        <div class="container-movie d-flex gap-4 pb-3">
            <div class="movie-card"><img src="poster/<?=$row['movie-img']?>" alt="Image" class="rounded" style="width: 200px;"></div>
                <div class="info">
                    <div class="title"><h1><?php echo $row['movie-title'];?></h1></div>
                        <h5 class="pb-3 text-justify"><?php echo $row['movie-desc'];?></h5>
                    <div class="movie-infos">
                        <div class="movie-info d-flex flex-row">
                        <i class="bx bxs-star pe-2" id="star"></i>
                            <h6>Star Rating: <?php echo $row['movie-star'];?></h6>
                        </div>
                        <div class="movie-info d-flex flex-row">
                            <i class="bx bxs-time pe-2"></i>
                            <h6>Duration: <?php echo $row['movie-dur'];?></h6>
                        </div>
                        <div class="movie-info d-flex flex-row">
                            <i class='bx bx-calendar-alt pe-2' ></i>
                            <h6>Year: <?php echo $row['movie-year'];?></h6>
                        </div>
                        <div class="movie-info d-flex flex-row">
                            <i class='bx bx-camera-movie pe-2' ></i>
                            <h6>Movie Rating: <?php echo $row['movie-rate']?></h6>
                        </div>
                    </div>
                </div>
        </div>
            <div class="modal-footer justify-content-center ">
                <button type="button " class="btn btn-secondary font-weight-bold d-grid gap-2 col-6 mx-auto fw-bold" data-bs-dismiss="modal">Close</button>
            </div>   
            <?php 
    }
    ?>
        </form>
    