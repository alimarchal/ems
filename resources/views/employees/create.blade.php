<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <span class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Add Employee') }}
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

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">



            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="p-6 sm:px-10 bg-white border-b border-gray-200">
                    <div class="mt-6 text-gray-500">

                        <x-jet-validation-errors class="mb-4"/>

                        <form action="{{route('employee.store')}}" class="mb-6" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="bg-white rounded px-8 pt-6 pb-8 ">
                                <div class="-mx-3 md:flex mb-1">
                                    <div class="md:w-1/2 px-3">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="grid-first_name">
                                            First Name
                                        </label>
                                        <input name="first_name"
                                               class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                                               id="grid-first_name" type="text" value="{{old('first_name')}}">
                                    </div>
                                    <div class="md:w-1/2 px-3">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="grid-last_name">
                                            Last Name
                                        </label>
                                        <input name="last_name"
                                               class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                               id="grid-last_name" value="{{old('last_name')}}" type="text">
                                    </div>
                                    <div class="md:w-1/2 px-3">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="grid-father_husband_name">
                                            Father Name
                                        </label>
                                        <input name="father_husband_name"
                                               class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                               id="grid-father_husband_name" value="{{old('father_husband_name')}}"
                                               type="text">
                                    </div>
                                </div>
                                <div class="-mx-3 md:flex mb-1">
                                    <div class="md:w-1/2 px-3">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="grid-cnic">
                                            CNIC (format: xxxxx-xxxxxxx-x)
                                        </label>
                                        <input name="cnic" pattern="^\d{5}-\d{7}-\d{1}$" placeholder="XXXXX-XXXXXXX-X"
                                               maxlength="15"
                                               class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                                               id="grid-cnic" type="text" value="{{old('cnic')}}">
                                    </div>
                                    <div class="md:w-1/2 px-3">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="grid-issue_date">
                                            CNIC Issue Date
                                        </label>
                                        <input name="issue_date" onkeydown="return false" value="{{old('issue_date')}}"
                                               class="appearance-none
                                        block w-full bg-grey-lighter text-grey-darker
                                        border border-red rounded py-3 px-4 mb-3" id="grid-issue_date" type="date"
                                               max="{{ now()->toDateString('Y-m-d') }}">
                                    </div>
                                    <div class="md:w-1/2 px-3">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="grid-expiry_date">
                                            CNIC Expiry Date
                                        </label>
                                        <input name="expiry_date" onkeydown="return false"
                                               value="{{old('expiry_date')}}" class="appearance-none
                                        block w-full bg-grey-lighter text-grey-darker
                                        border border-red rounded py-3 px-4 mb-3" id="grid-expiry_date" type="date"
                                               min="{{ now()->toDateString('Y-m-d') }}">
                                    </div>
                                </div>
                                <div class="-mx-3 md:flex mb-1">
                                    <div class="md:w-1/2 px-3">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="grid-data_of_birth">
                                            Date of birth
                                        </label>
                                        <input name="data_of_birth" onkeydown="return false"
                                               value="{{old('data_of_birth')}}" class="appearance-none
                                        block w-full bg-grey-lighter text-grey-darker
                                        border border-red rounded py-3 px-4 mb-3" id="grid-data_of_birth" type="date"
                                               max="{{ now()->toDateString('Y-m-d') }}">
                                    </div>
                                    <div class="md:w-1/2 px-3">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="gender">
                                            Gender
                                        </label>
                                        <select name="gender" id="gender"
                                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                                                required="">
                                            <option value="" selected="">Please Select</option>
                                            <option value="Male" @if(old('gender') === "Male") selected @endif >Male
                                            </option>
                                            <option value="Female" @if(old('gender') === "Female") selected @endif >
                                                Female
                                            </option>
                                            <option value="Transgender"
                                                    @if(old('gender') === "Transgender") selected @endif >Transgender
                                            </option>
                                        </select>
                                    </div>
                                    <div class="md:w-1/2 px-3">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="district_city">
                                            District/City
                                        </label>
                                        <select name="district_city" id="district_city" class="appearance-none
                                        block w-full bg-grey-lighter text-grey-darker
                                        border border-red rounded py-3 px-4 mb-3">
                                            <option value="" selected="">Please Select</option>
                                            <option value="Muzaffarabad"
                                                    @if(old('district_city') === "Muzaffarabad") selected @endif >
                                                Muzaffarabad
                                            </option>
                                            <option value="Hattian Bala"
                                                    @if(old('district_city') === "Hattian Bala") selected @endif >
                                                Hattian Bala
                                            </option>
                                            <option value="Neelum"
                                                    @if(old('district_city') === "Neelum") selected @endif >Neelum
                                            </option>
                                            <option value="Mirpur"
                                                    @if(old('district_city') === "Mirpur") selected @endif >Mirpur
                                            </option>
                                            <option value="Bhimber"
                                                    @if(old('district_city') === "Bhimber") selected @endif >Bhimber
                                            </option>
                                            <option value="Kotli"
                                                    @if(old('district_city') === "Kotli") selected @endif >Kotli
                                            </option>
                                            <option value="Poonch"
                                                    @if(old('district_city') === "Poonch") selected @endif >Poonch
                                            </option>
                                            <option value="Bagh" @if(old('district_city') === "Bagh") selected @endif >
                                                Bagh
                                            </option>
                                            <option value="Haveli"
                                                    @if(old('district_city') === "Haveli") selected @endif >Haveli
                                            </option>
                                            <option value="Sudhnati"
                                                    @if(old('district_city') === "Sudhnati") selected @endif >Sudhnati
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="-mx-3 md:flex mb-3">
                                    <div class="md:w-1/2 px-3">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="grid-mobile">
                                            Mobile number
                                        </label>
                                        <input name="mobile" placeholder="0300-1234567" minlength="12"
                                               class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                               id="grid-mobile" type="text" value="{{old('mobile')}}">
                                    </div>
                                    <div class="md:w-1/2 px-3">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="grid-email">
                                            email
                                        </label>
                                        <input name="email" class="appearance-none block w-full bg-grey-lighter
                                            text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                               id="grid-email"
                                               type="email" value="{{old('email')}}">
                                    </div>
                                    <div class="md:w-1/2 px-3">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="grid-emergency_contact">
                                            Emergency Contact Number
                                        </label>
                                        <input name="emergency_contact" placeholder="0300-1234567"
                                               class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                               id="grid-emergency_contact" type="tel"
                                               value="{{old('emergency_contact')}}">
                                    </div>
                                </div>
                                <div class="-mx-3 md:flex mb-3">
                                    <div class="md:w-1/2 px-3">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="grid-employee-code">
                                            employee code
                                        </label>
                                        <input name="employee_code" value="{{old('employee_code')}}"
                                               class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                                               id="grid-employee-code" type="text">
                                    </div>
                                    <div class="md:w-1/2 px-3">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="grid-employee-salary">
                                           Salary
                                        </label>
                                        <input name="employee_salary" value="{{old('employee_salary')}}"
                                               class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                                               id="grid-employee-salary" type="text">
                                    </div>
                                    <div class="md:w-1/2 px-3">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="grid-file_path">
                                            Profile Photo
                                        </label>
                                        <input name="file_path"
                                               class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                               id="grid-file_path" type="file">
                                    </div>
                                </div>


                                <h1 class="text-center text-2xl mb-2 mt-4 text-black text-bold ">
                                    Initial Appointment Details
                                </h1>
                                <hr class="mb-3">

                                <div class="-mx-3 md:flex mb-1 mt-2">

                                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="grid-appointment_date">
                                            appointment date
                                        </label>
                                        <input name="appointment_date" onkeydown="return false" required=""
                                               value="{{old('appointment_date')}}" class="appearance-none
                                        block w-full bg-grey-lighter text-grey-darker
                                        border border-red rounded py-3 px-4 mb-3" id="grid-appointment_date" type="date"
                                               max="{{ now()->toDateString('Y-m-d') }}">
                                    </div>
                                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="grid-designation">
                                            designation
                                        </label>
                                        <select name="designation" id="grid-designation" class="appearance-none
                                        block w-full bg-grey-lighter text-grey-darker
                                        border border-red rounded py-3 px-4 mb-3">
                                            <option value="" selected="">Please Select</option>

                                            @foreach(\App\Models\Designation::all() as $designation)
                                            <option value="{{$designation->name}}"
                                                    @if(old('designation') === $designation->name) selected @endif >
                                                {{$designation->name}}
                                            </option>

                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="grid-scale">
                                            scale
                                        </label>
                                        <input name="scale"
                                               class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                                               id="grid-scale" value="{{old('scale')}}" type="number" min="1" max="22">
                                    </div>
                                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="grid-employee_type">
                                            employee type
                                        </label>
                                        <select name="employee_type" id="grid-employee_type" class="appearance-none
                                        block w-full bg-grey-lighter text-grey-darker
                                        border border-red rounded py-3 px-4 mb-3">
                                            <option value="" selected="">Please Select</option>
                                            <option value="Permanent"
                                                    @if(old('employee_type') === "Permanent") selected @endif >Permanent
                                            </option>
                                            <option value="Contract"
                                                    @if(old('employee_type') === "Contract") selected @endif >Contract
                                            </option>
                                            <option value="Adhock"
                                                    @if(old('employee_type') === "Adhock") selected @endif >Adhoc
                                            </option>
                                            <option value="Work Charge"
                                                    @if(old('employee_type') === "Work Charge") selected @endif >Work
                                                Charge
                                            </option>
                                        </select>
                                    </div>

                                </div>


                                <h1 class="text-center text-2xl mb-2 mt-4   text-black text-bold">
                                    Qualification/Education</h1>
                                <hr class="mb-3">

                                <div class="-mx-3 md:flex mb-6">
                                    <div class="md:w-1/2 px-3">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="degree_name">
                                            Last Degree / Qualification Level
                                        </label>
                                        <select name="degree_name"
                                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                                                id="degree_name" required="">
                                            <option value="">None</option>
                                            <option value="Secondary School Certificate / Matriculation / O - level"
                                                    @if(old('degree_name') === "Secondary School Certificate / Matriculation / O - level")   selected @endif >
                                                Secondary School Certificate / Matriculation / O - level
                                            </option>
                                            <option
                                                value="Higher Secondary School Certificate / Intermediate/ A - level"
                                                @if(old('degree_name') === "Higher Secondary School Certificate / Intermediate/ A - level")   selected @endif >
                                                Higher Secondary School Certificate / Intermediate/ A - level
                                            </option>
                                            <option value="Bachelor (14 Years) Degree"
                                                    @if(old('degree_name') === "Bachelor (14 Years) Degree")  selected @endif >
                                                Bachelor (14 Years) Degree
                                            </option>
                                            <option value="Bachelor (15 Years) Degree"
                                                    @if(old('degree_name') === "Bachelor (15 Years) Degree")   selected @endif >
                                                Bachelor (15 Years) Degree
                                            </option>
                                            <option value="Bachelor (16 Years) Degree"
                                                    @if(old('degree_name') === "Bachelor (16 Years) Degree")   selected @endif >
                                                Bachelor (16 Years) Degree
                                            </option>
                                            <option value="Master (16 Years) Degree"
                                                    @if(old('degree_name') === "Master (16 Years) Degree")   selected @endif >
                                                Master (16 Years) Degree
                                            </option>
                                            <option value="Master (17 years) Degree"
                                                    @if(old('degree_name') === "Master (17 years) Degree")   selected @endif >
                                                Master (17 years) Degree
                                            </option>
                                            <option value="Master/ MS (18 Years) Degree"
                                                    @if(old('degree_name') === "Master/ MS (18 Years) Degree")   selected @endif >
                                                Master/ MS (18 Years) Degree
                                            </option>
                                            <option value="M-Phil (18 Years) Degree"
                                                    @if(old('degree_name') === "M-Phil (18 Years) Degree")   selected @endif >
                                                M-Phil (18 Years) Degree
                                            </option>
                                            <option value="Doctorate Degree"
                                                    @if(old('degree_name') === "Doctorate Degree")  selected @endif >
                                                Doctorate Degree
                                            </option>
                                            <option value="MS leading to PhD"
                                                    @if(old('degree_name') === "MS leading to PhD")   selected @endif >
                                                MS leading to PhD
                                            </option>
                                            <option value="Post Doctorate"
                                                    @if(old('degree_name') === "Post Doctorate")   selected @endif >Post
                                                Doctorate
                                            </option>
                                            <option value="PGD" @if(old('degree_name') === "PGD")   selected @endif >
                                                PGD
                                            </option>
                                        </select>
                                    </div>
                                    <div class="md:w-1/2 px-3">
                                        <label
                                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                            for="grid-passing_year">
                                            Degree obtained Year
                                        </label>
                                        <input name="passing_year" class="appearance-none block w-full bg-grey-lighter
                                         text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                               id="grid-passing_year" value="{{old('passing_year')}}" type="date"
                                               onkeydown="return false" max="{{ now()->toDateString('Y-m-d') }}">

                                    </div>
                                </div>


                                <div style="float: right" class="mt--1">
                                    <button class="bg-blue-500 hover:bg-blue-400
                                    text-white font-bold py-2 px-4 border-b-4
                                    border-blue-700 hover:border-blue-500 rounded">
                                        <span>Add Now</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>


</x-app-layout>
