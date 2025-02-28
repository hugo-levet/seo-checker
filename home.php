<?php require_once 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter Card Validator</title>
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@hugolevet_pro">
    <meta name="twitter:creator" content="@hugolevet_pro">
    <meta name="twitter:title" content="Twitter Card Validator">
    <meta name="twitter:description" content="This is a simple tool to validate Twitter Cards.">
    <meta name="twitter:image" content="<?= BASE_URL ?>/images/seochecker.png">
    <meta name="twitter:image:alt" content="Twitter Card Validator">

    <link rel="stylesheet" href="/styles/global.min.css">
    <link rel="stylesheet" href="/styles/tab.min.css">
    <link rel="stylesheet" href="/styles/twitter.min.css">
    <link rel="stylesheet" href="/styles/home.min.css">

    <script src="/scripts/global.js"></script>
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
                <div role="tab" aria-controls="twitter-image">twitter:image</div>
            </header>
            <div role="tabpanel" id="twitter-card" style="display: block;">
                <ul>
                    <li>
                        <code>summary</code>: <a href="/twitter_card_summary" openOnNewWindow>check in details</a>
                    </li>
                    <li>
                        <code>summary_large_image</code>: <a href="/twitter_card_summary_large_image" openOnNewWindow>check in details</a>
                    </li>
                    <li>
                        <code>player</code>: <a href="/twitter_card_player" openOnNewWindow>check in details</a>
                    </li>
                    <li>
                        <code>app</code>: <a href="/twitter_card_app" openOnNewWindow>check in details</a>
                    </li>
                </ul>
            </div>
            <div role="tabpanel" id="twitter-image">
                <p>In the provided code, the images for different Twitter Card types are displayed with specific aspect ratios:</p>
                <ul>
                    <li><code>summary</code> and <code>player</code> The images are displayed with a 1:1 aspect ratio.</li>
                    <li><code>summary_large_image</code> The images are displayed with a 2:1 aspect ratio. <em>However, you should account for some bleed area because the actual display ratio is a bit more square than 2:1.</em></li>
                    <li><code>app</code> Image displayed for this type is directly fetched from the App Store. It's the icon of the app.</li>
                </ul>
                <p>This means that when designing images for these Twitter Cards, you should ensure that the images for summary and player are square, while the images for summary_large_image should be rectangular with a 2:1 ratio, keeping in mind the bleed area. No image is needed for the app type.</p>
            </div>
        </div>
    </section>
    <section>
        <p>The site evolves quickly based on user feedback. Feel free to share your suggestions and thoughts—I’ll implement them as best as I can! You can reach me via email or on Twitter.</p>
        <div class="contact">
            <a href="mailto:hugolevet.pro@gmail.com">hugolevet.pro@gmail.com</a>
            <a href="https://x.com/hugolevet_pro">@hugolevet_pro</a>
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