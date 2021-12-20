<?php

namespace App\Http\Controllers;

use App\Models\AppointmentDetail;
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

            $service_lengths = [
                '< 1 year'=>DB::table('employees')
                        ->leftJoin('appointment_details', 'employees.id', '=', 'appointment_details.employee_id')
                        ->where('employees.employee_status','InService')
                        ->where('appointment_details.appointment_date','>=',date('Y-m-d', strtotime('-1 year')))
                        ->count(),
                '1-5 Years'=>DB::table('employees')
                        ->leftJoin('appointment_details', 'employees.id', '=', 'appointment_details.employee_id')
                        ->where('employees.employee_status','InService')
                        ->where('appointment_details.appointment_date','<=',date('Y-m-d', strtotime('-1 year')))
                        ->where('appointment_details.appointment_date','>=',date('Y-m-d', strtotime('-5 year')))
                        ->count(),
                '5-10 Years'=>DB::table('employees')
                        ->leftJoin('appointment_details', 'employees.id', '=', 'appointment_details.employee_id')
                        ->where('employees.employee_status','InService')
                        ->where('appointment_details.appointment_date','<=',date('Y-m-d', strtotime('-5 year')))
                        ->where('appointment_details.appointment_date','>=',date('Y-m-d', strtotime('-10 year')))
                        ->count(),
                '10-20 Years'=>DB::table('employees')
                        ->leftJoin('appointment_details', 'employees.id', '=', 'appointment_details.employee_id')
                        ->where('employees.employee_status','InService')
                        ->where('appointment_details.appointment_date','<=',date('Y-m-d', strtotime('-10 year')))
                        ->where('appointment_details.appointment_date','>=',date('Y-m-d', strtotime('-20 year')))
                        ->count(),
                '20+ Years'=>DB::table('employees')
                        ->leftJoin('appointment_details', 'employees.id', '=', 'appointment_details.employee_id')
                        ->where('employees.employee_status','InService')
                        ->where('appointment_details.appointment_date','<=',date('Y-m-d', strtotime('-20 year')))
                        ->count()
           ];


            $retirment_in = [
                '1 year'=>Employee::where('employee_status','InService')->where('data_of_birth','<=',date('Y-m-d', strtotime('-59 year')))->where('data_of_birth','>=',date('Y-m-d', strtotime('-60 year')))->count(),
                '2 Years'=>Employee::where('employee_status','InService')->where('data_of_birth','<=',date('Y-m-d', strtotime('-58 year')))->where('data_of_birth','>=',date('Y-m-d', strtotime('-60 year')))->count(),
                '3 Years'=>Employee::where('employee_status','InService')->where('data_of_birth','<=',date('Y-m-d', strtotime('-57 year')))->where('data_of_birth','>=',date('Y-m-d', strtotime('-60 year')))->count(),
                '4 Years'=>Employee::where('employee_status','InService')->where('data_of_birth','<=',date('Y-m-d', strtotime('-56 year')))->where('data_of_birth','>=',date('Y-m-d', strtotime('-60 year')))->count(),
                '5 Years'=>Employee::where('employee_status','InService')->where('data_of_birth','<=',date('Y-m-d', strtotime('-55 year')))->where('data_of_birth','>=',date('Y-m-d', strtotime('-60 year')))->count()
            ];
            $salary_division = [
                '< 25k'=>Employee::where('employee_status','InService')->where('employee_salary','<',25000)->count(),
                '25K - 50K'=>Employee::where('employee_status','InService')->where('employee_salary','>=',25000)->where('employee_salary','<',50000)->count(),
                '50k - 100k'=>Employee::where('employee_status','InService')->where('employee_salary','>=',50000)->where('data_of_birth','<',100000)->count(),
                '100k >'=>Employee::where('employee_status','InService')->where('employee_salary','>',100000)->count(),
            ];
            $scale_division = [
                'Gazetted'=>DB::table('employees')
                    ->leftJoin('appointment_details', 'employees.id', '=', 'appointment_details.employee_id')
                    ->where('employees.employee_status','InService')
                    ->where('appointment_details.scale','>=',16)
                    ->count(),
                'Non-Gazetted'=>DB::table('employees')
                    ->leftJoin('appointment_details', 'employees.id', '=', 'appointment_details.employee_id')
                    ->where('employees.employee_status','InService')
                    ->where('appointment_details.scale','<=',15)
                    ->count(),
            ];

            $legal_case = LegalCase::count();
            $vacant_post = Designation::sum('no_of_posts');


            $OnLeave = $employees->where('leave_status', 'OnLeave')->count();
            return view('dashboard', compact('employees', 'gender', 'age_range', 'legal_case', 'OnLeave','vacant_post','service_lengths','retirment_in','salary_division','scale_division'));
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
