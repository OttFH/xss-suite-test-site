<!doctype html>
<html lang="en">

<?php include('./../layout/header.php') ?>

<body>

<div class="container">
    <?php include('./../layout/to_home.php') ?>

    <h1>Script JSON Encoding</h1>
    <div>
        <h2>Description</h2>
        <div>
            This page encodes the value of a query parameter ("xss") with the json_decode function of PHP and
            puts the result into a script tag, where it gets set as innerText.
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
            var xss = <?= json_encode($_GET['xss'])?>;
            document.getElementById('main').innerText = xss;
        </script>
    </div>
</div>

<?php include('./../layout/footer.php') ?>

</body>

</html>