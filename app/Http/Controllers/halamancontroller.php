<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class halamancontroller extends Controller
{
    function index()
    {
        return view("halaman/index");
    }
    function tentang()
    {
        return view("halaman/tentang");
    }
    function kontak()
    {
        $data = [
            'judul' => 'ini adala halaman kontak',
            'kontak' => [
                'email' => 'ubaidillah@gmail.com',
                'youtube' => 'kacau programing'
            ]
        ];

        return view("halaman/kontak")->with($data);
    }
}
