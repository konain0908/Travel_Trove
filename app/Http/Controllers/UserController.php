<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function list()
    {
        // Fetch users along with their associated roles
        $data['getRecord'] = User::join('roles', 'users.role_id', '=', 'roles.id')
                                 ->select('users.*', 'roles.name as role_name')
                                 ->get();
        
        return view('adminpages.panel.user.list', $data);
    }
    
    
    public function test()
    {
        // Fetch users along with their associated roles
        $data = User::join('roles', 'users.role_id', '=', 'roles.id')
                                 ->select('users.*', 'roles.name as role_name')
                                 ->get();
        
       return response()->json([
    
          'message' => 'users found',
          'status' => true,
          'data' => $data
    
       ],200);
    }

    public function add()
    {
        $data['getRole'] = Role::get();
        return view('adminpages.panel.user.add',$data);
    }

    public function insert(Request $request)
    {
        $save = new User;  
        $save->name = $request->name;
        $save->email = $request->email;
        $save->password = Hash::make($request->password);
        $save->role_id = $request->role_id;
       
        $save->save();
     
        return redirect()->back()->with('success', 'User successfully created');
    }

    public function edit($id)
    {
        $data['getRecord'] = User::find($id);    
        return view('adminpages.user.edit',$data);
    }
   
}