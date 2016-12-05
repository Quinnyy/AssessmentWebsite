<?php
include 'master.php';
?>

<!DOCTYPE html>
<html lang="en">
<link href="bootstrap.min.css" rel="stylesheet" />
<link href="half-slider.css" rel="stylesheet" />

<header id="myCarousel" class="carousel slide">
    <title>
        Healthy Living
    </title>

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



<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1>Healthy Lifestyle</h1>
        </div>
    </div>

    <hr />
</div>


<script src="jquery.js"></script>
<script src="bootstrap.min.js"></script>

<script>
    $('.carousel').carousel({
        interval: 5000
    })
</script>

</body>

</html>



