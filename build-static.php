<?php
/**
 * build-static.php
 * Pre-renders the PHP pages into static HTML in dist/ for static hosting
 * (e.g. Vercel). Run from the project root with your local PHP:
 *
 *   php build-static.php
 *
 * Then commit dist/ after any content change.
 */

$root = __DIR__;
$dist = $root . '/dist';

$pages = [
    '404.php',
    'about.php',
    'audio-visual-rental-services.php',
    'blog-single.php',
    'blog.php',
    'career.php',
    'contact.php',
    'event-management.php',
    'exhibition-stand-builders.php',
    'features.php',
    'gallery.php',
    'graphic-design-printing.php',
    'image-gallery.php',
    'index.php',
    'interior-fit-out-company.php',
    'pricing.php',
    'retail-kiosk.php',
    'schedule-single.php',
    'schedule.php',
    'speaker-single.php',
    'speaker.php',
    'stage-production.php',
    'testimonials.php',
    'video-gallery.php',
];

$php = escapeshellarg(PHP_BINARY);

// Fresh dist/
if (is_dir($dist)) {
    exec('rd /s /q ' . escapeshellarg($dist) . ' 2>nul');
}
mkdir($dist, 0777, true);

// Render each page in its own process (no shared state).
foreach ($pages as $page) {
    $cmd = 'cd /d ' . escapeshellarg($root) . ' && ' . $php . ' -n -d error_reporting=0 -d display_errors=0 ' . escapeshellarg($page);
    $html = shell_exec($cmd);
    if ($html === null || $html === '') {
        fwrite(STDERR, "ERROR rendering $page\n");
        exit(1);
    }

    $outFile = $dist . '/' . preg_replace('/\.php$/', '.html', $page);
    file_put_contents($outFile, $html);
    echo "rendered $page -> " . basename($outFile) . "\n";
}

// Copy static asset directories.
function copy_dir($src, $dst)
{
    @mkdir($dst, 0777, true);
    foreach (scandir($src) as $f) {
        if ($f === '.' || $f === '..') continue;
        if (is_dir("$src/$f")) copy_dir("$src/$f", "$dst/$f");
        else copy("$src/$f", "$dst/$f");
    }
}
foreach (['css', 'js', 'images'] as $dir) {
    copy_dir("$root/$dir", "$dist/$dir");
    echo "copied $dir/\n";
}

// Rewrite internal .php links to .html (handles anchors too: career.php#apply).
foreach (glob("$dist/*.html") as $file) {
    $html = file_get_contents($file);
    $html = preg_replace('/(href=")([^"]+?)\.php(["#])/', '$1$2.html$3', $html);
    file_put_contents($file, $html);
}

echo "done: " . count($pages) . " pages in dist/\n";
