<?php 
    include ("connection.php");
    require 'functions.php';

    session_start();
    $mail = $_SESSION['email'];
    $query = "select * from registration where email = '$mail'";
    $query_run = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix Philippines Duplicated Watch TV Shows Online, Watch Movies Online</title>
    <link rel="website icon" type="png" href="netflix logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="testt.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   
</head>
<body oncontextmenu="return false">
<!-- NAV -->
    <div class="nav-wrapper">
      <div class="container" >
          <div class="nav">
            <a class="navbar-brand" href="testt.php" style="font-size: 40px; font-family: 'Bebas Neue', cursive; color: red">KENFLIX</a>
              <ul class="nav-menu pt-2" id="nav-menu">
              <li class="pt-3" style="font-size: 1.25rem; font-weight: 700; cursor: context-menu;">HELLO 
                  <?php 
                  while($row = mysqli_fetch_array($query_run)){ 
                    ?>
                   <?php echo strtoupper('<span style=" font-weight: 700; font-size: 1.25rem; margin-right: 15px;"> ' . $row['name'] . '<span>');?>
                    <?php
                  }?>
                  <li><a href="login.php"><i class='bx bx-log-out fs-2 pt-3'></i></a></li>
              </ul>
              <!-- MOBILE MENU TOGGLE -->
              <div class="hamburger-menu" id="hamburger-menu">
                  <div class="hamburger"></div>
              </div>
          </div>
      </div>
  </div>
<!-- END NAV -->

 <!-- ADD Modal -->
    <div class="modal fade" id="addMovieModal" tabindex="-1" aria-labelledby="addMovieModal" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content bg-dark ">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 text-white" id="addMovieModal">ADD NEW MOVIE</h1>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-white">
                                <form action="functions.php" method="POST" enctype="multipart/form-data">
                                    <div class="row mb-3">
                                    <div class="mb-3">
                                        <label for="movieTitle" class="form-label">Title</label>
                                        <input type="text" class="form-control" name="movieTitle" placeholder="Enter movie title" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="movieStar" class="form-label">Star Rating</label>
                                        <input type="number" class="form-control" name="movieStar" step="0.01" placeholder="0.00" min = "0.0" max="10.00" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="movieDuration" class="form-label">Duration</label>
                                        <input type="text" class="form-control" name="movieDuration" placeholder="0h 0m" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="movieYear" class="form-label">Year</label>
                                        <input type="number" class="form-control" min="1900" max="2099" step="1" name="movieYear" placeholder="2012" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="movieRate" class="form-label">Movie Ratings</label>
                                        <input type="text" class="form-control" name="movieRate" placeholder="Enter movie ratings" required>
                                    </div>

                                     <div class=" d-flex col ">
                                    
                                        <div class="mb-3 col-5 flex-fill">
                                            <label for="movieBanner" class="form-label">Upload Movie Banner</label>

                                            <div class="col-2 mb-3">
                                                <img class="preview_banner rounded" src="banner/movie-banner-preview.png" style="width: 350px; height: 200px;">
                                            </div>

                                            <div class="col-10">
                                                <div class="file-upload text-secondary">
                                                    <input type="file" class="form-control movieBanner" name="movieBanner" accept="banner/*" required>
                                                    <span class="fs-4 fw-2">Choose file...</span>
                                                    <span>or drag and drop file here</span>
                                                </div>
                                            </div>
                                        </div>   
                                     
                                        <div class="mb-3 col-5 flex-fill">
                                            <label for="moviePoster" class="form-label">Upload Movie Poster</label>

                                            <div class="col-2 mb-3">
                                                <img class="preview_poster rounded" src="poster/movie-poster-preview.png" style="width: 150px; height: 200px;">
                                            </div>

                                            <div class="col-10">
                                                <div class="file-upload text-secondary">
                                                    <input type="file" class="form-control moviePoster" name="moviePoster" accept="poster/*" required>
                                                    <span class="fs-4 fw-2">Choose file...</span>
                                                    <span>or drag and drop file here</span>
                                                </div>
                                            </div>
                                        </div>
                                    
                                    </div>

                                    <div class="mb-3">
                                        <label for="movieDesc" class="form-label">Movie Descriptions</label>
                                        <textarea class="form-control" name="movieDesc" rows="3"></textarea>
                                    </div>
                            </div>
                            <div class="modal-footer text-white">
                                <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="submit" value="add">Submit</button>
                            </div>  
                            </div> 
                        </form>
                            </div>
                        </div>
                        </div>
<!-- End ADD Modal -->

<!-- LIST -->
    <div class="container">
    <div class="row">
        <div class="col-mid-12">
            <div class="card">
                <div class="card-header">
                    <h4  class="fw-bold">MOVIE DETAILS
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-secondary float-end " data-bs-toggle="modal" data-bs-target="#addMovieModal">
                        ADD NEW MOVIE
                        </button>
                         <!-- End Button trigger modal -->
                    </h4>
                </div>

                <div class="card-body">
                    <table class="table table-dark table-striped-columns rounded">
                        <thead>
                            <tr>
                            <th>ID</th>
                            <th>POSTER</th>
                            <th>TITLE</th>
                            <th>STAR RATING</th>
                            <th>DURATION</th>
                            <th>YEAR</th>
                            <th>MOVIE RATING</th>
                            <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $query = "SELECT * FROM movie";
                                $query_run = mysqli_query($conn, $query);

                                if(mysqli_num_rows($query_run) > 0){
                                    foreach($query_run as $movies){
                                         ?>
                                         <tr>
                                            <td><?= $movies['movie-id']?></td>
                                            <td><img src="poster/<?=$movies['movie-img']?>" class="rounded" alt="Image" style="width: 100px; height: 150px;"></td>
                                            <td><?= $movies['movie-title']?></td>
                                            <td><?= $movies['movie-star']?> /10</td>
                                            <td><?= $movies['movie-dur']?></td>
                                            <td><?= $movies['movie-year']?></td>
                                            <td><?= $movies['movie-rate']?></td>
                                            <td class="col">
                                                <form action="functions.php" class="m-2" method="POST">
                                                    <a href="" type="submit" class="btn btn-info m-1 viewBtn" value="view" data-bs-toggle="modal" data-bs-target="#viewModal" data-view = '<?php echo $movies['movie-id']; ?>'><i class='bx bx-show-alt icon align-middle' style='color:#ffffff; font-size:1.5rem;' ></i></a>
                                                    <a href="" type="submit" class="btn btn-success m-1 editBtn" value="edit" data-bs-toggle="modal" data-bs-target="#editModal" data-edit = '<?php echo $movies['movie-id']; ?>'><i class='bx bxs-edit icon align-middle' style="font-size:1.5rem;"></i></a>
                                                    <a href="" type="submit" class="btn btn-danger m-1 delBtn" data-bs-toggle="modal" data-bs-target="#delModal" data-del = '<?php echo $movies['movie-id']; ?>'><i class='bx bxs-trash-alt icon align-middle' style="font-size:1.5rem;"></i></a>
                                                </form>
                                                <form action="cast.php?m=<?php echo $movies['movie-name']?>"  class="m-2 d-grid col-10" method="POST">
                                                <button type="submit" class="btn btn-success m-1 addCast" style="font-family: 'Roboto', sans-serif"><i class='bx bxs-user align-middle pe-2' style="font-size:1.8rem;"></i>VIEW CAST</button>
                                                </form>
                                            </td>
                                         </tr>
                                         <?php 
                                    }
                                }
                                else{
                                    echo "<h5> No Record Found </h5>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
<!-- END LIST -->

<!-- VIEW Modal -->
    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModal" aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content bg-dark">
                <div class="modal-header text-white">
                    <h1 class="modal-title fs-5 text-white" id="viewModal">MOVIE DETAILS</h1>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body view-modal text-white"></div>
                <div class="text-white"></div>
            </div>
        </div>
    </div>
<!-- END VIEW Modal -->

<!-- EDIT Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" >
            <div class="modal-content bg-dark ">
                <div class="modal-header text-white">
                    <h1 class="modal-title fs-5 text-white">EDIT MOVIE</h1>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body edit-modal text-white"></div>   
                <div class="text-white"></div>
            </div>
        </div>
    </div>
<!-- END EDIT Modal --> 

<!-- DELETE MODAL -->
    <div class="modal fade" id="delModal" aria-labelledby="delModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-dark">
                <div class="modal-header text-white">
                    <h1 class="modal-title fs-5 text-white">DELETE MOVIE</h1>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body del-modal text-white"></div>
                <div class="text-white"></div>
            </div>
        </div>
    </div>
<!-- END DELETE MODAL -->

<!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

<!-- DISPLAY BEFORE UPLOAD -->
    <script>
        $(document).ready(function(){
        //function to display image before upload
        $("input.moviePoster").change(function(){
                var file = this.files[0];
                var url =  URL.createObjectURL(file);
                $(this).closest(".row").find(".preview_poster").attr("src", url);
            });
        });
    </script>

    <script>
        $(document).ready(function(){
        //function to display image before upload
        $("input.movieBanner").change(function(){
                var file = this.files[0];
                var url =  URL.createObjectURL(file);
                $(this).closest(".row").find(".preview_banner").attr("src", url);
            });
        });
    </script>

<!-- END DISPLAY BEFORE UPLOAD -->

<!-- VIEW MOVIE     -->
    <script>
        $(document).ready(function(){
            $('.viewBtn').click(function(){
                var userid = $(this).data('view');
                $.ajax({
                    url: 'view.php',
                    type: 'post',
                    data: {userid: userid},
                    success: function(response){
                        $('.view-modal').html(response);
                        $('#viewModal').modal('show');
                    }
                })
            });
        });
    </script>
<!-- END VIEW MOVIE     -->

<!-- EDIT MOVIE -->
    <script>
        $(document).ready(function(){

            $('.editBtn').click(function(){
                var userid = $(this).data('edit');
                $.ajax({
                    url: 'edit.php',
                    type: 'post',
                    data: {userid: userid},
                    success: function(response){
                        $('.edit-modal').html(response);
                        $('#editModal').modal('show');
                    }
                })
            });
        });
    </script>
<!-- END EDIT MOVIE -->

<!-- DELETE MOVIE -->
    <script>
    $(document).ready(function(){

        $('.delBtn').click(function(){
            var userid = $(this).data('del');
            $.ajax({
                url: 'delete.php',
                type: 'post',
                data: {userid: userid},
                success: function(response){
                    $('.del-modal').html(response);
                    $('#delModal').modal('show');
                }
            })
        });
        });

    </script>
<!-- END DELETE MOVIE -->

<!-- End Script-->
</body>
</html>