<title>Admin Dashboard</title>
@extends('layout')
@section('content')
    <form class="flex flex-col bg-white pt-3 rounded-3xl" action="/doctor" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="shadow overflow-hidden border-b border-gray-200 rounded-lg">
            <div class="px-8 py-4 ">
                <div class='flex flex-wrap -mx-3 mb-6'>
                    <div class="w-full">
                        <h2 class="text-2xl font-bold text-gray-900">Doctor Info:</h2>
                        <div class="flex items-center justify-between mt-4">
                            <div class='w-full md:w-1/2 px-3 mb-6'>
                                <label
                                    class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>name</label>
                                <input name="name" value="{{ old('name') }}"
                                    class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                    type='text' @error('name') is-invalid @enderror>
                                @error('name') <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class='w-full md:w-1/2 px-3 mb-6'>
                                <label
                                    class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>email</label>
                                <input name="email"
                                    class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                    type='text' required>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <div class='w-full md:w-1/2 px-3 mb-6'>
                                <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>blood
                                    group</label>
                                <select name="blood_group"
                                    class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500">
                                    <option>A+</option>
                                    <option>A-</option>
                                    <option>AB+</option>
                                    <option>AB-</option>
                                    <option>B</option>
                                    <option>B-</option>
                                    <option>O</option>
                                    <option>O-</option>
                                </select>
                            </div>
                            <div class='w-full md:w-1/2 px-3 mb-6'>
                                <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>phone
                                    number</label>
                                <input name="phone_number"
                                    class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                    type='text' required>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <div class='w-full md:w-1/2 px-3 mb-6'>
                                <label
                                    class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>type</label>
                                <select name="type" id="test" onchange="showDiv('hidden_div', this)"
                                    class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500">
                                    <option>Admin</option>
                                    <option>Doctor</option>
                                    <option>User</option>
                                </select>
                            </div>
                            <div class='w-full md:w-1/2 px-3 mb-6'>
                                <label
                                    class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>status</label>
                                <select name="status"
                                    class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500">
                                    <option>Enabled</option>
                                    <option>Disabled</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <div class='w-full md:w-1/2 px-3 mb-6'>
                                <label
                                    class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>gender</label>
                                <select name="gender"
                                    class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500">
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class='w-full md:w-1/2 px-3 mb-6'>
                                <label
                                    class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>password</label>
                                <input name="password"
                                    class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                    type='text' required>
                            </div>
                        </div>
                        <div id="hidden_div">
                            <div class="flex items-center justify-between mt-4">
                                <div class='w-full md:w-1/2 px-3 mb-6'>
                                    <label
                                        class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>specilization</label>
                                    <input name="specilization"
                                        class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                        type='text' required>
                                </div>
                                <div class='w-full md:w-1/2 px-3 mb-6'>
                                    <label
                                        class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>qualification</label>
                                    <input name="qualification"
                                        class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                        type='text' required>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-4">
                                <div class='w-full md:w-1/2 px-3 mb-6'>
                                    <label
                                        class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>availability</label>
                                    <input name="availability"
                                        class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                        type='text' required>
                                </div>
                                <div class='w-full md:w-1/2 px-3 mb-6'>
                                    <label
                                        class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>time</label>
                                    <input name="time"
                                        class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                        type='text' required>
                                </div>
                            </div>
                            <div class='w-full md:w-1/2 px-3 mb-6'>
                                <label
                                    class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>charge</label>
                                <input name="charge"
                                    class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                    type='text' required>
                            </div>
                        </div>

                        <div class="w-full md:w-1/2 px-3 mb-6">
                            <div class="custom-file">
                                <label
                                    class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>Image</label>
                                <input type="file" name="image" class="custom-file-input">
                                <p class="text-xs font-bold text-gray-600">Upload an Image</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 flex flex-row-reverse ">
                        <button
                            class="appearance-none bg-gray-800 text-lg text-gray-100 px-6 py-2 shadow-sm border border-gray-400 rounded-lg mr-3 btn-lg"
                            type="submit">Save</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </form>
@endsection
<style>
    #hidden_div {
        display: none;
    }

</style>
<script>
    function showDiv(divId, element) {
        document.getElementById(divId).style.display = element.value == "Doctor" ? 'block' : 'none';
    }

</script>
