<?php
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
