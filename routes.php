<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$uri = str_replace('/LEARNING', '', $uri);
$uri = rtrim($uri, '/');
if ($uri === '') $uri = '/';

$routes = [
    '/' => 'controllers/index.php',
    '/index.php' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/notes' => 'controllers/notes.php',
    '/contact' => 'controllers/contact.php',
];

if (array_key_exists($uri, $routes)) {
    require BASE_PATH . '/' . $routes[$uri];
} else {
    http_response_code(404);
    echo "404 - Page Not Found";
}
