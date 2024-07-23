<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function programs()
    {
        return view('admin.projects');
    }

    public function blogs()
    {
        return view('admin.blogs');
    }
}
