<a href="/product/{{ $p->id }}">
    <div class="m-4 bg-white rounded shadow overflow-hidden">
        <img src="{{ $p->image_url }}" class="h-80 object-cover w-full">

        <div class="p-4">
            <div class="text-sm font-semibold">{{ $p->title }}</div>
            <div class="text-xs text-gray-500 h-8">{{ $p->short_desc }}</div>
        </div>
        <div class="border-t px-4 py-2 bold text-sm">{{ $p->price }}</div>

    </div>
</a>
