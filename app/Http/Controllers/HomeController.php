<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index() {
		$tasks = \App\Task::all();
		return view('overview', compact('tasks'));
	}
}
