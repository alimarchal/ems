<x-app-layout>
    @include('vendor.jetstream.components.message')

    <div class="pb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-center space-x-4">
                <div class="justify-between rounded-xl mt-4 p-4 bg-white shadow-lg">
                    <h1 class="text-xl font-bold text-gray-800 mt-4">Create New</h1>
                    <div class="grid grid-cols-12 gap-6 mt-5">

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
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
