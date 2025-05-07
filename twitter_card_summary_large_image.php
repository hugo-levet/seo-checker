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

    <link rel="stylesheet" href="/styles/global.min.css">
    <link rel="stylesheet" href="/styles/example.min.css">
    <link rel="stylesheet" href="/styles/twitter.min.css">

    <script src="/scripts/preview.js"></script>
</head>

<body>
    <section id="intro">
        <div class="content">
            <h1>Twitter Card Summary with Large Image</h1>

            <p>
                Here is what a preview looks like when <code>twitter:card</code> = <code>summary_large_image</code>.
            </p>
            <pre><code>&lt;meta name="twitter:card" content="summary_large_image"&gt;</code></pre>
        </div>
        <div class="ezvezuvboul">
            <iframe src="https://bazar.hugolevet.fr/supportPreview/?source=seo-checker" frameborder="0"></iframe>
        </div>
    </section>
    <section>
        <p>Here is a preview of the Twitter Card Summary with Large Image:</p>
        <div id="preview"></div>
    </section>
    <section>
        <p>Check out this tweet to see a summary card with large image in action: <a href="https://x.com/mywalletaccount/status/1798654618957930498" target="_blank">Twitter Card Summary with Large Image</a></p>
    </section>

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