<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Gudang STS | Home',
            'is_active' => 1
        ];
        return view('home/index', $data);
    }
}
