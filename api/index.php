<?php

// Vercel entrypoint (vercel-php runtime). All non-asset requests are routed here.

$uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/';

// Static assets: never executed as PHP. On Vercel these are handled by vercel.json
// asset routes before reaching this file; locally (php -S router mode) returning
// false makes the built-in server serve the file directly.
if (preg_match('#\.(css|js|jpg|jpeg|png|gif|svg|webp|ico|woff2?|ttf|eot|mp4|pdf|zip|txt|json|md)$#i', $uri)) {
    return false;
}

$root = dirname(__DIR__);

// Site root -> home page.
if ($uri === '/' || $uri === '') {
    require $root . '/index.php';
    return;
}

// Allow only single-segment page names, e.g. /about.php, /career.php
// (blocks direct access to incl/* and any path traversal).
if (preg_match('#^/([A-Za-z0-9_-]+)\.php$#', $uri, $m)) {
    $page = $root . '/' . $m[1] . '.php';
    if (is_file($page)) {
        require $page;
        return;
    }
}

http_response_code(404);
require $root . '/404.php';
