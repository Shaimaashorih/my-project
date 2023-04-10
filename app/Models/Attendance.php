<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class Attendance extends Model
{
    use HasFactory;
    protected $table = 'attendances';
    protected $primaryKey = 'id';
    protected $fillable = [  'emp_id' ,'attend_date', 'check_in' , 'check_out' ];

    public function employee()
    {
        return $this->belongsTo(Employee::class );
    }


    
}

