<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::all();
        return view('permissions.indexper')->with('permissions' , $permissions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $input = $request -> all();
        // $arrayToster = implode(',' , $request->input('item'));
        // $input['item']=$arrayToster;
        //  Permission::create($input);
        // return redirect('permissions')->with('sucess' , 'Data Added');

        // $permissions = new Permission([
        //     'gp_name' => $request->get('groupname'),  
        //     'module_name' => $request->get('modulename'), 
        //     'permission_ck' => $request->get('permissions'), 
       
        // ]);
        // $permissions -> save();
        // return redirect('permissions')->with('sucess' , 'Data Added');

        $request->validate([
            'gp_name'=>'required',
            'item'=> 'required'
        ]);

        $permissions = new Permission;
        $permissions->gp_name = $request->gp_name;
        $permissions->permission_ck =json_encode($request->item);

      
        $permissions->save();
        return redirect('permissions')->with('sucess' , 'Data Added');
       											
    }
        
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $id)
    {
        $permissions = Permission::find($id);
        return view('permissions.indexper' )-> with('permissions' , $permissions);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permissions = Permission::find($id);
        // $permissions = Permission::where('id' , $id)->get();
        return view('permissions.edit' )-> with('permissions' , $permissions);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        Permission::where('id' , $id)->update([
            'gp_name' => $request->get('groupname'),  
            'permission_ck' => $request->get('permissions'), 
        ]);

        // $employees = Employee::find($id);
        // $input = $request->all();
        // $employees->update($input);
        return redirect('permissions')->with('flash_message' , 'Employee Updated');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Permission::destroy($id);
        return redirect('permissions')->with('success' , 'permission deleted');
    }
}
