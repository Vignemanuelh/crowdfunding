<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $projects = Project::paginate(9);
            foreach($projects as $project)
            {
                $project->start_date = Carbon::parse($project->start_date)->toDateString();
                $project->end_date = Carbon::parse($project->end_date)->toDateString();

            }
        return view('welcome', ['projects' => $projects]);
        }catch(Exception $e)
        {
            return $e->getMessage();
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
