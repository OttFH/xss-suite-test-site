<!doctype html>
<html lang="en">

<?php include('./../layout/header.php') ?>

<body>

<div class="container">
    <?php include('./../layout/to_home.php') ?>

    <h1>Read Private Data Simple Tag</h1>
    <div>
        <h2>Description</h2>
        <div>
            This page displays the value of the post parameter ("xss") in a div tag, which was posted to
            <a href="/post_private_data.php">/post_private_data.php</a>.
        </div>
    </div>

    <form class="value-container" method="get">
        <label>
            ID:
            <input name="id" type="number" value="">
        </label>
        <button type="submit">Search</button>
    </form>

    <div class="value-container">
        <label>Value:</label>
        <div>
            <?php
            $fileName = '../tmp/private/data_' . $_GET['id'] . '.json';
            if (file_exists($fileName)) {
                $jsonString = file_get_contents($fileName);
                $jsonData = json_decode($jsonString);
                if (isset($jsonData) && isset($jsonData->xss)) {
                    echo $jsonData->xss;
                }
            } else if (strlen($_GET['id']) > 0) {
                http_response_code(404);
                echo 'Data with ID "' . htmlspecialchars($_GET['id']) . '" does not exist.';
            } else {
                http_response_code(400);
                echo 'Please specify a ID.';
            }
            ?>
        </div>
    </div>
</div>

<?php include('./../layout/footer.php') ?>

</body>

</html>
