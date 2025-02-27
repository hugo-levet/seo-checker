<?php require_once 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test for Twitter Card Summary</title>
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@hugolevet_pro">
    <meta name="twitter:creator" content="@hugolevet_pro">
    <meta name="twitter:title" content="Twitter Card Summary">
    <meta name="twitter:description" content="This is a test for Twitter Card Summary.">
    <meta name="twitter:image" content="<?= BASE_URL ?>/images/card_summary.png">
    <meta name="twitter:image:alt" content="Twitter Card Summary">

    <link rel="stylesheet" href="/styles/twitter.min.css">
</head>

<body>
    <p>This page is a test for Twitter Card Summary.</p>
    <p>Check this tweet to see the result in Twitter: <a href="https://twitter.com/hugolevet_pro" target="_blank">Twitter Card
            Summary</a></p>
    <p>Here is a preview of the Twitter Card Summary:</p>
    <div class="preview-container">
        <a class="twitter-card summary" href="" target="_blank">
            <img src="<?= BASE_URL ?>/images/card_summary.png" alt="Twitter Card Summary">
            <div class="text">
                <div class="link">seo-checker.link</div>
                <div class="title">Twitter Card Summary</div>
                <div class="description">This is a test for Twitter Card Summary.</div>
            </div>
        </a>
    </div>
</body>

</html>