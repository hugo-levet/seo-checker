<?php require_once 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test for Twitter Card App</title>
    <meta name="twitter:card" content="app">
    <meta name="twitter:site" content="@hugolevet_pro">
    <meta name="twitter:creator" content="@hugolevet_pro">
    <meta name="twitter:title" content="Twitter Card App">
    <meta name="twitter:description" content="This is a test for Twitter Card App.">
    <meta name="twitter:image" content="<?= BASE_URL ?>/images/card_app.png">
    <meta name="twitter:image:alt" content="Twitter Card App">

    <link rel="stylesheet" href="/styles/twitter.min.css">

    <script src="/scripts/preview.js"></script>
</head>

<body>
    <p>This page is a test for Twitter Card App.</p>
    <p>Check this tweet to see the result in Twitter: <a href="https://twitter.com/hugolevet_pro" target="_blank">Twitter Card
            App</a></p>
    <p>Here is a preview of the Twitter Card App:</p>
    <div id="preview"></div>

    <script>
        generateTweetPreviewFromData({
            "twitter:card": "app",
            "twitter:site": "@hugolevet_pro",
            "twitter:description": "This is a test for Twitter Card Summary.",
            "twitter:app:id:iphone": "?",
            "twitter:app:id:googleplay": "?",
            "app:image": "/images/card_app.png",
            "app:name": "Twitter Card App",
            "app:rating": "4.78945",
            "app:review:count": "343696",
        });
    </script>
</body>

</html>