@extends('../layout/side-menu')

@section('subhead')
    <title>Dashboard</title>
@endsection

@section('subcontent')

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('success'))
        <div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3" role="alert">
            <p class="font-bold">{{ session('success') }}</p>
        </div>
    @endif
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{route('users.store')}}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Name :
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required type="text" name="name" value="{{old("name")}}">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Email :
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required type="email" name="email" value="{{old("email")}}">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Password :
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required type="password" name="password" value="{{old("password")}}">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Retype password :
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required type="password" name="retype_password" value="{{old("retype_password")}}">
        </div>

        <div class="mb-4">
            <span class="block text-gray-700 text-sm font-bold mb-2">Role :</span>
            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required name="role">
                <option value="0">User</option>
                <option value="1">Admin</option>
            </select>
        </div>

        <div class="mb-4">
            <span class="text-gray-700">Gender: </span>
            <div class="mt-2">
                <label class="inline-flex items-center">
                    <input type="radio" class="form-radio" name="gender" value="male" checked>
                    <span class="ml-2">Male</span>
                </label>
                <label class="inline-flex items-center ml-6">
                    <input type="radio" class="form-radio" name="gender" value="female">
                    <span class="ml-2">Female</span>
                </label>
            </div>
        </div>

        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Save
            </button>
        </div>

    </form>
@endsection
