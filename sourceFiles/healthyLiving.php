<?php
include 'master.php';
?>

<!DOCTYPE html>
<html lang="en">
<link href="bootstrap.min.css" rel="stylesheet" />
<link href="half-slider.css" rel="stylesheet" />

<header id="myCarousel" class="carousel slide">
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image: url('gym-wallpaper-workout.jpg')";></div>
        </div>
        <div class="item">
            <div class="fill" style="background-image: url('healthyfood.jpg')";></div>

        </div>
        <div class="item">
            <div class="fill" style="background-image: url('hills.jpg')";></div>

        </div>
    </div>
</header>


<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1>Healthy Lifestyle</h1>
            This page will contain helpful information, tips & tricks for staying healthy!
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



</html>

<?php
if(!$_POST['submit'])
{
    echo "please use the form";
}



?>


