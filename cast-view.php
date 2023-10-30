<?php 
    include ("connection.php");
    session_start();
    $userid = $_POST['userid'];

    $sql = "SELECT * FROM `casts` WHERE `id` =". $userid;
    $result = mysqli_query($conn, $sql);
    while( $row = mysqli_fetch_array($result) ){
        ?>
        <div class="container-movie">
            <div class="cast-image"><img src="casts/<?=$row['cast-image']?>" alt="Image" class="rounded" style="width: 150px; height: 200px;"></div>
                    <div class="cast-name"><h1><?php echo $row['cast-name'];?></h1></div>
                        <h5 class="pb-3 cast-char"><?php echo $row['cast-char'];?></h5>
            </div>         
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary font-weight-bold d-grid gap-2 col-6 mx-auto fw-bold" data-bs-dismiss="modal">Close</button>
            </div>
         
            <?php 
    }
    ?>
    