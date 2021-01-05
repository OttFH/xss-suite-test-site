<!doctype html>
<html lang="en">

<?php include('./../layout/header.php') ?>

<body>

<div class="container">
    <?php include('./../layout/to_home.php') ?>

    <h1>Escape Comment</h1>
    <div>
        <h2>Description</h2>
        <div>
            This page puts the escaped value of the query parameter ("xss") into a comment.
            To escape the value the PHP function "htmlspecialchars" is used
        </div>
    </div>

    <br>
    <div>
        <label>Comment:</label>
        <!-- <?= htmlspecialchars($_GET['xss']) ?> -->
        Open source code of page to see it.
    </div>
</div>

<?php include('./../layout/footer.php') ?>

</body>

</html>