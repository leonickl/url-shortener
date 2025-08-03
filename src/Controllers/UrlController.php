<?php

namespace App\Controllers;

use App\Models\URL;
use Exception;
use PXP\Core\Controllers\Controller;
use PXP\Core\Lib\Router;

class UrlController extends Controller
{
    public function index()
    {
        return view('create');
    }

    public function shorten()
    {
        $req = request(['long', 'short']);

        if (! filter_var($req->long, FILTER_VALIDATE_URL)) {
            throw new Exception("invalid url: $req->long");
        }

        $record = URL::create(short: $req->short, long: $req->long);

        Router::redirect("/$record->short");
    }

    public function show(string $short)
    {
        return view('show', [
            'record' => URL::findBy('short', $short),
        ]);
    }

    public function redirect(string $short)
    {
        $record = URL::findBy('short', $short);

        if (! filter_var($record->long, FILTER_VALIDATE_URL)) {
            throw new Exception("invalid url: $record->long");
        }

        Router::redirect($record->long);
    }
}
