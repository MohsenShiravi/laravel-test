<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Http\Requests\RoleRequest;
use App\Models\Category;
use App\Models\Permission;
use App\Models\Post;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function create()
    {
        return view('roles.create',['permissions'=>Permission::all()]);

    }

    public function store(RoleRequest $request , Role $role)
    {
        $roles=$role->create([
            'title'=>$request->get('title'),
        ]);
        $roles->permissions()->attach($request->get('permissions'));
        return redirect()->route('roles.index');
    }

    public function index()
    {
        $roles = Role::all();
        return view('roles.index',compact('roles'));
    }

    public function edit(Role $role)
    {
        return view('roles.edit',['role'=>$role,'permissions'=>Permission::all()]);
    }

    public function update(Request $request , Role $role)
    {
        $role->update([
            'title'=>$request->get('title'),
        ]);
        $role->permissions()->sync($request->get('permissions'));

        return redirect()->route('roles.index');
    }
    public function destroy(Role $role)
    {
        $role->permissions()->detach();
        $role->delete();
        return redirect()->route('roles.index');
    }
}
