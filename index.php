<?php
$links = json_decode(file_get_contents('links.json'), true);

if(array_key_exists(trim($_SERVER['REQUEST_URI'], '/'), $links)){
    header('Location: ' . $links[trim($_SERVER['REQUEST_URI'], '/')]);
}
else{
    header('HTTP/1.0 404 Not Found');
    echo 'Unknown link.';
}
