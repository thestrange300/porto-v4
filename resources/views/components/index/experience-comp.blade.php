<div id="description-box" class="grid grid-rows-2 md:grid-rows-none md:grid-cols-4 gap-y-4 gap-x-4 w-full md:w-[80%] h-fit border bg-[#080808] border-gray-500 rounded-lg p-6 border-opacity-30">
    <div class="row-span-1 bg-[#191919] rounded-lg flex justify-center items-center relative h-full">
        @if (isset($exp_image) && $exp_image != null)
            <img src="{{ $exp_image }}" alt="experience image" class="w-full h-80 md:h-full object-cover rounded-lg saturate-50">
        @else
            <p class="font-ehs text-4xl">N/A</p>
        @endif
        <p class=" bg-[#141415] border-white border-[0.5px] border-opacity-30 absolute rounded-full px-2 py-1 bottom-2 text-[11px] font-spmono">{{ $exp_tag }}</p>
    </div>
    <div class="row-span-1 md:col-span-3 flex flex-col gap-y-4">
        <div class="flex gap-x-4 justify-between items-start">
            <div class="flex gap-x-4 justify-center items-center">
                <img src="{{ $logo }}" alt="Logo Unair" class="w-auto h-12 rounded-lg saturate-50">
                <div class="flex flex-col justify-center">
                    <h5 class="font-ehs">{{ $company }}</h5>
                    <p class="font-spmono text-xs md:text-base">{{ $position }}</p>
                </div>
            </div>
            <div class="flex flex-col justify-center h-full">
                <p class="font-spmono hidden md:inline text-xs md:text-sm font-semibold text-right md:text-left">{{ $duration }}</p>
                <p class="font-spmono md:hidden inline text-xs md:text-sm font-semibold text-right md:text-left">{{ $duration_mobile }}</p>
                <p class="font-spmono text-xs md:text-sm font-extralight text-right">{{ $work_type }}</p>
            </div>
        </div>

        <div class="bg-black p-4 border-[1px] border-gray-500 border-opacity-30 rounded-lg w-full h-full ">
            <p class="font-spmono text-sm text-neutral-400">{{ $slot }}</p>
        </div>
    </div>                           
</div>