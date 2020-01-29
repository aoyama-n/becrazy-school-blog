<?php
namespace App\Http\Controllers\Auth;

use App\Models\User;

class FirstUserRegisterController extends RegisterController
{
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/top';

    function FirstUserRegistrationForm(){
    	$users = User::count();
		if($users == 0){
			return view('auth/firstuser_register');
		}else{
            return redirect('top');
        }
    }
}