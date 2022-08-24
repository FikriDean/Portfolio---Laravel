<?php

namespace App\Http\Controllers;

use App\Models\CommentProject;
use Illuminate\Support\Str;
use Illuminate\Database\Schema\PostgresSchemaState;
use Illuminate\Http\Request;

class CommentProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'body' => ['required', 'max:255']
        ]);

        $validatedData['project_id'] = $request->project_id;
        $validatedData['user_id'] = auth()->user()->id;

        CommentProject::create($validatedData);

        return redirect('/projects' . '/' . $request->project_slug)->with('success', 'Comment added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(CommentProject $commentproject)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(CommentProject $commentproject)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CommentProject $commentproject)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommentProject $commentproject)
    {
        CommentProject::destroy($commentproject->id);
        return redirect('/projects' . '/' . $commentproject->project->slug)->with('success', 'Comment has been deleted');
    }
}
