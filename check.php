<?php
echo 'Path: ' . __DIR__ . '/writable/session' . '<br>';
echo 'is_dir: ' . (is_dir(__DIR__ . '/writable/session') ? 'yes' : 'no') . '<br>';
echo 'is_writable: ' . (is_writable(__DIR__ . '/writable/session') ? 'yes' : 'no') . '<br>';
?>
