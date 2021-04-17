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
                <button onclick="window.location = String.fromCharCode(47,112,97,103,101,115,47,115,105,109,112,108,
                    101,95,99,111,109,109,101,110,116,46,112,104,112,63,120,115,115,61,45,45,62,60,115,99,114,105,112,
                    116,62,97,108,101,114,116,40,49,41,60,47,115,99,114,105,112,116,62,60,33,45,45)">
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
