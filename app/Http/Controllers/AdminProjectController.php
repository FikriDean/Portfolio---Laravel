<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class AdminProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');

        return view('dashboard.admin.projects.index', [
            'title' => 'Projects',
            'projects' => Project::with(['category', 'user'])->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('admin');

        return view('dashboard.admin.projects.create', [
            'title' => 'Insert Project',
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('admin');

        $validatedData = $request->validate([
            'title' => ['required', 'min:3', 'max:50'],
            'image' => ['image', 'file', 'max:1024'],
            'category_id' => ['required'],
            'body' => ['required', 'min:10'],
            'link' => ['url']
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('public_projects');
            $image = $request->file('image');
            $input['imageName'] = $validatedData['image'];
            $destinationPath = public_path('/public_projects');
            $image->move($destinationPath, $input['imageName']);
        }

        $validatedData['user_id'] = auth()->user()->id;

        $exist = Project::where('slug', '=', AdminProjectController::scopeSlugify($request->title)->original['slug'])->first();

        if ($exist) {
            $validatedData['slug'] = AdminProjectController::scopeSlugify($request->title)->original['slug'] . '-' . strval(time());
        } else {
            $validatedData['slug'] = AdminProjectController::scopeSlugify($request->title)->original['slug'];
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body, 70));

        Project::create($validatedData);

        return redirect('/dashboard/admin/projects')->with('success', 'New Project Inserted!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        $this->authorize('admin');

        return view('dashboard.admin.projects.show', [
            'title' => 'Detail Project',
            'project' => $project
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $this->authorize('admin');

        return view('dashboard.admin.projects.edit', [
            'title' => 'Edit Project',
            'project' => $project,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $this->authorize('admin');

        $rules = [
            'title' => ['required', 'min:3', 'max:50'],
            'category_id' => ['required'],
            'body' => ['required', 'min:10'],
            'link' => ['url']
        ];

        if ($request->image) {
            $rules['image'] = ['image', 'file', 'max:3072'];
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->file('image')) {
                $validatedData['image'] = $request->file('image')->store('public_projects');
                $image = $request->file('image');
                $input['imageName'] = $validatedData['image'];
                $destinationPath = public_path('/public_projects');
                $image->move($destinationPath, $input['imageName']);
            }
        } else {
            $validatedData['image'] = $project->image;
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body, 70));

        $exist = Project::where('slug', '=', AdminProjectController::scopeSlugify($request->title)->original['slug'])->first();

        if ($project->title == $request->title) {
            $validatedData['slug'] = $project->slug;
        } else if ($exist) {
            $validatedData['slug'] = AdminProjectController::scopeSlugify($request->title)->original['slug'] . '-' . strval(time());
        } else {
            $validatedData['slug'] = AdminProjectController::scopeSlugify($request->title)->original['slug'];
        }

        Project::where('id', $project->id)
            ->update($validatedData);

        return redirect('/dashboard/admin/projects')->with('success', 'Project has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $this->authorize('admin');

        Project::destroy($project->id);
        return redirect('/dashboard/admin/projects')->with('success', 'Project has been deleted');
    }

    public function slugify(Request $request)
    {
        $text = $request->name;
        $divider = '-';

        // replace non letter or digits by divider
        $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, $divider);

        // remove duplicate divider
        $text = preg_replace('~-+~', $divider, $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return response()->json(['slug' => $text]);
    }

    public static function scopeSlugify($val)
    {
        $text = $val;
        $divider = '-';

        // replace non letter or digits by divider
        $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, $divider);

        // remove duplicate divider
        $text = preg_replace('~-+~', $divider, $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return response()->json(['slug' => $text]);
    }
}
