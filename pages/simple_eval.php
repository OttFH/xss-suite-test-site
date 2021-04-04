<!doctype html>
<html lang="en">

<?php include('./../layout/header.php') ?>

<body>

<div class="container">
    <?php include('./../layout/to_home.php') ?>

    <h1>Simple innerHTML</h1>
    <div>
        <h2>Description</h2>
        <div>
            This page sets the value of a query parameter ("xss") as innerHTML of a div tag.
            This is done in JavaScript, not in PHP.
        </div>
        <div class="vulnerability-info-container">
            <label>Has XSS vulnerability:</label>
            <div>Yes</div>
            <button onclick="window.location = '/pages/simple_eval.php?xss=alert(1)'">
                Example
            </button>
        </div>
    </div>

    <div class="value-container">
        <label>Value:</label>
        <div id="main"></div>

        <script>
            var params = new URLSearchParams(window.location.search);
            document.getElementById('main').innerText = eval(params.get('xss'));
        </script>
    </div>
</div>

<?php include('./../layout/footer.php') ?>

</body>

</html>