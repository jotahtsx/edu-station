<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index()
    {
        return view('admin.principals.index');
    }

    public function store(Request $request)
    {
        var_dump($request->all());
    }

    public function create()
    {
        return view('admin.principals.create');
    }
}
