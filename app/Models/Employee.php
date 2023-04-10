<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;
use App\Models\Attendance;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $fillable = ['emp_name' , 'emp_address' , 'emp_email' , 'emp_phone' , 'emp_bd' , 'emp_gender'
                            , 'hiredate' , 'emp_in' , 'emp_out' , 'salary'
                            , 'nationalid' , 'nationality' ];

    public function attendances(){
        return $this->hasMany(Attendance::class , 'emp_id' , 'id');
    }                  

}
