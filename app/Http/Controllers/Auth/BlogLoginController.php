<?php
namespace App\Http\Controllers\Auth;

class BlogLoginController extends LoginController
{

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    protected $redirectTo = '/top';
}