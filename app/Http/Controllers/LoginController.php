<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;

class LoginController extends Controller
{
    public function login()
	{
		return view('authentication.login');
	}
	public function postLogin(Request $request)
	{
		try{
			$rememberMe = false;
			if(isset($request->remember_me))
				$rememberMe = true;
			if(Sentinel::authenticate($request->all(), $rememberMe)){
				$slug = Sentinel::getUser()->roles()->first()->slug;
				
				return redirect('/');
				/*if($slug == 'admin')
					return redirect('/earnings');
				elseif($slug == 'basic')
					return redirect('/tasks');*/
			}else{
				return redirect()->back()->with(['error'=>'Kriva autorizacija.']);
			}
			
		}catch(ThrottlingException $e){
			$delay = $e->getDelay();
			return redirect()->back()->with(['error'=>"Odbijeni ste za vrijeme $delay sekundi."]);
			
		}catch(NotActivatedException $e){
			return redirect()->back()->with(['error'=>"Vaš račun nije aktiviran!"]);
		}
		
		
	}
	public function logout()
	{
		Sentinel::logout();
		return redirect('/');
	}
}
