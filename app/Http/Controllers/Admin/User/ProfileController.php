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

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $user = User::findOrFail($id);
        $allUser = User::get();
        $allRole = Role::get();
        $allPageCategory = PageCategory::get();
        return view('web.admin.user.show' , compact('user' , 'allRole' , 'allPageCategory'));
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
        // $this->authorize('IsNotAdmin', Auth::user());
        $user = User::findOrFail($id);
        $allUser = User::get();
        $allRole = Role::get();
        $allPageCategory = PageCategory::get();
        return view('web.admin.user.profile', compact('user', 'allRole', 'allPageCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        // $this->authorize('IsNotAdmin', Auth::user());
        $user = User::findOrFail($id);

        $currentUser = Auth::user();
        $newRole = $request->input('user_role');

        if ($currentUser->id == $user->id) {
            return back()->with('error', 'You can not change your own role.');
        }

        // Check if the current user has sufficient permissions to update the user's role
        if ($currentUser->role_id < $user->role_id && $newRole > $currentUser->role_id || Auth::user()->role_id == 1) {
            // Update the user's role
            $user->role_id = (int)$newRole;
            $user->save();

            $UserRoleCate = UserRoleCate::where('user_id', $id)->get();
            try {
                foreach ($UserRoleCate as $userRoleCate) {
                    $userRoleCate->delete();
                }
            } catch (\Exception) {
            }

            try {
                foreach ($request->input('Permission') as $permission) {
                    $UserRoleCate = new UserRoleCate;
                    $UserRoleCate->user_id = $id;
                    $UserRoleCate->category_id = $permission;
                    $UserRoleCate->save();
                }
            } catch (\Exception) {
            }


            return back()->with('success', 'Information has been changed ');
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


    public function indexReset()
    {
        return view('web.admin.user.resetpassword');
    }

    public function changePassword(Request $request)
    {
        // Validate the request data
        $request->validate([
            'oldPassword' => ['required', 'string', 'min:8', function ($attribute, $value, $fail) use ($request) {
                if (!Hash::check($value, Auth::user()->password)) {
                    $fail('Your current password is incorrect.');
                }
            }],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    
        // Retrieve the authenticated user
        $user = User::findOrFail(Auth::user()->id);
    
        // Update the user's password
        $user->password = Hash::make($request->input('password'));
        $user->save();
    
        return back()->with('success', 'Password successfully changed');
    }
    
}
