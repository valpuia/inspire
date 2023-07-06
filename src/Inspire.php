<?php

namespace Valpuia\Inspire;

use Illuminate\Support\Facades\Http;

class Inspire
{
    public function quotes()
    {
        return Http::get('https://dummyjson.com/quotes');
    }

    public function quote($id)
    {
        $response = Http::get('https://dummyjson.com/quotes/'.$id);

        return $response['quote'].' -'.$response['author'];
    }

    public function random()
    {
        $response = Http::get('https://dummyjson.com/quotes/random');

        return $response['quote'].' -'.$response['author'];
    }
}
