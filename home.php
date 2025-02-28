<?php require_once 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter Card Validator</title>

    <link rel="stylesheet" href="/styles/global.min.css">
    <link rel="stylesheet" href="/styles/tab.min.css">
    <link rel="stylesheet" href="/styles/twitter.min.css">

    <script src="/scripts/preview.js"></script>
    <script src="/scripts/tab.js"></script>
</head>

<body>
    <section id="intro">
        <h1>Twitter Card Validator</h1>

        <p>
            This is a simple tool to validate Twitter Cards.
        </p>
    </section>

    <section id="preview-from-url">
        <h2>Preview from url</h2>

        <form onsubmit="return handlePreviewForm(event)">
            <label for="url">URL:</label>
            <input type="url" name="url" id="url" value="https://" required>
            <button type="submit">Preview</button>
        </form>

        <div id="preview"></div>
    </section>

    <section>
        <h2>Twitter Card Documentation</h2>

        <p>
            Check here different meta tags for Twitter Cards.
        </p>
        <div class="tab-container">
            <header role="tablist">
                <div role="tab" aria-controls="twitter-card" aria-selected="true">twitter:card</div>
                <div role="tab" aria-controls="twitter-card">???</div>
                <div role="tab" aria-controls="twitter-card">???</div>
                <div role="tab" aria-controls="twitter-card">???</div>
            </header>
            <div role="tabpanel" id="twitter-card" style="display: block;">
                <ul>
                    <li>
                        <code>summary</code>: <a href="/twitter_card_summary">check in details</a>
                    </li>
                    <li>
                        <code>summary_large_image</code>: <a href="/twitter_card_summary_large_image">check in details</a>
                    </li>
                    <li>
                        <code>player</code>: <a href="/twitter_card_player">check in details</a>
                    </li>
                    <li>
                        <code>app</code>: <a href="/twitter_card_app">check in details</a>
                    </li>
                </ul>
            </div>
        </div>
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