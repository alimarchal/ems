<x-app-layout>
    @include('vendor.jetstream.components.message')

    <div class="pb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-center space-y-4 sm:space-x-4 flex-col sm:flex-row ">
                <div class="justify-between rounded-xl mt-4 p-4 bg-white shadow-lg">
                    <h1 class="text-xl font-bold text-gray-800 mt-4">Manage Records</h1>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        @can('Create Employee')
                            <a href="{{url('employee')}}" class="transform  hover:scale-105 transition duration-300 bg-indigo-50 rounded-xl col-span-12  intro-y">
                                <div class="p-5">
                                    <div class="grid grid-cols-3 gap-1">
                                        <div class="col-span-2 flex items-center">
                                            <div class="text-base font-bold text-gray-600">Employees</div>
                                        </div>
                                        <div class="col-span-1 flex items-center justify-end">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endcan
                        @can('Create Legal Case')
                            <a href="{{url('legalcase')}}" class="transform  hover:scale-105 transition duration-300 bg-indigo-50 rounded-xl col-span-12  intro-y">
                                <div class="p-5">
                                    <div class="grid grid-cols-3 gap-1">
                                        <div class="col-span-2 flex items-center">
                                            <div class="text-base  font-bold text-gray-600">Legal Cases</div>
                                        </div>
                                        <div class="col-span-1 flex items-center justify-end">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endcan
                        @can('Create Leave')
                            <a href="{{url('leave')}}" class="transform  hover:scale-105 transition duration-300 bg-indigo-50 rounded-xl col-span-12  intro-y">
                                <div class="p-5">
                                    <div class="grid grid-cols-3 gap-1">
                                        <div class="col-span-2 flex items-center">
                                            <div class="text-base  font-bold text-gray-600">Leave Records</div>
                                        </div>
                                        <div class="col-span-1 flex items-center justify-end">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endcan
                        @can('Create Sub Department')
                            <a href="{{url('subdepartment')}}" class="transform  hover:scale-105 transition duration-300 bg-indigo-50 rounded-xl col-span-12  intro-y">
                                <div class="p-5">
                                    <div class="grid grid-cols-3 gap-1">
                                        <div class="col-span-2 flex items-center">
                                            <div class="text-base  font-bold text-gray-600">Directorates</div>
                                        </div>
                                        <div class="col-span-1 flex items-center justify-end">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endcan
                        @can('Create Designation')
                            <a href="{{url('designation')}}" class="transform  hover:scale-105 transition duration-300 bg-indigo-50 rounded-xl col-span-12  intro-y">
                                <div class="p-5">
                                    <div class="grid grid-cols-3 gap-1">
                                        <div class="col-span-2 flex items-center">
                                            <div class="text-base  font-bold text-gray-600">Designations</div>
                                        </div>
                                        <div class="col-span-1 flex items-center justify-end">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endcan
                    </div>
                </div>
                <div class="justify-between rounded-xl mt-4 p-4 bg-white shadow-lg">
                    <h1 class="text-xl font-bold text-gray-800 mt-4">Create New</h1>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        @can('Create Employee')
                            <a href="{{url('employee/create')}}" class="transform  hover:scale-105 transition duration-300 bg-indigo-50 rounded-xl col-span-12  intro-y">
                                <div class="p-5">
                                    <div class="grid grid-cols-3 gap-1">
                                        <div class="col-span-2 flex items-center">
                                            <div class="text-base font-bold text-gray-600">Add Employee</div>
                                        </div>
                                        <div class="col-span-1 flex items-center justify-end">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endcan
                        @can('Create Legal Case')
                            <a href="{{url('legalcase/create')}}" class="transform  hover:scale-105 transition duration-300 bg-indigo-50 rounded-xl col-span-12  intro-y">
                                <div class="p-5">
                                    <div class="grid grid-cols-3 gap-1">
                                        <div class="col-span-2 flex items-center">
                                            <div class="text-base  font-bold text-gray-600">Add Legal Case</div>
                                        </div>
                                        <div class="col-span-1 flex items-center justify-end">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endcan
                        @can('Create Leave')
                            <a href="{{url('leave/create')}}" class="transform  hover:scale-105 transition duration-300 bg-indigo-50 rounded-xl col-span-12  intro-y">
                                <div class="p-5">
                                    <div class="grid grid-cols-3 gap-1">
                                        <div class="col-span-2 flex items-center">
                                            <div class="text-base  font-bold text-gray-600">Apply for Leave</div>
                                        </div>
                                        <div class="col-span-1 flex items-center justify-end">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endcan
                        @can('Create Sub Department')
                            <a href="{{url('subdepartment/create')}}" class="transform  hover:scale-105 transition duration-300 bg-indigo-50 rounded-xl col-span-12  intro-y">
                                <div class="p-5">
                                    <div class="grid grid-cols-3 gap-1">
                                        <div class="col-span-2 flex items-center">
                                            <div class="text-base  font-bold text-gray-600">Create Directorate</div>
                                        </div>
                                        <div class="col-span-1 flex items-center justify-end">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endcan
                        @can('Create Designation')
                            <a href="{{url('designation/create')}}" class="transform  hover:scale-105 transition duration-300 bg-indigo-50 rounded-xl col-span-12  intro-y">
                                <div class="p-5">
                                    <div class="grid grid-cols-3 gap-1">
                                        <div class="col-span-2 flex items-center">
                                            <div class="text-base  font-bold text-gray-600">Create Designation</div>
                                        </div>
                                        <div class="col-span-1 flex items-center justify-end">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
