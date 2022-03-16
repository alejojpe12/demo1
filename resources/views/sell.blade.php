<x-base-layout>
    <x-form-container-card>

        @if ($errors->any())
            <div class="text-red-600 text-xs">
                @foreach ($errors->all() as $error)
                <div>{{$error}}</div>
                @endforeach
            
            </div> 
        @endif

        <x-slot name="title">
            What do you want to sell today
        </x-slot>

        <form method="POST" action="/product" enctype="multipart/form-data">

            @csrf
            
            <div class="mt-2">
                <label for="title" class="text-sm text-gray-500 text-semibold">Product tittle</label>
        
                <input type="text" id="title" name="title" class="rounded-md shadow-sm border-gray-300 focus:border-indigo w-full">
            </div>

            <div class="mt-2">
                <label for="desc-sm" class="text-sm text-gray-500 text-semibold">Add a short description of the product</label>
        
                <input type="text" id="desc-sm" name="desc-sm" class="rounded-md shadow-sm border-gray-300 focus:border-indigo w-full">
            </div>

            <div class="mt-2">
                <label for="desc-full" class="text-sm text-gray-500 text-semibold">Add a complete description of the product</label>
        
                <textarea id="desc-full" name="desc-full" class="rounded-md shadow-sm border-gray-300 focus:border-indigo w-full"></textarea>
            </div>

            <div class="mt-2">
                <label for="price" class="text-sm text-gray-500 text-semibold">Product price</label>
        
                <input type="text" id="price" name="price" class="rounded-md shadow-sm border-gray-300 focus:border-indigo w-full">
            </div>

            <div class="mt-2">
                <label for="img" class="text-sm text-gray-500 text-semibold">Select an image</label>
        
                <input type="file" id="img" name="img" class="w-full">
            </div>

            <x-button class="mt-4 w-full justify-center">
                Post the ad
            </x-button>
        </form>
    </x-form-container-card>
</x-base-layout>