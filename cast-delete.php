<?php 
    include "connection.php";

    $userid = $_POST['userid'];

    $sql = "SELECT * FROM `casts` WHERE `id` =". $userid;
    $result = mysqli_query($conn, $sql);
    while( $row = mysqli_fetch_array($result) ){
        ?>
       <form action="functions.php" method="POST" enctype="multipart/form-data">

            <div class="mb-3">
                <input hidden type="text" class="form-control" name="id" id="id" value="<?php echo $row['id'];?>">
                <input hidden type="text" class="form-control" name="movieName" value="<?php echo $row['movie-name']?>">
            </div>

            <div class="mb-5">
                <h5 style="font-family: 'Roboto', sans-serif;">Are you sure to delete this cast?</h5>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary fw-bold" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary fw-bold" name="submit" value="cast-delete">Proceed</button>
            </div>
         
            <?php 
    }
    ?> </form>   