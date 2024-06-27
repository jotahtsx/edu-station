<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User as UserRequest;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index()
    {
        return view('admin.principals.index');
    }

    public function store(UserRequest $request)
    {
        var_dump($request->all());
    }

    public function create()
    {
        return view('admin.principals.create');
    }
}
