<?php include 'filter.php'; ?>
<?php include 'functions.php'; ?>

<?php

if (loggedIn()) {

    ?>

    <html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>News Feed - The Video Game Network</title>
        <!--Name subject to change :P -->

        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css' />

        <!-- Styles -->
        <link rel="stylesheet" href="font-awesome-4.2.0/css/font-awesome.css" type="text/css" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <!-- Style -->
        <!--<link rel="stylesheet" href="css/responsive.css" type="text/css" />--><!-- Uncomment for Responsive. Don't like it though -->

        <!-- Script -->
        <script type="text/javascript" src="js/jquery-1.11.1.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/modernizr.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/enscroll.js"></script>
        <script type="text/javascript" src="js/grid-filter.js"></script>
        <script type="text/javascript" src="js/html5lightbox.js"></script>

        <style type="text/css">
            input[type="file"] {
                display: none;
            }
        </style>

    </head>

    <body>

    <header class="header">
        <div class="logo"> <a href="dashboard.html" title=""><img src="images/logo2.png" alt="The Video Game Social Network Logo" /></a> </div>
        <form class="search">
            <input type="text" placeholder="What are you looking for?"  />
            <button type="button"><i class="fa fa-search"></i></button>
        </form>
        <div class="custom-dropdowns">

            <!----------------- Messages --------------->
            <div class="message-list dropdown"> <a title=""><span class="blue">4</span><i class="fa fa-envelope-o"></i></a>
                <div class="message drop-list"> <span>You have 4 New Messages</span>
                    <ul>
                        <li> <a href="#" title=""><span><img src="images/resource/sender1.jpg" alt="" /></span><i>Sohaib Ahmed</i>I am a noob
                                <h6>2 min ago..</h6>
                                <p class="status blue">New</p>
                            </a> </li>
                        <li> <a href="#" title=""><span><img src="images/resource/sender2.jpg" alt="" /></span><i>Ammar ul Mulk</i>Wanna join? We're playing.
                                <h6>2 min ago..</h6>
                                <p class="status red">Unsent</p>
                            </a> </li>
                        <li> <a href="#" title=""><span><img src="images/resource/sender3.jpg" alt="" /></span><i>Umad ul Hassan</i>Game?
                                <h6>2 min ago..</h6>
                                <p class="status green">Reply</p>
                            </a> </li>
                        <li> <a href="#" title=""><span><img src="images/resource/sender4.jpg" alt="" /></span><i>Abdul Qadir</i>3k scrub
                                <h6>2 min ago..</h6>
                                <p class="status">New</p>
                            </a> </li>
                    </ul>
                    <a href="inbox.html" title="">See All Messages</a> </div>
            </div>
            <!-- Message List -->
            <div class="notification-list dropdown"> <a title=""><span class="green">3</span><i class="fa fa-bell-o"></i></a>
                <div class="notification drop-list"> <span>You have 3 New Notifications</span>
                    <ul>
                        <li> <a href="#" title=""><span><i class="fa fa-bug red"></i></span><strong>Moaaz Ahmad</strong> commented on your post.
                                <h6>2 min ago..</h6>
                            </a> </li>
                        <li> <a href="#" title=""><span><img src="images/resource/sender2.jpg" alt="" /></span><strong>Sohaib Ahmad</strong> thumbed up your brag!
                                <h6>4 min ago..</h6>
                                <p class="status red">Urgent</p>
                            </a> </li>
                        <li> <a href="#" title=""><span><i class="fa fa-bullhorn green"></i></span><strong>Umad ul Hassan</strong> thumbed up your achievement
                                <h6>7 min ago..</h6>
                            </a> </li>
                    </ul>
                    <a href="#" title="">See All Notifications</a> </div>
            </div>
            <!-- Notification List -->

        </div>

        <?php

        $pic = getUserProfilePic($_SESSION['username']);

        echo "<div class=\"dropdown profile\"> <a title=\"\"> <img src=\"ProfilePics/" .$pic .  "\" alt=\"\" />" . $_SESSION['username']. "<i class=\"caret\"></i> </a>" ?>
        <!--            <div class="dropdown profile"> <a title=""> <img src="ProfilePics/Papers 06.jpg"  alt="" />--><?php //echo $_SESSION['username'] ?><!--<i class="caret"></i> </a>-->
        <div class="profile drop-list">
            <ul>
                <li><a href="#" title=""><i class="fa fa-edit"></i> New post</a></li>
                <li><a href="#" title=""><i class="fa fa-wrench"></i> Settings</a></li>
                <li><a href="userprofile.php" title=""><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="logout.php" title=""><i class="fa fa-info"></i> Log Out</a></li>
            </ul>
        </div>
        <!-- Profile DropDown -->

        </div>
    </header>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "moaaz@dell";
    $dbname = "project";
// Create connection

    $link = mysqli_connect($servername, $username, $password, $dbname) or die('Could not connect: ' . mysqli_connect_error());

    $sql = "SELECT * FROM status_upload join user on user.id=status_upload.userid WHERE user.username=\"" . $_SESSION["username"] . "\"";
    $result = mysqli_query($link, $sql);
//$photos = null;

    if (!$result) {
        die(mysqli_error($link));
    }

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

            // display profile pic

            $setSize = "style=\"width:100px;height:100px;\"";

            $profilePictureName = $row["profile_pic"];

            if ($row["Photo"] === null) {

                echo "<li>
                                                    <div class=\"timeline\">
                                                        <div class=\"user-timeline\"> <span><img src=\"ProfilePics/" . $profilePictureName . "\" alt=\"\" /></span> </div>
                                                        <div class=\"timeline-detail\">
                                                            <div class=\"timeline-head\">
                                                                <h3>" . $row["Username"] . "<span>" . $row["Upload_DateTime"] . "</span></h3>
                                                            </div>
                                                            <div class=\"timeline-content\">
                                                                <p>" . $row["Text"] . "</p>
                                                                <div data-toggle=\"buttons\" class=\"btn-group btn-group-sm\">
                                                                    <label class=\"btn btn-default\">
                                                                        <input type=\"radio\"  name=\"options\" />
                                                                        <i class=\"fa fa-thumbs-o-up\"></i> Thumbs Up! </label>
                                                                </div>
                                                                <form class=\"post-reply\">
                                                                    <textarea placeholder=\"Write your comment\"></textarea>

                                                                    <center><a href=\"#\" title=\"\" class=\"c-btn mini blue\" style=\"margin:0 auto;\"><i class=\"fa fa-comments-o\"></i> Post Comment</a></center>
                                                        </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>";
            } /*echo "<img src=\"ProfilePics\\" . $profilePictureName . "\"" . $setSize . "\\>";
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

        echo "<hr>";*/

            else {

                echo " <li>
                                                    <div class=\"timeline\">
                                                        <div class=\"user-timeline\"> <span><img src=\"ProfilePics/" . $profilePictureName . "\" alt=\"\" /></span> </div>
                                                        <div class=\"timeline-detail\">
                                                            <div class=\"timeline-head\">
                                                                <h3>" . $row["Username"] . "<span>" . $row["Upload_DateTime"] . "</span></h3>
                                                            </div>
                                                            <div class=\"timeline-content\">
                                                                <p>" . $row["Text"] . "</p>
                                                                <div class=\"timeline-gallery\">
                                                                    <ul>";
                // echo photos.

                $token = $row["Photo"];

                $token = ltrim($token, ' '); // THIS IS A HACK!!! TO REMOVE WHITESPACE IN THE BEGINNING IN DB PHOTOS

                $token = strtok($token, ",");

                while ($token !== false) {
                    //echo "\"". $token . "\"";
                    //echo "<img src=\"Photos\\" . $token . "\"" . " style=\"width:75px;height:75px;\"" ."<\\>" . " ";


                    echo "<li><a class=\"html5lightbox\" href=\"Photos/" . $token . "\"><i class=\"fa fa-arrows-alt\"></i><img src=\"Photos/" . $token . "\" width=\"70px\" height=\"70px\" style=\"width:auto;\" alt=\"\" /></a></li>";
                    $token = strtok(",");
                }


//                                                                        <li><a class=\"html5lightbox\" href=\"posts/screenshots/1.jpg\"><i class=\"fa fa-arrows-alt\"></i><img src=\"posts/screenshots/1.jpg\" width=\"70px\" height=\"70px\" style=\"width:auto;\" alt=\"\" /></a></li>
//                                                                        <li><a class=\"html5lightbox\" href=\"images/resource/view.gif\"><i class=\"fa fa-arrows-alt\"></i><img src=\"images/resource/gallery2.jpg\" alt=\"\" /></a></li>
//                                                                        <li><a class=\"html5lightbox\" href=\"images/resource/view.gif\"><i class=\"fa fa-arrows-alt\"></i><img src=\"images/resource/gallery3.jpg\" alt=\"\" /></a></li>
//                                                                        <li><a class=\"html5lightbox\" href=\"images/resource/view.gif\"><i class=\"fa fa-arrows-alt\"></i><img src=\"images/resource/gallery4.jpg\" alt=\"\" /></a></li>
                echo "</ul>
                                                                </div>
                                                                <div data-toggle=\"buttons\" class=\"btn-group btn-group-sm\">
                                                                    <label class=\"btn btn-default\">
                                                                        <input type=\"radio\"  name=\"options\" />
                                                                        <i class=\"fa fa-thumbs-o-up\"></i> Thumbs Up! </label>
                                                                </div>
                                                                <form class=\"post-reply\">
                                                                    <textarea placeholder=\"Write your comment\"></textarea>

                                                                    <center><a href=\"#\" title=\"\" class=\"c-btn mini blue\" style=\"margin:0 auto;\"><i class=\"fa fa-comments-o\"></i> Post Comment</a></center>
                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>";

            }


        }


    } else {
        echo "0 results";
    }

    $link->close();
} else {
    header("location:index.php");
}
?>

    </body>