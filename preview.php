<?php
// preview.php - Simulates Vercel routing locally

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// 1. Serve static assets directly from root
// Check if file exists in root (e.g. assets/css/style.css)
if (file_exists(__DIR__ . $uri) && !is_dir(__DIR__ . $uri)) {
    return false; // Standard PHP built-in server behavior: serve the file
}

// 2. Map PHP requests to the 'api' folder
// Example: /about.php -> /api/about.php
// Example: / -> /api/index.php

$target = null;

if ($uri === '/' || $uri === '/index.php') {
    $target = 'api/index.php';
} elseif (str_ends_with($uri, '.php')) {
    $target = 'api' . $uri;
}

if ($target && file_exists(__DIR__ . '/' . $target)) {
    // We must switch to the 'api' directory so relative includes in the PHP files work
    chdir(__DIR__ . '/api');
    require __DIR__ . '/' . $target;
} else {
    // 404
    http_response_code(404);
    echo "404 Not Found (Local Preview)";
    echo "<br>Tried to load: " . htmlspecialchars($target ?? $uri);
}
