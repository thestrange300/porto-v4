<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Create</title>
</head>
<body class="bg-[#1b1b1f] ">
    
    <form action="{{ route('shortener.store') }}" method="POST">
        @csrf
        <div class="h-screen flex justify-center items-center">
            <div class="w-min-96 w-[40%] p-8 bg-[#202127] transition-all outline outline-1 outline-teal-300 rounded shadow-lg shadow-gray-700 relative">
                <div class="flex justify-center">
                    <div class="flex flex-col gap-y-4 ">
                        <h4 class="txt-title text-left font-bold text-xl text-center">Create</h4>
                        <div class="flex flex-col max-w-48">
                            <label for="title" class="txt-title text-sm text-left">Title</label>
                            <input type="text" name="title" class="input-style">
                            @error('title')
                            <p class="error-msg">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col max-w-48">
                            <label for="url" class="txt-title text-sm text-left">URL</label>
                            <input type="text" name="url" class="input-style">
                            @error('url')
                            <p class="error-msg">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col max-w-48">
                            <label for="short_url" class="txt-title text-sm text-left">Short URL</label>
                            <input type="text" name="short_url" class="input-style">
                            @error('short_url')
                            <p class="error-msg">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="p-2 rounded text-center bg-[#32363F] hover:bg-[#414853] transition-all font-poppins txt-title">Submit</button>
                    </div>
                    <a href="{{ route('shortener.index') }}" class=" absolute left-6 top-6 text-slate-300 text-xs text-ellipsis font-poppins">Back</a>
                </div>
            </div>
        </div>
    </form>
</body>
</html>