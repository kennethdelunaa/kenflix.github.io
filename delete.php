<?php 
    include "connection.php";

    $userid = $_POST['userid'];

    $sql = "SELECT * FROM `movie` WHERE `movie-id` =". $userid;
    $result = mysqli_query($conn, $sql);
    while( $row = mysqli_fetch_array($result) ){
        ?>
       <form action="functions.php" method="POST" enctype="multipart/form-data">

            <div class="mb-3">
                <input hidden type="text" class="form-control" name="movieId" id="movieId" value="<?php echo $row['movie-id'];?>">
            </div>

            <div class="mb-5">
                <h5 style="font-family: 'Roboto', sans-serif;">Are you sure to delete this movie?</h5>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary fw-bold" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary fw-bold" name="submit" value="del">Proceed</button>
            </div>
         
            <?php 
    }
    ?> </form>   