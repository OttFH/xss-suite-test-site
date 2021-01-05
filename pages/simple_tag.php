<!doctype html>
<html lang="en">

<?php include('./../layout/header.php') ?>

<body>

<div class="container">
    <?php include('./../layout/to_home.php') ?>

    <h1>Simple Tag</h1>
    <div>
        <h2>Description</h2>
        <div>
            This page puts the value of the query parameter ("xss") into a div tag.
        </div>
    </div>

    <br>
    <div>
        <label>Value:</label>
        <div><?= $_GET['xss'] ?></div>
    </div>
</div>

<?php include('./../layout/footer.php') ?>

</body>

</html>