<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index() {
		$active = \App\Task::getActive();
		$done = \App\Task::getDone();

		return view('overview', compact('active', 'done'));
	}
}
