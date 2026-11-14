<?php
require __DIR__ . '/config.php';
header('Content-Type: text/plain');
$f = UPLOAD_DIR . '/_persist_marker.txt';
if (!file_exists($f)) { file_put_contents($f, date('c')); echo "Marker CREATED just now.\n"; }
else { echo "Marker already existed, created: " . file_get_contents($f) . "\n"; }
echo "Files in folder: " . implode(', ', array_slice(scandir(UPLOAD_DIR) ?: [], 2)) . "\n";
