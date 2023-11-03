<?php 
    include ("connection.php");

    $userid = $_POST['userid'];

    $sql = "SELECT * FROM `movie` WHERE `movie-id` =". $userid;
    $result = mysqli_query($conn, $sql);
    while( $row = mysqli_fetch_array($result) ){
        ?>
       <form action="functions.php" method="POST" enctype="multipart/form-data">

            <!-- TITLE -->
            <div class="mb-3">
                <label for="updatedMovieTitle" class="form-label">Title</label>
                <input type="text" class="form-control" name="updatedMovieTitle" id="updatedMovieTitle" value="<?php echo $row['movie-title'];?>">
                <input hidden type="text" class="form-control" name="updatedMovieId" id="updatedMovieId" value="<?php echo $row['movie-id'];?>">
            </div>

            <!-- STAR RATING -->
            <div class="mb-3">
                <label for="updatedMovieStar" class="form-label">Star Rating</label>
                <input type="text" class="form-control" name="updatedMovieStar" id="updatedMovieStar" value="<?php echo $row['movie-star'];?>">
            </div>

            <!-- DURATION -->
            <div class="mb-3">
                <label for="updatedMovieDuration" class="form-label">Duration</label>
                <input type="text" class="form-control" name="updatedMovieDuration" id="updatedMovieDuration" value="<?php echo $row['movie-dur'];?>">
            </div>

            <!-- YEAR -->
            <div class="mb-3">
                <label for="updatedMovieYear" class="form-label">Year</label>
                <input type="number" class="form-control" min="1900" max="2099" step="1" name="updatedMovieYear" id="updatedMovieYear" value="<?php echo $row['movie-year'];?>">
            </div>

            <!-- RATING -->
            <div class="mb-3">
                <label for="updatedMovieRate" class="form-label">Movie Ratings</label>
                <input type="text" class="form-control" name="updatedMovieRate" id="updatedMovieRate" value="<?php echo $row['movie-rate'];?>">
            </div>
            
            <div class=" d-flex col ">
                <!-- BANNER -->
                <div class="mb-3 col-5 flex-fill">
                    <label for="movieBanner" class="form-label">Upload Movie Banner</label>
                    <div class="col-2 mb-3">
                        <img class="preview_updatedbanner rounded" src="banner/<?php echo $row['movie-banner'];?>" style="width: 350px; height: 200px;">
                    </div>
                    <div class="col-10">
                        <div class="file-upload text-secondary">
                            <input type="file" class="form-control updatedMovieBanner" name="updatedMovieBanner">
                            <input type="hidden" name="movieBanner" id="movieBanner" value="<?php echo $row['movie-banner'];?>">
                            <span class="fs-4 fw-2">Choose file...</span>
                            <span>or drag and drop file here</span>
                        </div>
                    </div>
                </div>   
                <!-- POSTER -->
                <div class="mb-3 col-5 flex-fill">
                    <label for="moviePoster" class="form-label">Upload Movie Poster</label>
                    <div class="col-2 mb-3">
                        <img class="preview_updatedposter rounded" src="poster/<?php echo $row['movie-img'];?>" style="width: 150px; height: 200px;">
                    </div>
                    <div class="col-10">
                        <div class="file-upload text-secondary">
                            <input type="file" class="form-control updatedMoviePoster" name="updatedMoviePoster">
                            <input type="hidden" name="moviePoster" id="moviePoster" value="<?php echo $row['movie-img'];?>">
                            <span class="fs-4 fw-2">Choose file...</span>
                            <span>or drag and drop file here</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- DESCRIPTION -->
            <div class="mb-5">
                <label for="updatedMovieDesc" class="form-label">Movie Descriptions</label>
                <textarea class="form-control" rows="3" id="updatedMovieDesc" name="updatedMovieDesc"><?php echo $row['movie-desc'];?></textarea>
            </div>
    
            <!-- ACTIONS -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary fw-bold" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary fw-bold" name="submit" value="edit">Save Changes</button>
            </div>

         </form> 
            <?php 
    }
    ?>   
    <script>
        $(document).ready(function(){
        //function to display image before upload
        $("input.updatedMoviePoster").change(function(){
                var file = this.files[0];
                var url =  URL.createObjectURL(file);
                $(this).closest(".col").find(".preview_updatedposter").attr("src", url);
            });
        });
    </script>

    <script>
        $(document).ready(function(){
        //function to display image before upload
        $("input.updatedMovieBanner").change(function(){
                var file = this.files[0];
                var url =  URL.createObjectURL(file);
                $(this).closest(".col").find(".preview_updatedbanner").attr("src", url);
            });
        });
    </script>
        
  