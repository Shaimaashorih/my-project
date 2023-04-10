<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Attendance;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees =  Employee::all();
        return view('employees.indexemp')->with('employees',$employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
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
        // Employee::create($input);
        // return redirect('employees')->with('flash_message' , 'Employee Added');
         $request->validate([
            'fname' => 'Required', 
            'lname' => 'Required', 
            'email' => 'Required',
            'phone' => 'Required|min:11|numeric',
            'date' => 'Required',
            'Type' => 'Required',
            'Dateofcontract' => 'Required',
            'starttime' => 'Required', 
            'endtime' => 'Required', 
            'salary' => ['Required' , 'integer'],
            'NationalID'=> 'Required' , 
            'Nationality'=> 'Required'
        ]);
        $employees = new Employee([
            'emp_name' => $request->get('fname'),  
            'emp_address' => $request->get('lname'), 
            'emp_email' => $request->get('email'), 
            'emp_phone' => $request->get('phone'), 
            'emp_bd' => $request->get('date'), 
            'emp_gender' => $request->get('Type'), 
            'hiredate' => $request->get('Dateofcontract'), 
            'emp_in' => $request->get('starttime'),  
            'emp_out' => $request->get('endtime'),  
            'salary' => $request->get('salary'), 
            'nationalid'=> $request->get('NationalID'),  
            'nationality'=> $request->get('Nationality')

            
        ]);
        $employees -> save();
        return redirect('employees')->with('sucess' , 'Data Added');

       											
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employees = Employee::find($id);
        return view('employees.show' )-> with('employees' , $employees);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employees = Employee::find($id);
        return view('employees.edit' )-> with('employees' , $employees);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(request $request, $id)
    {
        Employee::where('id' , $id)->update([
            'emp_name' => $request->get('fname'),  
            'emp_address' => $request->get('lname'), 
            'emp_email' => $request->get('email'), 
            'emp_phone' => $request->get('phone'), 
            'emp_bd' => $request->get('date'), 
            'emp_gender' => $request->get('Type'), 
            'hiredate' => $request->get('Dateofcontract'), 
            'emp_in' => $request->get('starttime'),  
            'emp_out' => $request->get('endtime'),  
            'salary' => $request->get('salary'), 
            'nationalid'=> $request->get('NationalID'),  
            'nationality'=> $request->get('Nationality'),

        ]);

        // $employees = Employee::find($id);
        // $input = $request->all();
        // $employees->update($input);
        return redirect('employees')->with('flash_message' , 'Employee Updated');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::destroy($id);
        return redirect('employees')->with('success' , 'employee deleted');
    }

   
}
