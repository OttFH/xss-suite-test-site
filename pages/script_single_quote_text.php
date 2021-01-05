<!doctype html>
<html lang="en">

<?php include('./../layout/header.php') ?>

<body>

<div class="container">
    <h1>Script Single Quotes</h1>
    <div>
        <h2>Description</h2>
        <div>
            This page puts the value of a query parameter ("xss") into single quotes inside a script tag.
        </div>
    </div>

    <br>
    <div>
        <label>Value:</label>
        <div id="main"></div>

        <script>
            var xss = '<?= $_GET['xss'] ?>';
            document.getElementById('main').innerText = xss;
        </script>
    </div>
</div>

<?php include('./../layout/footer.php') ?>

</body>

</html>