<?php include 'filter.php'; ?>
<?php include 'functions.php'; ?>

<?php

if (loggedIn()){
?>

<!doctype html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Feed - The Video Game Network</title>
    <!--Name subject to change :P -->

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'/>

    <!-- Styles -->
    <link rel="stylesheet" href="font-awesome-4.2.0/css/font-awesome.css" type="text/css"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    <!-- Style -->
    <!--<link rel="stylesheet" href="css/responsive.css" type="text/css" />-->
    <!-- Uncomment for Responsive. Don't like it though -->

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

    <script>
        //Bragging
        $(document).ready(function () {

            $("#addPhotosBtn").click(function () {
                $("#additional").html("<input type=\"file\" name=\"fileToUpload[]\" id=\"fileToUpload\" multiple=\"multiple\"/>");
            });

            $("#addBragBtn").click(function () {
                $("#additional").html("<input name=\"bragName\" type=\"text\" style=\"width:100%; border:none; border-top:1px dashed #999999;\" placeholder=\"What game are you bragging about?\" />");
            });

//Playing
            $("#addPlayingBtn").click(function () {
                $("#additional").html("<input name=\"playName\" type=\"text\" style=\"width:100%; border:none; border-top:1px dashed #999999;\" placeholder=\"What are you playing?\" />");
            });


        });

    </script>

</head>

<body>

<div class="main">
    <header class="header">
        <div class="logo"><a href="home.php" title=""><img src="images/logo2.png"
                                                           alt="The Video Game Social Network Logo"/></a></div>
        <form class="search">
            <input type="text" placeholder="What are you looking for?"/>
            <button type="button"><i class="fa fa-search"></i></button>
        </form>
        <div class="custom-dropdowns">

            <!----------------- Messages --------------->
            <div class="message-list dropdown"><a title=""><span class="blue">4</span><i
                        class="fa fa-envelope-o"></i></a>

                <div class="message drop-list"><span>You have 4 New Messages</span>
                    <ul>
                        <li><a href="#" title=""><span><img src="images/resource/sender1.jpg" alt=""/></span><i>Sohaib
                                    Ahmed</i>I am a noob
                                <h6>2 min ago..</h6>

                                <p class="status blue">New</p>
                            </a></li>
                        <li><a href="#" title=""><span><img src="images/resource/sender2.jpg" alt=""/></span><i>Ammar ul
                                    Mulk</i>Wanna join? We're playing.
                                <h6>2 min ago..</h6>

                                <p class="status red">Unsent</p>
                            </a></li>
                        <li><a href="#" title=""><span><img src="images/resource/sender3.jpg" alt=""/></span><i>Umad ul
                                    Hassan</i>Game?
                                <h6>2 min ago..</h6>

                                <p class="status green">Reply</p>
                            </a></li>
                        <li><a href="#" title=""><span><img src="images/resource/sender4.jpg" alt=""/></span><i>Abdul
                                    Qadir</i>3k scrub
                                <h6>2 min ago..</h6>

                                <p class="status">New</p>
                            </a></li>
                    </ul>
                    <a href="inbox.html" title="">See All Messages</a></div>
            </div>
            <!-- Message List -->
            <div class="notification-list dropdown"><a title=""><span class="green">3</span><i class="fa fa-bell-o"></i></a>

                <div class="notification drop-list"><span>You have 3 New Notifications</span>
                    <ul>
                        <li><a href="#" title=""><span><i class="fa fa-bug red"></i></span><strong>Moaaz Ahmad</strong>
                                commented on your post.
                                <h6>2 min ago..</h6>
                            </a></li>
                        <li><a href="#" title=""><span><img src="images/resource/sender2.jpg" alt=""/></span><strong>Sohaib
                                    Ahmad</strong> thumbed up your brag!
                                <h6>4 min ago..</h6>

                                <p class="status red">Urgent</p>
                            </a></li>
                        <li><a href="#" title=""><span><i class="fa fa-bullhorn green"></i></span><strong>Umad ul
                                    Hassan</strong> thumbed up your achievement
                                <h6>7 min ago..</h6>
                            </a></li>
                    </ul>
                    <a href="#" title="">See All Notifications</a></div>
            </div>
            <!-- Notification List -->

        </div>

        <?php

        $pic = getUserProfilePic($_SESSION['username']);

        echo "<div class=\"dropdown profile\"> <a title=\"\"> <img src=\"ProfilePics/" . $pic . "\" alt=\"\" />" . $_SESSION['username'] . "<i class=\"caret\"></i> </a>" ?>
        <!--            <div class="dropdown profile"> <a title=""> <img src="ProfilePics/Papers 06.jpg"  alt="" />-->
        <?php //echo $_SESSION['username']
        ?><!--<i class="caret"></i> </a>-->
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
<!-- Header -->
<div class="page-container menu-left">
    <aside class="sidebar">
        <div class="profile-stats">
            <div class="mini-profile"><span><img src="ProfilePics/<?php echo $pic ?>" alt=""/></span>

                <h3 id="sidebarName"><?php echo $_SESSION['username'] ?></h3>
                <a href="logout.php" title="Logout" class="logout red" data-toggle="tooltip" data-placement=
                "right"><i class="fa fa-power-off"></i></a></div>
        </div>
        <div class="menu-sec">
            <div id="menu-toogle" class="menus">
                <div class="single-menu">
                    <h2><a href="home.php" title=""><span>News Feed</span></a></h2>
                </div>
                <div class="single-menu">
                    <h2><a href="profile_gamesPlayed.php" title=""><span>Gamer Profile</span></a></h2>
                </div>
                <div class="single-menu">
                    <h2><a href="#" title=""><span>Will do this stuff later</span></a></h2>
                </div>
                <div class="single-menu">
                    <h2><a href="#" title=""><span>At least it's working</span></a></h2>
                </div>
            </div>
        </div>
        <!-- Menu Sec -->
    </aside>
    <!-- Aside Sidebar -->
    <div class="content-sec">
        <div class="container">
            <div class="title-date-range">
                <div class="row">
                    <div class="col-md-6">
                        <!--In case it's needed again
                                      <div class="main-title">

                                      </div>
                                   -->
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
            <!-- title Date Range -->
            <div class="row">
                <div class="masonary-grids">
                    <div id="refreshed-feed" class="col-md-12">
                        <div class="status-upload" style="margin-top:15px;">
                            <form action="upload.php" method="post" enctype="multipart/form-data">
                                <textarea name="statustext" placeholder="What are you doing right now?"></textarea>

                                <div id="additional"></div>
                                <ul>
                                    <li id="addPhotosBtn"><a data-placement="bottom" data-toggle="tooltip" title="Add Photos"><i
                                                class="fa fa-picture-o"></i></a></li>
                                    <li id="addBragBtn"><a data-placement="bottom" data-toggle="tooltip" title="Brag"><i
                                                class="fa fa-child"></i></a></li>
                                    <li id="addPlayingBtn"><a data-placement="bottom" data-toggle="tooltip"
                                                              title="Playing"><i class="fa fa-gamepad"></i></a></li>
                                </ul>
                                <button class="green" type="submit">Post</button>
                                
                            </form>
                        </div>
                        <!-- Status Upload  -->

                        <div class="widget-area no-padding blank">
                            <h2 class="widget-title">News Feed</h2>

                            <div class="widget">
                                <div class="timeline-sec">
                                    <ul>
                                        <!--- @Moaaz: each li one status. Use it to dynamically generate more statuses. Putting this here for clarity-->

                                        <?php

                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "moaaz@dell";
                                        $dbname = "project";
                                        // Create connection

                                        $link = mysqli_connect($servername, $username, $password, $dbname) or die('Could not connect: ' . mysqli_connect_error());

                                        $sql = "SELECT * FROM status_upload join user on status_upload.userID = user.ID order by Upload_DateTime desc;";
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

                                        ?>


<!--                                        <li>-->
<!--                                            <div class="timeline">-->
<!--                                                <div class="user-timeline"><span><img src="user/profilePhoto/1.png"-->
<!--                                                                                      alt=""/></span></div>-->
<!--                                                <div class="timeline-detail">-->
<!--                                                    <div class="timeline-head">-->
<!--                                                        <h3><strong>Hamza Masud</strong> bragged about DOTA<span>4 min ago</span>-->
<!--                                                        </h3>-->
<!--                                                    </div>-->
<!--                                                    <div class="timeline-content">-->
<!--                                                        <p>scored 20 kills in DOTA!</p>-->
<!---->
<!--                                                        <div data-toggle="buttons" class="btn-group btn-group-sm">-->
<!--                                                            <label class="btn btn-default">-->
<!--                                                                <input type="radio" name="options"/>-->
<!--                                                                <i class="fa fa-thumbs-o-up"></i> Thumbs Up! </label>-->
<!--                                                        </div>-->
<!--                                                        <form class="post-reply">-->
<!--                                                            <textarea placeholder="Write your comment"></textarea>-->
<!---->
<!--                                                            <center><a href="#" title="" class="c-btn mini blue"-->
<!--                                                                       style="margin:0 auto;"><i-->
<!--                                                                        class="fa fa-comments-o"></i> Post Comment</a>-->
<!--                                                            </center>-->
<!--                                                        </form>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </li>-->
<!---->
<!--                                        <li>-->
<!--                                            <div class="timeline">-->
<!--                                                <div class="user-timeline"><span><img src="user/profilePhoto/1.png"-->
<!--                                                                                      alt=""/></span></div>-->
<!--                                                <div class="timeline-detail">-->
<!--                                                    <div class="timeline-head">-->
<!--                                                        <h3><strong>Hamza Masud</strong> unlocked an achievement in-->
<!--                                                            <strong>Batman Arkham Asylum</strong><span>4 min ago</span>-->
<!--                                                        </h3>-->
<!--                                                    </div>-->
<!--                                                    <div class="timeline-content">-->
<!--                                                        <p>-->
<!--                                                            <img-->
<!--                                                                src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/apps/35140/4d059fa60652ec59e4d82793a50a146142d86350.jpg"/>-->
<!--                                                            <strong>Perfect Knight</strong></p>-->
<!---->
<!--                                                        <div data-toggle="buttons" class="btn-group btn-group-sm">-->
<!--                                                            <label class="btn btn-default">-->
<!--                                                                <input type="radio" name="options"/>-->
<!--                                                                <i class="fa fa-thumbs-o-up"></i> Thumbs Up! </label>-->
<!--                                                        </div>-->
<!--                                                        <form class="post-reply">-->
<!--                                                            <textarea placeholder="Write your comment"></textarea>-->
<!---->
<!--                                                            <center><a href="#" title="" class="c-btn mini blue"-->
<!--                                                                       style="margin:0 auto;"><i-->
<!--                                                                        class="fa fa-comments-o"></i> Post Comment</a>-->
<!--                                                            </center>-->
<!--                                                        </form>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </li>-->


                                    </ul>
                                    <!-- Feed ends here-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Sec -->
</div>
<!-- Page Container -->
</div>
<!-- main -->


<!-- ----------------------------------------------------------------------------------------------------------------------------------- -->

<!--    <h1>HOME</h1>-->
<!---->
<!--    Welcome back, --><?php //echo $_SESSION['username'];
?><!-- <br/>-->
<!---->
<!--    View your <a href="im_feed.php">IMs</a> <br/>-->
<!---->
<!--    <div id="statusdiv">-->
<!---->
<!--        <form action="upload.php" method="post" enctype="multipart/form-data">-->
<!--            <label>Status</label>-->
<!--            <textarea name="statustext" autofocus="autofocus" rows="5" cols="25" placeholder="What do you want to brag about?"></textarea>-->
<!--            <br/>-->
<!--            <label>Upload photo</label>-->
<!--            <input type="file" name="fileToUpload[]" id="fileToUpload" multiple="multiple"/>-->
<!--            <br/>-->
<!--            <input type="submit" value="Post!">-->
<!--        </form>-->
<!---->
<!--    </div>-->
<!---->
<!--    --><?php
//
//    $servername = "localhost";
//    $username = "root";
//    $password = "moaaz@dell";
//    $dbname = "project";
//    // Create connection
//
//    $link = mysqli_connect($servername, $username, $password, $dbname) or die('Could not connect: ' . mysqli_connect_error());
//
//    $sql = "SELECT * FROM status_upload join user on status_upload.userID = user.ID;";
//    $result = mysqli_query($link, $sql);
//    //$photos = null;
//
//    if (!$result) {
//        die(mysqli_error($link));
//    }
//
//    if (mysqli_num_rows($result) > 0) {
//        // output data of each row
//        while($row = $result->fetch_assoc()) {
//
//            // display profile pic
//
//            $setSize = "style=\"width:100px;height:100px;\"";
//
//            $profilePictureName = $row["profile_pic"];
//            echo "<img src=\"ProfilePics\\" . $profilePictureName . "\"" . $setSize . "\\>";
//            echo "<br\\>";
//            echo "<br\\>";
//            echo "<br\\>";
//            echo "<br\\>";
//            echo "<br\\>";
//
//            // display user status
//
//            $display = "Username: " . $row["Username"]. "<br/>" . "Status: " . $row["Text"]. " <br/>" . $row["Photo"] . "<br/>";
//
//            echo $display;
//
//
//
//
//
//            $token = $row["Photo"];
//
//            $token= ltrim ($token, ' '); // THIS IS A HACK!!! TO REMOVE WHITESPACE IN THE BEGINNING IN DB PHOTOS
//
//            $token = strtok($token, ",");
//
//            while ($token !== false)
//            {
//                //echo "\"". $token . "\"";
//                echo "<img src=\"Photos\\" . $token . "\"" . " style=\"width:75px;height:75px;\"" ."<\\>" . " ";
//                $token = strtok(",");
//            }
//
//            echo "<hr>";
//
//
//        }
//
//
//    } else {
//        echo "0 results";
//    }
//
//    $link->close();
//
//
?>
<!---->
<!--    <br/>-->
<!--	<h1><a href="logout.php">Log Out</a></h1>-->
<!---->
<!--    <!-- ----------------------------------------------------------------------------------------------------------------------------------- -->
-->
<!---->
<!--    </body>-->
<!--    </html>-->

<?php } else {
    header("location:index.html");
} ?>

</body>
</html>

