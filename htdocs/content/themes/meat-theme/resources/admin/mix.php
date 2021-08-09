<?php

use Illuminate\Support\Str;

if (!function_exists('mix')) {
    /**
     * Get the path to a versioned Mix file.
     *
     * @param  string $path
     * @param  string $manifestDirectory
     *
     * @throws \Exception
     */
    function mix($asset)
    {
        $path = '';
        if (!Str::startsWith($path, '/')) {
            $path = "/{$path}";
        }

        $path = str_replace('admin','', str_replace('resources/','', __DIR__));
        $manifestPath = $path .'dist/mix-manifest.json';

        if (! file_exists($manifestPath)) {
            throw new Exception('The Mix manifest does not exist.');
        }

        $manifest = json_decode(file_get_contents($manifestPath), true);

        if (!isset($manifest[$asset])) {
            throw new \Exception("Unable to locate Mix file: {$asset}.");
        }

        return themosis_assets() . $manifest[$asset];
    }
}
