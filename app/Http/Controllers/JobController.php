<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Exception;
use Illuminate\Http\Request;

class JobController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::query()
        ->when(auth()->check(), function ($query) {
            return $query->where('user_id', auth()->id());
        })
        ->latest()
        ->filter(request(['tags', 'search'])) // Filter by tags and search if available
        ->paginate(10);
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
        // dd($request);
        $data = $request->validate([
            'company' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'website' => 'required|url',
            'tags' => 'required|string',
            'logo' => 'nullable|image|max:2048', 
            'discreption' => 'required|string',
        ]);

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('logos', 'public');
        }


        $data['user_id'] = $request->user()->id;

        $job = Job::create($data);

        return to_route('job.index', $job)->with('message', 'Job created successfully');
    }   


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $job = Job::find($id);
    
        // dd($job->title);
        return view('job.show', ['job' => $job]);
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
