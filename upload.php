<?php include 'filter.php'; ?>
<?php include 'uploadImage.php'; ?>

<?php

/*
 *
 * Need to implement functions for:
 *      if only status uploaded
 *      if only image uploaded (includes only image, or both image and status)
 *
 * */


if (loggedIn()) {

    // if image uploaded

    /*if (image_present()){
        uploadImage();
    }*/

    // if status uploaded


    // fot status ONLY

    if (text_present() && !image_present()){

        // get status

        $status = $_POST["statustext"];

        // open connection to database

        $servername = "localhost";
        $username = "root";
        $password = "moaaz@dell";
        $dbname = "project";
        // Create connection

        $link = mysqli_connect($servername, $username, $password, $dbname) or die('Could not connect: ' . mysqli_connect_error());

        $sql = "SELECT ID FROM user where Username=\"" . $_SESSION["username"] . "\";";
        $result = mysqli_query($link, $sql);

        if (!$result) {
            die(mysqli_error($link));
        }

        $row = $result->fetch_assoc();
        $ID = $row["ID"];

        $sqlInsert = "INSERT INTO status_upload (UserID, Text) VALUES (\"". $ID . "\",". "\"" . $status . "\");";

        if ($link->query($sqlInsert) === TRUE){


            echo "Status uploaded. Refreshing in a moment...";
            echo "<script>setTimeout(\"location.href = 'home.php';\",1500);</script>";

        } else {
            echo $link->error;
        }

        $link->close();

    }






} else {
    header("location:index.html"); //to redirect back to "index.php" after logging out
}

function text_present(){
    if ($_POST["statustext"] == ""){
        return false;
    } else {
        return true;
    }
}

function get_status(){
    if (text_present()){
        return $_POST["statustext"];
    }
}




?>