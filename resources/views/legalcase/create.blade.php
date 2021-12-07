<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create new legal cases ') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-5">

            <x-alert/>
            <form action="{{route('legalCase.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
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
                                                        <input type="text" name="case_title" id="case_title" value="{{old('case_title')}}" autocomplete="case_title" required="required" class="border-gray-300 @error('case_title') border-red-500 @enderror mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm  rounded-md">
                                                        @error('case_title')<span class="text-red-500 mt-1 text-sm">{{ $message }}</span>@enderror
                                                    </div>

                                                    <div class="col-span-6">
                                                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                                        <textarea id="description" name="description" required="required" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 @error('description') border-red-500 @enderror rounded-md" placeholder="Case description...">{{old('description')}}</textarea>
                                                        @error('description')<span class="text-red-500 mt-1 text-sm">{{ $message }}</span>@enderror
                                                    </div>

                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="decision_date" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                                                        <input type="date"  onkeydown="return false" name="decision_date" id="decision_date" value="{{old('decision_date')}}" autocomplete="dob" required="required" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 @error('decision_date') border-red-500 @enderror rounded-md">
                                                        @error('decision_date')<span class="text-red-500 mt-1 text-sm">{{ $message }}</span>@enderror
                                                    </div>


                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                                                        <select id="status" name="status"  autocomplete="nationality" class="mt-1 block w-full py-2 px-3 border border-gray-300 @error('status') border-red-500 @enderror bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                            <option value="Sub Judice" @if( old('status') == 'Sub Judice' ) selected="selected" @endif>Sub Judice</option>
                                                            <option value="Decided" @if( old('status') == 'Decided' ) selected="selected" @endif>Decided</option>
                                                        </select>
                                                        @error('status')<span class="text-red-500 mt-1 text-sm">{{ $message }}</span>@enderror
                                                    </div>



                                                    <div class="col-span-6 sm:col-span-2 sm:text-center">
                                                        <label for="file_path" class="block text-sm font-medium text-gray-700">Attachment (If any)</label>
                                                        <div class="mt-2">
                                                            <input type="file" name="file_path" id="file_path" class="mt-2 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
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
</x-app-layout>
