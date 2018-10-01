<?php

namespace App\Controllers;

use App\core\Controller;
use App\Models\Tasks;

class TasksController extends Controller
{
    public function __construct()
    {
        $this->model = new Tasks();
    }

    /**
     * Show all task
     */
    public function index()
    {
        $tasks = $this->model->get();
        return view('tasks', compact('tasks'));
    }
}
