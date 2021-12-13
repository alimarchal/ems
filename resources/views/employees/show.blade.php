<x-app-layout>
    <x-slot name="header">
        <span class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employee Profile') }}
        </span>

    </x-slot>

    <style>
        :root {
            --main-color: #4a76a8;
        }

        .bg-main-color {
            background-color: var(--main-color);
        }

        .text-main-color {
            color: var(--main-color);
        }

        .border-main-color {
            border-color: var(--main-color);
        }
    </style>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>



    <div class="py-1 mb-4">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


{{--            <style>--}}
{{--                :root {--}}
{{--                    --main-color: #4a76a8;--}}
{{--                }--}}

{{--                .bg-main-color {--}}
{{--                    background-color: var(--main-color);--}}
{{--                }--}}

{{--                .text-main-color {--}}
{{--                    color: var(--main-color);--}}
{{--                }--}}

{{--                .border-main-color {--}}
{{--                    border-color: var(--main-color);--}}
{{--                }--}}
{{--            </style>--}}

{{--            <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">--}}
{{--            <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>--}}



            <div class="bg-white-100">


                <div class="container mx-auto my-5 p-5  ">
                    <div class="md:flex no-wrap md:-mx-2 ">
                        <!-- Left Side -->
                        <div class="w-full md:w-3/12 md:mx-2 ">
                            <!-- Profile Card -->
                            <div class="bg-white p-3 border-t-4 border-green-400">
                                <div class="image overflow-hidden">

                                    @if(!empty($employee->profile_path))
                                        <img class="h-auto w-full mx-auto"
                                             src="{{url(Storage::url($employee->profile_path))}}"/>

                                    @else
                                        <img class="h-auto w-full mx-auto"
                                             src="{{\App\Models\User::stagetProfilePhoto($employee->first_name . ' ' . $employee->last_name)}}"/>
                                    @endif

{{--                                    <img class="h-auto w-full mx-auto"--}}
{{--                                         src="https://lavinephotography.com.au/wp-content/uploads/2017/01/PROFILE-Photography-112.jpg"--}}
{{--                                         alt="">--}}
                                </div>
                                <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">{{$employee->first_name . ' ' . $employee->last_name}}</h1>
                                <h3 class="text-gray-600 font-lg text-semibold leading-6"> {{$employee->appointment->designation}}</h3>
{{--                                <p class="text-sm text-gray-500 hover:text-gray-600 leading-6">Lorem ipsum dolor sit amet--}}
{{--                                    consectetur adipisicing elit.--}}
{{--                                    Reprehenderit, eligendi dolorum sequi illum qui unde aspernatur non deserunt</p>--}}
                                <ul
                                    class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                                    <li class="flex items-center py-3">
                                        <span>Status</span>
                                        <span class="ml-auto"><span
                                                class="bg-green-500 py-1 px-2 rounded text-white text-sm">Active</span></span>
                                    </li>
                                    <li class="flex items-center py-3">
                                        <span>Member since</span>
                                        <span class="ml-auto">{{\Carbon\Carbon::parse($employee->created_at)->format('d-m-Y')}}</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- End of profile card -->
                            <div class="my-4"></div>
                            <!-- Friends card -->

                        </div>
                        <!-- Right Side -->
                        <div class="w-full md:w-9/12 mx-2 h-64 ">
                            <!-- Profile tab -->
                            <!-- About Section -->
                            <div class="bg-white p-3 shadow-sm rounded-sm">
                                <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                                    <span class="tracking-wide">About</span>
                                </div>
                                <div class="text-gray-700">
                                    <div class="grid md:grid-cols-2 text-sm">

                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">First Name</div>
                                            <div class="px-4 py-2">{{$employee->first_name}}</div>
                                        </div>
                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">Last Name</div>
                                            <div class="px-4 py-2">{{$employee->last_name}}</div>
                                        </div>
                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">Father/Husbane Name</div>
                                            <div class="px-4 py-2">{{$employee->father_husband_name}}</div>
                                        </div>
                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">National CNIC</div>
                                            <div class="px-4 py-2">{{$employee->cnic}}</div>
                                        </div>
                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">Gender</div>
                                            <div class="px-4 py-2">{{$employee->gender}}</div>
                                        </div>
                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">Contact No.</div>
                                            <div class="px-4 py-2">{{$employee->mobile}}</div>
                                        </div>

                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">Emergency Contact</div>
                                            <div class="px-4 py-2">{{$employee->emergency_contact}}</div>
                                        </div>
                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">District/City</div>
                                            <div class="px-4 py-2">{{$employee->district_city}}</div>
                                        </div>
                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">Email.</div>
                                            <div class="px-4 py-2">
                                                <a class="text-blue-800" href="mailto:{{$employee->email}}">{{$employee->email}}</a>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">Birthday</div>
                                            <div class="px-4 py-2">{{\Carbon\Carbon::parse($employee->data_of_birth)->format('d-m-Y')}} ({{\Carbon\Carbon::parse($employee->data_of_birth)->diff(\Carbon\Carbon::now())->format('%y years')}})</div>
                                        </div>


                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">Employee Code</div>
                                            <div class="px-4 py-2">{{$employee->employee_code}}</div>
                                        </div>

                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">Legal Heir</div>
                                            <div class="px-4 py-2">{{$employee->legal_heir}}</div>
                                        </div>



                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">CNIC Issue Date</div>
                                            <div class="px-4 py-2">{{$employee->issue_date}}</div>
                                        </div>


                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">CNIC Expiry Date</div>
                                            <div class="px-4 py-2">{{$employee->expiry_date}}</div>
                                        </div>

                                    </div>
                                    <hr class="my-3">
                                    <h1 class="text-2xl text-center font-bold">Appointment Details</h1>
                                    <hr class="my-3">

                                    <div class="grid md:grid-cols-2 text-sm">


                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">Appointment Date</div>
                                            <div class="px-4 py-2">
                                                {{\Carbon\Carbon::parse($employee->appointment->appointment_date)->format('d-m-Y')}}
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">Designation</div>
                                            <div class="px-4 py-2">
                                                {{$employee->appointment->designation}}
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">Scale</div>
                                            <div class="px-4 py-2">
                                                {{$employee->appointment->scale}}
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">Employee Type</div>
                                            <div class="px-4 py-2">
                                                {{$employee->appointment->employee_type}}
                                            </div>
                                        </div>
                                    </div>


                                    <div class="grid grid-cols-1">
                                        <div class="px-4 py-2 font-semibold">Service Tenure</div>
                                        <div class="px-4 py-2">{{\Carbon\Carbon::parse($employee->appointment->appointment_date)->diff(\Carbon\Carbon::now())->format('%y years, %m months and %d days')}}</div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of about section -->

                            <div class="my-4"></div>

                            <!-- Experience and education -->
                            <div class="bg-white p-3 shadow-sm rounded-sm mb-4 pb-4">

                                <div class="grid grid-cols-1">
                                    <div>
                                        <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                            <span class="tracking-wide">Education</span>
                                        </div>
                                        <ul class="list-inside space-y-2">
                                            <li>
                                                <div class="text-teal-600">{{$employee->qualification->degree_name}}</div>
                                                <div class="text-gray-500 text-xs">{{\Carbon\Carbon::parse($employee->qualification->passing_year)->format('d-m-Y')}}</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End of Experience and education grid -->
                            </div>
                            <!-- End of profile tab -->
                        </div>
                    </div>
                </div>
            </div>



        </div>

    </div>


    <div class="py-12">

    </div>

</x-app-layout>
