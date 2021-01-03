<title>Doctor List</title>
@extends('layout')
@section('content')
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Title
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Role
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($doctors as $doctor)

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full"
                                                    src="/uploads/profile-picture/{{ $doctor->user->profile_pic }}" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{ $doctor->user->name }}
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    {{ $doctor->user->email }}

                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $doctor->specilization }}</div>
                                        <div class="text-sm text-gray-500">{{ $doctor->qualification }}</div>
                                    </td>
                                    <form action="/status/{{ $doctor->user->id }}" method="POST">
                                        @csrf
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @if ($doctor->user->status === 'Enabled')
                                                <button
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                    {{ $doctor->user->status }}
                                                </button>
                                            @endif

                                            @if ($doctor->user->status === 'Disabled')
                                                <button
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                    {{ $doctor->user->status }}
                                                </button>
                                            @endif

                                        </td>
                                    </form>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $doctor->availability }}
                                        {{ $doctor->time }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium">
                                        <a href="/doctor/{{ $doctor->user->id }}/edit"
                                            class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        <form action="/doctor/{{ $doctor->user->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="text-red-600 hover:text-red-800 font-medium"
                                                type="submit">Delete</button>
                                        </form>
                                    </td>

                                </tr>
                            @empty
                                No doctors available...
                            @endforelse
                            <!-- More rows... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
