<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_SERVER['REQUEST_URI'] == '/ping') {
    echo "ping from: " . $_SERVER['REMOTE_ADDR'] . "\n";
    echo "ping server: " . gethostbyname(gethostname()) . "\n";
    echo "pong\n";
} else {
    echo "404 not found";
}
