<div role="alert" x-data="{ flash: true }" x-cloak x-show="flash" x-transition x-init="setTimeout(() => flash = false, 3000)" class="mt-3 max-w-96 min-w-64 z-10 absolute right-4 top-4 p-3 text-sm text-white bg-[#202127] outline outline-1 outline-emerald-500 rounded">
    <p class="flex text-base">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5 mr-2 mt-0.5 text-emerald-400"><path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"></path></svg>
    <span class="font-semibold font-poppins">Success</span>
    </p>
    <p class="ml-4 p-3 font-poppins">
        {{ session('success') }}
    </p>
    
    <button @click="flash = ! flash" class="flex items-center justify-center transition-all w-8 h-8 rounded-md text-white hover:bg-white/10 active:bg-white/10 absolute top-1.5 right-1.5" type="button">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-5 w-5" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path></svg>
    </button>
</div>