<!doctype html>
<html lang="en">

<?php include('./../layout/header.php') ?>

<body>

<div class="container">
    <?php include('./../layout/to_home.php') ?>

    <h1>Simple Value</h1>
    <div>
        <h2>Description</h2>
        <div>
            This page puts the value of the query parameter ("xss") into the value attribute of a value tag.
        </div>
    </div>

    <br>
    <div>
        <label>
            Value:
            <input name="xss" value="<?= $_GET['xss'] ?>">
        </label>
    </div>
</div>

<?php include('./../layout/footer.php') ?>

</body>

</html>