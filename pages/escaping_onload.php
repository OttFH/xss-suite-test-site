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
            <button onclick="window.location = '/pages/escaping_onload.php?xss=alert(1)'">
                Example
            </button>
        </div>
    </div>

    <div class="value-container">
        <img src="/img/xss-meme.jpg" alt="Funny Meme" onload="<?= htmlspecialchars($_GET['xss']) ?>"/>
    </div>
</div>

<?php include('./../layout/footer.php') ?>

</body>

</html>