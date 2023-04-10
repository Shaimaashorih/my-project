<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Attendance;
use Illuminate\Support\Facades\DB;



class SearchController extends Controller
{
 

    public function search(request $request){
        if ($request['search']) {
        //     $search = Attendance::where('emp_name', 'LIKE' , '%'.$request['search'].'%')->get($request);
        //    return view('salary_report.search'  , compact('search') );
        $attendances = DB::table('attendances')
            ->join('employees' , 'attendances.emp_id' , '=' , 'employees.id')
            ->select('emp_id' , 'emp_name' , 'emp_phone' , 'salary' ,DB::raw('count(attend_date) as attend_date' ) )
            ->groupBy('emp_id')
            ->where('emp_name', 'LIKE' , '%'.$request['search'].'%')
            ->get($request);
            return view('salary_report.search' )-> with('attendances' , $attendances);

        }
        else{
            return redirect()->back()->with('message' , 'No Record Found');
        }

    }


    public function searchemp(request $request){
        if ($request['search']) {
        $employees = DB::table('employees')
            ->select('id' ,'emp_name' , 'emp_address' , 'emp_email' , 'emp_phone' , 'emp_bd' , 'emp_gender'
            , 'hiredate' , 'emp_in' , 'emp_out' , 'salary'
            , 'nationalid' , 'nationality') 
            ->where('emp_name', 'LIKE' , '%'.$request['search'].'%')
            ->get($request);
            return view('employees.searchemp' )-> with('employees' , $employees);
        }
        else{
            return redirect()->back()->with('message' , 'No Record Found');
        }

    }
}
