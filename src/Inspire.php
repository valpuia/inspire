<?php

namespace Valpuia\Inspire;

use Illuminate\Support\Facades\Http;

class Inspire
{
    public function quote()
    {
        $response = Http::get('https://dummyjson.com/quotes/1');

        return $response['quote'].' -'.$response['author'];
    }
}