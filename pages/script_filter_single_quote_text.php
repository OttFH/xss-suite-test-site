<!doctype html>
<html lang="en">

<?php include('./../layout/header.php') ?>

<body>

<div class="container">
    <?php include('./../layout/to_home.php') ?>

    <h1>Script Single Quotes</h1>
    <div>
        <h2>Description</h2>
        <div>
            This page puts the value of a query parameter ("xss") into single quotes inside a script tag,
            but escapes single quotes and backslashes.
        </div>
        <div class="vulnerability-info-container">
            <label>Has XSS vulnerability:</label>
            <div>No</div>
        </div>
    </div>

    <div class="value-container">
        <label>Value:</label>
        <div id="main"></div>

        <script>
            var xss = "<?= str_replace('\'', '\\\'', str_replace('\\', '\\\\', $_GET['xss']))?>";
            document.getElementById('main').innerText = xss;
        </script>
    </div>
</div>

<?php include('./../layout/footer.php') ?>

</body>

</html>