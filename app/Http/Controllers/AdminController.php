<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function photo()
    {
        $photos = Photo::all();
        return view('admin.photo', compact('photos'));
    }

    public function gear()
    {
        return view('admin.gear');
    }

    public function social()
    {
        return view('admin.social');
    }

    public function addadmin()
    {
        return view('auth.register');
    }

    public function create()
    {
        if (auth()->user() != null) {
            return view('admin.create');
        } else {
            return redirect('/');
        }
    }
}
