<?php require_once 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test for Twitter Card Player</title>
    <meta name="twitter:card" content="player">
    <meta name="twitter:site" content="@hugolevet_pro">
    <meta name="twitter:creator" content="@hugolevet_pro">
    <meta name="twitter:title" content="Twitter Card Player">
    <meta name="twitter:description" content="This is a test for Twitter Card Player.">
    <meta name="twitter:image" content="<?= BASE_URL ?>/images/card_player.png">
    <meta name="twitter:image:alt" content="Twitter Card Player">

    <link rel="stylesheet" href="/styles/twitter.min.css">
</head>

<body>
    <p>This page is a test for Twitter Card Player.</p>
    <p>Check this tweet to see the result in Twitter: <a href="https://twitter.com/hugolevet_pro" target="_blank">Twitter Card
            Player</a></p>
    <p>Here is a preview of the Twitter Card Player:</p>
    <div class="preview-container">
        <a class="twitter-card player" href="" target="_blank">
            <div class="image">
                <img src="<?= BASE_URL ?>/images/card_player.png" alt="Twitter Card Player">
                <svg class="play" viewBox="0 0 60 61" aria-hidden="true">
                    <g>
                        <circle cx="30" cy="30.4219" fill="#333333" r="30"></circle>
                        <path d="M22.2275 17.1971V43.6465L43.0304 30.4218L22.2275 17.1971Z" fill="white"></path>
                    </g>
                </svg>
            </div>
            <div class="text">
                <div class="link">seo-checker.link</div>
                <div class="title">Twitter Card Player</div>
                <div class="description">This is a test for Twitter Card Player.</div>
            </div>
        </a>
    </div>
</body>

</html>