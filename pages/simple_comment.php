<!doctype html>
<html lang="en">

<?php include('./../layout/header.php') ?>

<body>

<div class="container">
    <?php include('./../layout/to_home.php') ?>

    <h1>Simple Comment</h1>
    <div>
        <h2>Description</h2>
        <div>
            This page puts the value of the query parameter ("xss") into a comment.
        </div>
        <div class="vulnerability-info-container">
            <label>Has XSS vulnerability:</label>
            <div>Yes</div>
            <?php if (!getenv('HIDE_EXAMPLES') || getenv('HIDE_EXAMPLES') != 'true') { ?>
                <button onclick="window.location = '/pages/simple_comment.php?xss=--><script>alert(1)</script><!--'">
                    Example
                </button>
            <?php } ?>
        </div>
    </div>

    <div class="value-container">
        <label>Comment:</label>
        <br>
        <!-- <?= $_GET['xss'] ?> -->
        Open source code of page to see it.
    </div>
</div>

<?php include('./../layout/footer.php') ?>

</body>

</html>