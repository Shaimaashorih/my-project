<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Attendance;
use App\Models\General_setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $attendances = Attendance::all();
        // $employees = Employee::all();
        $attendances = DB::table('attendances')
                ->join('employees' , 'attendances.emp_id' , '=' , 'employees.id')
                ->select('emp_id' , 'emp_name' , 'emp_phone' , 'salary' ,DB::raw('count(attend_date) as attend_date' ) )
                ->groupBy('emp_id')
                ->get();
        $general_settings = General_setting::all();
        
        

       return view('salary_report.salary_report', compact( 'attendances' , 'general_settings'));
        
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
          $attendances = DB::table('attendances')
            ->join('employees' , 'attendances.emp_id' , '=' , 'employees.id')
            ->select('emp_id' , 'emp_name' , 'emp_phone' , 'salary' ,DB::raw('count(attend_date) as attend_date' ) )
            ->groupBy('emp_id')
            ->where('attendances.emp_id', $id )
            ->get($id);

        
       

        return view('salary_report.show' )-> with('attendances' , $attendances);

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
    public function update(Request $request, $id)
    {
        //
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
