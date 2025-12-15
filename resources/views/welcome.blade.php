@extends('layouts.headerfooter')

@section('content')
<div class="min-h-screen flex flex-col items-center py-10 px-4">

    <!-- Header -->
    <div class=" bg-red-200 py-5 px-5 mb-3 rounded-lg">
        <h1 class="text-4xl font-extrabold text-white drop-shadow-lg ">
            🎄 Christmas Random Picker 🎁
        </h1>
    </div>


    <!-- Card -->
    <div class="bg-white/90 backdrop-blur-md w-full max-w-lg rounded-2xl shadow-2xl p-6">

        <!-- Input -->

        <form action="{{route('part.create')}}" method="post">
            @csrf
            <label class="text-lg font-semibold text-green-700">Enter Full Name (Ex: Juan Tamad):</label> <br>
            <input class="mb-1 w-full mt-2 p-3 border border-green-300 rounded-lg focus:ring-2 focus:ring-red-400" type="text" name="name"> <br>
            <label class="text-lg font-semibold text-green-700">Enter Wishlist (comma-separated):</label>
            <textarea id="names"
                name="wishlist"
                class="w-full mt-2 p-3 border border-green-300 rounded-lg focus:ring-2 focus:ring-red-400"
                rows="3"
                placeholder="Example: Car, House and lot, Flood Control"></textarea>
            <input type="number" name="status" value="0" hidden>
            <!-- Randomize Button -->
            <button
                type="submit"
                class="w-full mt-4 bg-red-600 hover:bg-red-700 text-white font-bold py-3 rounded-xl shadow-lg transition-all">
                🎁 Submit Entry
            </button>

            <!-- Result Box -->
            <div id="result"
                class="mt-6 hidden bg-green-600 text-white text-center py-4 rounded-xl text-2xl font-bold shadow-lg">
            </div>
        </form>

    </div>

    <!-- Footer -->
    <p class="mt-8 text-red-900 opacity-80 text-sm">Made with ❤️ for Christmas</p>
    <a class="mt-8 text-red-900 opacity-80 text-lg" href="/">🏚️ Back Home</a>
</div>

@stop