<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Employee Leave') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-5">

            <x-alert/>


            <form action="{{route('leave.update',$leave->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="container mx-auto px-5">
                    <div class=" overflow-hidden ">
                        <div class="py-6">
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
                                                        <label for="case_title"
                                                               class="block text-sm font-medium text-gray-700">Employee
                                                            Name</label>

                                                        <select name="employee_id" id="" required="required"
                                                                class="border-gray-300 @error('case_title') border-red-500 @enderror mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm  rounded-md">
                                                            <option value="">None</option>
                                                            @foreach($employees as $emp)
                                                                <option value="{{$emp->id}}"@if($emp->id == $leave->employee_id) selected @endif>{{$emp->first_name . " " . $emp->last_name}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('case_title')<span
                                                            class="text-red-500 mt-1 text-sm">{{ $message }}</span>@enderror
                                                    </div>


                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="leave_starting_date"
                                                               class="block text-sm font-medium text-gray-700">Leave
                                                            Starting Date</label>
                                                        <input type="date" onkeydown="return false"
                                                               name="leave_starting_date" id="leave_starting_date"
                                                               value="{{$leave->leave_starting_date}}"
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
                                                               value="{{$leave->leave_ending_date}}" required="required"
                                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 @error('decision_date') border-red-500 @enderror rounded-md">
                                                        @error('leave_ending_date')<span
                                                            class="text-red-500 mt-1 text-sm">{{ $message }}</span>@enderror
                                                    </div>




                                                    <div class="col-span-6">
                                                        <label for="reason" class="block text-sm font-medium text-gray-700">Reason</label>
                                                        <input type="text" list="browsers" id="reason" name="reason" required="required" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 @error('reason') border-red-500 @enderror rounded-md"
                                                               placeholder="Reason..." value="{{$leave->reason}}">
                                                        <datalist id="browsers">
                                                            <option value="Paid leave">
                                                            <option value="Sick leave">
                                                            <option value="Unpaid leave">
                                                        </datalist>

                                                        @error('reason')<span class="text-red-500 mt-1 text-sm">{{ $message }}</span>@enderror
                                                    </div>


                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                                                        <select id="status" name="status"  autocomplete="nationality" class="mt-1 block w-full py-2 px-3 border border-gray-300 @error('status') border-red-500 @enderror bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                            <option value="" selected>Please select</option>
                                                            <option value="Pending" @if( $leave->status == 'Pending' ) selected="selected" @endif>Pending</option>
                                                            <option value="Approved" @if( $leave->status == 'Approved' ) selected="selected" @endif>Approved</option>
                                                            <option value="Rejected" @if( $leave->status == 'Rejected' ) selected="selected" @endif>Rejected</option>
                                                        </select>
                                                        @error('status')<span class="text-red-500 mt-1 text-sm">{{ $message }}</span>@enderror
                                                    </div>



                                                    <div class="col-span-6 sm:col-span-2 sm:text-center">
                                                        <label for="file_path" class="block text-sm font-medium text-gray-700">Attachment (If any)</label>
                                                        <div class="mt-0">
                                                            <input type="file" name="file_path" id="file_path" class="mt-2 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                                <button type="submit"
                                                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                    Update
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
</x-app-layout>
