<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display all users
     */
    public function index()
    {
        $users = User::latest()->paginate(20);

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show create form
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store user
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|string|max:255',

            'email' => 'required|email|unique:users,email',

            'phone' => 'nullable|string|max:255',

            'password' => 'required|min:6|confirmed',

            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',

            'status' => 'nullable|in:active,inactive',
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $imageName = time().'.'.$image->getClientOriginalExtension();

            $image->move(public_path('uploads/users'), $imageName);
        }

        User::create([

            'name' => $request->name,

            'email' => $request->email,

            'phone' => $request->phone,

            'password' => Hash::make($request->password),

            'image' => $imageName,

            'status' => $request->status ?? 'active',
        ]);

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'User created successfully');
    }

    /**
     * Show single user
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('admin.users.show', compact('user'));
    }

    /**
     * Show edit form
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update user
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([

            'name' => 'required|string|max:255',

            'email' => 'required|email|unique:users,email,'.$user->id,

            'phone' => 'nullable|string|max:255',

            'password' => 'nullable|min:6|confirmed',

            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',

            'status' => 'nullable|in:active,inactive',
        ]);

        $imageName = $user->image;

        if ($request->hasFile('image')) {

            if ($user->image &&
                file_exists(public_path('uploads/users/'.$user->image))) {

                unlink(public_path('uploads/users/'.$user->image));
            }

            $image = $request->file('image');

            $imageName = time().'.'.$image->getClientOriginalExtension();

            $image->move(public_path('uploads/users'), $imageName);
        }

        $data = [

            'name' => $request->name,

            'email' => $request->email,

            'phone' => $request->phone,

            'image' => $imageName,

            'status' => $request->status ?? 'active',
        ];

        if ($request->password) {

            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'User updated successfully');
    }

    /**
     * Delete user
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if ($user->image &&
            file_exists(public_path('uploads/users/'.$user->image))) {

            unlink(public_path('uploads/users/'.$user->image));
        }

        $user->delete();

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'User deleted successfully');
    }
}
