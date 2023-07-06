<?php

namespace Valpuia\Inspire\Controllers;

use Valpuia\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire)
    {
        $quote = $inspire->quote();

        return view('inspire::index', compact('quote'));
    }
}
