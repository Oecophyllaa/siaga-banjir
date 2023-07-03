<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
	/**
	 * show application admin dashboard
	 *
	 * @param Type $var Description
	 * @return type
	 * @throws conditon
	 **/
	public function index()
	{
		return view('admin.dashboard');
	}
}
