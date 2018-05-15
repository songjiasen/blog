<?php
namespace App\Http\Controllers;

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

	public function doLogin(Request $request)
	{
        error_log(
            "------".date("Y-m-d H:i:s")."------\n".print_r($request->all(),1)."\n------".date("Y-m-d H:i:s")."------\n",
            3,
            "my.log"
        );
	}

}