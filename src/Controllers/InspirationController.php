<?php

namespace Valpuia\Inspire\Controllers;

use Illuminate\Contracts\View\View;
use Valpuia\Inspire\Inspire;

class InspirationController
{
    public function index(Inspire $inspire): View
    {
        $quote = $inspire->quotes();

        return view('inspire::index', compact('quote'));
    }

    public function show(Inspire $inspire, $id): View
    {
        $quote = $inspire->quote($id);

        return view('inspire::index', compact('quote'));
    }

    public function random(Inspire $inspire): View
    {
        $quote = $inspire->random();

        return view('inspire::index', compact('quote'));
    }
}
