@extends('layouts.headerfooter')

@section('content')
<div class="min-h-screen flex flex-col items-center py-10 px-4">

    <!-- Header -->
    <div class=" bg-red-200 py-5 px-5 mb-3 rounded-lg">
        <h1 class="text-4xl font-extrabold text-white drop-shadow-lg ">
            🎄 Enter Santa's Code 🎁
        </h1>
    </div>

    <!-- Card -->
    <div class="bg-white/90 backdrop-blur-md w-full max-w-lg rounded-2xl shadow-2xl p-6">

        <!-- Input -->
        <input class="mb-1 w-full mt-2 p-3 border border-green-300 rounded-lg focus:ring-2 focus:ring-red-400" type="text" name="name">
        <a
            href=""
            class="block w-full mt-4 bg-red-600 hover:bg-red-700 text-white font-bold py-3 rounded-xl shadow-lg transition-all text-center">
            🎁 Enter
        </a>

    </div>


    <!-- Footer -->
    <p class="mt-8 text-red-900 opacity-80 text-sm">Made with ❤️ for Christmas</p>

</div>
@endsection