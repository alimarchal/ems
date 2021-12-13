<x-app-layout>
    <x-slot name="header">
        <span class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employee Personal Information ') }}
        </span>

        <a href="{{route('employee.create')}}" class=" float-right px-4 py-2
        bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white
        uppercase tracking-widest hover:bg-green-500 focus:outline-none focus:border-green-700
        focus:ring focus:ring-green-200 active:bg-green-600 disabled:opacity-25 transition ">
            Add Employee
        </a>
    </x-slot>


    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function myFunction() {
            var x = document.getElementById("myDIV");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

    </script>

    <button type="button" onclick="myFunction()" class="float-right mr-24 mt-5 btn btn-light shadow-sm" data-toggle="collapse" data-target="#filters">Filters <i class="fa fa-filter"></i></button>



    <br>
    <br>


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" id="myDIV" style="display: none">
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


                <button type="submit"  class=" float-right px-4 py-2
                        bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white
                        uppercase tracking-widest hover:bg-green-500 focus:outline-none focus:border-green-700
                        focus:ring focus:ring-green-200 active:bg-green-600 disabled:opacity-25 transition ">
                    Search
                </button>


            </form>
        </div>


    <div class="py-12">



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
                        <th class="py-3 px-6 text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody class="text-black text-sm font-light">
                    @foreach($employees as $employee)
                        <tr class="border-b border-gray-200 bg-white text-black hover:bg-gray-100">
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
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
                                </div>
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

                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <a href="{{route('employee.show', $employee->id)}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                        </a>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <a href="{{route('employee.edit', $employee->id)}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                            </svg>
                                        </a>
                                    </div>
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
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>


                {{ $employees->links() }}
            </div>


        </div>

    </div>


</x-app-layout>
