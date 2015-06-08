<?php include 'filter.php';?>

<?php

if (loggedIn()){
?>

    <html>

    <head>

        <title>Home</title>

    </head>
    <body>

    <h1>HOME</h1>

    Welcome back, <?php echo $_SESSION['username'];?> <br/>

    View your <a href="im_feed.php">IMs</a> <br/>

    <div id="statusdiv">

        <form action="upload.php" method="post" enctype="multipart/form-data">
            <label>Status</label>
            <textarea name="statustext" autofocus="autofocus" rows="5" cols="25" placeholder="What do you want to brag about?"></textarea>
            <br/>
            <label>Upload photo</label>
            <input type="file" name="fileToUpload[]" id="fileToUpload" multiple="multiple"/>
            <br/>
            <input type="submit" value="Post!">
        </form>

    </div>

    <?php

    $servername = "localhost";
    $username = "root";
    $password = "moaaz@dell";
    $dbname = "project";
    // Create connection

    $link = mysqli_connect($servername, $username, $password, $dbname) or die('Could not connect: ' . mysqli_connect_error());

    $sql = "SELECT * FROM status_upload join user on status_upload.userID = user.ID;";
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

    <br/>
	<h1><a href="logout.php">Log Out</a></h1>
    </body>
    </html>

<?php } else { header("location:index.html"); } ?>

