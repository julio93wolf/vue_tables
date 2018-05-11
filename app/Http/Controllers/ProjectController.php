<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;
use App\Services\VueTables\EloquentVueTables;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::all();
        return view('projects.index',compact('projects'));
    }

    public function api(){
        $table = new EloquentVueTables;
        $data = $table->get(new Project, ['id','name','cost','owner','assigned_by']);

        return response()->json($data);
    }
}
