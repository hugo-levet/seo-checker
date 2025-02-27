<?php
$request = $_SERVER['REQUEST_URI'];

if ($request == '/') {
    $request = '/home.php';
}

// If the URL does not contain the .php extension
if (strpos($request, '.php') === false) {
    $request .= '.php';
}

// Check if the file exists and include it
$file = $_SERVER['DOCUMENT_ROOT'] . $request;
if (file_exists($file)) {
    // Include the file without redirection
    include $file;
} else {
    // Handle the case where the file does not exist
    http_response_code(404);
    echo "404 Not Found";
}
