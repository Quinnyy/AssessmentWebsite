<?php
include('dbconnect.php');

$title = $_POST['title'];
$desc = $_POST['desc'];
$type = $_POST['type'];

if($type=="insert")
{
    $sql = "INSERT INTO port_articles (title, text) VALUES ('".$_POST['title']."', '".$_POST['desc']."')";
    echo "Article Added, thank you";

    if ($db->query($sql) === TRUE) {
        header( 'Location: http://AssessmentWebsite.azurewebsites.net/sourceFiles/healthyLiving.php' ) ;

    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }

}

?>


