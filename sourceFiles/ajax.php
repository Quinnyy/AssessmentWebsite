<?php
include('dbconnect.php');

/* this script inserts a new article into the database*/



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
    $title = $_POST["title"];
    $text = $_POST["text"];
    $sql = "INSERT INTO port_articles (title, text) VALUES ('".$_POST['title']."', '".$_POST['text']."')";
    echo "The select function is called.";
    exit;
}

function edit() {
    $title = $_POST["title"];
    $text = $_POST["text"];
    $sql = "INSERT INTO port_articles (title, text) VALUES ('".$_POST['title']."', '".$_POST['text']."')";
    exit;
}
