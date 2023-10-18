<?php 
    include ("connection.php");
    session_start();


    if(isset($_POST["submit"])){
        if($_POST["submit"] == "add"){
            add();
        }
        else if($_POST["submit"] == "edit"){
            edit();
        }
        else{
            delete();
        }
    }

    function add(){
    global $conn;

        $title = $_POST['movieTitle'];
        $name = preg_replace('/[\s.,-]+/', '-', strtolower($title));
        $star = $_POST['movieStar'];
        $dur = $_POST['movieDuration'];
        $year = $_POST['movieYear'];
        $rate = $_POST['movieRate'];

        $bannFileName = $_FILES['movieBanner']['name'];
        $bannTempName = $_FILES['movieBanner']['tmp_name'];
        $newBannName = uniqid() . "-" . $bannFileName;
        move_uploaded_file($bannTempName, 'banner/' . $newBannName);

        $postFileName = $_FILES['moviePoster']['name'];
        $postTempName = $_FILES['moviePoster']['tmp_name'];
        $newPostName = uniqid() . "-" . $postFileName;
        move_uploaded_file($postTempName, 'poster/' . $newPostName);

        $desc = $_POST['movieDesc'];

        $query = "INSERT INTO movie VALUES ('', '$name', '$title', '$star', '$dur', '$year', '$rate', '$newBannName', '$newPostName', '$desc')";
        mysqli_query($conn, $query);

        echo"
            <script> alert('Added Successfully'); document.location.href = 'testt.php'; </script>
        ";
    }
    function edit(){
        global $conn;

        $id = $_GET['id'];
        $title = $_POST['movieTitle'];
        $name = preg_replace('/[\s.,-]+/', '-', strtolower($title));
        $star = $_POST['movieStar'];
        $dur = $_POST['movieDuration'];
        $year = $_POST['movieYear'];
        $rate = $_POST['movieRate'];

        if($_FILES['movieBanner']['error'] != 4 && $_FILES['moviePoster']['name'] != 4){
            $bannFileName = $_FILES['movieBanner']['name'];
            $bannTempName = $_FILES['movieBanner']['tmp_name'];
            $newBannName = uniqid() . "-" . $bannFileName;
            move_uploaded_file($bannTempName, 'banner/' . $newBannName);

            $bannerQuery = "UPDATE movie SET movie-banner '$newBannName' WHERE id = $id";
            mysqli_query($conn, $bannerQuery);

            $postFileName = $_FILES['moviePoster']['name'];
            $postTempName = $_FILES['moviePoster']['tmp_name'];
            $newPostName = uniqid() . "-" . $postFileName;
            move_uploaded_file($postTempName, 'poster/' . $newPostName);

            $posterQuery = "UPDATE movie SET movie-img '$newPostName' WHERE id = $id";
            mysqli_query($conn, $posterQuery);

        }

        $query = "UPDATE movie SET movie-title = '$title', movie-name = '$name', movie-star = '$star', movie-dur = '$dur', movie-year = '$year', movie-rate = '$rate', movie-desc = '$desc' WHERE movie-id = '$id'";
        mysqli_query($conn, $query);
        echo "
            <script> alert('Movie Edited Successfully!'); document.location.href = 'testt.php'; </script>
        ";
        
    }
    function delete(){
        global $conn;


    }
?>

