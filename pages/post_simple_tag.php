<!doctype html>
<html lang="en">

<?php include('./../layout/header.php') ?>

<body>

<div class="container">
    <?php include('./../layout/to_home.php') ?>

    <h1>POST Simple Tag</h1>
    <div>
        <h2>Description</h2>
        <div>
            This page puts the value of the post parameter ("xss") into a div tag.
        </div>
        <div class="vulnerability-info-container">
            <label>Has XSS vulnerability:</label>
            <div>Yes</div>
        </div>
    </div>

    <form class="value-container" method="post">
        <label>
            XSS:
            <input name="xss" value="">
        </label>
        <button type="submit">POST</button>
    </form>

    <div class="value-container">
        <label>Value:</label>
        <div><?= $_POST['xss'] ?></div>
    </div>
</div>

<?php include('./../layout/footer.php') ?>

</body>

</html>