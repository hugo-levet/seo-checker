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

        // if it's an app, take more info from the app store
        if (isset($twitterMeta['twitter:card']) && $twitterMeta['twitter:card'] === 'app' && isset($twitterMeta['twitter:app:id:iphone'])) {
            $appStoreUrl = 'https://apps.apple.com/us/app/id' . $twitterMeta['twitter:app:id:iphone'];
            $appStoreHtml = file_get_contents($appStoreUrl);

            if ($appStoreHtml !== false) {
                $appStoreDoc = new DOMDocument();
                @$appStoreDoc->loadHTML($appStoreHtml);

                // image
                $classname = 'we-artwork';
                $finder = new DomXPath($appStoreDoc);
                $appStoreImages = $finder->query("//*[contains(@class, '$classname')]");
                $appStoreImage = $appStoreImages[0]->getElementsByTagName('source')[0]->getAttribute('srcset');
                $re = '/([\w:\/\-.]*)\s\d+w/m';
                preg_match_all($re, $appStoreImage, $matches, PREG_SET_ORDER, 0);
                $twitterMeta['app:image'] = $matches[0][1];

                // name
                $appStoreMetaTags = $appStoreDoc->getElementsByTagName('meta');
                foreach ($appStoreMetaTags as $meta) {
                    $name = $meta->getAttribute('property');
                    if ($name === 'og:title') {
                        $twitterMeta['app:name'] = $meta->getAttribute('content');
                    }
                }

                // rating and review count
                $classname = 'schema:software-application';
                $finder = new DomXPath($appStoreDoc);
                $appStoreScripts = $finder->query("//*[contains(@type, 'application/ld+json')]");
                foreach ($appStoreScripts as $script) {
                    $json = json_decode($script->nodeValue, true);
                    if (isset($json['aggregateRating'])) {
                        $twitterMeta['app:rating'] = $json['aggregateRating']['ratingValue'];
                        $twitterMeta['app:review:count'] = $json['aggregateRating']['reviewCount'];
                    }
                }
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
