<?php
include 'master.php';
?>

<html xmlns="http://www.w3.org/1999/html">
    <link href="bootstrap.min.css" rel="stylesheet" />
    <link href="half-slider.css" rel="stylesheet" />
    <link href="healthPage.css" rel="stylesheet" />
    <link href="onClick.js">

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
                <h1>Contributor Health Page</h1>
                <hr/>
            </div>
                    <div class="col-lg-12"  style="width: 350px">
                        <h3>Add Article</h3>
                        <i>Type article title and description in the boxes below!</i>
                        <br>
                        <br>

                        <form method="post" action="healthyLiving.php">
                            Enter Text:
                            <br>
                            <input type="text" name="title" placeholder="title"/></br>
                            <br>
                           <textarea name="text" placeholder="description"></textarea></br>
                            <br>
                            <input type="submit" name="insert"/>
                        </form>

                    </div>
                <div class="col-lg-12" style="width: 350px">
                    <h3>Edit Article</h3>
                    <i>Edit an existing article below!</i>
                    <br>
                    <br>

                    <form method="post" action="healthyLiving.php">
                        Select Article to Edit:
                        <br>
                        <select>
                            <?php
                            include('dbconnect.php');
                            /* this script loads the article the user clicked on.*/

                            $sql = "SELECT * FROM port_articles";
                            $result = $db->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo '<option value='.$row["title"].'>'.$row["title"].'</option>';
                                }
                            }
                            else {
                                echo "0 results";
                            }
                            $db->close();

                            ?>
                        </select>
                        <br>
                        <br>
                        Enter Text Here:
                        <br>
                        <input type="text" name="title" placeholder="title"/></br>
                        <br>
                        <textarea name="text" placeholder="description"></textarea></br>
                        <br>
                        <input type="submit" name="edit"/>
                    </form>

                </div>

        </div>
    </div>

<script>
    $('.button').click(function() {
        $.ajax({
            type: "POST",
            url: "editHealth.php",
            data: { $('title').val(), $('text').val() }
        }).done(function( msg ) {
            alert( "Data Saved: " + msg );
        });

    });
</script>

</html>
