<!DOCTYPE html>
<html>
<head>
    <title>Telefilm da vedere</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="container">
    <img src="doctah.png" />
    <h1>Telefilm da vedere</h1>
    <form action="post_page.php" method="POST">
    Telefilm:
        <input type="text" name="telefilm">
        <input type="submit" value="Submit">
    </form>
    <?php
    $myfile = fopen("db.txt", "r") or die("Unable to open file!");
    print fread($myfile,filesize("db.txt"));
    fclose($myfile);
    ?>
</div>
</body>
</html>