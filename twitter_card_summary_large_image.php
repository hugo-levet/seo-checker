<?php require_once 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test for Twitter Card Summary with Large Image</title>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@hugolevet_pro">
    <meta name="twitter:creator" content="@hugolevet_pro">
    <meta name="twitter:title" content="Twitter Card Summary with Large Image">
    <meta name="twitter:description" content="This is a test for Twitter Card Summary with Large Image.">
    <meta name="twitter:image" content="<?= BASE_URL ?>/images/card_summary_large_image.png">
    <meta name="twitter:image:alt" content="Twitter Card Summary with Large Image">

    <link rel="stylesheet" href="/styles/twitter.min.css">

    <script src="/scripts/preview.js"></script>
</head>

<body>
    <p>This page is a test for Twitter Card Summary with Large Image.</p>
    <p>Check this tweet to see the result in Twitter: <a href="https://twitter.com/hugolevet_pro" target="_blank">Twitter Card
            Summary</a></p>
    <p>Here is a preview of the Twitter Card Summary with Large Image:</p>
    <div id="preview"></div>

    <script>
        generateTweetPreviewFromData({
            "twitter:card": "summary_large_image",
            "twitter:site": "@hugolevet_pro",
            "twitter:creator": "@hugolevet_pro",
            "twitter:title": "Twitter Card Summary with Large Image",
            "twitter:description": "This is a test for Twitter Card Summary with Large Image.",
            "twitter:image": "/images/card_summary_large_image.png",
            "twitter:image:alt": "Twitter Card Summary with Large Image",
            "url": "<?= BASE_URL ?>/twitter_card_summary_large_image",
        });
    </script>
</body>

</html>