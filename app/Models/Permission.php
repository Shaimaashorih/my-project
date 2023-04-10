<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $table = 'permissions';
    protected $primaryKey = 'id';
    protected $fillable = [
        'gp_name',	'module_name',	'permission_ck'	
    ];
}
