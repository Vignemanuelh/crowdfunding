<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function index()
    {
        try{
            $projects = Project::paginate(9);
            foreach ($projects as $project) {
                $project->start_date = Carbon::parse($project->start_date)->toDateString();
                $project->end_date = Carbon::parse($project->end_date)->toDateString();
            }
            return view('layouts.projects', ['projects' => $projects]);
        }catch(Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function show(Project $project)
    {
        try{
            $project->start_date = Carbon::parse($project->start_date)->toDateString();
            $project->end_date = Carbon::parse($project->end_date)->toDateString();
            return view('layouts.project_details', ['project' => $project]);
        } catch(Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function list()
    {
        try{
            $user = Auth::user();
            $projects = $user->projects()->paginate(9);
            // $projects = Project::paginate(9);
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
            'fund_collected' => 'required|numeric',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'status'=> 'boolean',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if($request->has('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'uploads/projects/';
            $file->move($path ,$filename);
        }
        $project = new Project();
        $project->title = $request->title;
        $project->description = $request->description;
        $project->financial_goal = $request->financial_goal;
        $project->fund_collected = $request->fund_collected;
        $project->user_id = auth()->user()->id;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->status = false;
        $project->image = $path.$filename;
        $project->save();
        return redirect()->route('plist')->with('status', 'Le project a été ajoutée');
    }

    public function edit(Project $project)
    {
        try{
            $project->start_date = Carbon::parse($project->start_date)->toDateString();
            $project->end_date = Carbon::parse($project->end_date)->toDateString();
            return view('dashboard.project.edit', ['project' => $project]);
        }catch(Exception $e)
        {
            return $e->getMessage();
        }

    }

    public function update(Request $request, Project $project )
    {
        $request->validate([
            'title' => 'required| string',
            'description' => 'required|string',
            'financial_goal' => 'required|numeric',
            'fund_collected' => 'required|numeric',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'status'=> 'boolean',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if($request->has('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'uploads/projects/';
            $file->move($path ,$filename);
            $project->image = $path.$filename;
        }
        $project->title = $request->title;
        $project->description = $request->description;
        $project->financial_goal = $request->financial_goal;
        $project->fund_collected = $request->fund_collected;
        $project->user_id = auth()->user()->id;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->status = false;
        $project->save();
        return redirect()->route('plist')->with('status', 'Le project a été modifiée');
    }

    public function destroy(Project $project){
        try{
            $project->delete();
        return redirect()->route('plist')->with('status', 'le project a été supprimé');
        }catch(Exception $e)
        {
            return $e->getMessage();
        }

    }
}
