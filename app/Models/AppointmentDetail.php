<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentDetail extends Model
{
    use HasFactory;
    protected $fillable = ['employee_id','appointment_date','designation','scale','employee_type',];


    public function employee()
    {
        return $this->belongsTo(Employee::class,'employee_id');
    }
}
