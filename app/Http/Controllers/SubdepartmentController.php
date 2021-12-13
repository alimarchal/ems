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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSubdepartmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubdepartmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subdepartment  $subdepartment
     * @return \Illuminate\Http\Response
     */
    public function show(Subdepartment $subdepartment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subdepartment  $subdepartment
     * @return \Illuminate\Http\Response
     */
    public function edit(Subdepartment $subdepartment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubdepartmentRequest  $request
     * @param  \App\Models\Subdepartment  $subdepartment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubdepartmentRequest $request, Subdepartment $subdepartment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subdepartment  $subdepartment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subdepartment $subdepartment)
    {
        //
    }
}
