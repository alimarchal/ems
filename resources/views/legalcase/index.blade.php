<x-app-layout>
    <x-slot name="header">
        <span class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employee Personal Information ') }}
        </span>

        <a href="{{route('legalCase.create')}}" class=" float-right px-4 py-2
        bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white
        uppercase tracking-widest hover:bg-green-500 focus:outline-none focus:border-green-700
        focus:ring focus:ring-green-200 active:bg-green-600 disabled:opacity-25 transition ">
            Add Legal Case
        </a>
    </x-slot>


    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="min-w-max w-full table-auto">
                    <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">Case Title</th>
                        <th class="py-3 px-6 text-center">Description</th>
                        <th class="py-3 px-6 text-center">Decision Date</th>
                        <th class="py-3 px-6 text-center">Attachment</th>
                        <th class="py-3 px-6 text-center">status</th>
                        <th class="py-3 px-6 text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody class="text-black text-sm font-light">
                    @foreach($legalCase as $lc)
                        <tr class="border-b border-gray-200 bg-white text-black hover:bg-gray-100">
                            <td class="py-3 px-6 text-left">
                                {{$lc->case_title}}
                            </td>
                            <td class="py-3 px-6 text-center">
                                {{$lc->description}}
                            </td>
                            <td class="py-3 px-6 text-center">
                                {{\Carbon\Carbon::parse($lc->decision_date)->format('d-m-Y')}}
                            </td>
                            <td class="py-3 px-6 text-center">
                                @if(!empty($lc->attachment))
                                    <a href="{{Storage::url($lc->attachment)}}" target="_blank" class="mx-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                                    </svg>
                                    </a>

                                @else
                                    N/A
                                @endif
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span>{{$lc->status}}</span>
                            </td>


                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <a href="{{route('legalCase.show', $lc->id)}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <a href="{{route('legalCase.edit', $lc->id)}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <form action="{{route('legalCase.destroy', $lc->id)}}" method="post" onSubmit="if(!confirm('Are you sure you want to delete?')){return false;}">
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
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>


                {{ $legalCase->links() }}
            </div>


        </div>

    </div>


</x-app-layout>
