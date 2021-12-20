<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <span class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Sub-Department') }}
            </span>

            <div class="flex justify-center items-center float-right">
                <a href="{{url('dashboard')}}" class="flex items-center px-4 py-2 text-gray-600 bg-white border rounded-lg focus:outline-none hover:bg-gray-100 transition-colors duration-200 transform dark:text-gray-200 dark:border-gray-200  dark:hover:bg-gray-700 ml-2" title="Members List">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span class="hidden md:inline-block ml-2">Home</span>
                </a>

                <a href="javascript:;" onclick="history.back()" id="toggle" class="flex items-center px-4 py-2 text-gray-600 bg-white border rounded-lg focus:outline-none hover:bg-gray-100 transition-colors duration-200 transform dark:text-gray-200 dark:border-gray-200  dark:hover:bg-gray-700 ml-2" title="Members List">

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0019 16V8a1 1 0 00-1.6-.8l-5.333 4zM4.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0011 16V8a1 1 0 00-1.6-.8l-5.334 4z" />
                    </svg>
                    <span class="hidden md:inline-block ml-2">Back</span>
                </a>

                @can('Update Sub Department')
                    <a href="{{route('subdepartment.edit', $subdepartment->id)}}" id="toggle" class="flex items-center px-4 py-2 text-gray-600 bg-white border rounded-lg focus:outline-none hover:bg-gray-100 transition-colors duration-200 transform dark:text-gray-200 dark:border-gray-200  dark:hover:bg-gray-700 ml-2" title="Members List">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                        <span class="hidden md:inline-block ml-2">Edit</span>
                    </a>
                @endcan

                @can('Delete Sub Department')
                    <form action="{{route('subdepartment.destroy', $subdepartment->id)}}" method="post" onSubmit="if(!confirm('Are you sure you want to delete?')){return false;}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="flex items-center px-4 py-2 text-gray-600 bg-white border rounded-lg focus:outline-none hover:bg-gray-100 transition-colors duration-200 transform dark:text-gray-200 dark:border-gray-200  dark:hover:bg-gray-700 ml-2" title="Members List">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                            <span class="hidden md:inline-block ml-2">Delete</span>
                        </button>
                    </form>
                @endcan
            </div>
        </div>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-5">

            <x-alert/>
                <div class="container mx-auto px-5">
                    <div class=" overflow-hidden ">
                        <div class="py-6">
                            <div >
                                <div class="md:grid md:grid-cols-3 md:gap-6">
                                    <div class="md:col-span-1">
                                        <div class="px-4 sm:px-0">
{{--                                            <h3 class="text-lg font-medium leading-6 text-gray-900">Designation</h3>--}}
                                            <p class="mt-1 text-sm text-gray-600">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mt-5 md:mt-0 md:col-span-2">
                                        <div class="shadow overflow-hidden sm:rounded-md">
                                            <div class="px-4 py-5 bg-white sm:p-6">
                                                <div class="grid grid-cols-6 gap-6">
                                                    <div class="col-span-6">
                                                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                                        <input aria-readonly="" type="text" readonly name="name" id="name" value="{{$subdepartment->name}}" autocomplete="name" required="required" class="border-gray-300 @error('name') border-red-500 @enderror mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm  rounded-md">
                                                        @error('name')<span class="text-red-500 mt-1 text-sm">{{ $message }}</span>@enderror
                                                    </div>



                                                    <div class="col-span-6">
                                                        <label for="parent_id" class="block text-sm font-medium text-gray-700">Parent Name</label>
                                                        <select aria-readonly="" name="parent_id" id="" required="required" class="border-gray-300  mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm  rounded-md">
                                                            <option value="0">Main</option>

                                                            @if($parents->isNotEmpty())
                                                                @foreach($parents as $dep)
                                                                    <option value="{{$dep->id}}" @if($subdepartment->parent_id == $dep->id) selected @endif >{{$dep->name}}</option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                    </div>


                                                    </div>
                                                </div>
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
