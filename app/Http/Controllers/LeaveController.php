<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Leave;
use App\Http\Requests\StoreLeaveRequest;
use App\Http\Requests\UpdateLeaveRequest;
use App\Models\LegalCase;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leaves = Leave::with('employee')->paginate(10);
        return view('leaves.index', compact('leaves'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::all();
        return view('leaves.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreLeaveRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLeaveRequest $request)
    {
        if ($request->hasFile('file_path')) {
            $path = $request->file('file_path')->store('', 'public');
            $request->merge(['attachment_path' => $path]);
        }

        $leave = Leave::create($request->all());
        session()->flash('message', 'Employee leave information successfully saved.');
        return redirect()->route('leave.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Leave $leave
     * @return \Illuminate\Http\Response
     */
    public function show(Leave $leave)
    {
        $employees = Employee::all();
        return view('leaves.show', compact('leave','employees'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Leave $leave
     * @return \Illuminate\Http\Response
     */
    public function edit(Leave $leave)
    {
        $employees = Employee::all();
        return view('leaves.edit', compact('leave','employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateLeaveRequest $request
     * @param \App\Models\Leave $leave
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLeaveRequest $request, Leave $leave)
    {
        if ($request->hasFile('file_path')) {
            $path = $request->file('file_path')->store('', 'public');
            $request->merge(['attachment_path' => $path]);
        }

        $leave->update($request->all());
        session()->flash('message', 'leave successfully updated.');
        return redirect()->route('leave.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Leave $leave
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leave $leave)
    {
        $leave->delete();
        session()->flash('message', 'Leave successfully deleted.');
        return redirect()->route('leave.index');
    }
}
