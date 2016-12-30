<?php 

$con = $_GET["convert"];
$year = $_GET["year"];
$month = $_GET["month"];
$day = $_GET["day"];
$space = $_GET["space"];

$conv = file_get_contents("http://api.bridge-ads.ir/convertDate/?convert=$con&year=$year&month=$month&day=$day&space=$space");

echo("$conv");
