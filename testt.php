<?php 
    include ("connection.php");
    require 'functions.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix Philippines Duplicated Watch TV Shows Online, Watch Movies Online</title>
    <link rel="website icon" type="png" href="netflix logo.png">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="testt.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
   
</head>
<body>
<!-- NAV -->
<div class="nav-wrapper">
      <div class="container" >
          <div class="nav">
            <a class="navbar-brand" href="test.php" style="font-size: 40px; font-family: 'Bebas Neue', cursive; color: red">KENFLIX</a>
              <ul class="nav-menu" id="nav-menu">
                  <li><a href="test.php#home">Home</a></li>
                  <li><a href="test.php#movies">Movies</a></li>
                  <li><a href="test.php#about">About</a></li>
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
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="addMovieModal">ADD NEW MOVIE</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="functions.php" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="movieTitle" class="form-label">Title</label>
                                        <input type="text" class="form-control" name="movieTitle" placeholder="Enter movie title">
                                    </div>
                                    <div class="mb-3">
                                        <label for="movieStar" class="form-label">Star Rating</label>
                                        <input type="text" class="form-control" name="movieStar" placeholder="Enter star ratings">
                                    </div>
                                    <div class="mb-3">
                                        <label for="movieDuration" class="form-label">Duration</label>
                                        <input type="text" class="form-control" name="movieDuration" placeholder="Enter movie duration">
                                    </div>
                                    <div class="mb-3">
                                        <label for="movieYear" class="form-label">Year</label>
                                        <input type="number" class="form-control" min="1900" max="2099" step="1" value="2023" name="movieYear" placeholder="Enter year make">
                                    </div>
                                    <div class="mb-3">
                                        <label for="movieRate" class="form-label">Movie Ratings</label>
                                        <input type="text" class="form-control" name="movieRate" placeholder="Enter movie ratings">
                                    </div>
                                    <div class="mb-3">
                                        <label for="movieBanner" class="form-label">Movie Banner</label>
                                        <input type="file" class="form-control" name="movieBanner" placeholder="Insert movie banner file">
                                    </div>
                                    <div class="mb-3">
                                        <label for="moviePoster" class="form-label">Movie Poster</label>
                                        <input type="file" class="form-control" name="moviePoster" placeholder="Insert movie poster file">
                                    </div>
                                    <div class="mb-3">
                                        <label for="movieDesc" class="form-label">Movie Descriptions</label>
                                        <textarea class="form-control" name="movieDesc" rows="3"></textarea>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="submit" value="add">Submit</button>
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
                    <h4>MOVIE DETAILS
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-secondary float-end" data-bs-toggle="modal" data-bs-target="#addMovieModal">
                        Add New Movie
                        </button>
                    </h4>
                </div>

                <div class="card-body">
                    <table class="table table-dark table-striped-columns">
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
                                            <td><img src="poster/<?=$movies['movie-img']?>" alt="Image" style="width: 100px; height: 150px;"></td>
                                            <td><?= $movies['movie-title']?></td>
                                            <td><?= $movies['movie-star']?></td>
                                            <td><?= $movies['movie-dur']?></td>
                                            <td><?= $movies['movie-year']?></td>
                                            <td><?= $movies['movie-rate']?></td>
                                            <td class="col">
                                                <form action="" method="post">
                                                    <a href="" type="submit" class="btn btn-info btn-sm row m-1 justify-content-center" value="view">View</a>
                                                    <a href="" type="submit" class="btn btn-success btn-sm row m-1 justify-content-center editBtn" value="edit" data-bs-toggle="modal" data-bs-target="#editModal">Edit</a>
                                                    <a href="" type="submit" class="btn btn-danger btn-sm row m-1 justify-content-center" value="<?php echo $movies['movie-id'];?>">Delete</a>
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

<!-- EDIT Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="editModal">EDIT MOVIE</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="functions.php" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="movieTitle" class="form-label">Title</label>
                                        <input type="text" class="form-control" name="movieTitle">
                                    </div>
                                    <div class="mb-3">
                                        <label for="movieStar" class="form-label">Star Rating</label>
                                        <input type="text" class="form-control" name="movieStar">
                                    </div>
                                    <div class="mb-3">
                                        <label for="movieDuration" class="form-label">Duration</label>
                                        <input type="text" class="form-control" name="movieDuration">
                                    </div>
                                    <div class="mb-3">
                                        <label for="movieYear" class="form-label">Year</label>
                                        <input type="number" class="form-control" min="1900" max="2099" step="1" name="movieYear" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="movieRate" class="form-label">Movie Ratings</label>
                                        <input type="text" class="form-control" name="movieRate">
                                    </div>
                                    <div class="mb-3">
                                        <label for="movieBanner" class="form-label">Movie Banner</label>
                                        <input type="file" class="form-control" name="movieBanner">
                                    </div>
                                    <div class="mb-3">
                                        <label for="moviePoster" class="form-label">Movie Poster</label>
                                        <input type="file" class="form-control" name="moviePoster">
                                    </div>
                                    <div class="mb-3">
                                        <label for="movieDesc" class="form-label">Movie Descriptions</label>
                                        <textarea class="form-control" name="movieDesc" rows="3"></textarea>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="submit" value="edit">Edit</button>
                            </div>   
                        </form>
                            </div>
                        </div>
                        </div>
<!-- End EDIT Modal -->


<!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <script>
        $(document).ready(function(){
            $('.editBtn').on('click', function(){
                $('#editModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function(){
                    return $(this).text();
                }).get();

                console.log(data);

            
            });
        });
    </script>


<!-- End Script-->
</body>
</html>