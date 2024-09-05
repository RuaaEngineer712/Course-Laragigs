<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::latest()->filter(request(['tag', 'search']))->paginate(10);
        return view('Job.index', ['jobs'=> $jobs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Job.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'company' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'website' => 'nullable|url',
            'tags' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'discreption' => 'required|string',
        ]);

        $data['user_id'] = 1;

        $job = Job::create($data);

        return to_route('job.index', $job)->with('success', 'Job created successfully');
    }   


    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('Job.show', ['job' => $job]);


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
