<?php

namespace App\Http\Controllers;
use App\Models\Task; // افترض أنه تم استخدام نموذج Task

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all(); // استرجاع كل المهام من قاعدة البيانات

        return view('tasks.index', [
            'tasks' => $tasks, // تمرير المهام كمتغير إلى العرض
        ]);
    }
}

