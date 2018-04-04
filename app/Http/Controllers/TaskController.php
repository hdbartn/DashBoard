<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
	
class TaskController extends Controller
{
	public function Create() {
		return view('tasks.create');
	}

	public function Store() {
		
		$this->validate(request(), [
			'name' => 'required|min:3'
		]);
		
		$task = new Task();
		
		$task->name = request('name');
		$task->content = request('description');
		$task->save();

		return redirect()->home();
	}

	public function Show(Task $task) {
		return view('tasks.show', compact('task'));
	}
}