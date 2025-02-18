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
    <section id="hero1" class="flex flex-col h-[calc(100vh-48px)] relative">

        {{-- <x-index.terminal-comp></x-index.terminal-comp> --}}
        
        <div class="w-full h-full flex overflow-y-scroll">

            <x-aside-left></x-aside-left>
    
            <div class="w-[full] md:w-[75%] h-fit bg-black text-white gap-y-4 relative overflow-hidden">
                <div class="border bg-[#080808] z-40 border-gray-500 rounded-lg px-2 py-2 border-opacity-30 h-fit w-fit hidden md:absolute top-4 right-4 md:flex md:items-center md:justify-center gap-x-2">
                    <div class="h-2 w-2 bg-yellow-400 rounded-full relative">
                        <div class="absolute top-0 left-0 animate-ping h-2 w-2 bg-yellow-400 rounded-full"></div>
                    </div>
                    <p class="font-spmono text-xs">On Learning: Laravel 12, React, Go</p>
                </div>
                <div class="absolute inset-0 bg-pattern"></div>
  
                <main class="flex flex-col justify-center items-center p-4 md:p-8 gap-y-8">
                    <div id="section1" class="flex flex-col items-center w-full h-fit gap-y-10 mt-8">
                        <div class="relative"> <!-- Added wrapper -->
                            <!-- Center Image (on top layer) -->
                            <img id="center-jack" src="{{ asset('img/j-spade.png') }}" alt="Logo" 
                                 class="md:w-[256px] md:h-auto h-[196px] w-auto relative z-40">
                            <!-- Cards Container (behind center image) -->
                            <div class="absolute top-0 left-0 w-full h-full z-10">
                                <img id="card-left1" src="{{ asset('img/j-love.png') }}" alt="Card 1" 
                                     class="card hidden md:w-[256px] md:h-auto h-[196px] z-30 w-auto absolute">
                                <img id="card-left2" src="{{ asset('img/joker.png') }}" alt="Card 2" 
                                     class="card hidden md:w-[256px] md:h-auto h-[196px] z-20 w-auto absolute">
                                <img id="card-right1" src="{{ asset('img/j-diamonds.png') }}" alt="Card 3" 
                                     class="card hidden md:w-[256px] md:h-auto h-[196px] z-30 w-auto absolute">
                                <img id="card-right2" src="{{ asset('img/j-club.png') }}" alt="Card 4" 
                                     class="card hidden md:w-[256px] md:h-auto h-[196px] z-20 w-auto absolute">
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-y-4">
                            <h3 class="p-4 md:p-0 text-3xl md:text-4xl font-ehs text-center intro" id="hero_title">Hi, I'm Your <span class="flicker-letter flicker">JACK</span> of all Trades!</h3>
                            {{-- <div id="description-box" class="w-[80%] h-fit border bg-[#0d0d0e] border-white rounded-md p-4 border-opacity-30">
                                <p id="hero-desc" class="font-spmono text-center text-sm md:text-base">Versatile, adaptable, and always ready for a new challenge. From Machine Learning to Front-End Development, UI/UX Design to Data Analysis, I thrive in diverse tech domains. I explore, I build, and I solve. Constantly evolving, always learning.</p>                               
                            </div> --}}
                            <p id="hero-desc" class="w-[80%] font-spmono text-center text-sm md:text-base">Thriving in all things tech: Machine Learning, Web Dev, UI/UX, Data, ICT. I solve, create, adapt, and learn constantly.</p>
                            {{-- <p id="hero-desc" class="w-[80%] font-spmono text-center text-sm md:text-base">Versatile, adaptable, and always ready for a new challenge. From Machine Learning to Web Development, UI/UX Design to Data Analysis and ICT Learning, I thrive in diverse tech domains. I explore, I build, and I solve. Constantly evolving, always learning.</p>           --}}
                            <div id="socials" class="flex gap-x-6 items-center justify-center">
                                <a href="mailto:thestrange300@gmail.com">
                                    <svg role="img" viewBox="0 0 24 24" class="fill-white w-6 h-6 opacity-50 hover:opacity-100 transition-opacity duration-500" xmlns="http://www.w3.org/2000/svg"><title>Email</title>
                                        <path d="M15.61 12c0 1.99-1.62 3.61-3.61 3.61-1.99 0-3.61-1.62-3.61-3.61 0-1.99 1.62-3.61 3.61-3.61 1.99 0 3.61 1.62 3.61 3.61M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12c2.424 0 4.761-.722 6.76-2.087l.034-.024-1.617-1.879-.027.017A9.494 9.494 0 0 1 12 21.54c-5.26 0-9.54-4.28-9.54-9.54 0-5.26 4.28-9.54 9.54-9.54 5.26 0 9.54 4.28 9.54 9.54a9.63 9.63 0 0 1-.225 2.05c-.301 1.239-1.169 1.618-1.82 1.568-.654-.053-1.42-.52-1.426-1.661V12A6.076 6.076 0 0 0 12 5.93 6.076 6.076 0 0 0 5.93 12 6.076 6.076 0 0 0 12 18.07a6.02 6.02 0 0 0 4.3-1.792 3.9 3.9 0 0 0 3.32 1.805c.874 0 1.74-.292 2.437-.821.719-.547 1.256-1.336 1.553-2.285.047-.154.135-.504.135-.507l.002-.013c.175-.76.253-1.52.253-2.457 0-6.617-5.383-12-12-12"/></svg>
                                </a>
                                <a href="https://www.linkedin.com/in/tegar-alwinata/">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-white w-8 h-8 opacity-50 hover:opacity-100 transition-opacity duration-500" viewBox="0 0 30 30"><title>Linkedin</title>
                                        <path d="M24,4H6C4.895,4,4,4.895,4,6v18c0,1.105,0.895,2,2,2h18c1.105,0,2-0.895,2-2V6C26,4.895,25.105,4,24,4z M10.954,22h-2.95 v-9.492h2.95V22z M9.449,11.151c-0.951,0-1.72-0.771-1.72-1.72c0-0.949,0.77-1.719,1.72-1.719c0.948,0,1.719,0.771,1.719,1.719 C11.168,10.38,10.397,11.151,9.449,11.151z M22.004,22h-2.948v-4.616c0-1.101-0.02-2.517-1.533-2.517 c-1.535,0-1.771,1.199-1.771,2.437V22h-2.948v-9.492h2.83v1.297h0.04c0.394-0.746,1.356-1.533,2.791-1.533 c2.987,0,3.539,1.966,3.539,4.522V22z"></path>
                                    </svg>
                                </a>
                                <a href="https://github.com/thestrange300">
                                    <svg role="img" viewBox="0 0 24 24" class="fill-white w-6 h-6 opacity-50 hover:opacity-100 transition-opacity duration-500" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title>
                                        <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                                </a>
                                <a href="https://mastodon.social/@thestrange300">
                                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="fill-white w-6 h-6 opacity-50 hover:opacity-100 transition-opacity duration-500"><title>Mastodon</title><path d="M23.268 5.313c-.35-2.578-2.617-4.61-5.304-5.004C17.51.242 15.792 0 11.813 0h-.03c-3.98 0-4.835.242-5.288.309C3.882.692 1.496 2.518.917 5.127.64 6.412.61 7.837.661 9.143c.074 1.874.088 3.745.26 5.611.118 1.24.325 2.47.62 3.68.55 2.237 2.777 4.098 4.96 4.857 2.336.792 4.849.923 7.256.38.265-.061.527-.132.786-.213.585-.184 1.27-.39 1.774-.753a.057.057 0 0 0 .023-.043v-1.809a.052.052 0 0 0-.02-.041.053.053 0 0 0-.046-.01 20.282 20.282 0 0 1-4.709.545c-2.73 0-3.463-1.284-3.674-1.818a5.593 5.593 0 0 1-.319-1.433.053.053 0 0 1 .066-.054c1.517.363 3.072.546 4.632.546.376 0 .75 0 1.125-.01 1.57-.044 3.224-.124 4.768-.422.038-.008.077-.015.11-.024 2.435-.464 4.753-1.92 4.989-5.604.008-.145.03-1.52.03-1.67.002-.512.167-3.63-.024-5.545zm-3.748 9.195h-2.561V8.29c0-1.309-.55-1.976-1.67-1.976-1.23 0-1.846.79-1.846 2.35v3.403h-2.546V8.663c0-1.56-.617-2.35-1.848-2.35-1.112 0-1.668.668-1.67 1.977v6.218H4.822V8.102c0-1.31.337-2.35 1.011-3.12.696-.77 1.608-1.164 2.74-1.164 1.311 0 2.302.5 2.962 1.498l.638 1.06.638-1.06c.66-.999 1.65-1.498 2.96-1.498 1.13 0 2.043.395 2.74 1.164.675.77 1.012 1.81 1.012 3.12z"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div id="section2" class="flex flex-col justify-center items-center gap-y-4 w-full h-fit">
                        <div class="flex gap-x-2 w-full md:w-[80%] h-16 items-center border-b-[1px] border-white border-opacity-30 border-dashed">
                            <img src="{{ asset('gif/fire.webp') }}" alt="" class="w-auto h-8">
                            <h3 class="text-2xl font-ehs text-left translate-y-1">Experience</h3>
                        </div>

                        <x-index.experience-comp>
                            <x-slot:logo>{{ asset('img/unair.png') }}</x-slot:logo>
                            <x-slot:company>DPKKA Unair</x-slot:company>
                            <x-slot:position>Data Entry and Validator</x-slot:position>
                            <x-slot:duration>Apr 2024 – Jul 2024</x-slot:duration>
                            <x-slot:duration_mobile>Apr-Jul 2024</x-slot:duration_mobile>
                            <x-slot:work_type>Freelance</x-slot:work_type>
                            <x-slot:exp_tag>Data Analysis</x-slot:exp_tag>
                            Cleaned and streamlined <span class="text-white font-semibold">120,000+</span> rows of raw data, validated over <span class="text-white font-semibold">15,000</span> data points for accuracy, and developed a comprehensive master dataset with <span class="text-white font-semibold">6,500+</span> rows.
                        </x-index.experience-comp>

                        <x-index.experience-comp>
                            <x-slot:logo>{{ asset('img/surabaya.png') }}</x-slot:logo>
                            <x-slot:exp_image>{{ asset('img/experiences/blc.jpg') }}</x-slot:exp_image>
                            <x-slot:company>Diskominfo Surabaya</x-slot:company>
                            <x-slot:position>ICT Learning Instructor</x-slot:position>
                            <x-slot:duration>Aug 2023 – Jan 2024</x-slot:duration>
                            <x-slot:duration_mobile>Aug 23–Jan 24</x-slot:duration_mobile>
                            <x-slot:work_type>Internship</x-slot:work_type>
                            <x-slot:exp_tag>Teaching</x-slot:exp_tag>
                            Designed and developed a comprehensive <span class="font-semibold text-white">100+ page</span> end-of-internship training module covering <span class="font-semibold text-white">13</span> topics for MSME participants at the Broadband Learning Center. Conducted hands-on workshops on Office Applications, Creative Design, Video Editing, and Fun Programming. Acted as a key liaison between the Surabaya City Government and the local community to enhance IT literacy.
                        </x-index.experience-comp>

                        <x-index.experience-comp>
                            <x-slot:logo>{{ asset('img/bprs.png') }}</x-slot:logo>
                            <x-slot:exp_image>{{ asset('img/experiences/bprs.jpg') }}</x-slot:exp_image>
                            <x-slot:company>BPRS Baktimakmur Indah</x-slot:company>
                            <x-slot:position>Front End & UI/UX Developer</x-slot:position>
                            <x-slot:duration>Aug 2023 – Dec 2023</x-slot:duration>
                            <x-slot:duration_mobile>Aug – Dec 23</x-slot:duration_mobile>
                            <x-slot:work_type>Internship</x-slot:work_type>
                            <x-slot:exp_tag>Web Development</x-slot:exp_tag>
                            Contributed to the Implementation of AI for <span class="font-semibold text-white">Credit Scoring and Early Warning Systems</span> Matching Fund project with Universitas Airlangga in the BPRS sector. Designed intuitive UIs from low to high-fidelity mockups, applying mobile-first design and iterative testing for optimal UX. Developed sleek, responsive front-end designs using <span class="font-semibold text-red-500">Laravel</span> and <span class="font-semibold text-sky-500">Tailwind CSS</span>, ensuring alignment with stakeholder needs.
                        </x-index.experience-comp>

                    </div>

                    <div id="section3" class="flex flex-col justify-center items-center gap-y-4 w-full h-fit">
                        <div class="flex gap-x-2 w-full md:w-[80%] h-16 items-center border-b-[1px] border-white border-opacity-30 border-dashed">
                            <img src="{{ asset('gif/rocket.webp') }}" alt="" class="w-auto h-8">
                            <h3 class="text-2xl font-ehs text-left translate-y-1">Projects</h3>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-5 grid-rows-2 h-fit w-full md:w-[80%] border bg-[#080808] border-gray-500 rounded-lg p-6 border-opacity-30 gap-x-4 gap-y-4">
                        <div class="relative flex justify-center items-center w-full h-64 col-span-1 md:col-span-3 row-span-1 bg-black border-[1px] border-gray-500 border-opacity-30 rounded-lg overflow-hidden">
                            <img src="{{ asset('img/projects/test.png') }}" alt="Diao Channnn" class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105">
                            <div class="w-full h-2/6 absolute bottom-0 bg-black rounded-b-lg opacity-80 p-4">
                                <div class="flex h-full flex-col justify-center">
                                    <p class="font-ehs text-lg">Pena Pandai</p>
                                    <p class="font-spmono text-xs">Free AI tool for elementary teachers to generate tailored questions in three easy steps.</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center items-center relative w-full h-64 col-span-1 md:col-span-2 row-span-1 bg-black border-[1px] border-gray-500 border-opacity-30 rounded-lg overflow-hidden">
                            <img src="{{ asset('img/projects/test2.png') }}" alt="Diao Channnn" class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105">
                            <div class="w-full h-2/6 absolute bottom-0 bg-black rounded-b-lg opacity-80 p-4">
                                <div class="flex h-full flex-col justify-center">
                                    <p class="font-ehs text-lg">SDN Bubutan IV</p>
                                    <p class="font-spmono text-xs">AI-powered CV reviewer that provides instant professional feedback.</p>
                                </div>
                            </div>
                        </div>

                        <div class="w-full h-full col-span-1 md:col-span-5 row-span-1 grid grid-cols-1 md:grid-cols-3 gap-y-4 gap-x-4">

                            <div class="flex justify-center items-center relative w-full h-64 col-span-1 bg-black border-[1px] border-gray-500 border-opacity-30 rounded-lg overflow-hidden">
                                <img src="{{ asset('img/projects/test3.png') }}" alt="Diao Channnn" class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105">
                                <div class="w-full h-2/6 absolute bottom-0 bg-black rounded-b-lg opacity-80 p-4">
                                    <div class="flex h-full flex-col justify-center">
                                        <p class="font-ehs text-lg">Thesis</p>
                                        <p class="font-spmono text-xs">AI-powered CV reviewer that provides.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-center items-center relative w-full h-64 col-span-1 bg-black border-[1px] border-gray-500 border-opacity-30 rounded-lg overflow-hidden">
                                <img src="{{ asset('img/projects/test4.png') }}" alt="Diao Channnn" class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105">
                                <div class="w-full h-2/6 absolute bottom-0 bg-black rounded-b-lg opacity-80 p-4">
                                    <div class="flex h-full flex-col justify-center">
                                        <p class="font-ehs text-lg">MTQMN</p>
                                        <p class="font-spmono text-xs">AI-powered CV reviewer that provides.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-center items-center relative w-full h-64 col-span-1 bg-black border-[1px] border-gray-500 border-opacity-30 rounded-lg overflow-hidden ">
                                <img src="{{ asset('img/projects/test5.png') }}" alt="Diao Channnn" class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105">
                                <div class="w-full h-2/6 absolute bottom-0 bg-black rounded-b-lg opacity-80 p-4">
                                    <div class="flex h-full flex-col justify-center">
                                        <p class="font-ehs text-lg">Amerta</p>
                                        <p class="font-spmono text-xs">AI-powered CV reviewer that provides.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div id="section4" class="flex flex-col justify-center items-center gap-y-4 w-full h-fit">
                        <div class="flex gap-x-2 w-full md:w-[80%] h-16 items-center border-b-[1px] border-white border-opacity-30 border-dashed">
                            <img src="{{ asset('gif/actually.gif') }}" alt="" class="w-auto h-8">
                            <h3 class="text-xl md:text-2xl font-ehs text-left translate-y-1">Organization and Certification</h3>
                        </div>
                    </div>

                    <div class="p-4 w-full md:w-[80%] h-full bg-[#080808] border-[1px] border-gray-500 border-opacity-30 rounded-lg">
                        <div class="grid grid-cols-1 md:grid-cols-2 grid-rows-none gap-y-4 relative">    
                            <div class="col-span-1 md:col-span-2 row-span-1 grid grid-cols-1 md:grid-cols-2 gap-y-4 md:gap-y-0 md:gap-x-8 relative">
                                
                                <div class="hidden md:inline md:absolute top-1/2 left-1/2 w-[1px] h-full bg-gray-500 bg-opacity-30 -translate-y-1/2"></div>
    
                                <div class="w-full h-full bg-black p-4 border-[1px] border-gray-500 border-opacity-30 rounded-lg flex flex-col gap-y-4">
                                    <h3 class="text-xl font-ehs text-center">Organization</h3>
                                    <div class="flex-col flex gap-y-2">
                                        <p class="font-spmono text-sm text-white font-semibold">
                                            ⭐ Head of Artistic Dept. LPM FST UNAIR
                                        </p>
                                        <p class="font-spmono text-sm text-neutral-400">Led a team of two designers to create <span class="text-white font-semibold">35+</span> Instagram feed layouts and <span class="text-white font-semibold">50+</span> story designs, ensuring brand alignment. Mentored team members in Inkscape and Canva to enhance design consistency. Oversaw and approved layouts, storyboards, and illustrations while incorporating team feedback.</p>
                                    </div>
                                    <div class="flex-col flex gap-y-2">
                                        <p class="font-spmono text-sm text-white font-semibold">
                                            ⭐ Staff of Media and Information BEM UNAIR
                                        </p>
                                        <p class="font-spmono text-sm text-neutral-400">Collaborated across divisions to refine Instagram aesthetics and content. Effectively communicated updates and announcements to internal teams and external audiences.</p>
                                    </div>
                                </div>
                            
                                <div class="w-full h-full bg-black p-4 border-[1px] border-gray-500 border-opacity-30 rounded-lg flex flex-col gap-y-4">
                                    <h3 class="text-xl font-ehs text-center">Volunteering</h3>
                                    <div class="flex-col flex gap-y-2">
                                        <p class="font-spmono text-sm text-white font-semibold">
                                            🌟 PR Coordinator HIMSI UNAIR
                                        </p>
                                        <p class="font-spmono text-sm text-neutral-400">Led PengMas HIMSI 2022: ALPHABET, an IT literacy initiative for <span class="text-white font-semibold">60+ students</span> at SDN Banyu Urip X Surabaya. Secured partnerships with school administrators and led a team of <span class="text-white font-semibold">7 staff</span> to deliver interactive training, Q&A, and hands-on activities.</p>
                                    </div>
                                    <div class="flex-col flex gap-y-2">
                                        <p class="font-spmono text-sm text-white font-semibold">
                                            🌟 Staff of Media and Information AMERTA UNAIR 2022
                                        </p>
                                        <p class="font-spmono text-sm text-neutral-400">Produced documentaries showcasing student achievements and vitality. Designed a website to enhance AMERTA’s online visibility and information accessibility.</p>
                                    </div>
                                </div>
                            </div>
    
                            {{-- <div class="absolute top-1/2 left-1/2 h-[0.5px] w-full inset-x-4 bg-gray-500 bg-opacity-30 -translate-x-1/2"></div> --}}
    
                            <div class="col-span-2 row-span-1 w-full h-fit bg-black p-4 border-[1px] border-gray-500 border-opacity-30 rounded-lg flex flex-col gap-y-4">
                                
                                <h3 class="text-xl font-ehs text-center">Certifications and Courses Taken</h3>

                                <div class="flex flex-col gap-y-1">
                                    <p class="text-base font-ehs">Certificate and Awards</p>
                                    <p class="font-spmono text-sm text-neutral-400">
                                        ⭐ Artificial Intelligence for Junior Developer (Digitalent FGA)
                                    </p>
                                    <p class="font-spmono text-sm text-neutral-400">
                                        ⭐ Finalist of UI/UX Design at INVENTION 2023 (Universitas Udayana)
                                    </p> 
                                </div>
                                
                                <div class="flex flex-col gap-y-1">
                                    <p class="text-base font-ehs">Courses Taken</p>
                                    <p class="font-spmono text-sm text-neutral-400">
                                        ⭐ Artificial Intelligence Technology and Applications (Huawei)
                                    </p>
                                    <p class="font-spmono text-sm text-neutral-400">
                                        ⭐ Overview of AI (Huawei)
                                    </p>
                                    <p class="font-spmono text-sm text-neutral-400">
                                        ⭐ AI for Medical Diagnosis (DeepLearning AI)
                                    </p>
                                    <p class="font-spmono text-sm text-neutral-400">
                                        ⭐ Machine Learning Professional Certificate (IBM)
                                    </p>  
                                    <p class="font-spmono text-sm text-neutral-400">
                                        ⭐ AI Foundation for Everyone (IBM)
                                    </p>
                                    <p class="font-spmono text-sm text-neutral-400">
                                        ⭐ Generative AI for Software Development (Deeplearning AI)
                                    </p>
                                    <p class="font-spmono text-sm text-neutral-400">
                                        ⭐ IBM AI Engineering Specialization (IBM)
                                    </p>    
                                </div>

                            </div>
                        
                        </div>
                    </div>

                    <div id="section5" class="flex flex-col justify-center items-center gap-y-4 w-full h-fit">
                        <div class="flex gap-x-2 w-full md:w-[80%] h-16 items-center border-b-[1px] border-white border-opacity-30 border-dashed">
                            <img src="{{ asset('gif/eyes.gif') }}" alt="" class="h-auto w-8">
                            <h3 class="text-2xl font-ehs text-left">Tech Stack</h3>
                        </div>
                    </div>

                    <div class="flex flex-col gap-y-4 h-fit w-full md:w-[80%] border bg-[#080808] border-gray-500 rounded-lg p-2 md:p-4 border-opacity-30">
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-x-2 gap-y-4 md:gap-x-4 md:gap-y-4">
                            <x-index.tech-comp :showIcon="false">
                                <x-slot:title>Figma</x-slot:title>
                                <x-slot:icon_path><path d="M15.852 8.981h-4.588V0h4.588c2.476 0 4.49 2.014 4.49 4.49s-2.014 4.491-4.49 4.491zM12.735 7.51h3.117c1.665 0 3.019-1.355 3.019-3.019s-1.355-3.019-3.019-3.019h-3.117V7.51zm0 1.471H8.148c-2.476 0-4.49-2.014-4.49-4.49S5.672 0 8.148 0h4.588v8.981zm-4.587-7.51c-1.665 0-3.019 1.355-3.019 3.019s1.354 3.02 3.019 3.02h3.117V1.471H8.148zm4.587 15.019H8.148c-2.476 0-4.49-2.014-4.49-4.49s2.014-4.49 4.49-4.49h4.588v8.98zM8.148 8.981c-1.665 0-3.019 1.355-3.019 3.019s1.355 3.019 3.019 3.019h3.117V8.981H8.148zM8.172 24c-2.489 0-4.515-2.014-4.515-4.49s2.014-4.49 4.49-4.49h4.588v4.441c0 2.503-2.047 4.539-4.563 4.539zm-.024-7.51a3.023 3.023 0 0 0-3.019 3.019c0 1.665 1.365 3.019 3.044 3.019 1.705 0 3.093-1.376 3.093-3.068v-2.97H8.148zm7.704 0h-.098c-2.476 0-4.49-2.014-4.49-4.49s2.014-4.49 4.49-4.49h.098c2.476 0 4.49 2.014 4.49 4.49s-2.014 4.49-4.49 4.49zm-.097-7.509c-1.665 0-3.019 1.355-3.019 3.019s1.355 3.019 3.019 3.019h.098c1.665 0 3.019-1.355 3.019-3.019s-1.355-3.019-3.019-3.019h-.098z"/></x-slot:icon_path>
                                <x-slot:description>UI/UX Design Platform</x-slot:description>
                            </x-index.tech-comp>
    
                            <x-index.tech-comp :showIcon="true">
                                <x-slot:title>Laravel</x-slot:title>
                                <x-slot:icon_path><path d="M23.642 5.43a.364.364 0 01.014.1v5.149c0 .135-.073.26-.189.326l-4.323 2.49v4.934a.378.378 0 01-.188.326L9.93 23.949a.316.316 0 01-.066.027c-.008.002-.016.008-.024.01a.348.348 0 01-.192 0c-.011-.002-.02-.008-.03-.012-.02-.008-.042-.014-.062-.025L.533 18.755a.376.376 0 01-.189-.326V2.974c0-.033.005-.066.014-.098.003-.012.01-.02.014-.032a.369.369 0 01.023-.058c.004-.013.015-.022.023-.033l.033-.045c.012-.01.025-.018.037-.027.014-.012.027-.024.041-.034H.53L5.043.05a.375.375 0 01.375 0L9.93 2.647h.002c.015.01.027.021.04.033l.038.027c.013.014.02.03.033.045.008.011.02.021.025.033.01.02.017.038.024.058.003.011.01.021.013.032.01.031.014.064.014.098v9.652l3.76-2.164V5.527c0-.033.004-.066.013-.098.003-.01.01-.02.013-.032a.487.487 0 01.024-.059c.007-.012.018-.02.025-.033.012-.015.021-.03.033-.043.012-.012.025-.02.037-.028.014-.01.026-.023.041-.032h.001l4.513-2.598a.375.375 0 01.375 0l4.513 2.598c.016.01.027.021.042.031.012.01.025.018.036.028.013.014.022.03.034.044.008.012.019.021.024.033.011.02.018.04.024.06.006.01.012.021.015.032zm-.74 5.032V6.179l-1.578.908-2.182 1.256v4.283zm-4.51 7.75v-4.287l-2.147 1.225-6.126 3.498v4.325zM1.093 3.624v14.588l8.273 4.761v-4.325l-4.322-2.445-.002-.003H5.04c-.014-.01-.025-.021-.04-.031-.011-.01-.024-.018-.035-.027l-.001-.002c-.013-.012-.021-.025-.031-.04-.01-.011-.021-.022-.028-.036h-.002c-.008-.014-.013-.031-.02-.047-.006-.016-.014-.027-.018-.043a.49.49 0 01-.008-.057c-.002-.014-.006-.027-.006-.041V5.789l-2.18-1.257zM5.23.81L1.47 2.974l3.76 2.164 3.758-2.164zm1.956 13.505l2.182-1.256V3.624l-1.58.91-2.182 1.255v9.435zm11.581-10.95l-3.76 2.163 3.76 2.163 3.759-2.164zm-.376 4.978L16.21 7.087 14.63 6.18v4.283l2.182 1.256 1.58.908zm-8.65 9.654l5.514-3.148 2.756-1.572-3.757-2.163-4.323 2.489-3.941 2.27z"/></x-slot:icon_path>
                                <x-slot:description>Full Stack Framework</x-slot:description>
                            </x-index.tech-comp>
    
                            <x-index.tech-comp :showIcon="true">
                                <x-slot:title>Tailwind</x-slot:title>
                                <x-slot:icon_path><path d="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,13.382,8.976,12,6.001,12z"/></x-slot:icon_path>
                                <x-slot:description>CSS Utility Class</x-slot:description>
                            </x-index.tech-comp>
    
                            <x-index.tech-comp :showIcon="true">
                                <x-slot:title>HTML</x-slot:title>
                                <x-slot:icon_path><path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622L5.412 4.41l.698 8.01h9.126l-.326 3.426-2.91.804-2.955-.81-.188-2.11H6.248l.33 4.171L12 19.351l5.379-1.443.744-8.157H8.531z"/></x-slot:icon_path>
                                <x-slot:description>Markup Text</x-slot:description>
                            </x-index.tech-comp>
    
                            <x-index.tech-comp :showIcon="true">
                                <x-slot:title>CSS</x-slot:title>
                                <x-slot:icon_path><path d="M0 0v20.16A3.84 3.84 0 0 0 3.84 24h16.32A3.84 3.84 0 0 0 24 20.16V3.84A3.84 3.84 0 0 0 20.16 0Zm14.256 13.08c1.56 0 2.28 1.08 2.304 2.64h-1.608c.024-.288-.048-.6-.144-.84-.096-.192-.288-.264-.552-.264-.456 0-.696.264-.696.84-.024.576.288.888.768 1.08.72.288 1.608.744 1.92 1.296q.432.648.432 1.656c0 1.608-.912 2.592-2.496 2.592-1.656 0-2.4-1.032-2.424-2.688h1.68c0 .792.264 1.176.792 1.176.264 0 .456-.072.552-.24.192-.312.24-1.176-.048-1.512-.312-.408-.912-.6-1.32-.816q-.828-.396-1.224-.936c-.24-.36-.36-.888-.36-1.536 0-1.44.936-2.472 2.424-2.448m5.4 0c1.584 0 2.304 1.08 2.328 2.64h-1.608c0-.288-.048-.6-.168-.84-.096-.192-.264-.264-.528-.264-.48 0-.72.264-.72.84s.288.888.792 1.08c.696.288 1.608.744 1.92 1.296.264.432.408.984.408 1.656.024 1.608-.888 2.592-2.472 2.592-1.68 0-2.424-1.056-2.448-2.688h1.68c0 .744.264 1.176.792 1.176.264 0 .456-.072.552-.24.216-.312.264-1.176-.048-1.512-.288-.408-.888-.6-1.32-.816-.552-.264-.96-.576-1.2-.936s-.36-.888-.36-1.536c-.024-1.44.912-2.472 2.4-2.448m-11.031.018c.711-.006 1.419.198 1.839.63.432.432.672 1.128.648 1.992H9.336c.024-.456-.096-.792-.432-.96-.312-.144-.768-.048-.888.24-.12.264-.192.576-.168.864v3.504c0 .744.264 1.128.768 1.128a.65.65 0 0 0 .552-.264c.168-.24.192-.552.168-.84h1.776c.096 1.632-.984 2.712-2.568 2.688-1.536 0-2.496-.864-2.472-2.472v-4.032c0-.816.24-1.44.696-1.848.432-.408 1.146-.624 1.857-.63"/></x-slot:icon_path>
                                <x-slot:description>Styling</x-slot:description>
                            </x-index.tech-comp>
    
                            <x-index.tech-comp :showIcon="false">
                                <x-slot:title>MySQL</x-slot:title>
                                <x-slot:icon_path><path d="M16.405 5.501c-.115 0-.193.014-.274.033v.013h.014c.054.104.146.18.214.273.054.107.1.214.154.32l.014-.015c.094-.066.14-.172.14-.333-.04-.047-.046-.094-.08-.14-.04-.067-.126-.1-.18-.153zM5.77 18.695h-.927a50.854 50.854 0 00-.27-4.41h-.008l-1.41 4.41H2.45l-1.4-4.41h-.01a72.892 72.892 0 00-.195 4.41H0c.055-1.966.192-3.81.41-5.53h1.15l1.335 4.064h.008l1.347-4.064h1.095c.242 2.015.384 3.86.428 5.53zm4.017-4.08c-.378 2.045-.876 3.533-1.492 4.46-.482.716-1.01 1.073-1.583 1.073-.153 0-.34-.046-.566-.138v-.494c.11.017.24.026.386.026.268 0 .483-.075.647-.222.197-.18.295-.382.295-.605 0-.155-.077-.47-.23-.944L6.23 14.615h.91l.727 2.36c.164.536.233.91.205 1.123.4-1.064.678-2.227.835-3.483zm12.325 4.08h-2.63v-5.53h.885v4.85h1.745zm-3.32.135l-1.016-.5c.09-.076.177-.158.255-.25.433-.506.648-1.258.648-2.253 0-1.83-.718-2.746-2.155-2.746-.704 0-1.254.232-1.65.697-.43.508-.646 1.256-.646 2.245 0 .972.19 1.686.574 2.14.35.41.877.615 1.583.615.264 0 .506-.033.725-.098l1.325.772.36-.622zM15.5 17.588c-.225-.36-.337-.94-.337-1.736 0-1.393.424-2.09 1.27-2.09.443 0 .77.167.977.5.224.362.336.936.336 1.723 0 1.404-.424 2.108-1.27 2.108-.445 0-.77-.167-.978-.5zm-1.658-.425c0 .47-.172.856-.516 1.156-.344.3-.803.45-1.384.45-.543 0-1.064-.172-1.573-.515l.237-.476c.438.22.833.328 1.19.328.332 0 .593-.073.783-.22a.754.754 0 00.3-.615c0-.33-.23-.61-.648-.845-.388-.213-1.163-.657-1.163-.657-.422-.307-.632-.636-.632-1.177 0-.45.157-.81.47-1.085.315-.278.72-.415 1.22-.415.512 0 .98.136 1.4.41l-.213.476a2.726 2.726 0 00-1.064-.23c-.283 0-.502.068-.654.206a.685.685 0 00-.248.524c0 .328.234.61.666.85.393.215 1.187.67 1.187.67.433.305.648.63.648 1.168zm9.382-5.852c-.535-.014-.95.04-1.297.188-.1.04-.26.04-.274.167.055.053.063.14.11.214.08.134.218.313.346.407.14.11.28.216.427.31.26.16.555.255.81.416.145.094.293.213.44.313.073.05.12.14.214.172v-.02c-.046-.06-.06-.147-.105-.214-.067-.067-.134-.127-.2-.193a3.223 3.223 0 00-.695-.675c-.214-.146-.682-.35-.77-.595l-.013-.014c.146-.013.32-.066.46-.106.227-.06.435-.047.67-.106.106-.027.213-.06.32-.094v-.06c-.12-.12-.21-.283-.334-.395a8.867 8.867 0 00-1.104-.823c-.21-.134-.476-.22-.697-.334-.08-.04-.214-.06-.26-.127-.12-.146-.19-.34-.275-.514a17.69 17.69 0 01-.547-1.163c-.12-.262-.193-.523-.34-.763-.69-1.137-1.437-1.826-2.586-2.5-.247-.14-.543-.2-.856-.274-.167-.008-.334-.02-.5-.027-.11-.047-.216-.174-.31-.235-.38-.24-1.364-.76-1.644-.072-.18.434.267.862.422 1.082.115.153.26.328.34.5.047.116.06.235.107.356.106.294.207.622.347.897.073.14.153.287.247.413.054.073.146.107.167.227-.094.136-.1.334-.154.5-.24.757-.146 1.693.194 2.25.107.166.362.534.703.393.3-.12.234-.5.32-.835.02-.08.007-.133.048-.187v.015c.094.188.188.367.274.555.206.328.566.668.867.895.16.12.287.328.487.402v-.02h-.015c-.043-.058-.1-.086-.154-.133a3.445 3.445 0 01-.35-.4 8.76 8.76 0 01-.747-1.218c-.11-.21-.202-.436-.29-.643-.04-.08-.04-.2-.107-.24-.1.146-.247.273-.32.453-.127.288-.14.642-.188 1.01-.027.007-.014 0-.027.014-.214-.052-.287-.274-.367-.46-.2-.475-.233-1.238-.06-1.785.047-.14.247-.582.167-.716-.042-.127-.174-.2-.247-.303a2.478 2.478 0 01-.24-.427c-.16-.374-.24-.788-.414-1.162-.08-.173-.22-.354-.334-.513-.127-.18-.267-.307-.368-.52-.033-.073-.08-.194-.027-.274.014-.054.042-.075.094-.09.088-.072.335.022.422.062.247.1.455.194.662.334.094.066.195.193.315.226h.14c.214.047.455.014.655.073.355.114.675.28.962.46a5.953 5.953 0 012.085 2.286c.08.154.115.295.188.455.14.33.313.663.455.982.14.315.275.636.476.897.1.14.502.213.682.286.133.06.34.115.46.188.23.14.454.3.67.454.11.076.443.243.463.378z"/></x-slot:icon_path>
                                <x-slot:description>Database Management</x-slot:description>
                            </x-index.tech-comp>
    
                            <x-index.tech-comp :showIcon="false">
                                <x-slot:title>Tensorflow</x-slot:title>
                                <x-slot:icon_path><path d="M1.292 5.856L11.54 0v24l-4.095-2.378V7.603l-6.168 3.564.015-5.31zm21.43 5.311l-.014-5.31L12.46 0v24l4.095-2.378V14.87l3.092 1.788-.018-4.618-3.074-1.756V7.603l6.168 3.564z"/></x-slot:icon_path>
                                <x-slot:description>Machine Learning Framework</x-slot:description>
                            </x-index.tech-comp>
    
                            <x-index.tech-comp :showIcon="false">
                                <x-slot:title>GSAP</x-slot:title>
                                <x-slot:icon_path><path d="M17.21 0c-.545.003-1.084.134-1.256.367-.11.165-.192 1.196-.11 1.718 0 0 .032.345.09.614a14.6 14.6 0 0 1-.02.182 7.024 7.024 0 0 1-.097.605c-.01.056-.207.095-.425.152a2.495 2.495 0 0 0-.138-.042c-.234-.069-.385.123-.618.26-.069-.04-.371-.178-.536-.082-.165.096-.275.193-.44.261-.082-.041-.302-.041-.48.028a1.27 1.27 0 0 0-.483.278c-2.314.58-4.813 1.635-5.012 1.741-1.017.522-2.679 1.415-3.434 2.033-1.291 1.071-2.06 2.322-2.363 3.242-.385 1.14-.275 1.827.096 1.387.298-.366 1.632-1.454 2.475-1.999l-.002.007a3.219 3.219 0 0 1 .44-.26l.233-.124.505-.323c.602.552.803 1.433.937 2.63.22 1.841 1.704 2.693 3.434 2.72 1.8.028 2.446.399 3.119 1.305.153.201.318.307.47.368a1.954 1.954 0 0 0-.16.405c-.075.17-.125.38-.157.608a.157.157 0 0 0-.03.075c-.068.536-.055 1.8-.068 2.473-.014.673-.028.77-.083.866-.055.11-.11.178-.178.467-.069.302-.193.384-.316.631-.206.385-.165.81.041 1.003.206.192.77.481 1.538.385.77-.096.88-.151.756-.893-.014-.11-.192-.605-.137-.797.082-.206-.096-.563-.055-.577.041-.014.096-.288.096-.426 0-.137-.014-.796.137-1.14.062-.14.193-.46.326-.785.442-.723.459-1.161.48-1.41.03-.202.046-.46.018-.744.055-.083.289-.275.316-.646 0 0 .644-.337 1.102-1.148.16.557.31.91.286 1.272-.499.39-.684.678-.76.959-.048-.02-.076-.037-.11-.04h-.027a.437.437 0 0 0-.106.029c-.192.068-.041 1.318.165 1.827.206.508.316.81.398 1.36.083.549-.192 1.222-.302 1.524 0 0-.179.536.233.824.358.248 1.704.18 2.308.18.605 0 1.511.219 2.088.109.715-.124.824-.55.399-.77-.426-.22-1.072-.329-1.91-.933-.22-.152-.522-.289-.563-.412-.041-.124-.041-.838-.027-1.457.013-.618.22-1.414.288-1.84.064-.398-.076-.388-.262-.351.032-.147.066-.292.097-.446.344-.632.193-1.223.193-1.223.82-1.044.4-3.27.22-4.048.64.303.96.188.96.188.102-.055.192-.134.274-.224.337-.362.51-.916.51-.916V11c.782-.783 1.151-1.936.26-2.692a1.331 1.331 0 0 0-.219-1.263 1.56 1.56 0 0 0-.37-1.731 1.36 1.36 0 0 0-.487-.297c-.2-.295-.245-.417-.572-.349-.15-.165-.178-.288-.494-.178 0 0-.096-.234-.275-.289a.25.25 0 0 0-.05-.015c-.302-.21-.576-.215-.772-.16-.064-.048-.061-.124-.07-.388-.008-.2-.019-.486-.031-.744.027-.328.102-.974.126-1.303.028-.37.042-.948-.123-1.195C18.303.12 17.754-.003 17.21 0zm-.005.34c.7 0 1.002.22 1.044.343.013.028.082.495.04.797-.013.11-.027.509-.054.687-.014.179-.069.385-.124.673-.041.234-.233.495-.384.536-.261.069-.742.055-1.017 0-.069-.014-.124-.055-.192-.096-.151-.248-.234-.44-.261-.742-.028-.289-.083-.412-.096-.632-.014-.33-.014-.55-.014-.55.014-.178.069-.618.069-.659.013-.123.233-.357.989-.357zm-1.133 2.702c.146.149.301.306.432.416.124.11.426.096.7.096.248 0 .468.028.564-.027.154-.077.355-.235.523-.394.011.152.022.304.026.435.01.295-.043.468.024.57-.082.048-.174.105-.269.156-.151.08-.306.136-.403.115h-.002c-.209-.035-.931-.215-1.331-.407-.167-.259-.335-.398-.326-.448.027-.137.04-.247.054-.425.004-.03.005-.058.008-.088zm-.853.69l.035.001c.424.036.65.152.808.284l.076.03.008-.027c.047.03.102.06.162.088.47.159 1.104.308 1.309.353.247.055.645-.192.838-.316.343-.22.783-.04.989.193.137.15.192.247.192.288.316-.11.357.041.508.206.385-.179.412.041.44.137-.122 0-.298.014-.538.04l-.012-.012c-.144-.153-.402-.289-.599-.384-.087-.031-.18-.049-.252-.097-.11-.055-.22-.137-.385-.123-.687.082-.824.315-1.415.178-.577-.134-.737-.254-1.333-.221l.001.026c-.105.016-.2.03-.22.03-.206.012-.722.067-1.153-.1a1.256 1.256 0 0 0-.161-.076l-.005-.002h-.001c-.18-.07-.39-.11-.63-.112h-.026c.218-.11.356-.259.56-.218.22.041.44.22.564.357a.858.858 0 0 0-.178-.288c.128-.09.245-.229.418-.234zm-1.1.545c.15.002.28.026.417.073.018.009.034.018.059.029.288.137.81.164 1.25.137a2.26 2.26 0 0 0 .563-.095c.322.024.514.11.977.216.31.07.502.045.695-.007.193-.053.386-.13.723-.17a.542.542 0 0 1 .188.013c.038.02.075.04.11.061.062.049.214.135.343.189.164.068.59.357.645.425a.1.1 0 0 0 .038.03c.242.314.407.755.396 1.21-.06.46-.426.214-.626.12-.412-.178-.824-.302-1.305-.302-.48 0-1.099.041-1.635.179-.741.206-.961.192-1.29.027-.33-.178-.907-.618-.907-.618v.01c-.007-.007-.012-.012-.014-.01-.042.069-.138.247-.193.33-.027.522-.343 1.346-.934 1.552a.547.547 0 0 1-.467-.041 2.503 2.503 0 0 0-.55-.275c.481.384.729.673.949 1.181.174.43.415 1.017 1.002 1.646.363-.004.725.097.962.346.137.137.357.289.33.426 0 .041-.083.151-.151.234a3.231 3.231 0 0 1-.207.22c-.054.04-.247.192-.288.22-.041.027-.096.095-.137.109-.138.069-.289.014-.426-.055s.027-.082-.124-.192c-.34-.24-.541-.411-.454-.832-.932-.794-2.561-1.26-2.911-2.108-.22-.55-.248-.824-.042-1.058.605-.687.371-1.346.825-1.634.425-.275.783.04.989.33-.124-.509-.55-.633-.55-.674 0-.632.605-1.071 1.21-1.181.218-.041.389-.062.54-.06zm-1.847.534c-.14.196-.231.435-.246.721-.206.028-.673.055-.907.907a3.39 3.39 0 0 1-.214.62c-.103.045-2.946 1.274-5.229 2.542l-.01-.007c-.32.18-.627.363-.919.546l-.125.077-.001.003c-1.136.723-2.04 1.45-2.637 2.112.412-2.679 2.528-4.08 3.53-4.698 2.42-1.489 4.629-2.225 6.758-2.823zm8.037.323c.26-.004.536.06.756.275.59.577.425 1.209.247 1.648.15.179.508.687.288 1.291-.04.138-.343.138-.563.495.55-.316.893-.233 1.017.165.192.618-.234 1.36-.605 1.772 0-.014-.014-.028-.014-.041-.055.206-.123.604-.535 1.044-.206.22-.371.192-.605.137-.215-.054-.322-.142-.543-.276-.036-.207-.102-.482-.102-.59 0-.044-.004-.141-.01-.243.032-.036.066-.074.106-.114 0 0 .178-.247.44-.233.26.014.535-.041.604-.11 0-.48-.55-.494-.357-1.319.013-.04.082-.11.302-.137-.33-.069-.48-.083-.714-.302l-.013-.013c.11-.253.224-.457.301-.605.193-.385.082-.852.082-.852.207-.069.385-.179.413-.247.203-.673-.164-1.322-.605-1.74.036-.003.073-.005.11-.006zm-5.46.925c.01.016.02.033.034.05.179.22.577.495 1.113.673.26.083.467.028.7-.027 1.123-.278 2.304-.346 3.33.155a1.82 1.82 0 0 1-.157 1.068c-.232.465-.533 1.068-.48 2.215-.246.044-1.419.144-1.992.037-.521-.097-1.416-.525-1.62-.69a6.703 6.703 0 0 1-.125-.848 1.37 1.37 0 0 0 .454-.343c-.412.068-.577.04-.825-.097-.235-.13-.642-.533-.87-.82.229-.29.393-.69.335-1.226.037-.05.07-.099.102-.147zm-4.38 1.598c-.09.253.093.654.224.953.508 1.179 2.07 1.29 3.127 2.18a.723.723 0 0 0 .06.388c.083.165.371.413.371.413-.055.054-.027.164-.027.164.204.217.504.243.547.246-.435 1.248-.816 2.626-.451 4.095-.179.244-.368.445-.531.668a.851.851 0 0 1-.444-.31c-.591-.852-1.457-1.416-3.023-1.374-2.349.055-3.283-.907-3.461-2.748-.094-.974-.357-1.922-.888-2.479C7.489 9.014 9.6 7.937 10.268 7.73a2.8 2.8 0 0 0 .2-.073zm3.496.18c.381.442.795.727 1.193.979.082.343.11.577.192 1.03h-.041l-.027.308a2.836 2.836 0 0 0-.62-.113l.001-.003c-.893-1.057-.7-1.47-1.058-2.019.097-.034.225-.094.36-.182zm5.911 1.086c.076.067.178.12.323.154-.327.68.33.912.37 1.17-.143.083-.367.037-.603.025-.115-.006-.229.065-.321.147l.032-.367c.006-.43.09-.809.2-1.13zM15.79 9.947c.024.035.178.131 1.002.352 1.026.275 2.323.12 2.55.09a.378.378 0 0 1-.022.089c0 .343.055.59.096.81.053.308.13.533.163.74l.008-.007c.234 1.367.561 3.133-.267 4.048.041.192.069.467.014.783a3.204 3.204 0 0 1-.151.535 2.29 2.29 0 0 0-.108.352c-1.1.142-1.755.055-2.06-.015.123-.374.407-.754.876-.735-.022-.911-.264-1.223-.511-1.891.395-.883.299-1.665.621-2.848-.247.261-.44 1.209-.604 1.786-.206.838-.563 1.648-1.525 2.294 0 .22-.069.384-.151.494-.179.261-.412.344-.494.77.11-.138.26-.261.26-.22a8.51 8.51 0 0 1-.025.493l.012.001c-.165 1.044-.522 1.525-.742 2.115-.151.426-.096 1.36-.151 1.374-.385.083-.975-.068-1.14-.15.162-1.14.019-2.278.436-3.6l-.015-.006c.16-.554.478-.878.939-1.464-.161-.52-.532-1.64.266-4.182.033-.014.067-.03.105-.049l.206-.137c.04-.028.096-.069.137-.096.069-.042.371-.371.412-.412.096-.097.165-.124.192-.234.055-.206-.247-.412-.37-.55-.018-.019-.03-.034-.043-.05.013-.039.027-.077.042-.114.01-.125.028-.26.042-.367zm.883 7.942c.05.002.174.122.751.158.66.04 1.539-.083 1.772-.138.234-.055.097.11.069.275l-.026.169c-.399.134-1.008.188-1.416.202-.393.013-.846-.012-1.161-.11-.048-.26-.063-.47-.007-.55a.024.024 0 0 1 .018-.006zm2.506.846c-.02.135-.035.223-.058.372-.388.12-.888.122-1.27.135a4.413 4.413 0 0 1-1.012-.07 2.065 2.065 0 0 1-.033-.109 11.343 11.343 0 0 1-.065-.252c.179.034.53.079 1.15.087a4.142 4.142 0 0 0 1.288-.163zm-.106.685c-.069.44-.055 1.786-.014 2.157.014.11.948.522 1.277.77.107.085.259.157.422.222.042.042.116.105.197.203.162.213.052.436-.135.526-.264-.007-.568-.052-1.074-.128-.695-.104-1.129-.101-1.73-.106v-.003c-.152-.275-.056-.728-.056-.728a2.2 2.2 0 0 1-.809-.18l.012-.026c.234-.48.22-.591.151-1.415-.047-.578-.196-.883-.335-1.195.169.016.409.035.857.041a4.567 4.567 0 0 0 1.237-.138zm-5.306 2.084c.243 0 .6.032.676.1v.014c.014.165.165.399.11.522-.027.069-.096-.041-.192-.068.041.26.151.741.316 1.112.11.248.041.426-.33.495-.33.014-.755 0-1.112-.083-.412-.206-.55-.316-.467-.7.068-.275.494-.59.865-.838-.206.014-.426.165-.398-.014.055-.357.206-.33.302-.508-.02-.02.084-.032.23-.032z"/></x-slot:icon_path>
                                <x-slot:description>Motion JS Framework</x-slot:description>
                            </x-index.tech-comp>
    
                            <x-index.tech-comp :showIcon="false">
                                <x-slot:title>SQLite</x-slot:title>
                                <x-slot:icon_path><path d="M21.678.521c-1.032-.92-2.28-.55-3.513.544a8.71 8.71 0 0 0-.547.535c-2.109 2.237-4.066 6.38-4.674 9.544.237.48.422 1.093.544 1.561a13.044 13.044 0 0 1 .164.703s-.019-.071-.096-.296l-.05-.146a1.689 1.689 0 0 0-.033-.08c-.138-.32-.518-.995-.686-1.289-.143.423-.27.818-.376 1.176.484.884.778 2.4.778 2.4s-.025-.099-.147-.442c-.107-.303-.644-1.244-.772-1.464-.217.804-.304 1.346-.226 1.478.152.256.296.698.422 1.186.286 1.1.485 2.44.485 2.44l.017.224a22.41 22.41 0 0 0 .056 2.748c.095 1.146.273 2.13.5 2.657l.155-.084c-.334-1.038-.47-2.399-.41-3.967.09-2.398.642-5.29 1.661-8.304 1.723-4.55 4.113-8.201 6.3-9.945-1.993 1.8-4.692 7.63-5.5 9.788-.904 2.416-1.545 4.684-1.931 6.857.666-2.037 2.821-2.912 2.821-2.912s1.057-1.304 2.292-3.166c-.74.169-1.955.458-2.362.629-.6.251-.762.337-.762.337s1.945-1.184 3.613-1.72C21.695 7.9 24.195 2.767 21.678.521m-18.573.543A1.842 1.842 0 0 0 1.27 2.9v16.608a1.84 1.84 0 0 0 1.835 1.834h9.418a22.953 22.953 0 0 1-.052-2.707c-.006-.062-.011-.141-.016-.2a27.01 27.01 0 0 0-.473-2.378c-.121-.47-.275-.898-.369-1.057-.116-.197-.098-.31-.097-.432 0-.12.015-.245.037-.386a9.98 9.98 0 0 1 .234-1.045l.217-.028c-.017-.035-.014-.065-.031-.097l-.041-.381a32.8 32.8 0 0 1 .382-1.194l.2-.019c-.008-.016-.01-.038-.018-.053l-.043-.316c.63-3.28 2.587-7.443 4.8-9.791.066-.069.133-.128.198-.194Z"/></x-slot:icon_path>
                                <x-slot:description>Light Database Management</x-slot:description>
                            </x-index.tech-comp>
                        </div>

                        <div class="h-[0.5px] w-full inset-x-4 bg-gray-500 bg-opacity-30"></div>
                        
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-x-2 gap-y-4 md:gap-x-4 md:gap-y-4">
                            <x-index.tech-comp :showIcon="true">
                                <x-slot:title>ChatGPT</x-slot:title>
                                <x-slot:icon_path><path d="M22.2819 9.8211a5.9847 5.9847 0 0 0-.5157-4.9108 6.0462 6.0462 0 0 0-6.5098-2.9A6.0651 6.0651 0 0 0 4.9807 4.1818a5.9847 5.9847 0 0 0-3.9977 2.9 6.0462 6.0462 0 0 0 .7427 7.0966 5.98 5.98 0 0 0 .511 4.9107 6.051 6.051 0 0 0 6.5146 2.9001A5.9847 5.9847 0 0 0 13.2599 24a6.0557 6.0557 0 0 0 5.7718-4.2058 5.9894 5.9894 0 0 0 3.9977-2.9001 6.0557 6.0557 0 0 0-.7475-7.0729zm-9.022 12.6081a4.4755 4.4755 0 0 1-2.8764-1.0408l.1419-.0804 4.7783-2.7582a.7948.7948 0 0 0 .3927-.6813v-6.7369l2.02 1.1686a.071.071 0 0 1 .038.052v5.5826a4.504 4.504 0 0 1-4.4945 4.4944zm-9.6607-4.1254a4.4708 4.4708 0 0 1-.5346-3.0137l.142.0852 4.783 2.7582a.7712.7712 0 0 0 .7806 0l5.8428-3.3685v2.3324a.0804.0804 0 0 1-.0332.0615L9.74 19.9502a4.4992 4.4992 0 0 1-6.1408-1.6464zM2.3408 7.8956a4.485 4.485 0 0 1 2.3655-1.9728V11.6a.7664.7664 0 0 0 .3879.6765l5.8144 3.3543-2.0201 1.1685a.0757.0757 0 0 1-.071 0l-4.8303-2.7865A4.504 4.504 0 0 1 2.3408 7.872zm16.5963 3.8558L13.1038 8.364 15.1192 7.2a.0757.0757 0 0 1 .071 0l4.8303 2.7913a4.4944 4.4944 0 0 1-.6765 8.1042v-5.6772a.79.79 0 0 0-.407-.667zm2.0107-3.0231l-.142-.0852-4.7735-2.7818a.7759.7759 0 0 0-.7854 0L9.409 9.2297V6.8974a.0662.0662 0 0 1 .0284-.0615l4.8303-2.7866a4.4992 4.4992 0 0 1 6.6802 4.66zM8.3065 12.863l-2.02-1.1638a.0804.0804 0 0 1-.038-.0567V6.0742a4.4992 4.4992 0 0 1 7.3757-3.4537l-.142.0805L8.704 5.459a.7948.7948 0 0 0-.3927.6813zm1.0976-2.3654l2.602-1.4998 2.6069 1.4998v2.9994l-2.5974 1.4997-2.6067-1.4997Z"/></x-slot:icon_path>
                                <x-slot:description>Simple App</x-slot:description>
                            </x-index.tech-comp>
                            <x-index.tech-comp :showIcon="true">
                                <x-slot:title>Gemini</x-slot:title>
                                <x-slot:icon_path><path d="M11.04 19.32Q12 21.51 12 24q0-2.49.93-4.68.96-2.19 2.58-3.81t3.81-2.55Q21.51 12 24 12q-2.49 0-4.68-.93a12.3 12.3 0 0 1-3.81-2.58 12.3 12.3 0 0 1-2.58-3.81Q12 2.49 12 0q0 2.49-.96 4.68-.93 2.19-2.55 3.81a12.3 12.3 0 0 1-3.81 2.58Q2.49 12 0 12q2.49 0 4.68.96 2.19.93 3.81 2.55t2.55 3.81"/></x-slot:icon_path>
                                <x-slot:description>Simple App</x-slot:description>
                            </x-index.tech-comp>
                            <x-index.tech-comp :showIcon="true">
                                <x-slot:title>SQLite</x-slot:title>
                                <x-slot:icon_path><path d="M21.678.521c-1.032-.92-2.28-.55-3.513.544a8.71 8.71 0 0 0-.547.535c-2.109 2.237-4.066 6.38-4.674 9.544.237.48.422 1.093.544 1.561a13.044 13.044 0 0 1 .164.703s-.019-.071-.096-.296l-.05-.146a1.689 1.689 0 0 0-.033-.08c-.138-.32-.518-.995-.686-1.289-.143.423-.27.818-.376 1.176.484.884.778 2.4.778 2.4s-.025-.099-.147-.442c-.107-.303-.644-1.244-.772-1.464-.217.804-.304 1.346-.226 1.478.152.256.296.698.422 1.186.286 1.1.485 2.44.485 2.44l.017.224a22.41 22.41 0 0 0 .056 2.748c.095 1.146.273 2.13.5 2.657l.155-.084c-.334-1.038-.47-2.399-.41-3.967.09-2.398.642-5.29 1.661-8.304 1.723-4.55 4.113-8.201 6.3-9.945-1.993 1.8-4.692 7.63-5.5 9.788-.904 2.416-1.545 4.684-1.931 6.857.666-2.037 2.821-2.912 2.821-2.912s1.057-1.304 2.292-3.166c-.74.169-1.955.458-2.362.629-.6.251-.762.337-.762.337s1.945-1.184 3.613-1.72C21.695 7.9 24.195 2.767 21.678.521m-18.573.543A1.842 1.842 0 0 0 1.27 2.9v16.608a1.84 1.84 0 0 0 1.835 1.834h9.418a22.953 22.953 0 0 1-.052-2.707c-.006-.062-.011-.141-.016-.2a27.01 27.01 0 0 0-.473-2.378c-.121-.47-.275-.898-.369-1.057-.116-.197-.098-.31-.097-.432 0-.12.015-.245.037-.386a9.98 9.98 0 0 1 .234-1.045l.217-.028c-.017-.035-.014-.065-.031-.097l-.041-.381a32.8 32.8 0 0 1 .382-1.194l.2-.019c-.008-.016-.01-.038-.018-.053l-.043-.316c.63-3.28 2.587-7.443 4.8-9.791.066-.069.133-.128.198-.194Z"/></x-slot:icon_path>
                                <x-slot:description>Simple App</x-slot:description>
                            </x-index.tech-comp>
                        </div>
                        
                    </div>

                </main>
    
            </div>
    
            <aside class="overflow-y-hidden w-0 md:w-[12.5%] sticky top-0 z-20 block bg-black md:border-l-[1px] border-gray-700 border-opacity-70">
                {{-- <div class="flex w-full h-full justify-start items-center pl-[12.5%]">
                    <div class="flex flex-col gap-y-12">
                        <img class="h-auto w-6 opacity-40 hover:opacity-70 transition-opacity hover:ease-out duration-500" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAA0tJREFUSEuVV4t12zAMPGiRJJM0maT2JHEncTqJlUmqLEJUR0AkKFJKq/f8nIifAw6HjwXlEQgUWl+EFQzfD7buXgm6k/6KX8dP2DQyqDt4jAMgOsa//9MvVX2G4hWCJwW+/IJFRObtqoo/sMQ3SV76xrOk+izAz/XMLZ+j+1K+NrwFAMF/ZyOOMfP+A4/tVPYuAh4gtpTrAmTvf4kIjdl8DPE+odopfUBA8O2ZFZgF+KRXkfbV21f7OB0AQd8yeOd9A2zu85h7+sfQ8kW85EqwIwb5niEB8ACKsQY+ycJr4tmhqlWVh+kBn5uI/BoTtksWxj3F8DA9ZRF18EBdF2NNeofoxcPfgEabVdUMUyz0aK9kVX1fF2+a0wgfInKNWmg89svoLZlZJpGXVjiWiykp0ynv8zhaKgUuPVx3Z66EattjwJ5Tqum+enBxrVMYc7ktXhqBjcaSw9HQopUsE51FprcCHClSTRQUBdJRYxe6x1lE+kwap1A4Gh1UZx5ecFhkCoPFY036qsDDud/FtiW8+e+bQmGx9sJj6ZVZLDFW1YsCd7E0ZOp8nMAx5TbV0xMrFIN8VU3c9/C0LPdaybTcvQCgGPi8TCLLUWPYROilwr0YmSlQTQxdrgnr/tvkqRmBjRK77aUtd+2lUf04Edd2SpNSDnyqx2UxUyJ9ijQMlhru9O3SyS+LjSczqbiPgXPFaYB7cbU5WoG/8TiLS3FzYGdSEKm2WBjVs4i8HYnLqGZZzfx1Md6lKHVD/TD1snarqn1nrtHW5Gul6ZNzU7SFxT0eZZUpuoSvqQ37klkUuFpZEj7GLGNFjyPVO/Rds2mY6bpT0yQUHzK1xT0DswN5n44jTwzNrnCcNwn3huWQ8eNsxSbOQ6UtnhWVbS2pvq8e2ZgUmItnQ5Oory3pxQcBOwzFlc1g38y3ea0aHQeBrNRhgekHgVrcR9MERcfPJ6Cz91ru+1FHH3cgs6VXkakd/NzyHjgUgWSxrNPlCc9l0tqVxnokIPoYVNaOGo0Pde9rmrGRxNE0mkIm2Fg43obpcmxtKSCD1tKd8MZOailAmvC01t8vQJdK6ZH57U+kIK5+oelOZ6o6DMHAiPMYH/+A62K2z5F/+pEF/AUDZNA0sQ5yLQAAAABJRU5ErkJggg=="/>
                    </div>
                </div> --}}
            </aside>
            
        </div>
    </section>
</body>
</html>


