<?php 
    include ("connection.php");

    $userid = $_POST['userid'];

    $sql = "SELECT * FROM `casts` WHERE `id` =". $userid;
    $result = mysqli_query($conn, $sql);
    while( $row = mysqli_fetch_array($result) ){
        ?>
       <form action="functions.php" method="POST" enctype="multipart/form-data">
            <div class="row mb-3">
                <div class="mb-3">
                    <label for="castName" class="form-label">Actor Name</label>
                    <input type="text" class="form-control" name="castName" value="<?php echo $row['cast-name'];?>">
                    <input hidden type="text" class="form-control" name="movieName" value="<?php echo $row['movie-name']?>">
                    <input hidden type="text" class="form-control" name="id" value="<?php echo $row['id']?>">
                </div>

                <div class="mb-3">
                    <label for="castChar" class="form-label">Movie Character Name</label>
                    <input type="text" class="form-control" name="castChar" value="<?php echo $row['cast-char'];?>" >
                </div> 
                                   
                <div class="mb-3 col flex-fill">
                    <label for="castImage" class="form-label">Upload Actor Photo</label>
                    <div class=" d-flex col gap-2">
                        <div class="col-4 mb-3">
                            <img class="preview_castImg rounded" src="casts/<?php echo $row['cast-image'];?>" style="width: 150px; height: 200px;">
                        </div>

                        <div class="col-8">
                            <div class="file-upload text-secondary">
                                <input type="file" class="form-control updatedCastImage" name="updatedCastImage" accept="casts/*">
                                <input type="hidden" class="form-control" name="castImage" value="<?php echo $row['cast-image'];?>">
                                <span class="fs-4 fw-2">Choose file...</span>
                                <span>or drag and drop file here</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div> 
            <!-- ACTIONS -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary fw-bold" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary fw-bold" name="submit" value="cast-edit">Save Changes</button>
            </div>
         </form> 
            <?php 
    }
    ?>   
    <script>
        $(document).ready(function(){
        //function to display image before upload
        $("input.updatedCastImage").change(function(){
                var file = this.files[0];
                var url =  URL.createObjectURL(file);
                $(this).closest(".col").find(".preview_castImg").attr("src", url);
            });
        });
    </script>
        
  