<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $attendances = Attendance::all();
        $employees = Employee::all();
        
                               
        
        // $attendances = Attendance::with('employee')->get();
        // $employees = Employee::with('attendances')->get();
      
        $attendances = DB::table('attendances')
                ->join('employees' , 'attendances.emp_id' , '=' , 'employees.id')
                ->select('emp_id' , 'emp_name' ,'attend_date' , 'check_in' , 'check_out')
                ->get();

        return view('attendances.attendance_departure' , compact('attendances' , 'employees'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $employees = Employee::all();
        return view('attendances.create')->with('employees' , $employees);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        $attendances = new Attendance([
            'emp_id' => $request->get('emp_id'), 
            'attend_date' => $request->get('date'), 
            'check_in' => $request->get('starttime'),
            'check_out' => $request->get('endtime')
        ]);
        $attendances -> save();
        return redirect('attendances')->with('sucess' , 'Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function show(Attendance $id)
    {
        $employees = Employee::find($id);

        $attendances = Attendance::find($id);
        return view('attendances.show' )-> with('attendances' , $attendances ,$employees);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendance $attendances)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendance $attendances)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Attendance::destroy($id);
        return redirect('attendances')->with('success' , 'attendances deleted');
    }
   
}
