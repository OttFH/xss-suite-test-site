<!doctype html>
<html lang="en">

<?php include('./../layout/header.php') ?>

<body>

<div class="container">
    <?php include('./../layout/to_home.php') ?>

    <h1>Escape Value</h1>
    <div>
        <h2>Description</h2>
        <div>
            This page puts the escaped value of the query parameter ("xss") into the value attribute of a value tag.
            To escape the value the PHP function "htmlspecialchars" is used.
        </div>
        <div class="vulnerability-info-container">
            <label>Has XSS vulnerability:</label>
            <div>No</div>
        </div>
    </div>

    <div class="value-container">
        <label>
            Value:
            <input name="xss" value="<?= htmlspecialchars($_GET['xss']) ?>">
        </label>
    </div>
</div>

<?php include('./../layout/footer.php') ?>

</body>

</html>