<!doctype html>
<html lang="en">

<?php include('./../layout/header.php') ?>

<body>

<div class="container">
    <h1>Simple innerHTML</h1>
    <div>
        <h2>Description</h2>
        <div>
            This page sets the value of a query parameter ("xss") as innerHTML of a div tag.
            This is done in JavaScript, not in PHP.
        </div>
    </div>

    <br>
    <div>
        <label>Value:</label>
        <div id="main"></div>

        <script>
            var params = new URLSearchParams(window.location.search);
            document.getElementById('main').innerHTML = params.get('xss');
        </script>
    </div>
</div>

<?php include('./../layout/footer.php') ?>

</body>

</html>