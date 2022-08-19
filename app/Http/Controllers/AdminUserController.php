<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');

        return view('dashboard.admin.users.index', [
            'title' => 'Manage Users',
            'users' => User::all()
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

        return view('dashboard.admin.users.create', [
            'title' => 'Create User'
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
        $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:3', 'max:255']
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('public_profiles');
            $image = $request->file('image');
            $input['imageName'] = $validatedData['image'];
            $destinationPath = public_path('/public_profiles');
            $image->move($destinationPath, $input['imageName']);
        }

        if ($request->is_admin == 'on') {
            $validatedData['is_admin'] = true;
        } else {
            $validatedData['is_admin'] = false;
        }

        User::create($validatedData);

        return redirect('/dashboard/admin/users')->with('success', 'User has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dashboard/admin/users/edit', [
            'title' => 'Edit Profile',
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => ['required', 'max:255'],
        ];

        if ($user->email != $request->email) {
            $rules['email'] = ['required', 'email:dns', 'unique:users'];
        }

        if ($user->username != $request->username) {
            $rules['username'] = ['required', 'min:3', 'max:255', 'unique:users'];
        }

        if ($request->image) {
            $rules['image'] = ['image', 'file', 'max:3072'];
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('public_profiles');
            $image = $request->file('image');
            $input['imageName'] = $validatedData['image'];
            $destinationPath = public_path('/public_profiles');
            $image->move($destinationPath, $input['imageName']);
        } else {
            $validatedData['image'] = $user->image;
        }

        if ($request->is_admin) {
            $validatedData['is_admin'] = true;
        } else {
            $validatedData['is_admin'] = false;
        }

        User::where('id', $user->id)
            ->update($validatedData);

        return redirect('/dashboard/admin/users')->with('success', 'User has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $this->authorize('admin');

        User::destroy($user->id);
        return redirect('/dashboard/admin/users')->with('success', 'User has been deleted');
    }
}
