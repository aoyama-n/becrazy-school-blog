<?php
namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


class BlogRegisterController extends RegisterController
{
    protected $redirectTo = 'top';

    public function __construct(){
        $this->middleware("auth");
    }

    function AdminRegistrationForm(){
        return view('auth.register');
    }
}