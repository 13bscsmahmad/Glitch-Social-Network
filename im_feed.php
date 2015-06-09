<?php include 'filter.php';?>

<?php

if (loggedIn()){
    ?>

    <html>

    <head>

        <title>IM</title>

    </head>
    <body>

    <h1>IM</h1>

    Welcome back, <?php echo $_SESSION['username'];?> <br/>

    Return to your <a href="home.php">home</a> page. <br/>



    <?php

    $servername = "localhost";
    $username = "root";
    $password = "moaaz@dell";
    $dbname = "project";
    // Create connection

    $link = mysqli_connect($servername, $username, $password, $dbname) or die('Could not connect: ' . mysqli_connect_error());

    $sql = "SELECT * FROM im join user on im.from_id = user.ID;";
    $result = mysqli_query($link, $sql);
    //$photos = null;

    if (!$result) {
        die(mysqli_error($link));
    }

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {

            // display profile pic

            $setSize = "style=\"width:100px;height:100px;\"";

            $profilePictureName = $row["profile_pic"];
            echo "<img src=\"ProfilePics\\" . $profilePictureName . "\"" . $setSize . "\\>";
            echo "<br\\>";
            echo "<br\\>";
            echo "<br\\>";
            echo "<br\\>";
            echo "<br\\>";

            // display user status

            $display = "Username: " . $row["Username"]. "<br/>" . "Status: " . $row["Text"]. " <br/>" . $row["Photo"] . "<br/>";

            echo $display;





            $token = $row["Photo"];

            $token= ltrim ($token, ' '); // THIS IS A HACK!!! TO REMOVE WHITESPACE IN THE BEGINNING IN DB PHOTOS

            $token = strtok($token, ",");

            while ($token !== false)
            {
                //echo "\"". $token . "\"";
                echo "<img src=\"Photos\\" . $token . "\"" . " style=\"width:75px;height:75px;\"" ."<\\>" . " ";
                $token = strtok(",");
            }

            echo "<hr>";


        }


    } else {
        echo "0 results";
    }

    $link->close();

    ?>


    <div id="imBox" name="imBox">

        <form action="upload_im.php" method="post" enctype="multipart/form-data">
            <label>Message</label>
            <textarea name="message_im" autofocus="autofocus" rows="5" cols="25" placeholder="Your message goes here"></textarea>
            <br/>
            <label>Upload photo</label>
            <input type="file" name="fileToUpload[]" id="fileToUpload" multiple="multiple"/>
            <br/>
            <input type="submit" value="Send!">
        </form>

    </div>
    <br/>
    <h1><a href="logout.php">Log Out</a></h1>
    </body>
    </html>

<?php } else { header("location:index.html"); } ?>

