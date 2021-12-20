<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 ">


    {{--<div class="w-full sm:max-w-lg mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">--}}

    <div class="grid grid-cols-5 m-6 bg-white shadow-md overflow-hidden sm:rounded-lg w-11/12 md:w-8/12">
        <div class="col-span-5 md:col-span-3" style="background: url({{url('img/guest_bg.jpg')}});background-size:cover;background-position: center"></div>
        <div class="col-span-5 md:col-span-2 px-6 py-4">
            <div>
                {{ $logo }}
            </div>
            {{ $slot }}
        </div>
    </div>
</div>
