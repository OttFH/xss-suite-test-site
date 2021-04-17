<!doctype html>
<html lang="en">

<?php include('./../layout/header.php') ?>

<body>

<div class="container">
    <?php include('./../layout/to_home.php') ?>

    <h1>POST Simple Tag</h1>
    <div>
        <h2>Description</h2>
        <div>
            This page puts the value of the post parameter ("xss") into a div tag.
        </div>
        <div class="vulnerability-info-container">
            <label>Has XSS vulnerability:</label>
            <div>Yes</div>
            <?php if (!getenv('HIDE_EXAMPLES') || getenv('HIDE_EXAMPLES') != 'true') { ?>
                <button onclick="loadExample()">
                    Example
                </button>
            <?php } ?>
        </div>
    </div>

    <form class="value-container" method="post">
        <label>
            XSS:
            <input id="xss-input" name="xss" value="">
        </label>
        <button id="submit-button" type="submit">POST</button>
    </form>

    <div class="value-container">
        <label>Value:</label>
        <div><?= $_POST['xss'] ?></div>
    </div>

    <?php if (!getenv('HIDE_EXAMPLES') || getenv('HIDE_EXAMPLES') != 'true') { ?>
        <script>
            function loadExample() {
                var xssInput = document.getElementById('xss-input');
                var oldValue = xssInput.value;
                xssInput.value = String.fromCharCode(60, 115, 99, 114, 105, 112, 116, 62, 97, 108, 101, 114, 116, 40,
                    49, 41, 60, 47, 115, 99, 114, 105, 112, 116, 62);
                document.getElementById('submit-button').click();
                xssInput.value = oldValue;
            }
        </script>
    <?php } ?>
</div>

<?php include('./../layout/footer.php') ?>

</body>

</html>
