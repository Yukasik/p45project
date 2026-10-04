<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showIndex()
    {
        return view('home');
    }

    public $array = [
        ['id' => 1, 'title' => 'продукт 1', 'price' => 500, 'path' => "pict1.jpg"],
        ['id' => 2, 'title' => 'продукт 2', 'price' => 1500, 'path' => "pict2.jpg"],
        ['id' => 3, 'title' => 'продукт 3', 'price' => 100, 'path' => "pict3.jpg"],
        ['id' => 4, 'title' => 'продукт 4', 'price' => 200, 'path' => "pict4.jpg"],
        ['id' => 5, 'title' => 'продукт 5', 'price' => 700, 'path' => "pict5.jpg"],
        ['id' => 6, 'title' => 'продукт 6', 'price' => 34000, 'path' => "pict6.jpg"],
        ['id' => 7, 'title' => 'продукт 7', 'price' => 45343, 'path' => "pict7.jpg"],
        ['id' => 8, 'title' => 'продукт 8', 'price' => 553000, 'path' => "pict8.jpg"],
    ];

    public function showArray()
    {
        $array = $this->array;
        return view('array', compact('array'));
    }

    public function shuffleArray()
    {
        $array = $this->array;
        shuffle($array);
        return view('array', compact('array'));
    }

    public function sortArray()
    {
        $array = $this->array;
        for ($i = 0; $i < 8; $i++) {
            for ($j = 0; $j < 7; $j++) {
                if ($array[$j]['price'] > $array[$j + 1]['price']) {
                    $a = $array[$j];
                    $array[$j] = $array[$j + 1];
                    $array[$j + 1] = $a;
                }
            }
        }
        return view('array', compact('array'));
    }

    public function filterArray()
    {
        $array = [];

        foreach ($this->array as $item) {
            if ($item['price'] > 1000) {
                $array[] = $item;
            }
        }

        return view('array', compact('array'));
    }
}
