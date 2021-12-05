<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['employee_code', 'first_name', 'last_name', 'father_husband_name', 'cnic', 'data_of_birth', 'mobile', 'email', 'gender', 'legal_heir', 'emergency_contact', 'district_city', 'leave_status', 'profile_path',];

    public function qualification()
    {
        return $this->hasOne(Qualification::class);
    }

    public function appointment()
    {
        return $this->hasOne(AppointmentDetail::class);
    }

}
