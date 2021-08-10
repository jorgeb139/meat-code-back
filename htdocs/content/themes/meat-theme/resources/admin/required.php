<?php

$paths = [
    'post-types',
    'ajax'
];

foreach ($paths as $path) {
    $path = themosis_path('theme') . 'resources/admin/' . $path . '/';
    $files = scandir($path);

    foreach ($files as $key => $file) {
        if ($key >= 2) {
            require($path . $file);
        }
    }
}
