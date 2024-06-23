<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Support\Message;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    
    protected $message;

    public function __construct()
    {
        $this->message = new Message();
    }
}
