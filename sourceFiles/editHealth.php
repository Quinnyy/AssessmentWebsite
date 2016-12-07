<?php
include('dbconnect.php');

$type = $_POST['type'];

if($type=="insert") {
    $sql = "INSERT INTO port_articles (title, text) VALUES ('" . $_POST['title'] . "', '" . $_POST['desc'] . "')";
    if ($db->query($sql) === TRUE) {
        echo "Article Added, thank you";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
}

if($type=="edit")
{
    echo $_POST['title'];
    $sql = "UPDATE port_articles SET title='".$_POST['title']."',text='".$_POST['desc']."'WHERE title='".$_POST['oldTitle']."'";

    if ($db->query($sql) === TRUE)
    {
        echo "Article Changed, thank you";
    }
    else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
}




?>


