<?php

header('Content-Type: application/json');

if (isset($_GET['url'])) {
    $url = $_GET['url'];
    $html = file_get_contents($url);

    if ($html !== false) {
        $doc = new DOMDocument();
        @$doc->loadHTML($html);
        $metaTags = $doc->getElementsByTagName('meta');
        $twitterMeta = [];

        foreach ($metaTags as $meta) {
            $name = $meta->getAttribute('name');
            if (strpos($name, 'twitter:') === 0) {
                $twitterMeta[$name] = $meta->getAttribute('content');
            }
        }

        // Try again with property attribute and add only if not already set
        foreach ($metaTags as $meta) {
            $name = $meta->getAttribute('property');
            if (strpos($name, 'twitter:') === 0) {
                if (!isset($twitterMeta[$name]))
                    $twitterMeta[$name] = $meta->getAttribute('content');
            }
        }

        // sanitize output
        foreach ($twitterMeta as $key => $value) {
            $twitterMeta[$key] = htmlspecialchars($value);
            $twitterMeta[$key] = mb_convert_encoding($twitterMeta[$key], 'UTF-8');
            $twitterMeta[$key] = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $twitterMeta[$key]);
            $twitterMeta[$key] = preg_replace('/\s+/', ' ', $twitterMeta[$key]);
        }

        if (!empty($twitterMeta)) {
            echo json_encode($twitterMeta);
        } else {
            echo json_encode(['error' => 'No twitter: meta tags found']);
        }
    } else {
        echo json_encode(['error' => 'Unable to retrieve URL content']);
    }
} else {
    echo json_encode(['error' => 'No URL provided']);
}
