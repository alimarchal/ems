<?php

namespace App\Http\Controllers;

use App\Models\AppointmentDetail;
use App\Models\Employee;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Qualification;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = QueryBuilder::for(Employee::with('qualification', 'appointment'))
            ->allowedFilters([
                AllowedFilter::scope('search_string'),
                'first_name',
                AllowedFilter::exact('cnic'),
                AllowedFilter::exact('leave_status'),
                'date_of_birth',
                'district_city',
                'search',
                'father_husband_name'])
            ->paginate(10);
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreEmployeeRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeeRequest $request)
    {

        if ($request->hasFile('file_path')) {
            $path = $request->file('file_path')->store('', 'public');
            $request->merge(['profile_path' => $path]);
        }

        $employee = Employee::create($request->all());
        $request->merge(['employee_id' => $employee->id]);
        $appointment_detail = AppointmentDetail::create($request->all());
        $appointment_detail = Qualification::create($request->all());
        session()->flash('message', 'Employee information successfully added.');
        return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateEmployeeRequest $request
     * @param \App\Models\Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        if ($request->hasFile('file_path')) {
            $path = $request->file('file_path')->store('', 'public');
            $request->merge(['profile_path' => $path]);
        }
        $employee->update($request->all());
        $request->merge(['employee_id' => $employee->id]);
        $employee->appointment()->update([
            'employee_id' => $request->employee_id,
            'appointment_date' => $request->appointment_date,
            'designation' => $request->designation,
            'scale' => $request->scale,
            'employee_type' => $request->employee_type,
        ]);
        $employee->qualification()->update([
            'employee_id' => $request->employee_id,
            'degree_name' => $request->degree_name,
            'passing_year' => $request->passing_year,
        ]);
        session()->flash('message', 'Employee successfully updated.');
        return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->appointment()->delete();
        $employee->qualification()->delete();
        $employee->delete();
        session()->flash('message', 'Employee successfully deleted.');
        return redirect()->route('employee.index');
    }
}
