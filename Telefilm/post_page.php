<?php
/**
 * Created by PhpStorm.
 * User: davidesanfilippo
 * Date: 13/07/15
 * Time: 21:34
 */

$myfile = fopen("db.txt", "a") or die("Unable to open file!");
$txt = $_POST['telefilm'];


if (!empty($_POST['telefilm'])){
$txt2 = "<p>" . $txt . "</p>";
fwrite($myfile, $txt2);
fclose($myfile);
header("location: index.php");
}
else {
	header("location: index.php");
}
?>