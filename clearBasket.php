<?php
session_start();
include ("db.php"); //include db.php file to connect to DB
$pagename="Clear Basket"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>";
//display name of the page as window title
echo "<body>";
include ("headfile.html");
//include header layout file
echo "<h4>".$pagename."</h4>";
//display name of the page on the web page
//display random text

//create and populate variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";
echo "<title>".$pagename."</title>";
echo "<body>";
include ("headfile.html");
echo "<h4>".$pagename."</h4>";
unset($_SESSION['basket']);
echo "<P>Your basket has been cleared!";
include ("footfile.html");
echo "</body>";
include("footfile.html");
//include head layout
echo "</body>";
?>