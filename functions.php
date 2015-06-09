<?php
/**
 * Created by PhpStorm.
 * User: MMA
 * Date: 06/09/2015
 * Time: 11:22 AM
 */


function getUserProfilePic($user){

    $servername = "localhost";
    $username = "root";
    $password = "moaaz@dell";
    $dbname = "project";
    // Create connection

    $link = mysqli_connect($servername, $username, $password, $dbname) or die('Could not connect: ' . mysqli_connect_error());

    $sql = "SELECT profile_pic FROM  user where username=\"" . $user ."\"";
    $result = mysqli_query($link, $sql);

    if (!$result) {
        die(mysqli_error($link));
        return;
    }

    if (mysqli_num_rows($result) > 0) {

        $row = $result->fetch_assoc();

        $photo = $row["profile_pic"];
        return $photo;

    }


}

function logout(){
    if (loggedIn()){

    }
}


?>