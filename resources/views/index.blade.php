<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.cdnfonts.com/css/electronic-highway-sign" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/EasePack.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Tegar Alwinata Masyhuda</title>
</head>
<body>
    <x-navbar></x-navbar>
    <section id="hero1" class="flex flex-col h-[calc(100vh-48px)]">
        
        <div class="w-full h-full flex overflow-y-scroll">

            <x-aside-left></x-aside-left>
    
            <div class="w-[full] md:w-[75%] bg-black text-white gap-y-4 relative overflow-hidden">
                {{-- <img src="{{ asset('svg/path1.svg') }}" alt="" class="w-80 h-80 absolute top-32 -right-32 opacity-35"> --}}
                <div class="absolute inset-0 bg-pattern"></div>
                <main class="flex justify-center items-center">
                    <div class="flex flex-col items-center w-full h-fit gap-y-10 mt-8">
                        <img id="center-jack" src="{{ asset('img/jack2.jpg') }}" alt="Logo" class="md:w-[256px]  md:h-auto h-[196px] w-auto flex justify-center items-center">
                        <div class="flex flex-col justify-center items-center gap-y-4">
                            <h3 class="p-4 md:p-0 text-3xl md:text-4xl font-ehs text-center intro" id="hero_title">Hi, I'm Your <span class="flicker-letter flicker">JACK</span> of all Trades!</h3>
                            {{-- <div id="description-box" class="w-[80%] h-fit border bg-[#0d0d0e] border-white rounded-md p-4 border-opacity-30">
                                <p id="hero-desc" class="font-spmono text-center text-sm md:text-base">Versatile, adaptable, and always ready for a new challenge. From Machine Learning to Front-End Development, UI/UX Design to Data Analysis, I thrive in diverse tech domains. I explore, I build, and I solve. Constantly evolving, always learning.</p>                               
                            </div> --}}
                            <p id="hero-desc" class="w-[80%] font-spmono text-center text-sm md:text-base">Versatile, adaptable, and always ready for a new challenge. From Machine Learning to Front-End Development, UI/UX Design to Data Analysis, I thrive in diverse tech domains. I explore, I build, and I solve. Constantly evolving, always learning.</p>          
                            <div id="socials" class="flex gap-x-6 items-center justify-center">
                                <a href="mailto:thestrange300@gmail.com">
                                    <svg role="img" viewBox="0 0 24 24" class="fill-white w-6 h-6 opacity-50 hover:opacity-100 transition-opacity" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.61 12c0 1.99-1.62 3.61-3.61 3.61-1.99 0-3.61-1.62-3.61-3.61 0-1.99 1.62-3.61 3.61-3.61 1.99 0 3.61 1.62 3.61 3.61M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12c2.424 0 4.761-.722 6.76-2.087l.034-.024-1.617-1.879-.027.017A9.494 9.494 0 0 1 12 21.54c-5.26 0-9.54-4.28-9.54-9.54 0-5.26 4.28-9.54 9.54-9.54 5.26 0 9.54 4.28 9.54 9.54a9.63 9.63 0 0 1-.225 2.05c-.301 1.239-1.169 1.618-1.82 1.568-.654-.053-1.42-.52-1.426-1.661V12A6.076 6.076 0 0 0 12 5.93 6.076 6.076 0 0 0 5.93 12 6.076 6.076 0 0 0 12 18.07a6.02 6.02 0 0 0 4.3-1.792 3.9 3.9 0 0 0 3.32 1.805c.874 0 1.74-.292 2.437-.821.719-.547 1.256-1.336 1.553-2.285.047-.154.135-.504.135-.507l.002-.013c.175-.76.253-1.52.253-2.457 0-6.617-5.383-12-12-12"/></svg>
                                </a>
                                <a href="https://www.linkedin.com/in/tegar-alwinata/">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-white w-8 h-8 opacity-50 hover:opacity-100 transition-opacity" viewBox="0 0 30 30">
                                        <path d="M24,4H6C4.895,4,4,4.895,4,6v18c0,1.105,0.895,2,2,2h18c1.105,0,2-0.895,2-2V6C26,4.895,25.105,4,24,4z M10.954,22h-2.95 v-9.492h2.95V22z M9.449,11.151c-0.951,0-1.72-0.771-1.72-1.72c0-0.949,0.77-1.719,1.72-1.719c0.948,0,1.719,0.771,1.719,1.719 C11.168,10.38,10.397,11.151,9.449,11.151z M22.004,22h-2.948v-4.616c0-1.101-0.02-2.517-1.533-2.517 c-1.535,0-1.771,1.199-1.771,2.437V22h-2.948v-9.492h2.83v1.297h0.04c0.394-0.746,1.356-1.533,2.791-1.533 c2.987,0,3.539,1.966,3.539,4.522V22z"></path>
                                    </svg>
                                </a>
                                <a href="https://github.com/thestrange300">
                                    <svg role="img" viewBox="0 0 24 24" class="fill-white w-6 h-6 opacity-50 hover:opacity-100 transition-opacity" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title>
                                        <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </main>
    
            </div>
    
            <aside class="overflow-y-hidden w-0 md:w-[12.5%] sticky top-0 z-20 block bg-black md:border-l-[1px] border-gray-700 border-opacity-70 relative">
                
            </aside>
        </div>
    </section>
</body>
</html>
