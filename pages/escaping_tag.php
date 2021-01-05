<!doctype html>
<html lang="en">

<?php include('./../layout/header.php') ?>

<body>

<div class="container">
    <?php include('./../layout/to_home.php') ?>

    <h1>Escape Tag</h1>
    <div>
        <h2>Description</h2>
        <div>
            This page puts the escaped value of the query parameter ("xss") into a div tag.
            To escape the value the PHP function "htmlspecialchars" is used
        </div>
    </div>

    <br>
    <div>
        <label>Value:</label>
        <div><?= htmlspecialchars($_GET['xss']) ?></div>
    </div>
</div>

<?php include('./../layout/footer.php') ?>

</body>

</html>