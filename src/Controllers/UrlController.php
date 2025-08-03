<?php

namespace App\Controllers;

use App\Models\URL;
use PXP\Core\Controllers\Controller;

class UrlController extends Controller
{
    public function index()
    {
        return view('create');
    }

    public function shorten()
    {
        URL::create(short: request('short'), long: request('long'))->dd();
    }

    public function redirect(string $short)
    {
        URL::findBy('short', $short)->dd();
    }
}
