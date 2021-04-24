<!doctype html>
<html lang="en">

<?php include('./../layout/header.php') ?>

<body>

<div class="container">
    <?php include('./../layout/to_home.php') ?>

    <h1>Delayed innerHTML</h1>
    <div>
        <h2>Description</h2>
        <div>
            This page sets the value of a query parameter ("xss") as innerHTML of a div tag, after waiting 1 second.
            This is done in JavaScript, not in PHP.
        </div>
        <div class="vulnerability-info-container">
            <label>Has XSS vulnerability:</label>
            <div>Yes</div>
            <?php if (!getenv('HIDE_EXAMPLES') || getenv('HIDE_EXAMPLES') != 'true') { ?>
                <button onclick="window.location = String.fromCharCode(47,112,97,103,101,115,47,100,101,108,97,121,101,100,95,105,110,110,
                    101,114,72,84,77,76,46,112,104,112,63,120,115,115,61,60,105,109,103,32,115,114,99,61,47,105,109,103,
                    47,120,115,115,45,109,101,109,101,46,106,112,103,32,111,110,108,111,97,100,61,97,108,101,114,116,40,
                    49,41,32,47,62)">
                    Example
                </button>
            <?php } ?>
        </div>
    </div>

    <div class="value-container">
        <label>Value:</label>
        <div id="main"></div>

        <script>
            setTimeout(function () {
                var params = new URLSearchParams(window.location.search);
                document.getElementById('main').innerHTML = params.get('xss');
            }, 1000)
        </script>
    </div>
</div>

<?php include('./../layout/footer.php') ?>

</body>

</html>
