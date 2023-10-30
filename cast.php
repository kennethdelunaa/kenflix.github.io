<?php 
    include ("connection.php");

    session_start();
    $mail = $_SESSION['email'];
    $movie = $_GET['m'];
    
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
    <div class="modal fade" id="addCastModal" tabindex="-1" aria-labelledby="addCastModal" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content bg-dark ">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 text-white">ADD NEW CAST</h1>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-white">
                                <form action="functions.php" method="POST" enctype="multipart/form-data">
                                    <div class="row mb-3">
                                    <div class="mb-3">
                                        <label for="castName" class="form-label">Actor Name</label>
                                        <input type="text" class="form-control" name="castName" placeholder="Enter actor name" required>
                                        <input hidden type="text" class="form-control" name="movieName" value="<?php echo $movie?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="castChar" class="form-label">Movie Character Name</label>
                                        <input type="text" class="form-control" name="castChar" placeholder="Enter movie character name" required>
                                    </div> 
                                   
                                        <div class="mb-3 col-5 flex-fill">
                                            <label for="castImage" class="form-label">Upload Actor Photo</label>
                                    <div class=" d-flex col gap-2">
                                            <div class="col-4 mb-3">
                                                <img class="preview_poster rounded" src="casts/movie-poster-preview.png" style="width: 150px; height: 200px;">
                                            </div>

                                            <div class="col-8">
                                                <div class="file-upload text-secondary">
                                                    <input type="file" class="form-control moviePoster" name="castImage" accept="casts/*" required>
                                                    <span class="fs-4 fw-2">Choose file...</span>
                                                    <span>or drag and drop file here</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                            <div class="modal-footer text-white">
                                <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="submit" value="cast-add">Submit</button>
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
                    <h4  class="fw-bold">CAST DETAILS
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-secondary float-end " data-bs-toggle="modal" data-bs-target="#addCastModal">
                        ADD NEW CAST
                        </button>
                         <!-- End Button trigger modal -->
                    </h4>
                </div>

                <div class="card-body">
                    <table class="table table-dark table-striped-columns rounded">
                        <thead>
                            <tr>
                            <th>ID</th>
                            <th>ACTOR PHOTO</th>
                            <th>ACTOR NAME</th>
                            <th>CHARACTER NAME</th>
                            <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $query = "SELECT * FROM casts WHERE `movie-name` = '$movie'";
                                $query_run = mysqli_query($conn, $query);

                                if(mysqli_num_rows($query_run) > 0){
                                    foreach($query_run as $movies){
                                         ?>
                                         <tr>
                                            <td><?= $movies['id']?></td>
                                            <td><img src="casts/<?=$movies['cast-image']?>" class="rounded" alt="Image" style="width: 100px; height: 150px;"></td>
                                            <td><?= $movies['cast-name']?></td>
                                            <td><?= $movies['cast-char']?></td>
                                            <td class="col">
                                                <form action="functions.php" class="m-2" method="POST">
                                                    <a href="" type="submit" class="btn btn-info m-1 viewBtn" value="cast-view" data-bs-toggle="modal" data-bs-target="#viewModal" data-id = '<?php echo $movies['id']?>'><i class='bx bx-show-alt icon align-middle' style='color:#ffffff; font-size:1.5rem;' ></i></a>
                                                    <a href="" type="submit" class="btn btn-success m-1 editBtn" value="cast-edit" data-bs-toggle="modal" data-bs-target="#editModal" data-id = '<?php echo $movies['id']?>'><i class='bx bxs-edit icon align-middle' style="font-size:1.5rem;"></i></a>
                                                    <a href="" type="submit" class="btn btn-danger m-1 delBtn" data-bs-toggle="modal" data-bs-target="#delModal" data-id = '<?php echo $movies['id']?>'><i class='bx bxs-trash-alt icon align-middle' style="font-size:1.5rem;"></i></a>
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
        <div class="modal-dialog">
            <div class="modal-content bg-dark">
                <div class="modal-header text-white">
                    <h1 class="modal-title fs-5 text-white" id="viewModal">CAST DETAILS</h1>
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
        <div class="modal-dialog" >
            <div class="modal-content bg-dark ">
                <div class="modal-header text-white">
                    <h1 class="modal-title fs-5 text-white">EDIT CAST DETAILS</h1>
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
                    <h1 class="modal-title fs-5 text-white">DELETE CAST</h1>
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

<!-- VIEW MOVIE -->
    <script>
        $(document).ready(function(){
            $('.viewBtn').click(function(){
                var userid = $(this).data('id');
                $.ajax({
                    url: 'cast-view.php',
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
<!-- END VIEW MOVIE -->

<!-- EDIT MOVIE -->
    <script>
        $(document).ready(function(){

            $('.editBtn').click(function(){
                var userid = $(this).data('id');
                $.ajax({
                    url: 'cast-edit.php',
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
            var userid = $(this).data('id');
            $.ajax({
                url: 'cast-delete.php',
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