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
            This page puts the escaped value of the query parameter ("xss") into a the onload event handler of an img tag.
            To escape the value the PHP function "htmlspecialchars" is used.
        </div>
        <div class="vulnerability-info-container">
            <label>Has XSS vulnerability:</label>
            <div>Yes</div>
            <?php if (!getenv('HIDE_EXAMPLES') || getenv('HIDE_EXAMPLES') != 'true') { ?>
                <button onclick="window.location = String.fromCharCode(47,112,97,103,101,115,47,101,115,99,97,112,105,
                    110,103,95,111,110,108,111,97,100,46,112,104,112,63,120,115,115,61,97,108,101,114,116,40,49,41)">
                    Example
                </button>
            <?php } ?>
        </div>
    </div>

    <div class="value-container">
        <img src="/img/xss-meme.jpg" alt="Funny Meme" onload="<?= htmlspecialchars($_GET['xss']) ?>"/>
    </div>
</div>

<?php include('./../layout/footer.php') ?>

</body>

</html>
