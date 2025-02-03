<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>{{ $short->title }}</title>
</head>
<body class="bg-[#1b1b1f] p-6 flex justify-center">

   <div class="w-min-96 w-[40%] h-72 p-4 bg-[#202127] transition-all hover:outline hover:outline-1 hover:outline-teal-300 flex flex-col items-center justify-center rounded gap-y-4 hover:shadow-lg hover:shadow-gray-700">
        <p class="txt-title text-xl font-semibold">{{ $short->title }}</p>
        <p class="text-xs txt-title ">{{ $short->url }}</p>
        <div class="flex flex-col gap-y-2">
            <p class="text-xs txt-title font-bold">Result: </p>
            <p class="text-xs txt-title ">https://www.thestrange3000.com/url/{{ $short->short_url }}</p>
        </div>
        <div class="flex gap-x-2">
            @if ($short->deleted_at)
            <form action="{{ route('shortener.restore', $short) }}" method="post">
                @csrf
                <button type="submit" class="text-cyan-300 text-xs text-ellipsis font-poppins">Restore</button>
            </form>
            @else
                <a href="{{ route('shortener.edit', $short) }}" class="text-blue-300 text-xs text-ellipsis font-poppins">Edit</a>
                <form action="{{ route('shortener.destroy', $short) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="text-rose-300 text-xs text-ellipsis font-poppins">Delete</button>
                </form>
            @endif
        </div>
        <a href="{{ route('shortener.index') }}" class="text-slate-300 text-xs text-ellipsis font-poppins">Back</a>
    </div>

</body>

@if (session('success'))
<x-flash-success>
</x-flash-success>
@endif


</html>