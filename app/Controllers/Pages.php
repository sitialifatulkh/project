<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Unipdu Press',
            'tes' => ['satu', 'dua', 'tiga']

        ];
        return view('Pages/home', $data);
    }
    public function about()
    {
        $data['title'] = 'Home | Unipdu Press';
        $data['tes'] = ['satu', 'dua', 'tiga'];
        return view('Pages/about', $data);
    }
}
