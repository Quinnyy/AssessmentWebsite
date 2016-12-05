<?php
include 'master.php';
?>

<!DOCTYPE html>
<html lang="en">

<link href="half-slider.css" rel="stylesheet" />
<link href="healthPage.css" rel="stylesheet" />

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

    <ul class="ulProducts" runat="server" id="newsFeed">

        <li>
            <b>Feel the Burn!</b>
            <br>
            Looking in the mirror and don't like what you see? Can't shake that holiday fat? or do you just love to exercise? The answer to you're problems is probably just a 30minute bus
            journey away! Gym's are a great way to achieve that healthy life style! Happy body happy life. However, going to a gym is only half the battle in the never ending strife against body fat!
        </li>
        <li>
            <b>Feel the Burn!</b>
            <br>
            Looking in the mirror and don't like what you see? Can't shake that holiday fat? or do you just love to exercise? The answer to you're problems is probably just a 30minute bus
            journey away! Gym's are a great way to achieve that healthy life style! Happy body happy life. However, going to a gym is only half the battle in the never ending strife against body fat!
        </li>
        <li>
            <b>Feel the Burn!</b>
            <br>
            Looking in the mirror and don't like what you see? Can't shake that holiday fat? or do you just love to exercise? The answer to you're problems is probably just a 30minute bus
            journey away! Gym's are a great way to achieve that healthy life style! Happy body happy life. However, going to a gym is only half the battle in the never ending strife against body fat!
        </li>
    </ul>


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


