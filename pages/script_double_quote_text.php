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
                <button onclick="window.location = '/pages/script_double_quote_text.php?xss=&quot;;alert(1);//'">
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