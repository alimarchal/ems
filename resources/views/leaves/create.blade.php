<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Apply for Leave') }}
            </h2>

            <div class="flex justify-center items-center float-right">
                <a href="{{url('dashboard')}}"
                   class="flex items-center px-4 py-2 text-gray-600 bg-white border rounded-lg focus:outline-none hover:bg-gray-100 transition-colors duration-200 transform dark:text-gray-200 dark:border-gray-200  dark:hover:bg-gray-700 ml-2"
                   title="Members List">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    <span class="hidden md:inline-block ml-2">Home</span>
                </a>

                <a href="javascript:;" onclick="history.back()"
                   class="flex items-center px-4 py-2 text-gray-600 bg-white border rounded-lg focus:outline-none hover:bg-gray-100 transition-colors duration-200 transform dark:text-gray-200 dark:border-gray-200  dark:hover:bg-gray-700 ml-2"
                   title="Members List">

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0019 16V8a1 1 0 00-1.6-.8l-5.333 4zM4.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0011 16V8a1 1 0 00-1.6-.8l-5.334 4z"/>
                    </svg>
                    <span class="hidden md:inline-block ml-2">Back</span>
                </a>

            </div>
        </div>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-5">

            <x-alert/>


            <form action="{{route('leave.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="container mx-auto px-5">
                    <div class=" overflow-hidden ">
                        <div class="py-2">
                            <div>
                                <div class="md:grid md:grid-cols-3 md:gap-6">
                                    <div class="md:col-span-1">
                                        <div class="px-4 sm:px-0">
                                            <h3 class="text-lg font-medium leading-6 text-gray-900">Leave</h3>
                                            <p class="mt-1 text-sm text-gray-600">

                                            </p>
                                        </div>
                                    </div>
                                    <div class="mt-5 md:mt-0 md:col-span-2">
                                        <div class="shadow overflow-hidden sm:rounded-md">
                                            <div class="px-4 py-5 bg-white sm:p-6">

                                                <div class="grid grid-cols-6 gap-6">





                                                    <div class="col-span-6">
                                                        <label for="case_title" class="block text-sm font-medium text-gray-700">Employee Name</label>
                                                        <select name="employee_id" id="" required="required"  class="select2 border-gray-300 @error('case_title') border-red-500 @enderror mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm  rounded-md">
                                                            <option value="">None</option>
                                                            @foreach($employees as $emp)
                                                                <option value="{{$emp->id}}">{{$emp->first_name . " " . $emp->last_name}}</option>
                                                            @endforeach
                                                        </select>

{{--                                                        <input type="text" list="browsers_one" id="reason" name="reason" required="required" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 @error('reason') border-red-500 @enderror rounded-md">--}}
{{--                                                        <datalist id="browsers_one">--}}
{{--                                                            <option value="">None</option>--}}
{{--                                                            <option value="Paid leave">--}}
{{--                                                            <option value="Sick leave">--}}
{{--                                                            <option value="Unpaid leave">--}}
{{--                                                        </datalist>--}}


                                                        @error('case_title')<span class="text-red-500 mt-1 text-sm">{{ $message }}</span>@enderror
                                                    </div>





                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="leave_starting_date" class="block text-sm font-medium text-gray-700">Leave Starting Date</label>
                                                        <input type="date" onkeydown="return false"
                                                               name="leave_starting_date" id="leave_starting_date"
                                                               value="{{old('leave_starting_date')}}"
                                                               min="{{ now()->toDateString('Y-m-d') }}"
                                                               required="required"
                                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 @error('decision_date') border-red-500 @enderror rounded-md">
                                                        @error('leave_starting_date')<span
                                                            class="text-red-500 mt-1 text-sm">{{ $message }}</span>@enderror
                                                    </div>


                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="leave_ending_date"
                                                               class="block text-sm font-medium text-gray-700">Leave
                                                            Ending Date</label>
                                                        <input type="date" onkeydown="return false"
                                                               name="leave_ending_date" id="leave_ending_date"
                                                               min="{{ now()->toDateString('Y-m-d') }}"
                                                               value="{{old('leave_ending_date')}}" required="required"
                                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 @error('decision_date') border-red-500 @enderror rounded-md">
                                                        @error('leave_ending_date')<span
                                                            class="text-red-500 mt-1 text-sm">{{ $message }}</span>@enderror
                                                    </div>


                                                    <div class="col-span-6">
                                                        <label for="reason"
                                                               class="block text-sm font-medium text-gray-700">Reason</label>

                                                        <select id="reason" name="reason" required="required" class="select2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 @error('reason') border-red-500 @enderror rounded-md"
                                                               placeholder="Reason..." >

                                                            <option value="Paid leave">Paid leave</option>
                                                            <option value="Sick leave">Sick leave</option>
                                                            <option value="Unpaid leave">Unpaid leave</option>
                                                            </option>
                                                        </select>

                                                        @error('reason')<span
                                                            class="text-red-500 mt-1 text-sm">{{ $message }}</span>@enderror
                                                    </div>

                                                    {{--                                                    <div class="col-span-6 sm:col-span-3">--}}
                                                    {{--                                                        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>--}}
                                                    {{--                                                        <select id="status" name="status"  autocomplete="nationality" class="mt-1 block w-full py-2 px-3 border border-gray-300 @error('status') border-red-500 @enderror bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">--}}
                                                    {{--                                                            <option value="" selected>Please select</option>--}}
                                                    {{--                                                            <option value="Pending" @if( old('Pending') == 'Pending' ) selected="selected" @endif>Pending</option>--}}
                                                    {{--                                                            <option value="Approved" @if( old('Approved') == 'Approved' ) selected="selected" @endif>Approved</option>--}}
                                                    {{--                                                            <option value="Rejected" @if( old('Rejected') == 'Rejected' ) selected="selected" @endif>Rejected</option>--}}
                                                    {{--                                                        </select>--}}
                                                    {{--                                                        @error('status')<span class="text-red-500 mt-1 text-sm">{{ $message }}</span>@enderror--}}
                                                    {{--                                                    </div>--}}


                                                    <div class="col-span-6 sm:col-span-2 sm:text-center">
                                                        <label for="file_path"
                                                               class="block text-sm font-medium text-gray-700">Attachment
                                                            (If any)</label>
                                                        <div class="mt-2">
                                                            <input type="file" name="file_path" id="file_path"
                                                                   class="mt-2 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                                <button type="submit"
                                                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                    Save
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="hidden sm:block" aria-hidden="true">
                                <div class="py-5">
                                    <div class="border-t border-gray-200"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </form>
            <style>
                .hasImage:hover section {
                    background-color: rgba(5, 5, 5, 0.4);
                }

                .hasImage:hover button:hover {
                    background: rgba(5, 5, 5, 0.45);
                }

                #overlay p,
                i {
                    opacity: 0;
                }

                #overlay.draggedover {
                    background-color: rgba(255, 255, 255, 0.7);
                }

                #overlay.draggedover p,
                #overlay.draggedover i {
                    opacity: 1;
                }

                .group:hover .group-hover\:text-blue-800 {
                    color: #2b6cb0;
                }
            </style>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js" defer></script>
    <script>
        $(document).ready(function () {
            $('.select2').select2();
        });
    </script>
</x-app-layout>
