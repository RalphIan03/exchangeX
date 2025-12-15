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

        <form action="{{ route('part.create') }}" method="post" onsubmit="showLoading()">
            @csrf

            <label class="text-lg font-semibold text-green-700">Enter Username (Will be used to determine your receiver):</label>
            <input
                class="mb-1 w-full mt-2 p-3 border border-green-300 rounded-lg focus:ring-2 focus:ring-red-400"
                type="text"
                name="username"
                required>

            <label class="text-lg font-semibold text-green-700">Enter Full Name (Ex: Juan Tamad):</label>
            <input
                class="mb-1 w-full mt-2 p-3 border border-green-300 rounded-lg focus:ring-2 focus:ring-red-400"
                type="text"
                name="name"
                required>

            <label class="text-lg font-semibold text-green-700">Enter Wishlist (comma-separated):</label>
            <textarea
                name="wishlist"
                class="w-full mt-2 p-3 border border-green-300 rounded-lg focus:ring-2 focus:ring-red-400"
                rows="3"
                placeholder="Example: Car, House and lot, Flood Control"
                required></textarea>

            <input type="number" name="status" value="0" hidden>

            <button
                id="submitBtn"
                type="submit"
                class="w-full mt-4 bg-red-600 hover:bg-red-700 text-white font-bold py-3 rounded-xl shadow-lg transition-all">
                🎁 Submit Entry
            </button>
        </form>
    </div>

    <!-- Footer -->
    <p class="mt-8 text-red-900 opacity-80 text-sm">Made with ❤️ for Christmas</p>
    <a class="mt-8 text-red-900 opacity-80 text-lg" href="/">🏚️ Back Home</a>
</div>

<!-- 🔄 Loading Overlay -->
<div id="loadingOverlay"
    class="fixed inset-0 bg-black/60 backdrop-blur-sm hidden z-50 flex items-center justify-center">

    <div class="bg-white rounded-2xl p-6 shadow-2xl text-center w-80">
        <!-- <img src="Assets.santa" alt=""> -->
        <div class="animate-spin rounded-full h-12 w-12 border-4 border-red-600 border-t-transparent mx-auto mb-4"></div>
        <p class="text-lg font-semibold text-gray-700">
            Please wait while we are saving your data…
        </p>
    </div>
</div>

<script>
    function showLoading() {
        document.getElementById('loadingOverlay').classList.remove('hidden');

        // Prevent multiple submits
        document.getElementById('submitBtn').disabled = true;
    }
</script>
@stop