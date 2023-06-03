<?php
include("db.php");
$pagename="A smart buy for a smart home."; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>";
//display name of the page as window title
echo "<body>";
include ("headfile.html");
//include header layout file
echo "<h4>".$pagename."</h4>";
//display name of the page on the web page
//display random text
$prodid=$_GET['u_prod_id'];
echo "<p>Selected product Id: ".$prodid;
include("footfile.html");
//include head layout
echo "</body>";
?>