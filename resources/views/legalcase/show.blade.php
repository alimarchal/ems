<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update legal cases') }}
        </h2>
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
                                            <h3 class="text-lg font-medium leading-6 text-gray-900">Legal cases</h3>
                                            <p class="mt-1 text-sm text-gray-600">
                                                Civil law deals with behavior that constitutes an to individual or other private party, such as a corporation. Examples are defamation (including libel and slander), breach of contract, negligence resulting in injury or death, and property damage.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mt-5 md:mt-0 md:col-span-2">
                                        <div class="shadow overflow-hidden sm:rounded-md">
                                            <div class="px-4 py-5 bg-white sm:p-6">
                                                <div class="grid grid-cols-6 gap-6">
                                                    <div class="col-span-6">
                                                        <label for="case_title" class="block text-sm font-medium text-gray-700">Title</label>
                                                        <input type="text" readonly name="case_title" id="case_title" value="{{$legalcase->case_title}}" autocomplete="case_title" required="required" class="border-gray-300 @error('case_title') border-red-500 @enderror mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm  rounded-md">
                                                        @error('case_title')<span class="text-red-500 mt-1 text-sm">{{ $message }}</span>@enderror
                                                    </div>

                                                    <div class="col-span-6">
                                                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                                        <textarea id="description" readonly name="description" required="required" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 @error('description') border-red-500 @enderror rounded-md" placeholder="Case description...">{{$legalcase->description}}</textarea>
                                                        @error('description')<span class="text-red-500 mt-1 text-sm">{{ $message }}</span>@enderror
                                                    </div>

                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="decision_date" class="block text-sm font-medium text-gray-700">Decision Date</label>
                                                        <input type="date" onkeydown="return false" readonly name="decision_date" id="decision_date" value="{{$legalcase->decision_date}}" autocomplete="dob" required="required" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 @error('decision_date') border-red-500 @enderror rounded-md">
                                                        @error('decision_date')<span class="text-red-500 mt-1 text-sm">{{ $message }}</span>@enderror
                                                    </div>


                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                                                        <select id="status" name="status" disabled  autocomplete="nationality" class="mt-1 block w-full py-2 px-3 border border-gray-300 @error('status') border-red-500 @enderror bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                            <option value="{{$legalcase->status}}">
                                                                {{$legalcase->status}}
                                                            </option>
                                                        </select>
                                                        @error('status')<span class="text-red-500 mt-1 text-sm">{{ $message }}</span>@enderror
                                                    </div>



                                                    <div class="col-span-6 sm:col-span-2 sm:text-center">
                                                        <label for="file_path" class="block text-sm font-medium text-gray-700">Attachment</label>
                                                        <div class="mt-2">
                                                            @if(!empty($legalcase->attachment))
                                                                <a href="{{Storage::url($legalcase->attachment)}}" target="_blank" class="mx-auto">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                                                                    </svg>
                                                                </a>
                                                            @else
                                                                Not Available
                                                            @endif
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
