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
            <?php if (!getenv('HIDE_EXAMPLES') || getenv('HIDE_EXAMPLES') != 'true') { ?>
                <button onclick="window.location = '/pages/simple_innerHTML.php?xss=<img src=/img/xss-meme.jpg onload=alert(1) />'">
                    Example
                </button>
            <?php } ?>
        </div>
    </div>

    <div class="value-container">
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