<?php include 'filter.php'; ?>

<?php

if (loggedIn()) {

    if(isset($_FILES['fileToUpload']) ) {

        $index=0;

        $uploads = false;
        foreach ($_FILES['fileToUpload']['tmp_name'] as $key => $tmp_name) {

            if (!empty($_FILES['fileToUpload']['tmp_name'][$key])) {

                $filename = $_FILES["fileToUpload"]["name"][$index];

                echo "file " . $filename .  " uploaded <br/>";
                //echo $filename. "<br/>";
                $index++;
                $uploads = true;

            }
        }
    } else {
        echo "no file uploaded";
        }

    if ($uploads == false){
        echo "no file uploaded";
    }


} else {
    header("location:index.html"); //to redirect back to "index.php" after logging out
}

?>