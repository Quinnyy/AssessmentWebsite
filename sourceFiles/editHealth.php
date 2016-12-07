<?php
include('dbconnect.php');

$title = $_POST['title'];
$desc = $_POST['desc'];
$type = $_POST['type'];


if($type=="insert")
{
    $sql = "INSERT INTO port_articles (title, text) VALUES ('".$title."', '".$desc."')";
    echo "Article Added, thank you";
}

?>


