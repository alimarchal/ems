<?php

namespace App\Http\Controllers;

use App\Models\AppointmentDetail;
use App\Http\Requests\StoreAppointmentDetailRequest;
use App\Http\Requests\UpdateAppointmentDetailRequest;

class AppointmentDetailController extends Controller
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
     * @param  \App\Http\Requests\StoreAppointmentDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAppointmentDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AppointmentDetail  $appointmentDetail
     * @return \Illuminate\Http\Response
     */
    public function show(AppointmentDetail $appointmentDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AppointmentDetail  $appointmentDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(AppointmentDetail $appointmentDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAppointmentDetailRequest  $request
     * @param  \App\Models\AppointmentDetail  $appointmentDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAppointmentDetailRequest $request, AppointmentDetail $appointmentDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AppointmentDetail  $appointmentDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(AppointmentDetail $appointmentDetail)
    {
        //
    }
}
