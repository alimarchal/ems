<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use App\Models\Employee;
use App\Models\LegalCase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myrole = auth()->user()->getRoleNames()->first();
        if ($myrole == 'Administrator') {

            return view('dashboard_admin');

        } else if ($myrole == 'Manager') {

            $employees = Employee::all();

            $gender = Employee::select(DB::raw('gender'), DB::raw('count(*) As total'))
                ->groupBy('gender')
                ->get();
            $age_range = DB::select("select concat(10*floor(age/10), '-', 10*floor(age/10) + 10) as `range`, count(*) as count from ( select TIMESTAMPDIFF(YEAR,data_of_birth,CURDATE()) AS age from employees ) as t group by `range`;");
            $legal_case = LegalCase::count();
            $vacant_post = Designation::sum('no_of_posts');


            $OnLeave = $employees->where('leave_status', 'OnLeave')->count();
            return view('dashboard', compact('employees', 'gender', 'age_range', 'legal_case', 'OnLeave','vacant_post'));
        } else {
            return view('dashboard_employee');
        }


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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
