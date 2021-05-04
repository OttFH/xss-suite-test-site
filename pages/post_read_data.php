<!doctype html>
<html lang="en">

<?php include('./../layout/header.php') ?>

<body>

<div class="container">
    <?php include('./../layout/to_home.php') ?>

    <h1>Simple Read Tag</h1>
    <div>
        <h2>Description</h2>
        <div>
            This page displays the value of the post parameter ("xss") in a div tag, which was posted on
            <a href="/pages/post_data.php">this page</a>.
        </div>
    </div>

    <div class="value-container">
        <label>Value:</label>
        <div>
            <?php
            $jsonString = file_get_contents('../tmp/post_data.json');
            if ($jsonString) {
                $jsonData = json_decode($jsonString);
                if (isset($jsonData) && isset($jsonData->xss)) {
                    echo $jsonData->xss;
                }
            }
            ?>
        </div>
    </div>
</div>

<?php include('./../layout/footer.php') ?>

</body>

</html>
