<?php

/**
 *  Main Helper of CoreSystem
 * Do not Edit this helper unless your modification will be replace if any update
 * from CoreSystem
 *
 *  */


if (!function_exists('core_path')) {

    function core_path($path)
    {
        return __DIR__ . '../' . $path;
    }
}
