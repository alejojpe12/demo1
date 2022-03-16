<x-base-layout>


    <div class="flex m-4">
        {{-- right half --}}
        <div class="w-1/2 rounded shadow overflow-hidden">
            <img class="object-cover w-full h-96" src="{{ asset($product->image_url) }}" />
        </div>

        {{-- left galf --}}
        <div class="w-1/2 rounded bg-white ml-4 p-4 shadow relative">

            @if (Auth::id() == $product->user->id)
                <div class="flex">
                    <a href="/edit/{{ $product->id }}">
                        <div class="bg-blue-500 rounded-full px-4 py-2 shadow text-sm text-white">Edit</div>
                    </a>
                    <form method="POST" action="/delete/{{ $product->id }}">
                        @csrf
                        <input type="submit" class="bg-red-300 pointer ml-1 rounded-full px-4 py-2 shadow text-sm text-white"
                               value="Delete" />
                    </form>

                </div>
            @else
            @endif

            <div class="font-semibold">{{ $product->title }}</div>
            <div class="text-sm text-gray-500">{{ $product->short_desc }}</div>
            <div class="text-xs text-gray-500">{{ $product->long_desc }}</div>

            {{-- Seller Information --}}

            <div class="mt-4">
                <div class="text-xs font-semibold text-gray">Sold by:</div>
                <div class="text-sm text-gray-500">{{ $product->user->name }}</div>
            </div>

            <div class="mt-2">
                <div class="text-xs font-semibold text-gray">Phone number:</div>
                @auth
                    <div class="text-sm text-gray-500">{{ $product->user->phone }}</div>
                @else
                    <div class="text-sm text-gray-500">** *********** <a href="/login" class="text-xs text-blue-500">Login
                            to view</a></div>

                @endauth
            </div>

            <div class="mt-2">
                <div class="text-xs font-semibold text-gray">Email:</div>
                @auth
                    <div class="text-sm text-gray-500">{{ $product->user->email }}</div>
                @else
                    <div class="text-sm text-gray-500">** *********** <a href="/login" class="text-xs text-blue-500">Login
                            to view</a></div>

                @endauth
            </div>

            <div class="absolute buttom-0 right-0 m-6 rounded-full px-4 py-2 bg-green-500">
                <div class="text-white font-bold text-sm">{{ $product->price }}</div>
            </div>

        </div>
    </div>


</x-base-layout>
