<?php
/**
 * Description of IndexController.php
 * @copyright Copyright (c) MISTER.AM, LLC
 * @author    Egor Gerasimchuk <egor@mister.am>
 */

namespace Otus\Http\Controllers;


final class IndexController extends Controller
{

    public function index()
    {
        $q = $this->get('q');

        if (!$q) {
            $this->response('q is required', 422);
            return;
        }

        $this->response($q, 200);
    }

}