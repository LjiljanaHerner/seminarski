<?php

namespace App\Http\Controllers;

use Sentinel;
use App\Product;
use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
	{
		 $users = User::all();
		 return view('admin.dashboard', compact('users'));

	}
}
