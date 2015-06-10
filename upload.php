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

    $photoNames = array();

    if (image_present()){
        //uploadImage();

        extract($_POST);
        $error=array();
        $extension=array("jpeg","jpg","png","gif");
        foreach($_FILES["fileToUpload"]["tmp_name"] as $key=>$tmp_name)
        {
            $file_name=$_FILES["fileToUpload"]["name"][$key];

            //$photoNames.push($file_name.","); // storing photo name in array

            array_push($photoNames,$file_name);


            $file_tmp=$_FILES["fileToUpload"]["tmp_name"][$key];
            $ext=pathinfo($file_name,PATHINFO_EXTENSION);
            if(in_array($ext,$extension))
            {
                if(!file_exists("Photos/".$file_name))
                {
                    move_uploaded_file($file_tmp=$_FILES["fileToUpload"]["tmp_name"][$key],"Photos/" .$file_name);
                }
                else
                {
                    $filename=basename($file_name,$ext);
                    $newFileName=$filename.time().".".$ext;
                    move_uploaded_file($file_tmp=$_FILES["fileToUpload"]["tmp_name"][$key],"Photos/" . $newFileName);
                }
            }
            else
            {
                array_push($error,"$file_name, ");
            }
        }


        // get status

        $status = addslashes($_POST["statustext"]);
        if ($status == ""){
            $status = "Uploaded photos.";
        }

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

        $photo_names_in_string = null;

        for ($i = 0; $i < count($photoNames); $i++){ // add ',' after all photo names, except the last one.

            if ($i  < count($photoNames) - 1){
                $photo_names_in_string = $photo_names_in_string . $photoNames[$i] . ",";
            } else {
                $photo_names_in_string = $photo_names_in_string . $photoNames[$i];
            }

        }



        $sqlInsert = "INSERT INTO status_upload (UserID, Text, Photo) VALUES (\"". $ID . "\",". "\"" . $status . "\",\" " . $photo_names_in_string . "\");"; // base query

        $bN = null;
        $pN = null;

        if(isset($_POST["bragName"])){

            $bN = addslashes($_POST["bragName"]);
            $sqlInsert = "INSERT INTO status_upload (UserID, Text, Photo, Brag) VALUES (\"". $ID . "\",". "\"" . $status . "\",\" " . $photo_names_in_string . "\",\"" . $bN . "\");";

        }

        if(isset($_POST["playName"])){

            $pN = addslashed($_POST["playName"]);
            $sqlInsert = "INSERT INTO status_upload (UserID, Text, Photo, NowPlaying) VALUES (\"". $ID . "\",". "\"" . $status . "\",\" " . $photo_names_in_string . "\",\"" . $pN . "\");";

        }

        if (isset($_POST["playName"]) && isset($_POST["bragName"])){

            $bN = addslashes($_POST["bragName"]);
            $pN = addslashes($_POST["playName"]);
            $sqlInsert = "INSERT INTO status_upload (UserID, Text, Photo, Brag, NowPlaying) VALUES (\"". $ID . "\",". "\"" . $status . "\",\" " . $photo_names_in_string . "\",\"" . $bN . "\",\"" . $pN. "\");";
        }


        if ($link->query($sqlInsert) === TRUE){


            echo "Status uploaded. Refreshing in a moment...";
            echo "<script>setTimeout(\"location.href = 'home.php';\",1500);</script>";

        } else {
            echo $link->error;
        }

        $link->close();
        return;



    }

    // if status uploaded


    // fot status ONLY

    if (text_present() && !image_present() || !text_present() && !image_present()){

        // get status

        $bN = null;
        $pN = null;


        $status = $_POST["statustext"];
        $status = addslashes($status);






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

        $sqlInsert = "INSERT INTO status_upload (UserID, Text) VALUES (\"". $ID . "\",". "\"" . $status . "\");"; // base query

        if(isset($_POST["bragName"])){

            $bN = addslashes($_POST["bragName"]);
            $sqlInsert = "INSERT INTO status_upload (UserID, Text, Brag) VALUES (\"". $ID . "\",". "\"" . $status . "\",\"" . $bN ."\");";

        }

        if(isset($_POST["playName"])){

            $pN = addslashes($_POST["playName"]);
            $sqlInsert = "INSERT INTO status_upload (UserID, Text, NowPlaying) VALUES (\"". $ID . "\",". "\"" . $status . "\",\"" . $pN ."\");";

        }

        if (isset($_POST["playName"]) && isset($_POST["bragName"])){

            $bN = addslashes($_POST["bragName"]);
            $pN = addslashes($_POST["playName"]);
            $sqlInsert = "INSERT INTO status_upload (UserID, Text, Brag, NowPlaying) VALUES (\"". $ID . "\",". "\"" . $status . "\",\"" . $bN ."\",\"" . $pN . "\");";
        }



        if ($link->query($sqlInsert) === TRUE){


            echo "Status uploaded. Refreshing in a moment...";
            echo "<script>setTimeout(\"location.href = 'home.php';\",1500);</script>";

        } else {
            echo $link->error;
        }

        $link->close();
        return;

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