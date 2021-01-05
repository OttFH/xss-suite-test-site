<!doctype html>
<html lang="en">

<?php include('./../layout/header.php') ?>

<body>

<div class="container">
    <?php include('./../layout/to_home.php') ?>

    <h1>POST Data</h1>
    <div>
        <h2>Description</h2>
        <div>
            This page writes the post data into a file and displays it on
            <a href="/pages/post_read_data.php">this page</a>.
        </div>
    </div>

    <br>
    <form method="post">
        <label>
            XSS:
            <input name="xss" value="">
        </label>
        <button type="submit">POST</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!file_exists('./tmp')) {
            mkdir('./tmp');
        }
        $fileHandle = fopen('./tmp/post_data.json', 'w');
        fwrite($fileHandle, json_encode($_POST));
        fclose($fileHandle);
    }
    ?>
</div>

<?php include('./../layout/footer.php') ?>

</body>

</html>