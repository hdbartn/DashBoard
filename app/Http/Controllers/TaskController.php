<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
	
class TaskController extends Controller
{
	public function Create() {
		return view('tasks.create');
	}

	public function Show(Task $task) {
		return view('tasks.show', compact('task'));
	}

	public function Edit(Task $task) {
		
		return view('tasks.edit', compact('task'));
	}

	public function Store(Task $task = null) {

		$this->validate(request(), [
			'name' => 'required|min:3'
		]);
		
		if (!isset($task)) {
			$task = new Task();
		}
		
		$task->name = request('name');	
		$task->content = request('description');
		$task->save();

		return redirect()->home();
	}

	public function Destroy(Task $task) {
		$task->deleted = true;
		$task->save();
		return back();
	}

}