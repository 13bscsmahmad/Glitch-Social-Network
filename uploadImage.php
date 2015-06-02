<?php


/*
 * Get all names of images and store in array
 * Upload images to server (in /Photos dir)
 * Update database with status, image path(s)
 *
 * (How to make sure that image names can be same in /Photos dir?)
 * Link image with status ID ("SELECT last_insert_id()") check https://dev.mysql.com/doc/refman/5.0/en/getting-unique-id.html
 *
 * */


// upload image and status


function uploadImage(){

    // get image names

    if(isset($_FILES['fileToUpload']) ) {

        $index=0;

        $uploads = false;
        foreach ($_FILES['fileToUpload']['tmp_name'] as $key => $tmp_name) {

            if (!empty($_FILES['fileToUpload']['tmp_name'][$key])) {

                // what to do with each image

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



}

function image_present(){

    if(isset($_FILES['fileToUpload']) ) {

        $index=0;

        $uploads = false;
        foreach ($_FILES['fileToUpload']['tmp_name'] as $key => $tmp_name) {

            if (!empty($_FILES['fileToUpload']['tmp_name'][$key])) {

                $filename = $_FILES["fileToUpload"]["name"][$index];

                //echo "file " . $filename .  " uploaded <br/>";

                $index++;
                $uploads = true;
                return true;

            }
        }
    } else {
        //echo "no file uploaded";
        return false;
    }

    if ($uploads == false){
        return false;
    }
}
?>

