<?php include 'filter.php'; ?>
<?php include 'functions.php'; ?>

<?php

if (loggedIn()) { ?>

    <!doctype html>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Games-played Profile | Glitch</title>

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

                <?php $pic = getUserProfilePic($_SESSION['username']); ?>

            </div>
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
                            <div class="single-menu">
                                <h2><a href="profile_gamesPlayed.php" title=""><span>Games Played</span></a></h2>
                            </div>

                        </div>
                        <div class="single-menu">
                            <h2><a href="profile_brags.php" title=""><span>Brags</span></a></h2>
                        </div>
                        <div class="single-menu">
                            <h2><a href="#" title=""><span>Screenshots</span></a></h2>
                        </div>
                        <div class="single-menu">
                            <h2><a href="#" title=""><span>Achievements</span></a></h2>

                            <h2><a href="#" title=""><span>Gamer Info</span></a></h2>
                        </div>

                    </div>
                </div>
                <!-- Menu Sec -->
            </aside>
            <!-- Aside Sidebar -->
            <div class="content-sec">
                <div class="container">

                    <div class="row">
                        <div class="masonary-grids">
                            <div class="col-md-12">
                                <div class="widget-area">
                                    <h1>Games Played</h1>
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Game Name</th>


                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php

                                        $servername = "mydb";
                                        $username = "root";
                                        $password = "mysqlPwd75";
                                        $dbname = "project";
                                        // Create connection

                                        $link = mysqli_connect($servername, $username, $password, $dbname) or die('Could not connect: ' . mysqli_connect_error());

                                        $sql = "SELECT distinct NowPlaying FROM status_upload join user on status_upload.userID = user.ID where username = \"" . $_SESSION["username"] . "\" and NowPlaying is not null;";
                                        $result = mysqli_query($link, $sql);
                                        //$photos = null;

                                        if (!$result) {
                                            die(mysqli_error($link));
                                        }

                                        if (mysqli_num_rows($result) > 0) {
                                            // output data of each row


                                            $x = 1;
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>
                                            <td>" . $x . "</td>
                                            <td>" . $row["NowPlaying"] . "</td>


                                        </tr>";
                                                $x++;
                                            }
                                        }



                                        ?>

                                        </tbody>
                                    </table>
                                </div>
                                <!--Main widget area ends-->
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