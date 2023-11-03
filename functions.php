<?php 
    include ("connection.php");


    if(isset($_POST["submit"])){
        if($_POST["submit"] == "add"){
            add();
        }
        else if($_POST["submit"] == "edit"){
            edit();
        }
        else if($_POST["submit"] == "del"){
            del();
        }
        else if($_POST['submit'] == "cast-add"){
            cast_add();
        }
        else if($_POST['submit'] == "cast-edit"){
            cast_edit();
        }
        else if($_POST['submit'] == "cast-delete"){
            cast_del();
        }
    }

    function add(){
        global $conn;
        
        if(!empty($_POST['movieTitle']) && !empty($_POST['movieStar']) && !empty($_POST['movieDuration']) && !empty($_POST['movieYear']) && !empty($_POST['movieRate']) && !empty($_POST['movieDesc']) && $_FILES['moviePoster']['size'] != 0 && $_FILES['movieBanner']['size'] != 0){

            $title =  mysqli_real_escape_string($conn, $_POST['movieTitle']);
            $name = preg_replace('/[\s.,:!?]+/', '-', strtolower($title));
            $findAndReplace = array("&" => "and");
            $newName = str_replace(array_keys($findAndReplace), array_values($findAndReplace), $name);
            $star = $_POST['movieStar'];
            $dur = $_POST['movieDuration'];
            $year = $_POST['movieYear'];
            $rate = $_POST['movieRate'];
            //mysqli_real_escape_string() allows you to store punctuations(')
            $desc = mysqli_real_escape_string($conn, $_POST["movieDesc"]);
            $type = $_POST['movieType'];

            $bannFileName = $_FILES['movieBanner']['name'];
            $bannTempName = $_FILES['movieBanner']['tmp_name'];
            $newBannName = uniqid() . "-" . $bannFileName;
            move_uploaded_file($bannTempName, 'banner/' . $newBannName);

            $postFileName = $_FILES['moviePoster']['name'];
            $postTempName = $_FILES['moviePoster']['tmp_name'];
            $newPostName = uniqid() . "-" . $postFileName;
            move_uploaded_file($postTempName, 'poster/' . $newPostName);

            

            $query = "INSERT INTO movie VALUES ('', '$newName', '$title', '$star', '$dur', '$year', '$rate', '$newBannName', '$newPostName', '$desc', '$type')";
            mysqli_query($conn, $query);

            echo"
                <script> alert('Added Successfully'); document.location.href = 'testt.php'; </script>
            ";
        }
        else{
            echo"
                <script> alert('Please fill all the required fields'); document.location.href = 'testt.php#addMovieModal'; </script>
            ";
        }
    }
    function edit(){
        global $conn;

        if(!empty($_POST['updatedMovieTitle']) && !empty($_POST['updatedMovieStar']) && !empty($_POST['updatedMovieDuration']) && !empty($_POST['updatedMovieYear']) && !empty($_POST['updatedMovieRate']) && !empty($_POST['updatedMovieDesc'])){
            
            $id = $_POST['updatedMovieId'];
            $title = mysqli_real_escape_string($conn, $_POST['updatedMovieTitle']);
            $name = preg_replace('/[\s.,:!?]+/', '-', strtolower($title));
            $findAndReplace = array("&" => "and");
            $newName = str_replace(array_keys($findAndReplace), array_values($findAndReplace), $name);
            $star = $_POST['updatedMovieStar'];
            $dur = $_POST['updatedMovieDuration'];
            $year = $_POST['updatedMovieYear'];
            $rate = $_POST['updatedMovieRate'];
            //mysqli_real_escape_string() allows you to store punctuations(')
            $desc = mysqli_real_escape_string($conn, $_POST["updatedMovieDesc"]);
            $bann = $_POST['movieBanner'];
            $post = $_POST['moviePoster'];
            


            //BANNER UPDATING
            $bannFileName = $_FILES['updatedMovieBanner']['name'];
                $bannTempName = $_FILES['updatedMovieBanner']['tmp_name'];
            
            if($bannFileName != "" ){
                 
                    if(file_exists("banner/".$_FILES['updatedMovieBanner']['name'])){
                            echo "<script> alert('Banner already exist!'); document.location.href = 'testt.php'; </script>";
                    }
                    else{
                        $updatedBanner = uniqid() . "-" . $bannFileName;
                        move_uploaded_file($bannTempName, 'banner/' . $updatedBanner);
                    }
            }
            else{
                $updatedBanner = $bann;
            }

            //POSTER UPDATING
            $postFileName = $_FILES['updatedMoviePoster']['name'];
                $postTempName = $_FILES['updatedMoviePoster']['tmp_name'];

            if($postFileName != "" ){

                    if(file_exists("poster/".$_FILES['updatedMoviePoster']['name'])){
                            echo "<script> alert('Banner already exist!'); document.location.href = 'testt.php'; </script>";
                    }
                    else{
                        $updatedPoster = uniqid() . "-" . $postFileName;
                        move_uploaded_file($postTempName, 'poster/' . $updatedPoster);
                    }
            }
            else{
                $updatedPoster = $post;
            }

            $query = "UPDATE `movie` SET `movie-title` = '$title', `movie-name` = '$newName', `movie-star` = '$star', `movie-dur` = '$dur', `movie-year` = '$year', `movie-rate` = '$rate', `movie-desc` = '$desc', `movie-img` = '$updatedPoster' , `movie-banner` = '$updatedBanner' WHERE `movie-id` = '$id'";
            mysqli_query($conn, $query);
            echo "
                <script> alert('Updated Successfully!'); document.location.href = 'testt.php'; </script>
            ";
        }
        else{
            echo"
                <script> alert('Please fill all the required fields'); document.location.href = 'testt.php'; </script>
            ";
        }
    }
    function del(){
        global $conn;

        if(isset($_POST['movieId'])){
            $id = $_POST['movieId'];
    
            $sql = "DELETE FROM `movie` WHERE `movie-id` = $id";
            $result = mysqli_query($conn, $sql);
    
            //for resetting id number
            //mysqli_query($conn, "ALTER TABLE `movie` AUTO_INCREMENT = 0");
            echo "
                <script> alert('Movie Deleted Successfully!'); document.location.href = 'testt.php'; </script>
            ";
        }
    }
    function cast_add(){
        global $conn;

        if(!empty($_POST['castName']) && !empty($_POST['castChar']) && !empty($_POST['movieName']) && $_FILES['castImage']['size'] != 0){
            $name = mysqli_real_escape_string($conn, $_POST['castName']);
            $char = mysqli_real_escape_string($conn,$_POST['castChar']);
            $movie_name = $_POST['movieName'];
            
            $castFileName = $_FILES['castImage']['name'];
            $castTempName = $_FILES['castImage']['tmp_name'];
            $newCastName = uniqid() . "-" . $castFileName;
            move_uploaded_file($castTempName, 'casts/' . $newCastName);

            $query = "INSERT INTO casts VALUES ('', '$movie_name','$name', '$newCastName', '$char')";
            mysqli_query($conn, $query);

            echo"
                <script> alert(' Cast added successfully'); document.location.href = 'cast.php?m=$movie_name'; </script>
            ";
        }
        else{
            echo"
                <script> alert('Please fill all the required fields'); document.location.href = 'cast.php?m=$movie_name'; </script>
            ";
        }

    }
    function cast_edit(){
        global $conn;

        if(!empty($_POST['castName']) && !empty($_POST['castChar'])){
            $id = $_POST['id'];
            $name = mysqli_real_escape_string($conn,$_POST['castName']);
            $char = mysqli_real_escape_string($conn,$_POST['castChar']);
            $movie_name = $_POST['movieName'];
            $oldCastImg = $_POST['castImage'];

            //POSTER UPDATING
            $castFileName = $_FILES['updatedCastImage']['name'];
                $castTempName = $_FILES['updatedCastImage']['tmp_name'];

            if($castFileName != "" ){

                    if(file_exists("casts/".$_FILES['updatedCastImage']['name'])){
                            echo "<script> alert('Cast photo already exist!'); document.location.href = 'cast.php?m=$movie_name'; </script>";
                    }
                    else{
                        $updatedCastImg = uniqid() . "-" . $castFileName;
                        move_uploaded_file($castTempName, 'casts/' . $updatedCastImg);
                    }
            }
            else{
                $updatedCastImg = $oldCastImg;
            }

            $query = "UPDATE `casts` SET `cast-name` = '$name', `cast-char` = '$char', `cast-image` = '$updatedCastImg' WHERE `id` = '$id'";
            mysqli_query($conn, $query);
            echo "
                <script> alert('Cast details updated successfully!'); document.location.href = 'cast.php?m=$movie_name'; </script>
            ";
        }
        else{
            echo"
                <script> alert('Please fill all the required fields'); document.location.href = 'cast.php?m=$movie_name'; </script>
            ";
        }
    }
    function cast_del(){
        global $conn;

        if(isset($_POST['id'])){
            $id = $_POST['id'];
            $movie_name = $_POST['movieName'];

            $sql = "DELETE FROM `casts` WHERE `id` = $id";
            $result = mysqli_query($conn, $sql);
    
            //for resetting id
            //mysqli_query($conn, "ALTER TABLE `casts` AUTO_INCREMENT = 0");
            echo "
                <script> alert('Cast deleted successfully!'); document.location.href = 'cast.php?m=$movie_name'; </script>
            ";
        }
    }
?>

