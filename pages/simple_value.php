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
        <div class="vulnerability-info-container">
            <label>Has XSS vulnerability:</label>
            <div>Yes</div>
            <button onclick="window.location = '/pages/simple_value.php?xss=&quot;><script>alert(1)</script><input type=&quot;hidden'">
                Example
            </button>
        </div>
    </div>

    <div class="value-container">
        <label>
            Value:
            <input name="xss" value="<?= $_GET['xss'] ?>">
        </label>
    </div>
</div>

<?php include('./../layout/footer.php') ?>

</body>

</html>