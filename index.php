<!doctype html>
<html lang="en">

<?php include('layout/header.php') ?>

<body>

<div class="container">
    <h1>XSS Test Site</h1>

    <div>
        <h2>Description</h2>
        <div>
            This website contains different types of common XSS vulnerabilities.
            The purpose is to use this site to test xss detection suites, to compare them.
            Not all pages have vulnerabilities, to test sensitivity and specificity.
        </div>
    </div>

    <div class="pages-list-container">
        <h3>Pages</h3>

        <div class="pages-list-group">
            <label>Simple</label>
            <div>
                <a href="pages/simple_tag.php?xss=234">Tag</a>
            </div>
            <div>
                <a href="pages/simple_value.php?xss=234">Value</a>
            </div>
            <div>
                <a href="pages/simple_comment.php?xss=234">Comment</a>
            </div>
        </div>

        <div class="pages-list-group">
            <label>JavaScript</label>
            <div>
                <a href="pages/simple_innerHTML.php?xss=234">innerHTML</a>
            </div>
            <div>
                <a href="pages/simple_innerText.php?xss=234">innerText</a>
            </div>
        </div>

        <div class="pages-list-group">
            <label>Escaping</label>
            <div>
                <a href="pages/escaping_tag.php?xss=234">Tag</a>
            </div>
            <div>
                <a href="pages/escaping_value.php?xss=234">Value</a>
            </div>
            <div>
                <a href="pages/escaping_comment.php?xss=234">Comment</a>
            </div>
        </div>

        <div class="pages-list-group">
            <label>Script Quotes</label>
            <div>
                <a href="pages/script_single_quote_text.php?xss=234">Single</a>
            </div>
            <div>
                <a href="pages/script_double_quote_text.php?xss=234">Double</a>
            </div>
            <div>
                <a href="pages/script_backticks_quote_text.php?xss=234">Backticks</a>
            </div>
        </div>

        <div class="pages-list-group">
            <label>POST</label>
            <div>
                <a href="pages/post_simple_tag.php">Tag</a>
            </div>
            <div>
                <a href="pages/post_data.php">Post Data</a>
            </div>
            <div>
                <a href="pages/post_read_data.php">Read Data</a>
            </div>
        </div>
    </div>
</div>

<?php include('layout/footer.php') ?>

</body>

</html>