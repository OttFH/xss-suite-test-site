<!doctype html>
<html lang="en">

<?php include('./../layout/header.php') ?>

<body>

<div class="container">
    <?php include('./../layout/to_home.php') ?>

    <h1>Script Double Quotes</h1>
    <div>
        <h2>Description</h2>
        <div>
            This page puts the value of a query parameter ("xss") into single quotes inside a script tag.
        </div>
        <div class="vulnerability-info-container">
            <label>Has XSS vulnerability:</label>
            <div>Yes</div>
            <?php if (!getenv('HIDE_EXAMPLES') || getenv('HIDE_EXAMPLES') != 'true') { ?>
                <button onclick="window.location = String.fromCharCode(47,112,97,103,101,115,47,115,99,114,105,112,116,
                    95,100,111,117,98,108,101,95,113,117,111,116,101,95,116,101,120,116,46,112,104,112,63,120,115,115,
                    61,34,59,97,108,101,114,116,40,49,41,59,47,47)">
                    Example
                </button>
            <?php } ?>
        </div>
    </div>

    <div class="value-container">
        <label>Value:</label>
        <div id="main"></div>

        <script>
            var xss = "<?= $_GET['xss'] ?>";
            document.getElementById('main').innerText = xss;
        </script>
    </div>
</div>

<?php include('./../layout/footer.php') ?>

</body>

</html>
