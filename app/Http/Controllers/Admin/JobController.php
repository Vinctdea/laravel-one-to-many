<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\JobsRequest;
use Illuminate\Http\Request;
use App\Functions\Helper;

use App\Models\Job;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::orderBy('id', 'desc')->get();
        return view('admin.jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JobsRequest $request)
    {

        $data = $request->all();
        $data['slug'] = Helper::generateSlug($data['title'], Job::class);
        $job = Job::create($data);
        return redirect()->route('admin.jobs.show', $job);
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('admin.jobs.show', compact('job'));
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
