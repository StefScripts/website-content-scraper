<?php
/**
 * Router script for PHP's built-in development server
 * This handles clean URLs without .php extensions
 */

// Get the requested URI
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Remove trailing slash unless it's the root
if ($uri !== '/' && substr($uri, -1) === '/') {
 $uri = substr($uri, 0, -1);
}

// Define the document root
$docRoot = __DIR__;

// If the URI is just '/', serve index.php
if ($uri === '/') {
 require $docRoot . '/index.php';
 return true;
}

// Check if the request is for a PHP file without extension
$phpFile = $docRoot . $uri . '.php';
if (file_exists($phpFile) && is_file($phpFile)) {
 require $phpFile;
 return true;
}

// Check if it's a request for an existing file (CSS, JS, images, etc.)
$requestedFile = $docRoot . $uri;
if (file_exists($requestedFile) && is_file($requestedFile)) {
 // Let PHP's built-in server handle static files
 return false;
}

// Check if it's a directory with an index.php
$indexFile = $requestedFile . '/index.php';
if (is_dir($requestedFile) && file_exists($indexFile)) {
 require $indexFile;
 return true;
}

// If nothing matched, return 404
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <title>404 Not Found</title>
 <link rel="stylesheet" href="/styles.css">
</head>

<body>
 <div class="container section text-center">
  <h1>404 - Page Not Found</h1>
  <p>Sorry, the page you're looking for doesn't exist.</p>
  <a href="/" class="btn">Go to Homepage</a>
 </div>
</body>

</html>