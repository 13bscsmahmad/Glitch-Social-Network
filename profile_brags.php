    <?php include 'filter.php'; ?>
<?php include 'functions.php'; ?>

<?php if (loggedIn()) { ?>

    <!doctype html>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Brag Profile | Glitch</title>

        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet'
              type='text/css'/>
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'/>

        <!-- Styles -->
        <link rel="stylesheet" href="font-awesome-4.2.0/css/font-awesome.css" type="text/css"/>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <!-- Style -->
        <link rel="stylesheet" href="css/responsive.css" type="text/css"/>
        <!-- Responsive -->


        <script>
        function submitCommentForm(statusID) {

        document.getElementById("comment-form" + statusID).submit();
        }
        </script>
    </head>
    <body>

    <div class="main">
        <header class="header">
            <div class="logo"><a href="home.php" title=""><img src="images/logo2.png"
                                                               alt="The Video Game Social Network Logo"/></a>
            </div>
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
                            <li><a href="#" title=""><span><img src="images/resource/sender2.jpg" alt=""/></span><i>Ammar
                                        ul Mulk</i>Wanna join? We're playing.
                                    <h6>2 min ago..</h6>

                                    <p class="status red">Unsent</p>
                                </a></li>
                            <li><a href="#" title=""><span><img src="images/resource/sender3.jpg" alt=""/></span><i>Umad
                                        ul Hassan</i>Game?
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
                <div class="notification-list dropdown"><a title=""><span class="green">3</span><i
                            class="fa fa-bell-o"></i></a>

                    <div class="notification drop-list"><span>You have 3 New Notifications</span>
                        <ul>
                            <li><a href="#" title=""><span><i class="fa fa-bug red"></i></span><strong>Moaaz
                                        Ahmad</strong> commented on your post.
                                    <h6>2 min ago..</h6>
                                </a></li>
                            <li><a href="#" title=""><span><img src="images/resource/sender2.jpg"
                                                                alt=""/></span><strong>Sohaib Ahmad</strong> thumbed up
                                    your brag!
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

            <?php $pic = getUserProfilePic($_SESSION['username']); ?>

            <div class="dropdown profile"><a title=""> <img src="ProfilePics/<?php echo $pic ?>"
                                                            alt=""/><?php echo $_SESSION["username"] ?><i
                        class="caret"></i> </a>

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

                        <h3 id="sidebarName"><?php echo $_SESSION["username"] ?></h3>
                        <a href="logout.php" title="Logout" class="logout red" data-toggle="tooltip" data-placement=
                        "right"><i class="fa fa-power-off"></i></a></div>
                </div>
                <div class="menu-sec">
                    <div id="menu-toogle" class="menus">
                        <div class="single-menu">
                            <h2><a href="profile_brags.php" title=""><span>Brags</span></a></h2>
                        </div>
                        <div class="single-menu">
                            <div class="single-menu">
                                <h2><a href="#" title=""><span>Gamer Info</span></a></h2>
                            </div>
                            <h2><a href="profile_gamesPlayed.php" title=""><span>Games Played</span></a></h2>
                        </div>

                        <div class="single-menu">
                            <h2><a href="#" title=""><span>Screenshots</span></a></h2>
                        </div>
                        <div class="single-menu">
                            <h2><a href="#" title=""><span>Achievements</span></a></h2>
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
                                <div class="main-title">
                                    <h1 id="profileNameTop"><?php echo $_SESSION["username"] ?>'s Profile</h1>
                                </div>
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>
                    </div>
                    <!-- title Date Range -->
                    <div class="row">
                        <div class="masonary-grids">
                            <div class="col-md-12">
                                <div class="profile-sec">
                                    <div class="profile-head" style="background-image:url(user/cover/1.png);">
                                        <!--- COVER PHOTO IS IN background image! -->
                                        <div class="profile-avatar dp_Full">
                                            <span><img src="ProfilePics/<?php echo $pic ?>" alt="Display Picture"
                                                       width="140" height="140"/></span>

                                            <div class="profile-name" style="margin-left:-10px; margin-right:20px;">
                                                <h3><?php echo $_SESSION["username"] ?></h3>
                                            </div>
                                        </div>
                                        <ul class="profile-count">
                                            <li>371<i>Followers</i></li>
                                            <li>2304<i>Following</i></li>
                                        </ul>
                                        <ul class="profile-connect">
                                            <li><a href="#" title="">Follow</a></li>
                                        </ul>
                                    </div>

                                    <!--Timeline stats here -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="widget-area no-padding blank">
                                                <h2 class="widget-title"><?php echo $_SESSION["username"] ?>'s
                                                    Brags</h2>

                                                <div class="widget">
                                                    <div class="timeline-sec">
                                                        <ul>

                                                            <?php

                                                            $servername = "localhost";
                                                            $username = "root";
                                                            $password = "moaaz@dell";
                                                            $dbname = "project";
                                                            // Create connection

                                                            $link = mysqli_connect($servername, $username, $password, $dbname) or die('Could not connect: ' . mysqli_connect_error());

                                                            $sql = "SELECT text, brag, upload_datetime, status_upload.ID as s_ID FROM status_upload join user on status_upload.userID = user.ID where username=\"" . $_SESSION["username"] . "\" and brag is not null order by upload_DateTime desc;";
                                                            $result = mysqli_query($link, $sql);
                                                            //$photos = null;

                                                            if (!$result) {
                                                                die(mysqli_error($link));
                                                            }

                                                            if (mysqli_num_rows($result) > 0) {
                                                                // output data of each row
                                                                while ($row = $result->fetch_assoc()) {


                                                                    $sql2 = "select commented_user, comment, Upload_DateTime, profile_pic from comments join user on commented_user = username where status_id=\"" . $row["s_ID"] . "\"";
                                                                    $result2 = mysqli_query($link, $sql2);
                                                                    if (!$result2) {
                                                                        die(mysqli_error($link));
                                                                    }

                                                                    echo "<li>
                                                                <div class=\"timeline\">
                                                                    <div class=\"user-timeline\"><span><img
                                                                                src=\"ProfilePics/" . $pic . "\"
                                                                                alt=\"\"/></span></div>
                                                                    <div class=\"timeline-detail\">
                                                                        <div class=\"timeline-head\">
                                                                            <h3>
                                                                                <strong>" . $_SESSION["username"]."</strong>
                                                                                bragged \"" . $row["brag"] ."\"<span>at ". $row["upload_datetime"] . "</span></h3>
                                                                        </div>
                                                                        <div class=\"timeline-content\">
                                                                            <p>". $row["text"] . "</p>

                                                                            <div data-toggle=\"buttons\"
                                                                                 class=\"btn-group btn-group-sm\">
                                                                                <label class=\"btn btn-default\">
                                                                                    <input type=\"radio\" name=\"options\"/>
                                                                                    <i class=\"fa fa-thumbs-o-up\"></i>
                                                                                    Thumbs Up! </label>
                                                                            </div>
                                                                            <form id=\"comment-form". $row["s_ID"]  ."\" class=\"post-reply\" action=\"uploadComment.php\" method=\"get\">
                                                                              <textarea name=\"comment\" placeholder=\"Write your comment\"></textarea>
                                                                              <input type=\"hidden\" name=\"statusid\" id=\"statusIDspan\" value=\"" . $row["s_ID"] . "\">
                                                                               <center><a href=\"#\" onclick=\"submitCommentForm(". $row["s_ID"]  .")\" title=\"\" class=\"c-btn mini blue\" style=\"margin:0 auto;\"><i class=\"fa fa-comments-o\"></i> Post Comment</a></center>
                                                                            </form>
                                                                        </div>";

                                                                    if (mysqli_num_rows($result2) > 0) {

                                                                        while ($row2 = $result2->fetch_assoc()) {
                                                                            // output data of each row

                                                                            $profile_pic = $row2["profile_pic"];
                                                                            $profile_pic = ltrim($profile_pic, ' ');

//<!--                                        <div class="widget-area" style="margin-top:0px; padding:5px 30px 10px;"><p class="timeline-content" ><img src="user/profilePhoto/1.png" width="40" height="40" style="margin-left:-15px; margin-right:20px;">Some comment</p></div></div>-->

//                                                            echo"<div class=\"widget-area\" style=\"margin-top:-7px\">
//                                                                <div><div style=\"float:left;\" width=\"20%\"><img src=\"ProfilePics/" . $profile_pic . "\" width=\"40\" height=\"40\" style=
//
//                                                                        \"margin-right:20px; margin-top:-5px; margin-bottom:5px;\"></div><div  width=\"80%\">". $row2["comment"] ."</div></div>
//                                                            </div>";

                                                                            echo "<div class=\"widget-area\" style=\"margin-top:-7px\">
<div>
<div style=\"float:left; display:table-cell\" width=\"20%\">
<img src=\"ProfilePics/" . $profile_pic . "\" width=\"40\" height=\"40\" style=\"margin-right:20px; margin-top:-5px; margin-bottom:5px;\">
</div>
<div style=\"display:table-cell\">". $row2["comment"] ."</div></div>
</div>";




                                                                        }
                                                                    }

                                                                    echo "</div>
                                                                </div>
                                                            </li>";

                                                                }
                                                            }



                                                            ?>

                                                        </ul>
                                                        <!-- Feed ends here-->
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <!-- Profile Sec -->
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


        <!-- Script -->
        <script type="text/javascript" src="js/modernizr.js"></script>
        <script type="text/javascript" src="js/jquery-1.11.1.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/enscroll.js"></script>
        <script type="text/javascript" src="js/grid-filter.js"></script>
        <script type="text/javascript" src="js/html5lightbox.js"></script>

    </body>
    </html>

<?php } else {
    header("location:index.php");
} ?>