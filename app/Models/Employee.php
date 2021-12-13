<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['employee_code', 'first_name', 'last_name', 'father_husband_name', 'cnic', 'data_of_birth', 'mobile', 'email', 'gender', 'legal_heir', 'emergency_contact', 'district_city', 'leave_status', 'profile_path', 'remaining_casual_leave', 'remaining_privileged_leave', 'employee_status'];

    public function qualification()
    {
        return $this->hasOne(Qualification::class);
    }

    public function appointment()
    {
        return $this->hasOne(AppointmentDetail::class);
    }


    /*
     * Sometimes more advanced filtering options are necessary. This is where scope filters, callback filters and custom
     * filters come in handy.
     * Scope filters allow you to add local scopes to your query by adding filters to the URL. This works for scopes on
     * the queried model or its relationships using dot-notation.
     */
    public function scopeSearchString(Builder $query, $search): Builder
    {
        return $query->where('first_name', 'LIKE', '%' . $search . '%')->
                    orWhere('last_name', 'LIKE', '%' . $search . '%')->
                    orWhere('father_husband_name', 'LIKE', '%' . $search . '%')->
                    orWhere('mobile', 'LIKE', '%' . $search . '%')->
                    orWhere('email', 'LIKE', '%' . $search . '%')->
                    orWhere('gender', 'LIKE', '%' . $search . '%')->
                    orWhere('emergency_contact', 'LIKE', '%' . $search . '%')->
                    orWhere('district_city', 'LIKE', '%' . $search . '%')->
                    orWhere('leave_status', 'LIKE', '%' . $search . '%')->
                    orWhere('emergency_contact', 'LIKE', '%' . $search . '%')->
                    orWhere('cnic', 'LIKE', '%' . $search . '%');

    }

}
