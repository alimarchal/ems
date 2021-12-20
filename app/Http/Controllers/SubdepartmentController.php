<?php

namespace App\Http\Controllers;

use App\Models\Subdepartment;
use App\Http\Requests\StoreSubdepartmentRequest;
use App\Http\Requests\UpdateSubdepartmentRequest;

class SubdepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subdepartment = Subdepartment::where('parent_id','0')->get();
        return view('subdepartment.index', compact('subdepartment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subdepartment = Subdepartment::all();
        return view('subdepartment.create', compact('subdepartment'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreSubdepartmentRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubdepartmentRequest $request)
    {
        $designation = Subdepartment::create($request->all());
        session()->flash('message', 'Directorate successfully created.');
        return redirect()->route('subdepartment.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Subdepartment $subdepartment
     * @return \Illuminate\Http\Response
     */
    public function show(Subdepartment $subdepartment)
    {
        $parents = Subdepartment::where('parent_id','0')->get();
        return view('subdepartment.show', compact('subdepartment','parents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Subdepartment $subdepartment
     * @return \Illuminate\Http\Response
     */
    public function edit(Subdepartment $subdepartment)
    {
        $parents = Subdepartment::where('parent_id','0')->get();
        return view('subdepartment.edit', compact('subdepartment','parents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateSubdepartmentRequest $request
     * @param \App\Models\Subdepartment $subdepartment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubdepartmentRequest $request, Subdepartment $subdepartment)
    {
        $subdepartment->update($request->all());
        session()->flash('message', 'Directorate successfully updated.');
        return redirect()->route('subdepartment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Subdepartment $subdepartment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subdepartment $subdepartment)
    {
        $subdepartment->delete();
        session()->flash('message', 'Directorate successfully deleted.');
        return redirect()->route('subdepartment.index');
    }
}
