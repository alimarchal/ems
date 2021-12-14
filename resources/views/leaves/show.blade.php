<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Employee Leave') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-5">

            <x-alert/>


            {{--            <div class="p-5">--}}
            {{--                <div class="mx-4 p-4">--}}
            {{--                    <div class="flex items-center">--}}
            {{--                        <div class="flex items-center text-purple-500 relative">--}}
            {{--                            <div--}}
            {{--                                class="--}}
            {{--            rounded-full--}}
            {{--            transition--}}
            {{--            duration-500--}}
            {{--            ease-in-out--}}
            {{--            h-12--}}
            {{--            w-12--}}
            {{--            py-3--}}
            {{--            border-2 border-purple-500--}}
            {{--          "--}}
            {{--                            >--}}
            {{--                                <svg--}}
            {{--                                    xmlns="http://www.w3.org/2000/svg"--}}
            {{--                                    width="100%"--}}
            {{--                                    height="100%"--}}
            {{--                                    fill="none"--}}
            {{--                                    viewBox="0 0 24 24"--}}
            {{--                                    stroke="currentColor"--}}
            {{--                                    stroke-width="2"--}}
            {{--                                    stroke-linecap="round"--}}
            {{--                                    stroke-linejoin="round"--}}
            {{--                                    class="feather feather-bookmark"--}}
            {{--                                >--}}
            {{--                                    <path--}}
            {{--                                        d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"--}}
            {{--                                    ></path>--}}
            {{--                                </svg>--}}
            {{--                            </div>--}}
            {{--                            <div--}}
            {{--                                class="--}}
            {{--            absolute--}}
            {{--            top-0--}}
            {{--            -ml-10--}}
            {{--            text-center--}}
            {{--            mt-16--}}
            {{--            w-32--}}
            {{--            text-xs--}}
            {{--            font-medium--}}
            {{--            uppercase--}}
            {{--            text-purple-500--}}
            {{--          "--}}
            {{--                            >--}}
            {{--                                Personal--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <div--}}
            {{--                            class="--}}
            {{--          flex-auto--}}
            {{--          border-t-2--}}
            {{--          transition--}}
            {{--          duration-500--}}
            {{--          ease-in-out--}}
            {{--          border-purple-500--}}
            {{--        "--}}
            {{--                        ></div>--}}
            {{--                        <div class="flex items-center text-white relative">--}}
            {{--                            <div--}}
            {{--                                class="--}}
            {{--            rounded-full--}}
            {{--            transition--}}
            {{--            duration-500--}}
            {{--            ease-in-out--}}
            {{--            h-12--}}
            {{--            w-12--}}
            {{--            py-3--}}
            {{--            border-2--}}
            {{--            bg-purple-500--}}
            {{--            border-purple-500--}}
            {{--          "--}}
            {{--                            >--}}
            {{--                                <svg--}}
            {{--                                    xmlns="http://www.w3.org/2000/svg"--}}
            {{--                                    width="100%"--}}
            {{--                                    height="100%"--}}
            {{--                                    fill="none"--}}
            {{--                                    viewBox="0 0 24 24"--}}
            {{--                                    stroke="currentColor"--}}
            {{--                                    stroke-width="2"--}}
            {{--                                    stroke-linecap="round"--}}
            {{--                                    stroke-linejoin="round"--}}
            {{--                                    class="feather feather-user-plus"--}}
            {{--                                >--}}
            {{--                                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>--}}
            {{--                                    <circle cx="8.5" cy="7" r="4"></circle>--}}
            {{--                                    <line x1="20" y1="8" x2="20" y2="14"></line>--}}
            {{--                                    <line x1="23" y1="11" x2="17" y2="11"></line>--}}
            {{--                                </svg>--}}
            {{--                            </div>--}}
            {{--                            <div--}}
            {{--                                class="--}}
            {{--            absolute--}}
            {{--            top-0--}}
            {{--            -ml-10--}}
            {{--            text-center--}}
            {{--            mt-16--}}
            {{--            w-32--}}
            {{--            text-xs--}}
            {{--            font-medium--}}
            {{--            uppercase--}}
            {{--            text-purple-500--}}
            {{--          "--}}
            {{--                            >--}}
            {{--                                Account--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <div--}}
            {{--                            class="--}}
            {{--          flex-auto--}}
            {{--          border-t-2--}}
            {{--          transition--}}
            {{--          duration-500--}}
            {{--          ease-in-out--}}
            {{--          border-gray-300--}}
            {{--        "--}}
            {{--                        ></div>--}}
            {{--                        <div class="flex items-center text-gray-500 relative">--}}
            {{--                            <div--}}
            {{--                                class="--}}
            {{--            rounded-full--}}
            {{--            transition--}}
            {{--            duration-500--}}
            {{--            ease-in-out--}}
            {{--            h-12--}}
            {{--            w-12--}}
            {{--            py-3--}}
            {{--            border-2 border-gray-300--}}
            {{--          "--}}
            {{--                            >--}}
            {{--                                <svg--}}
            {{--                                    xmlns="http://www.w3.org/2000/svg"--}}
            {{--                                    width="100%"--}}
            {{--                                    height="100%"--}}
            {{--                                    fill="none"--}}
            {{--                                    viewBox="0 0 24 24"--}}
            {{--                                    stroke="currentColor"--}}
            {{--                                    stroke-width="2"--}}
            {{--                                    stroke-linecap="round"--}}
            {{--                                    stroke-linejoin="round"--}}
            {{--                                    class="feather feather-mail"--}}
            {{--                                >--}}
            {{--                                    <path--}}
            {{--                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"--}}
            {{--                                    ></path>--}}
            {{--                                    <polyline points="22,6 12,13 2,6"></polyline>--}}
            {{--                                </svg>--}}
            {{--                            </div>--}}
            {{--                            <div--}}
            {{--                                class="--}}
            {{--            absolute--}}
            {{--            top-0--}}
            {{--            -ml-10--}}
            {{--            text-center--}}
            {{--            mt-16--}}
            {{--            w-32--}}
            {{--            text-xs--}}
            {{--            font-medium--}}
            {{--            uppercase--}}
            {{--            text-gray-500--}}
            {{--          "--}}
            {{--                            >--}}
            {{--                                Message--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <div--}}
            {{--                            class="--}}
            {{--          flex-auto--}}
            {{--          border-t-2--}}
            {{--          transition--}}
            {{--          duration-500--}}
            {{--          ease-in-out--}}
            {{--          border-gray-300--}}
            {{--        "--}}
            {{--                        ></div>--}}
            {{--                        <div class="flex items-center text-gray-500 relative">--}}
            {{--                            <div--}}
            {{--                                class="--}}
            {{--            rounded-full--}}
            {{--            transition--}}
            {{--            duration-500--}}
            {{--            ease-in-out--}}
            {{--            h-12--}}
            {{--            w-12--}}
            {{--            py-3--}}
            {{--            border-2 border-gray-300--}}
            {{--          "--}}
            {{--                            >--}}
            {{--                                <svg--}}
            {{--                                    xmlns="http://www.w3.org/2000/svg"--}}
            {{--                                    width="100%"--}}
            {{--                                    height="100%"--}}
            {{--                                    fill="none"--}}
            {{--                                    viewBox="0 0 24 24"--}}
            {{--                                    stroke="currentColor"--}}
            {{--                                    stroke-width="2"--}}
            {{--                                    stroke-linecap="round"--}}
            {{--                                    stroke-linejoin="round"--}}
            {{--                                    class="feather feather-database"--}}
            {{--                                >--}}
            {{--                                    <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>--}}
            {{--                                    <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>--}}
            {{--                                    <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>--}}
            {{--                                </svg>--}}
            {{--                            </div>--}}
            {{--                            <div--}}
            {{--                                class="--}}
            {{--            absolute--}}
            {{--            top-0--}}
            {{--            -ml-10--}}
            {{--            text-center--}}
            {{--            mt-16--}}
            {{--            w-32--}}
            {{--            text-xs--}}
            {{--            font-medium--}}
            {{--            uppercase--}}
            {{--            text-gray-500--}}
            {{--          "--}}
            {{--                            >--}}
            {{--                                Confirm--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="mt-8 p-4">--}}
            {{--                    <div class="flex p-2 mt-4">--}}
            {{--                        <button--}}
            {{--                            class="--}}
            {{--          bg-gray-200--}}
            {{--          text-gray-800--}}
            {{--          active:bg-purple-600--}}
            {{--          font-bold--}}
            {{--          uppercase--}}
            {{--          text-sm--}}
            {{--          px-6--}}
            {{--          py-3--}}
            {{--          rounded--}}
            {{--          shadow--}}
            {{--          hover:shadow-lg--}}
            {{--          outline-none--}}
            {{--          focus:outline-none--}}
            {{--          mr-1--}}
            {{--          mb-1--}}
            {{--          ease-linear--}}
            {{--          transition-all--}}
            {{--          duration-150--}}
            {{--        "--}}
            {{--                            type="button"--}}
            {{--                        >--}}
            {{--                            Previous--}}
            {{--                        </button>--}}
            {{--                        <div class="flex-auto flex flex-row-reverse">--}}
            {{--                            <button--}}
            {{--                                class="--}}
            {{--            mx-3--}}
            {{--            bg-purple-500--}}
            {{--            text-white--}}
            {{--            active:bg-purple-600--}}
            {{--            font-bold--}}
            {{--            uppercase--}}
            {{--            text-sm--}}
            {{--            px-6--}}
            {{--            py-3--}}
            {{--            rounded--}}
            {{--            shadow--}}
            {{--            hover:shadow-lg--}}
            {{--            outline-none--}}
            {{--            focus:outline-none--}}
            {{--            mr-1--}}
            {{--            mb-1--}}
            {{--            ease-linear--}}
            {{--            transition-all--}}
            {{--            duration-150--}}
            {{--          "--}}
            {{--                                type="button"--}}
            {{--                            >--}}
            {{--                                Next--}}
            {{--                            </button>--}}
            {{--                            <button--}}
            {{--                                class="--}}
            {{--            text-purple-500--}}
            {{--            bg-transparent--}}
            {{--            border border-solid border-purple-500--}}
            {{--            hover:bg-purple-500 hover:text-white--}}
            {{--            active:bg-purple-600--}}
            {{--            font-bold--}}
            {{--            uppercase--}}
            {{--            text-sm--}}
            {{--            px-6--}}
            {{--            py-3--}}
            {{--            rounded--}}
            {{--            outline-none--}}
            {{--            focus:outline-none--}}
            {{--            mr-1--}}
            {{--            mb-1--}}
            {{--            ease-linear--}}
            {{--            transition-all--}}
            {{--            duration-150--}}
            {{--          "--}}
            {{--                                type="button"--}}
            {{--                            >--}}
            {{--                                Skip--}}
            {{--                            </button>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            <form action="{{route('leave.update',$leave->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
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

                                                        <select name="employee_id" id="" required="required" disabled
                                                                class="border-gray-300 @error('case_title') border-red-500 @enderror mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm  rounded-md">
                                                            <option value="">None</option>
                                                            @foreach($employees as $emp)
                                                                <option value="{{$emp->id}}" @if($emp->id == $leave->employee_id) selected @endif>{{$emp->first_name . " " . $emp->last_name}}</option>
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
                                                               name="leave_starting_date" id="leave_starting_date" readonly
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
                                                               name="leave_ending_date" id="leave_ending_date" readonly
                                                               min="{{ now()->toDateString('Y-m-d') }}"
                                                               value="{{$leave->leave_ending_date}}" required="required"
                                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 @error('decision_date') border-red-500 @enderror rounded-md">
                                                        @error('leave_ending_date')<span
                                                            class="text-red-500 mt-1 text-sm">{{ $message }}</span>@enderror
                                                    </div>


                                                    <div class="col-span-6">
                                                        <label for="reason"
                                                               class="block text-sm font-medium text-gray-700">Reason</label>
                                                        <textarea id="reason" name="reason" required="required" rows="3" readonly
                                                                  class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 @error('reason') border-red-500 @enderror rounded-md"
                                                                  placeholder="Reason...">{{$leave->reason}}</textarea>
                                                        @error('reason')<span
                                                            class="text-red-500 mt-1 text-sm">{{ $message }}</span>@enderror
                                                    </div>


                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="status"
                                                               class="block text-sm font-medium text-gray-700">Status</label>
                                                        <select id="status" name="status" autocomplete="nationality" disabled
                                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 @error('status') border-red-500 @enderror bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                            <option value="" selected>Please select</option>
                                                            <option value="Sub Judice"
                                                                    @if( $leave->status == 'Pending' ) selected="selected" @endif>
                                                                Pending
                                                            </option>
                                                            <option value="Decided"
                                                                    @if( $leave->status == 'Approved' ) selected="selected" @endif>
                                                                Approved
                                                            </option>
                                                            <option value="Decided"
                                                                    @if( $leave->status == 'Rejected' ) selected="selected" @endif>
                                                                Rejected
                                                            </option>
                                                        </select>
                                                        @error('status')<span
                                                            class="text-red-500 mt-1 text-sm">{{ $message }}</span>@enderror
                                                    </div>


                                                    <div class="col-span-6 sm:col-span-2 sm:text-center">
                                                        <label for="file_path"
                                                               class="block text-sm font-medium text-gray-700">Attachment
                                                            (If any)</label>
                                                        <div class="mt-0">
                                                            @if(!empty($lc->attachment_path))
                                                                <a href="{{Storage::url($lc->attachment_path)}}" target="_blank" class="mx-auto">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                                                                    </svg>
                                                                </a>

                                                            @else
                                                                N/A
                                                            @endif
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">

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
