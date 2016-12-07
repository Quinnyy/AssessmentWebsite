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
                        <i>Add a new article below!</i>
                        <br>
                        <br>

                        <form>
                            Enter Text:
                            <br>
                            <input type="text" name="title" id="title" placeholder="title"/></br>
                            <br>
                           <textarea name="text" id="text" placeholder="description"></textarea></br>
                            <br>
                            <input type="button" value="Add"  onclick="insert();"/>
                        </form>
                    </div>

                <div class="col-lg-12" style="width: 350px">
                    <h3>Edit Article</h3>
                    <i>Edit an existing article below!</i>
                    <br>
                    <br>

                    <form>
                        Select Article to Edit:
                        <br>
                        <select id="oldTitle">
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
                        <input type="text" name="titleEdit" id="titleEdit" placeholder="title"/></br>
                        <br>
                        <textarea name="textEdit" id="textEdit" placeholder="description"></textarea></br>
                        <br>
                        <input type="button" value="Edit" onclick="edit();"/>
                    </form>

                </div>

            <div class="col-lg-12" style="width: 350px">
                <h3>Delete Article</h3>
                <i>Delete an existing article below!</i>
                <br>
                <br>

                <form>
                    Select Article to Delete:
                    <br>
                    <select id="toDelete">
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
                    <input type="button" value="Delete" onclick="toDelete();"/>
                </form>

            </div>

        </div>
    </div>

    <div id="result"></div>


</html>

<script type="text/javascript">

    function insert()
    {
        var title = $('#title').val();
        var desc = $('#text').val();
        var type = "insert"

        $.post('editHealth.php',{title:title,desc:desc,type:type}, function(data)
            {
                $('#result').html(data);
            }
        );
    }

    function edit()
    {
        var title = $('#titleEdit').val();
        var desc = $('#textEdit').val();
        var type = "edit"
        var oldTitle = document.getElementById("oldTitle").options[document.getElementById("oldTitle").selectedIndex].value;

        $.post('editHealth.php',{title:title,desc:desc,type:type,oldTitle:oldTitle}, function(data)
            {
                $('#result').html(data);
            }
        );
    }

    function toDelete()
    {
        echo "Test";
        var type = "delete"
        var toDelete = document.getElementById("toDelete").options[document.getElementById("toDelete").selectedIndex].value;

        $.post('editHealth.php',{type:type,toDelete:toDelete}, function(data)
            {
                $('#result').html(data);
            }
        );
    }


</script>