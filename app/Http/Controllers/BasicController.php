<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App;
use App\Product;
use App\User;

class BasicController extends Controller
{
    public function tasks()
	{
		return view('basic.tasks');
	}
	public function proizvodnja()
	{
		$user = Sentinel::getUser()->id;
		$products = User::find($user)->products;
		return view('basic.proizvodnja', compact('products'));
	}
}