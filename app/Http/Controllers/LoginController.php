<?php
namespace App\Http\Controllers;

use App\Http\Models\User;
use Illuminate\Http\Request;

/**
* 
*/
class LoginController extends Controller
{
	
	function __construct()
	{
		# code...
	}

	public function doLogin(Request $request , User $user)
	{
        $userinfo = $user->get();
        errorLog($userinfo);
	}

}