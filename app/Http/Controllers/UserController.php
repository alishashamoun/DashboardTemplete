<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Hash;
use Arr;
use DB;
use Log;
use App\Models\User;
use App\Notifications\Welcome;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::get();
        return view('user.index', [
            'users' => $user,
        ]);
    }

    public function create()
    {
        $user = User::all();
        $roles = Role::select('id', 'name')->get();
        return view('user.create', [
            'users' => $user,
            'roles' => $roles,
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'roles' => 'required|exists:roles,name',
        ]);
        try {
            DB::beginTransaction();


            $input = $request->except('roles');
            $input['password'] = Hash::make($request->password);

            $roles = $validatedData['roles'];
            unset($validatedData['roles']);

            $user = User::create($input);

            $user->assignRole($roles);

            DB::commit();

            return redirect()->route('users.index')
                ->with('success', 'User created successfully.');

        } catch (\Exception $e) {
            DB::rollback();
            // throw $e;
            // Detailed logging
            Log::error('User creation failed', [
                'error' => $e->getMessage(),
            ]);

            return redirect()->back()->with('error', 'An error occurred while creating the user. Please try again or contact support for assistance.');
        }
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        $roles = $user->getRoleNames();
        return view('users.show', compact('user', 'roles'));
    }

    public function edit($id)
    {

        $user = User::find($id);
        $roles = Role::select('id', 'name')->get();
        $userRole = $user->roles->pluck('name', 'name')->all();
        return view('user.create', compact('user', 'roles', 'userRole'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'required|min:8|confirmed',
            'roles' => 'required'
        ]);

        $input = $request->all();

        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, keys: ['password']);
        }


        $user = User::find($id);
        $user->update($input);
        $roles = $request->input('roles');

        $user->syncRoles($roles);
        return redirect()->route('users.index')
            ->with('success', 'User updated successfully');
    }
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully');
    }

}
