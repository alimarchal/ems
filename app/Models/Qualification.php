<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    use HasFactory;

    protected $fillable = ['employee_id','degree_name','passing_year',];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }



}
