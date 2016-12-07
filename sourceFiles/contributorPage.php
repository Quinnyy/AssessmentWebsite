<?php
include 'master.php';
?>

<html xmlns="http://www.w3.org/1999/html">
    <link href="bootstrap.min.css" rel="stylesheet" />
    <link href="half-slider.css" rel="stylesheet" />

    <header id="myCarousel" class="carousel slide">
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image: url('train.jpg')";></div>
            </div>
            <div class="item">
                <div class="fill" style="background-image: url('rain.jpg')";></div>

            </div>
            <div class="item">
                <div class="fill" style="background-image: url('tree.jpg')";></div>

            </div>
        </div>
    </header>

    <script src="jquery.js"></script>
    <script src="bootstrap.min.js"></script>

    <script>
        $('.carousel').carousel({
            interval: 5000
        })
    </script>


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Contributor Page</h1>
                <hr/>
            </div>

            <form method="post" action="healthyLiving.php">
                <input type="text" name="title" placeholder="title"/></br>
                <textarea name="text" placeholder="text"></textarea></br>
                <input type="submit" name="submit"/>
            </form>
        </div>
</html>
