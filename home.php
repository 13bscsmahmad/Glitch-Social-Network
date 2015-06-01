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

    Welcome back

	<a href="logout.php">Log Out</a>
    </body>
    </html>

<?php } else { header("location:index.html"); } ?>

