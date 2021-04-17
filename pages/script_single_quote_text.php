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
            This page puts the escaped value of a query parameter ("xss") into single quotes inside a script tag.
            To escape the value the PHP function "htmlspecialchars" is used.
        </div>
        <div class="vulnerability-info-container">
            <label>Has XSS vulnerability:</label>
            <div>Yes</div>
            <?php if (!getenv('HIDE_EXAMPLES') || getenv('HIDE_EXAMPLES') != 'true') { ?>
                <button onclick="window.location = String.fromCharCode(47,112,97,103,101,115,47,115,99,114,105,112,116,
                    95,115,105,110,103,108,101,95,113,117,111,116,101,95,116,101,120,116,46,112,104,112,63,120,115,115,
                    61,39,59,97,108,101,114,116,40,49,41,59,47,47)">
                    Example
                </button>
            <?php } ?>
        </div>
    </div>

    <div class="value-container">
        <label>Value:</label>
        <div id="main"></div>

        <script>
            var xss = '<?= htmlspecialchars($_GET['xss']) ?>';
            document.getElementById('main').innerHTML = xss;
        </script>
    </div>
</div>

<?php include('./../layout/footer.php') ?>

</body>

</html>
