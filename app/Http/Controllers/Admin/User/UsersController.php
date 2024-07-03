<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Role\PageCategory;
use App\Models\Role\Role;
use App\Models\Role\UserRoleCate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $this->authorize('IsNotAdmin', Auth::user());
        $allUser = User::paginate(20);
        $allRole = Role::get();
        $allPageCategory = PageCategory::get();
        return view('web.admin.user.index', compact('allUser', 'allRole', 'allPageCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if (Auth::user()->role_id >= 3) {
        //     return back()->with('error', 'Access denied. You do not have the necessary permissions to perform this action.');
        // }
        // $this->authorize('IsNotAdmin', Auth::user());
        // $allUser = User::get();
        $allRole = Role::get();
        $allPageCategory = PageCategory::get();
        return view('web.admin.user.create', compact('allRole', 'allPageCategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if (Auth::user()->role_id >= 3) {
        //     return back()->with('error', 'Access denied. You do not have the necessary permissions to perform this action.');
        // }
        // $this->authorize('IsNotAdmin', Auth::user());
        //
        $request->validate([
            'stuff_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'user_role' => ['required', function ($attribute, $value, $fail) {
                if ($value == Auth::user()->role_id || $value < Auth::user()->role_id) {
                    $fail('The selected user role is invalid.');
                }
            }],
            'permission' => ['required', 'array'], // Add appropriate validation rules for the 'permission' field here
        ]);

        $user = new User;
        $user->name = $request->input('stuff_name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->role_id = $request->input('user_role');
        $user->save();


        try {
            foreach ($request->input('permission') as $permission) {
                $UserRoleCate = new UserRoleCate;
                $UserRoleCate->user_id = $user->id;
                $UserRoleCate->category_id = $permission;
                $UserRoleCate->save();
            }
        } catch (\Exception) {
        }

        return back()->with('success', 'User successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // dd($request->all());
        // if (Auth::user()->role_id >= 3) {
        //     return back()->with('error', 'Access denied. You do not have the necessary permissions to perform this action.');
        // }
        // $this->authorize('IsNotAdmin', Auth::user());
        $currentUser = Auth::user();
        $newRole = $request->input('UserRole_' . $user->id);
        // Check if the current user is the user being updated
        if ($currentUser->id == $user->id) {
            return back()->with('error', 'You can not change your own role.');
        }

        // Check if the current user has sufficient permissions to update the user's role
        if ($currentUser->role_id < $user->role_id && $newRole > $currentUser->role_id) {
            // Update the user's role
            $user->role_id = (int)$newRole;
            $user->save();
            if ($user->save()) {
                return back()->with('success', 'User role updated successfully');
            }
        } else {
            return back()->with('error',  'You do not have enough permissions to update this user\'s role.');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
