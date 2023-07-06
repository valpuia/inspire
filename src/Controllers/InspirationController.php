<?php

namespace Valpuia\Inspire\Controllers;

use Illuminate\Contracts\View\View;
use Valpuia\Inspire\Inspire;

class InspirationController
{
    public function quote(Inspire $inspire): View
    {
        $quote = $inspire->quote();

        return view('inspire::index', compact('quote'));
    }

    public function random(Inspire $inspire): View
    {
        $quote = $inspire->random();

        return view('inspire::index', compact('quote'));
    }
}
