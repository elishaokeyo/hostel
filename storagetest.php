<?php
require __DIR__ . '/config.php';
header('Content-Type: text/plain');
echo "Project folder: " . __DIR__ . "\n";
echo "UPLOAD_DIR: " . UPLOAD_DIR . "\n";
echo "Exists: " . (is_dir(UPLOAD_DIR) ? 'yes' : 'no') . "\n";
echo "Writable: " . (is_writable(UPLOAD_DIR) ? 'yes' : 'no') . "\n";
$f = UPLOAD_DIR . '/_test.txt';
echo "Write test: " . (@file_put_contents($f, 'ok ' . date('c')) !== false ? 'ok' : 'FAILED') . "\n";
echo "Files in folder: " . implode(', ', array_slice(scandir(UPLOAD_DIR) ?: [], 2)) . "\n";
