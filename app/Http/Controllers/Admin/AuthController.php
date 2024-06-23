<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.index');
    }

    public function home()
    {
        return view('admin.dashboard');
    }

    public function login(Request $request)
    {
        if(in_array('', $request->only('email', 'password'))) {
            $json['message'] = $this->message->error("Informe todos os dados para continuar com seu login.")->render();
            return response()->json($json);
        }

        if(!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            $json['message'] = $this->message->error("Informe um email válido para continuar com seu login.")->render();
            return response()->json($json);
        }

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(!Auth::attempt($credentials)) {
            $json['message'] = $this->message->error("O email ou senha estão incorretos. Por favor, tente novamente.")->render();
            return response()->json($json);
        }

        $json['redirect'] = route('admin.home');
        return response()->json($json);
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
