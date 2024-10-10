<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $jobs=Job::all();
        return response()->json([
           ' job' => $jobs,
           'message'=>'data added'
           
        ]);
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
        $job=Job::create($request->all());
        return response ()-> json($job);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $job=Job::find($id);
        return response()->json([
            ' job' => $job,
            'message'=>'here is your id'
            
         ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $job = Job::find($id);
        return response ()-> json($job);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $job = Job::find($id);
        $job->update($request->all());
        // $job->update([
        //     'title' => $request->input('title'),
        //     'type' => $request->input('type'),
        //     'location' => $request->input('location'),
        //     'description' =>$request->input('description'),
        //     'salary' =>$request->input('salary'),
        //     'name' => $request->input('name'),
        //     'cdescription' => $request->input('cdescription'),
        //     'contactEmail' => $request->input('contactEmail'),
        //     'contactPhone' => $request->input('contactPhone'),
        // ]);

        return response ()-> json($job);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $job = Job::find($id);
        $job->delete();

        return response()->json([
           
            'message'=>'job deleted sucessfully'
            
         ]);


    }
}
