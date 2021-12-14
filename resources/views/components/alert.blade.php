<div>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    <div class="container mx-auto px-5">
        <x-jet-validation-errors class="mb-4" />
    </div>
    @if (session()->has('message'))
        <div class="pb-5" id="msg_alert">
            <div class="container mx-auto px-5">
                <div class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-md text-green-700 bg-green-100 border border-green-300 ">
                    <div slot="avatar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle w-5 h-5 mx-2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <div class="font-normal  max-w-full flex-initial">{{ session('message') }}</div>
                    <div class="flex flex-auto flex-row-reverse">
                        <div>
{{--                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x cursor-pointer hover:text-green-400 rounded-full w-5 h-5 ml-2" onclick="$('#msg_alert').toggle();">--}}
{{--                                <line x1="18" y1="6" x2="6" y2="18"></line>--}}
{{--                                <line x1="6" y1="6" x2="18" y2="18"></line>--}}
{{--                            </svg>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
