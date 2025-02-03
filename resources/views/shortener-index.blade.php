<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Shortener</title>
</head>
<body class="bg-[#1b1b1f]">
    <a href="{{ route('shortener.index') }}">
        <h2 class="text-center text-2xl my-6 txt-title font-bold">Shortener</h2>
    </a>
    <div class="flex justify-center gap-x-4">
        <a href="{{ route('shortener.create') }}" class="mb-4">
            <button class="text-sm text-teal-200 p-3 rounded text-center bg-[#2a2c31] hover:bg-[#343a42] font-poppins transition-all">Create Shortener</button>
        </a>
        <a href="{{ route('shortener.trashed') }}" class="mb-4">
            <button class="text-sm text-teal-200 p-3 rounded text-center bg-[#2a2c31] hover:bg-[#343a42] font-poppins transition-all">Trashed Shortener</button>
        </a>
    </div>

    @auth
    <a href="{{ route('shortener.logout') }}" class="flex justify-center txt-title text-center text-sm text-red-300">Logout</a>
@else
    <a href="{{ route('shortener.login') }}" class="flex justify-center txt-title text-center text-sm text-purple-300">Login</a>
@endauth

    <div class="flex flex-wrap gap-x-4 gap-y-4 justify-center my-4">
        @foreach ($shorts as $short)
        <a href="{{ route('shortener.show', $short) }}">
            <div class="w-48 h-40 p-2 bg-[#202127] outline outline-1 outline-[#1b1b1f] flex flex-col items-center justify-center rounded gap-y-2 transition-all hover:outline hover:outline-1 hover:outline-teal-300 hover:shadow-lg hover:shadow-gray-700">
                <p class="txt-title text-sm font-semibold">{{ $short->title }}</p>
                <p class="text-xs txt-title ">{{ $short->short_url }}</p>
            </div>
        </a>
        @endforeach
    </div>
    <div class="max-w-xl mx-auto txt-title ">
        {{ $shorts->links() }}
    </div>
</body>
@if (session('success'))
<x-flash-success>
</x-flash-success>
@endif
</html>