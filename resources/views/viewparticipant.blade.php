@extends('layouts.headerfooter')

@section('content')
<div class="min-h-screen flex justify-center py-10 px-4">

    <div class="w-full max-w-2xl bg-white/95 rounded-2xl shadow-2xl p-6">
        <a href="/">🏚️</a>
        <!-- Header -->
        <h1 class="text-3xl font-extrabold text-center text-red-600 mb-6">
            🎄 Participants for Gift Exchange 🎁
        </h1>

        <!-- Add Person Form -->
        <!-- <form action="{{route('part.create')}}" method="POST" class="flex gap-3 mb-6">
            @csrf
            <input
                type="text"
                name="name"
                placeholder="Enter name..."
                class="flex-1 p-3 rounded-lg border border-green-300 focus:outline-none focus:ring-2 focus:ring-red-400"
                required>

            <input type="number" name="status" value="0" hidden>

            <button
                class="bg-green-600 hover:bg-green-700 text-white font-bold px-5 py-3 rounded-lg shadow-md transition">
                ➕ Add
            </button>
        </form> -->

        <!-- Participants List -->
        <h2 class="text-xl font-semibold text-green-700 mb-3">🎁 Participants List</h2>
        <div class="bg-green-50 rounded-xl overflow-hidden shadow-md">
            <table class="w-full text-left">
                <thead class="bg-green-600 text-white">
                    <tr>
                        <th class="p-3">Name</th>
                        <th class="p-3 text-center">Already Picked</th>
                        <th class="p-3 text-center">Has Been Picked</th>
                        <th class="p-3 text-center">Wishlist</th>
                        <th class="p-3 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($participants as $person)
                    <tr class="border-b">
                        <td class="p-3">{{ $person->name }}</td>
                        <td class="p-3 text-center">
                            @if($person->status == 0)
                            ❌
                            @else
                            ✔️
                            @endif
                        </td>
                        <td class="p-3 text-center">
                            @if( is_null( $person->pickedby))
                            ❌
                            @else
                            $person->pickedby
                            @endif
                        </td>
                        <td class="p-3 text-center">{{ $person->wishlist}}</td>
                        <th class="p-3 text-center"><a href="">👀</a></th>
                    </tr>
                    @empty
                    <tr>
                        <td class="p-3 text-center text-gray-500" colspan="2">No participants yet. Add someone! 🎅</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {{$participants->appends(request()->query())->links() }}
        </div>
        <form action="{{ route('santa.logout') }}" method="POST" class="mt-3">
            @csrf
            <button type="submit" class="w-full text-sm text-gray-600">Leave / Clear Access</button>
        </form>
        <!-- Next Button -->

    </div>

</div>

@endsection