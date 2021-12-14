<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermission extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Role::create(['name' => $request->role_name, 'guard_name' => 'web']);
        session()->flash('message', 'Role has been successfully created.');
        return redirect()->route('role.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        $role = DB::table("roles")->where('id',$id)->first();
        $role = Role::find($id);
        return view('roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        $role->update(
            ['name' => $request->role_name]
        );
        session()->flash('message', 'Role has been successfully updated.');
        return redirect()->route('role.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();
        session()->flash('message', 'Role has been successfully deleted.');
        return redirect()->route('role.index');
    }


    public function permission_index()
    {
        $permission = Permission::all();
        return view('permission.index', compact('permission'));
    }

    public function permission_create()
    {
        return view('permission.create');
    }


    public function permission_store(Request $request)
    {
        Permission::create(['name' => $request->permission_name, 'guard_name' => 'web']);
        session()->flash('message', 'Permission has been successfully created.');
        return redirect()->route('role.permission_index');
    }


    public function permission_edit($id)
    {
        $permission = Permission::find($id);
        return view('roles.edit', compact('permission'));
    }


    public function permission_update(Request $request, $id)
    {
        $permission = Permission::find($id);
        $permission->update(
            ['name' => $request->permission_name]
        );
        session()->flash('message', 'Permission has been successfully updated.');
        return redirect()->route('role.permission_index');
    }

    public function permission_destroy($id)
    {
        $permission = Permission::find($id);
        $permission->delete();
        session()->flash('message', 'Permission has been successfully deleted.');
        return redirect()->route('role.permission_index');
    }
}
