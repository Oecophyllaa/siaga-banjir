<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Infographic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index()
	{
		$infographics = Infographic::latest()->take(3)->get();

		return view('front.landing', [
			'infographics' => $infographics,
		]);
	}
}
