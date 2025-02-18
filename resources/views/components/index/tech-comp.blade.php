<div class="flex gap-x-2 w-full items-center bg-black p-2 md:p-2 border-[1px] border-gray-500 border-opacity-30 rounded-lg">
    <div class="flex flex-col p-2 bg-[#080808] border-[1px] border-gray-500 border-opacity-30 rounded-lg relative">
        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 fill-white"><title>{{ $title }}</title>{{ $icon_path }}</svg>
    </div>
    <div class="flex flex-col gap-y-1">
        <div class="relative w-fit">
            <p class="font-spmono text-sm text-white">{{ $title }}</p>
            @if ($showIcon ?? true)
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 16" class="w-4 h-4 absolute top-0 -right-4 fill-lime-400"><path d="m6.293 11.293 1.414 1.414L12 8.414l4.293 4.293 1.414-1.414L12 5.586z"></path><path d="m6.293 16.293 1.414 1.414L12 13.414l4.293 4.293 1.414-1.414L12 10.586z"></svg>
            @endif
        </div>
        <p class="font-spmono text-xs text-neutral-400">{{ $description }}</p>
    </div>
</div>