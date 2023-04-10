<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;


class General_setting extends Model
{
    use HasFactory;
    protected $table = 'general_settings';
    protected $primaryKey = 'id';
    protected $fillable = ['extra'	,'discount'	,'weekend1'	,'weekend2'	,'weekend3',	
                          'weekend4',	'weekend5',	'weekend6'	,'weekend7',	
                          'created_at'	,'updated_at'];
}
