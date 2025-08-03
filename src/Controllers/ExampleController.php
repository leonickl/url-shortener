<?php

namespace App\Controllers;

use PXP\Core\Lib\Controller;

class ExampleController extends Controller
{
    public function index()
    {
        return view('main');
    }
}
