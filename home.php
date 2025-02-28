<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter Card Validator</title>

    <link rel="stylesheet" href="/styles/twitter.min.css">

    <script src="/scripts/preview.js"></script>
</head>

<body>
    <h1>Twitter Card Validator</h1>

    <p>
        This is a simple tool to validate Twitter Cards.
    </p>

    <h2>Preview from url</h2>

    <form onsubmit="return handlePreviewForm(event)">
        <label for="url">URL:</label>
        <input type="url" name="url" id="url" required>
        <button type="submit">Preview</button>
    </form>

    <div id="preview"></div>

    <h2>Twitter Card Summary</h2>

    <p>
        Check here different types of Twitter Cards
    </p>
    <div>
        <code>twitter:card</code>
        <ul>
            <li>
                <a href="/twitter_card_summary"><code>summary</code></a>
            </li>
            <li>
                <a href="/twitter_card_summary_large_image"><code>summary_large_image</code></a>
            </li>
            <li>
                <a href="/twitter_card_player"><code>player</code></a>
            </li>
            <li>
                <a href="#"><code>app</code> (not implemented yet)</a>
            </li>
        </ul>
    </div>
</body>

</html>