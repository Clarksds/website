<?php
    $request = $_SERVER['REQUEST_URI'];
    if (preg_match('/\.html$/', $request)) {
        header("Location: " . substr($request, 0, -5), true, 301);
        exit();
    }
    // the rest of your PHP code goes here
?>
