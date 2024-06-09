<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;
use App\Models\PermissionRole;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    public function list()
    {
        $permissionRole = PermissionRole::getPermission('Role',Auth::user()->role_id);
        if (empty($permissionRole)) {
            abort(404);
        }
        $data['permissionAdd'] = PermissionRole::getPermission('Add role',Auth::user()->role_id);
        $data['permissionEdit'] = PermissionRole::getPermission('Edit Role',Auth::user()->role_id);
        $data['permissionDelete'] = PermissionRole::getPermission('Delete Role',Auth::user()->role_id);

        $data['getRecord'] = Role::get();
        return view('adminpages.panel.role.list', $data);
    }
  
    public function add()
    {
        $permissionRole = PermissionRole::getPermission('Add Role', Auth::user()->role_id);
        if (empty($permissionRole)) {
            abort(404);
        }
        $getPermission = Permission::getRecord();
        $data['getPermission'] = $getPermission;
        return view('adminpages.panel.role.add', $data);
    }
    public function edit($id)
    {
        $permissionRole = PermissionRole::getPermission('Edit Role', Auth::user()->role_id);
        if (empty($permissionRole)) {
            abort(404);
        }
        $data['getRecord'] = Role::find($id);
        $data['getPermission'] = Permission::getRecord();
        $data['getRolePermission'] = PermissionRole::getRolePermission($id);
        
        return view('adminpages.panel.role.edit', $data);
    }

    public function update($id, Request $request)
    {
        $permissionRole = PermissionRole::getPermission('Edit Role', Auth::user()->role_id);
        if (empty($permissionRole)) {
            abort(404);
        }
        $save = Role::find($id);
        $save->name = $request->name;
        $save->save();

        PermissionRole::InsertUpdateRecord($request->permission_id, $save->id);
        return redirect('panel/role')->with('success', 'Role successfully updated');
    }

    public function delete($id, Request $request)
    {
        $permissionRole = PermissionRole::getPermission('Delete Role', Auth::user()->role_id);
        if (empty($permissionRole)) {
            abort(404);
        }
        $save = Role::find($id);
        $save->delete();
        return redirect('adminpages/panel/role/')->with('success', 'Role successfully deleted');
    }

    public function insert(Request $request)
    {
        $permissionRole = PermissionRole::getPermission('Add Role', Auth::user()->role_id);
        if (empty($permissionRole)) {
            abort(404);
        }
       
        $save = new Role;
        $save->name = $request->name;
        $save->save();

        PermissionRole::InsertUpdateRecord($request->permission_id, $save->id);
        return view('panel/role')->with('success', 'Role successfully created');
    }
}