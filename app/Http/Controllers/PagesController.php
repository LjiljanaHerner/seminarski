<?php

namespace App\Http\Controllers;
use View;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use Mail;
use Session;


class PagesController extends Controller
{
    public function index()
	{
		return view('layouts.page_content');
	}
	 public function about_us()
	{
		return view('pages.about');
	}
	public function ponuda()
	{
		return view('pages.ponuda');
	}
	public function kontakt()
	{
		return view('pages.kontakt');
	}
	
}
