<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Carbon\Carbon;
use Exception;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('layouts.projects');
    }

    public function show()
    {
        return view('layouts.project_details');
    }

    public function list()
    {
        try{
            $projects = Project::paginate(8);
            foreach($projects as $project)
            {
                $project->start_date = Carbon::parse($project->start_date)->toDateString();
                $project->end_date = Carbon::parse($project->end_date)->toDateString();
            }
       return view('dashboard.project.list', ['projects' => $projects]);
       } catch(Exception $e)
       {
           return $e->getMessage();
       }
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required| string',
            'description' => 'required|string',
            'financial_goal' => 'required|numeric',
            'min_contribution' => 'required|numeric',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'status'=> 'boolean',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if($request->has('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = '/uploads/projects/';
            $file->move($path ,$filename);
        }
        $project = new Project();
        $project->title = $request->title;
        $project->description = $request->description;
        $project->financial_goal = $request->financial_goal;
        $project->min_contribution = $request->min_contribution;
        $project->user_id = auth()->user()->id;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->status = false;
        $project->image = $path.$filename;
        $project->save();
        return redirect()->route('home')->with('status', 'La voiture a été ajoutée');
    }

    public function edit(Project $project)
    {
        return view('dashboard.project.edit', ['project' => $project]);
    }

    public function update(Request $request, Project $project )
    {
        $request->validate([
            'title' => 'required| string',
            'description' => 'required|string',
            'financial_goal' => 'required|numeric',
            'min_contribution' => 'required|numeric',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'status'=> 'boolean',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if($request->has('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = '/uploads/projects/';
            $file->move($path ,$filename);
        }
        $project->title = $request->title;
        $project->description = $request->description;
        $project->financial_goal = $request->financial_goal;
        $project->min_contribution = $request->min_contribution;
        $project->user_id = auth()->user()->id;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->status = false;
        $project->image = $path.$filename;
        $project->save();
        return redirect()->route('home')->with('status', 'La voiture a été ajoutée');
    }
}
