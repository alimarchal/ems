<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <span class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Directorate') }}
            </span>

            <div class="flex justify-center items-center float-right">
                <a href="{{url('dashboard')}}" class="flex items-center px-4 py-2 text-gray-600 bg-white border rounded-lg focus:outline-none hover:bg-gray-100 transition-colors duration-200 transform dark:text-gray-200 dark:border-gray-200  dark:hover:bg-gray-700 ml-2" title="Members List">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span class="hidden md:inline-block ml-2">Home</span>
                </a>

                <a href="javascript:;" onclick="history.back()" class="flex items-center px-4 py-2 text-gray-600 bg-white border rounded-lg focus:outline-none hover:bg-gray-100 transition-colors duration-200 transform dark:text-gray-200 dark:border-gray-200  dark:hover:bg-gray-700 ml-2" title="Members List">

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0019 16V8a1 1 0 00-1.6-.8l-5.333 4zM4.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0011 16V8a1 1 0 00-1.6-.8l-5.334 4z" />
                    </svg>
                    <span class="hidden md:inline-block ml-2">Back</span>
                </a>

            </div>
        </div>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-5">

            <x-alert/>
            <form action="{{route('subdepartment.update',$subdepartment->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="container mx-auto px-5">
                    <div class=" overflow-hidden ">
                        <div class="py-6">
                            <div >
                                <div class="md:grid md:grid-cols-3 md:gap-6">
                                    <div class="md:col-span-1">
                                        <div class="px-4 sm:px-0">
                                            <h3 class="text-lg font-medium leading-6 text-gray-900">Update Directorate</h3>
                                            <p class="mt-1 text-sm text-gray-600">

                                            </p>
                                        </div>
                                    </div>
                                    <div class="mt-5 md:mt-0 md:col-span-2">
                                        <div class="shadow overflow-hidden sm:rounded-md">


                                            <div class="px-4 py-5 bg-white sm:p-6"><div class="grid grid-cols-6 gap-6">
                                                    <div class="col-span-6">
                                                        <label for="name" class="block text-sm font-medium text-gray-700">Directorate Name</label>
                                                        <input type="text" name="name" id="name" value="{{$subdepartment->name}}" autocomplete="case_title" required="required" class="border-gray-300 @error('case_title') border-red-500 @enderror mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm  rounded-md">
                                                        @error('name')<span class="text-red-500 mt-1 text-sm">{{ $message }}</span>@enderror
                                                    </div>

                                                </div>


                                                <br>
                                                <div class="col-span-6">
                                                    <label for="parent_id"
                                                           class="block text-sm font-medium text-gray-700">Parent Name</label>
                                                    <select name="parent_id" id="" required="required"
                                                            class="border-gray-300  mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm  rounded-md">
                                                        <option value="0">Main</option>

                                                        @if($parents->isNotEmpty())
                                                            @foreach($parents as $dep)
                                                                @if($dep->id != $subdepartment->id)
                                                                    <option value="{{$dep->id}}" @if($subdepartment->parent_id == $dep->id) selected @endif >{{$dep->name}}</option>
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>


                                            </div>
                                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
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
