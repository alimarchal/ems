<x-app-layout>
    <x-slot name="header">
        <span class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Directorates') }}
        </span>

        <div class="flex justify-center items-center float-right">
            <a href="{{url('dashboard')}}" class="flex items-center px-4 py-2 text-gray-600 bg-white border rounded-lg focus:outline-none hover:bg-gray-100 transition-colors duration-200 transform dark:text-gray-200 dark:border-gray-200  dark:hover:bg-gray-700 ml-2" title="Members List">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span class="hidden md:inline-block ml-2">Home</span>
            </a>

            @can('Create Sub Department')
                <a href="{{route('subdepartment.create')}}"  class="flex items-center px-4 py-2 text-gray-600 bg-white border rounded-lg focus:outline-none hover:bg-gray-100 transition-colors duration-200 transform dark:text-gray-200 dark:border-gray-200  dark:hover:bg-gray-700 ml-2" title="Members List">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                    </svg>
                    <span class="hidden md:inline-block ml-2">Create Directorate</span>
                </a>
            @endcan

            {{--<a href="javascript:;" id="toggle" class="flex items-center px-4 py-2 text-gray-600 bg-white border rounded-lg focus:outline-none hover:bg-gray-100 transition-colors duration-200 transform dark:text-gray-200 dark:border-gray-200  dark:hover:bg-gray-700 ml-2" title="Members List">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                </svg>
                <span class="hidden md:inline-block ml-2">Search Filters</span>
            </a>--}}

        </div>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-alert/>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="min-w-max w-full table-auto">
                    <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">Directorate Name</th>
                        @canany(['Update Sub Department', 'Delete Sub Department'])
                            <th class="py-3 px-6 text-center">Actions</th>
                        @endcanany
                    </tr>
                    </thead>
                    <tbody class="text-black text-sm font-light">
                    @foreach($subdepartment as $lc)
                        <tr class="border-b border-gray-200 bg-white text-black hover:bg-gray-100">
                            <td class="py-3 px-6 text-left">
                                <a href="{{route('subdepartment.show', $lc->id)}}" class="text-blue-400 font-bold">{{$lc->name}}</a>
                            </td>
                            @canany(['Update Sub Department', 'Delete Sub Department'])
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        @can('Update Sub Department')
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <a href="{{route('subdepartment.edit', $lc->id)}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                         stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                              d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        @endcan
                                        @can('Delete Sub Department')
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <form action="{{route('subdepartment.destroy', $lc->id)}}" method="post" onSubmit="if(!confirm('Are you sure you want to delete?')){return false;}">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="w-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                             stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        @endcan
                                    </div>
                                </td>
                            @endcanany
                        </tr>
                        @foreach($lc->children as $child )
                            <tr class="border-b border-gray-200 bg-white text-black hover:bg-gray-100">
                                <td class="py-3 px-6 text-left flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" class="mr-2 ml-4">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    <a href="{{route('subdepartment.show', $child->id)}}" class="text-blue-400">{{$child->name}}</a>
                                </td>
                                @canany(['Update Sub Department', 'Delete Sub Department'])
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex item-center justify-center">
                                            @can('Update Sub Department')
                                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <a href="{{route('subdepartment.edit', $child->id)}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                             stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                  d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                                        </svg>
                                                    </a>
                                                </div>
                                            @endcan
                                            @can('Delete Sub Department')
                                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <form action="{{route('subdepartment.destroy', $child->id)}}" method="post" onSubmit="if(!confirm('Are you sure you want to delete?')){return false;}">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="w-4">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                                 stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                            </svg>
                                                        </button>
                                                    </form>
                                                </div>
                                            @endcan
                                        </div>
                                    </td>
                                @endcanany
                            </tr>
                        @endforeach
                    @endforeach
                    </tbody>
                </table>

            </div>


        </div>

    </div>


</x-app-layout>
