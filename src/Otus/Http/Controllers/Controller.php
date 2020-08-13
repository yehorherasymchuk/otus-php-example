<?php
/**
 * Description of Controller.php
 * @copyright Copyright (c) MISTER.AM, LLC
 * @author    Egor Gerasimchuk <egor@mister.am>
 */

namespace Otus\Http\Controllers;


abstract class Controller
{

    protected function get(string $key, $default = null)
    {
        if (array_key_exists($key, $_GET)) {
            return $_GET[$key];
        }
        return $default;
    }

    protected function response(string $data, int $status = 200): void
    {
        http_response_code($status);
        echo $data;
    }

}