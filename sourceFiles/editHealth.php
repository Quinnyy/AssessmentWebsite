<?php
include('dbconnect.php');

$title = $_POST['title'];
$desc = $_POST['desc'];
$type = $_POST['type'];

echo $title;

?>






/* this script inserts a new article into the database*/
/*
function insert($title, $text) {
    $sql = "INSERT INTO port_articles (title, text) VALUES ('".$title."', '".$text."')";
    echo "The select function is called.";
    exit;
}

function edit() {
    $title = $_POST["title"];
    $text = $_POST["text"];
    $sql = "INSERT INTO port_articles (title, text) VALUES ('".$_POST['title']."', '".$_POST['text']."')";
    exit;
}
