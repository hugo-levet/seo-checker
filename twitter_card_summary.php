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

    <link rel="stylesheet" href="/styles/global.min.css">
    <link rel="stylesheet" href="/styles/example.min.css">
    <link rel="stylesheet" href="/styles/twitter.min.css">

    <script src="/scripts/preview.js"></script>
</head>

<body>
    <section id="intro">
        <h1>Twitter Card Summary</h1>

        <p>
            Here is what a preview looks like when <code>twitter:card</code> = <code>summary</code>.
        </p>
        <pre><code>&lt;meta name="twitter:card" content="app"&gt;</code></pre>
    </section>
    <section>
        <p>Here is a preview of the Twitter Card Summary:</p>
        <div id="preview"></div>
    </section>
    <section>
        <p>Check out this tweet to see a summary card in action: <a href="https://x.com/hugolevet_pro/status/1895490774302851253" target="_blank">Twitter Card Summary</a></p>
    </section>

    <script>
        generateTweetPreviewFromData({
            "twitter:card": "summary",
            "twitter:site": "@hugolevet_pro",
            "twitter:creator": "@hugolevet_pro",
            "twitter:title": "Twitter Card Summary",
            "twitter:description": "This is a test for Twitter Card Summary.",
            "twitter:image": "/images/card_summary.png",
            "twitter:image:alt": "Twitter Card Summary",
            "url": "<?= BASE_URL ?>/twitter_card_summary",
        });
    </script>
</body>

</html>