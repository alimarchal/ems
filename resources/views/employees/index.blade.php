<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <span class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Employees') }}
            </span>

            <div class="flex justify-center items-center float-right">
                <a href="{{url('dashboard')}}" class="flex items-center px-4 py-2 text-gray-600 bg-white border rounded-lg focus:outline-none hover:bg-gray-100 transition-colors duration-200 transform dark:text-gray-200 dark:border-gray-200  dark:hover:bg-gray-700 ml-2" title="Members List">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span class="hidden md:inline-block ml-2">Home</span>
                </a>

                @can('Create Employee')
                    <a href="{{url('employee/create')}}"  class="flex items-center px-4 py-2 text-gray-600 bg-white border rounded-lg focus:outline-none hover:bg-gray-100 transition-colors duration-200 transform dark:text-gray-200 dark:border-gray-200  dark:hover:bg-gray-700 ml-2" title="Members List">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                        </svg>
                        <span class="hidden md:inline-block ml-2">Add Employee</span>
                    </a>
                @endcan

                <a href="javascript:;" id="toggle" class="flex items-center px-4 py-2 text-gray-600 bg-white border rounded-lg focus:outline-none hover:bg-gray-100 transition-colors duration-200 transform dark:text-gray-200 dark:border-gray-200  dark:hover:bg-gray-700 ml-2" title="Members List">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                    </svg>
                    <span class="hidden md:inline-block ml-2">Search Filters</span>
                </a>

            </div>
        </div>
    </x-slot>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" style="display: none" id="filters">
            <div class="rounded-xl p-4 bg-white shadow-lg">
                <form action="">
                    <div class="mb-3 -mx-2 flex items-end">
                        <div class="px-2 w-1/2">
                            <div>
                                <label class="font-bold text-sm mb-2 ml-1">Search</label>
                                <input name="filter[search_string]" value="" class="form-select w-full px-3 py-2 mb-1 border-2
                                border-gray-200 rounded-md focus:outline-none
                                focus:border-indigo-500 transition-colors cursor-pointer"/>

                            </div>
                        </div>
                        <div class="px-2 w-1/2">
                            <label class="font-bold text-sm mb-2 ml-1">CNIC</label>
                            <input name="filter[cnic]" value=""
                                   class="form-select w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors cursor-pointer"/>

                        </div>
                        <div class="px-2 w-1/2">
                            <label class="font-bold text-sm mb-2 ml-1">Employee On Leave </label>
                            <select name="filter[leave_status]" class="form-select w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors cursor-pointer">
                                <option value="">None</option>
                                    <option value="0">On Leave</option>
                                    <option value="1">Present</option>
                            </select>
                        </div>
                        <div class="px-2 w-1/2">
                            <label class="font-bold text-sm mb-2 ml-1">DISTRICT </label>
                            <select name="filter[district_city]" class="form-select w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors cursor-pointer">
                                <option value="">None</option>
                                <optgroup label="AJK">
                                    <option value="Muzaffarabad" >
                                        Muzaffarabad</option>
                                    <option value="Hattian Bala" >
                                        Hattian Bala</option>
                                    <option value="Neelum" >
                                        Neelum</option>
                                    <option value="Mirpur" >
                                        Mirpur</option>
                                    <option value="Bhimber" >
                                        Bhimber</option>
                                    <option value="Kotli" >
                                        Kotli</option>
                                    <option value="Poonch" >
                                        Poonch</option>
                                    <option value="Bagh" >
                                        Bagh</option>
                                    <option value="Haveli" >
                                        Haveli</option>
                                    <option value="Sudhnati" >
                                        Sudhnati</option>
                                </optgroup>
                            </select>
                        </div>

                    </div>

                    <div class="text-center">
                        <button type="submit"  class=" px-4 py-2
                                bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white
                                uppercase tracking-widest hover:bg-green-500 focus:outline-none focus:border-green-700
                                focus:ring focus:ring-green-200 active:bg-green-600 disabled:opacity-25 transition ">
                            Search
                        </button>
                    </div>

                </form>
            </div>
        </div>


    <div class="py-6">



        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="min-w-max w-full table-auto">
                    <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">Full Name</th>
                        <th class="py-3 px-6 text-center">CNIC</th>
                        <th class="py-3 px-6 text-center">District</th>
                        <th class="py-3 px-6 text-center">Mobile</th>

                        <th class="py-3 px-6 text-center">Designation</th>
                        <th class="py-3 px-6 text-center">Age</th>
                        <th class="py-3 px-6 text-left">Appointment Date</th>

                        @canany(['Update Employee', 'Delete Employee'])
                            <th class="py-3 px-6 text-center">Actions</th>
                        @endcanany
                    </tr>
                    </thead>
                    <tbody class="text-black text-sm font-light">
                    @foreach($employees as $employee)
                        <tr class="border-b border-gray-200 bg-white text-black hover:bg-gray-100">
                            <td class="py-3 px-6 text-left">
                                <a href="{{route('employee.show', $employee->id)}}" class="flex items-center text-blue-400">
                                    <div class="mr-2">
                                        @if(!empty($employee->profile_path))
                                            <img class="w-6 h-6 rounded-full"
                                                 src="{{url(Storage::url($employee->profile_path))}}"/>

                                        @else
                                            <img class="w-6 h-6 rounded-full"
                                                 src="{{\App\Models\User::stagetProfilePhoto($employee->first_name . ' ' . $employee->last_name)}}"/>
                                        @endif
                                    </div>
                                    <span>{{$employee->first_name . ' ' . $employee->last_name}}</span>
                                </a>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span
                                    class="bg-green-200 text-black py-1 px-3 rounded-full text-xs">{{$employee->cnic}}</span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                {{$employee->district_city}}
                            </td>
                            <td class="py-3 px-6 text-center">
                                {{$employee->mobile}}
                            </td>
                            <td class="py-3 px-6 text-center">
                                {{$employee->appointment->designation}}
                            </td>

                            <td class="py-3 px-6 text-center">
                                {{ \Carbon\Carbon::parse($employee->data_of_birth)->age }} years
                            </td>

                            <td class="py-3 px-6 text-center">
                                {{\Carbon\Carbon::parse($employee->appointment->appointment_date)->format('d-m-Y')}}
                            </td>
                            @canany(['Update Employee', 'Delete Employee'])
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        @can('Update Employee')
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <a href="{{route('employee.edit', $employee->id)}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                         stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                              d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        @endcan
                                        @can('Delete Employee')
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <form action="{{route('employee.destroy', $employee->id)}}" method="post" onSubmit="if(!confirm('Are you sure you want to delete?')){return false;}">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="w-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                             stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        @endcan
                                    </div>
                                </td>
                            @endcanany
                        </tr>
                    @endforeach
                    </tbody>
                </table>


                {{ $employees->links() }}
            </div>


        </div>

    </div>
    <script type="text/javascript">
        const targetDiv = document.getElementById("filters");
        const btn = document.getElementById("toggle");
        btn.onclick = function () {
            if (targetDiv.style.display !== "none") {
                targetDiv.style.display = "none";
            } else {
                targetDiv.style.display = "block";
            }
        };

    </script>

</x-app-layout>
