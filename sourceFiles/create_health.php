<?php
include('dbconnect.php');

/* this script inserts a new article into the database*/

$title = $_POST["title"];
$text = $_POST["text"];

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'insert':
            insert();
            break;
        case 'select':
            select();
            break;
    }
}

function insert() {
    $sql = "INSERT INTO port_articles (title, text) VALUES ('".$_POST['title']."', '".$_POST['text']."')";
    exit;
}

function edit() {
    $sql = "INSERT INTO port_articles (title, text) VALUES ('".$_POST['title']."', '".$_POST['text']."')";
    exit;
}

?>
