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
    </div>

    <br>
    <form method="post">
        <label>
            XSS:
            <input name="xss" value="">
        </label>
        <button type="submit">POST</button>
    </form>

    <br>
    <div>
        <label>Value:</label>
        <div><?= $_POST['xss'] ?></div>
    </div>
</div>

<?php include('./../layout/footer.php') ?>

</body>

</html>