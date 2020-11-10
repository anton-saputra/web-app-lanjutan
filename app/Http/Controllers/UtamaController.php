<?php

namespace App\Http\Controllers;

class UtamaController extends Controller
{
    public function test()
    {
        return view("view-1");
    }

    public function index()
    {
        return view("test-tema"); // view dengan template
    }

    public function artikel()
    {
        return view("artikel");
    }

    public function trending()
    {
        return view("trending");
    }

    public function hiburan()
    {
        return view("hiburan");
    }
}