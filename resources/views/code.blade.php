@extends('layouts.headerfooter')

@section('content')
<div class="min-h-screen flex flex-col items-center py-10 px-4">

    <!-- Header -->
    <div class=" bg-red-200 py-5 px-5 mb-3 rounded-lg w-full max-w-lg">
        <h1 class="text-4xl font-extrabold text-red-900 drop-shadow-lg text-center">
            🎄 Enter Santa's Code 🎁
        </h1>
    </div>

    <!-- Card -->
    <div class="bg-white/90 backdrop-blur-md w-full max-w-lg rounded-2xl shadow-2xl p-6">

        @if(session('error'))
        <div class="mb-3 p-3 bg-red-100 text-red-800 rounded">{{ session('error') }}</div>
        @endif

        <form action="{{ route('santa.verify') }}" method="POST">
            @csrf
            <input
                name="code"
                class="mb-1 w-full mt-2 p-3 border border-green-300 rounded-lg focus:ring-2 focus:ring-red-400"
                type="text"
                placeholder="Enter Santa's code"
                required>

            <button
                type="submit"
                class="block w-full mt-4 bg-red-600 hover:bg-red-700 text-white font-bold py-3 rounded-xl shadow-lg transition-all text-center">
                🎁 Enter
            </button>
        </form>

        <form action="{{ route('santa.logout') }}" method="POST" class="mt-3">
            @csrf
            <button type="submit" class="w-full text-sm text-gray-600">Leave / Clear Access</button>
        </form>
    </div>

    <!-- Footer -->
    <p class="mt-8 text-red-900 opacity-80 text-sm">Made with ❤️ for Christmas</p>

</div>
@endsection