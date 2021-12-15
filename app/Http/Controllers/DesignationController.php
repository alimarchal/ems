<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use App\Http\Requests\StoreDesignationRequest;
use App\Http\Requests\UpdateDesignationRequest;
use App\Models\Employee;
use App\Models\Leave;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designation = Designation::paginate(10);
        return view('designation.index', compact('designation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $designation = Designation::all();
        return view('designation.create', compact('designation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreDesignationRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDesignationRequest $request)
    {
        $designation = Designation::create($request->all());
        session()->flash('message', 'Designation information successfully saved.');
        return redirect()->route('designation.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Designation $designation
     * @return \Illuminate\Http\Response
     */
    public function show(Designation $designation)
    {
        return view('designation.show', compact('designation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Designation $designation
     * @return \Illuminate\Http\Response
     */
    public function edit(Designation $designation)
    {
        return view('designation.edit', compact('designation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateDesignationRequest $request
     * @param \App\Models\Designation $designation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDesignationRequest $request, Designation $designation)
    {
        $designation->update($request->all());
        session()->flash('message', 'Designation successfully updated.');
        return redirect()->route('designation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Designation $designation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Designation $designation)
    {
        $designation->delete();
        session()->flash('message', 'Designation successfully deleted.');
        return redirect()->route('designation.index');
    }
}
