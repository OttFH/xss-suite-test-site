<!doctype html>
<html lang="en">

<?php include('./../layout/header.php') ?>

<body>

<div class="container">
    <h1>Simple Comment</h1>
    <div>
        <h2>Description</h2>
        <div>
            This page puts the value of the query parameter ("xss") into a comment.
        </div>
    </div>

    <br>
    <div>
        <label>Comment:</label>
        <!-- <?= $_GET['xss'] ?> -->
        Open source code of page to see it.
    </div>
</div>

<?php include('./../layout/footer.php') ?>

</body>

</html>