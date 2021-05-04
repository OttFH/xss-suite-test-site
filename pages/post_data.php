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

    <form class="value-container" method="post">
        <label>
            XSS:
            <input name="xss" value="">
        </label>
        <button type="submit">POST</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $json = json_encode($_POST);
        if (strlen($json) < 1000) {
            $dirPath = '../tmp';
            if (!file_exists($dirPath)) {
                mkdir($dirPath);
            }
            $fileHandle = fopen($dirPath . '/post_data.json', 'w');
            fwrite($fileHandle, json_encode($_POST));
            fclose($fileHandle);
        } else {
            http_response_code(400);
            echo 'POST body to big.';
        }
    }
    ?>
</div>

<?php include('./../layout/footer.php') ?>

</body>

</html>
