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

    <link rel="stylesheet" href="/styles/global.min.css">
    <link rel="stylesheet" href="/styles/example.min.css">
    <link rel="stylesheet" href="/styles/twitter.min.css">

    <script src="/scripts/preview.js"></script>
</head>

<body>
    <section id="intro">
        <h1>Twitter Card App</h1>

        <p>
            Here is what a preview looks like when <code>twitter:card</code> = <code>app</code>.
        </p>
        <pre><code>&lt;meta name="twitter:card" content="app"&gt;</code></pre>
    </section>
    <section>
        <p>Here is a preview of the Twitter Card App:</p>
        <div id="preview"></div>
    </section>
    <section>
        <p>Check out this tweet to see an app card in action: <a href="https://twitter.com/hugolevet_pro" target="_blank">Twitter Card App</a></p>
    </section>

    <script>
        generateTweetPreviewFromData({
            "twitter:card": "app",
            "twitter:site": "@hugolevet_pro",
            "twitter:creator": "@hugolevet_pro",
            "twitter:title": "Twitter Card App",
            "twitter:description": "This is a test for Twitter Card App.",
            "twitter:image": "/images/card_app.png",
            "twitter:image:alt": "Twitter Card App",
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