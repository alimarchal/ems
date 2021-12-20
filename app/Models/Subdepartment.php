<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subdepartment extends Model
{
    use HasFactory;

    protected $fillable = ['parent_id', 'name'];


    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public function children()
    {
        return $this->hasMany(Subdepartment::class, 'parent_id', 'id');
    }

    public function parent()
    {
        return $this->hasOne(Subdepartment::class , 'id','parent_id');
    }
}
