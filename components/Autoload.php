<?php


class Autoload
{
    function loadClass($className)
    {
        $array_paths = array(
            '/models/',
            '/components/'
        );

        foreach ($array_paths as $path) {
            $path = ROOT_DIR . $path . $className . '.php';
            if (is_file($path)) {
                include_once $path;
            }
        }
    }
}