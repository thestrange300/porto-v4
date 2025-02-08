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
    
            <div class="w-[full] md:w-[75%] h-fit bg-black text-white gap-y-4 relative overflow-hidden">
                <div class="border bg-[#080808] z-40 border-gray-500 rounded-lg px-2 py-2 border-opacity-30 h-fit w-fit absolute top-4 right-4 flex items-center justify-center gap-x-2">
                    <div class="h-2 w-2 bg-yellow-400 rounded-full relative">
                        <div class="absolute top-0 left-0 animate-ping h-2 w-2 bg-yellow-400 rounded-full"></div>
                    </div>
                    <p class="font-spmono text-xs">On Learning: Laravel 12, React, Vue, Go</p>
                </div>
                <div class="absolute inset-0 bg-pattern"></div>
                <main class="flex flex-col justify-center items-center p-8 gap-y-8">
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
                            <p id="hero-desc" class="w-[80%] font-spmono text-center text-sm md:text-base">Thriving in all things tech: ML, Web Dev, UI/UX, Data, ICT. I solve, create, adapt, and learn constantly.</p>
                            {{-- <p id="hero-desc" class="w-[80%] font-spmono text-center text-sm md:text-base">Versatile, adaptable, and always ready for a new challenge. From Machine Learning to Web Development, UI/UX Design to Data Analysis and ICT Learning, I thrive in diverse tech domains. I explore, I build, and I solve. Constantly evolving, always learning.</p>           --}}
                            <div id="socials" class="flex gap-x-6 items-center justify-center">
                                <a href="mailto:thestrange300@gmail.com">
                                    <svg role="img" viewBox="0 0 24 24" class="fill-white w-6 h-6 opacity-50 hover:opacity-100 transition-opacity duration-500" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.61 12c0 1.99-1.62 3.61-3.61 3.61-1.99 0-3.61-1.62-3.61-3.61 0-1.99 1.62-3.61 3.61-3.61 1.99 0 3.61 1.62 3.61 3.61M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12c2.424 0 4.761-.722 6.76-2.087l.034-.024-1.617-1.879-.027.017A9.494 9.494 0 0 1 12 21.54c-5.26 0-9.54-4.28-9.54-9.54 0-5.26 4.28-9.54 9.54-9.54 5.26 0 9.54 4.28 9.54 9.54a9.63 9.63 0 0 1-.225 2.05c-.301 1.239-1.169 1.618-1.82 1.568-.654-.053-1.42-.52-1.426-1.661V12A6.076 6.076 0 0 0 12 5.93 6.076 6.076 0 0 0 5.93 12 6.076 6.076 0 0 0 12 18.07a6.02 6.02 0 0 0 4.3-1.792 3.9 3.9 0 0 0 3.32 1.805c.874 0 1.74-.292 2.437-.821.719-.547 1.256-1.336 1.553-2.285.047-.154.135-.504.135-.507l.002-.013c.175-.76.253-1.52.253-2.457 0-6.617-5.383-12-12-12"/></svg>
                                </a>
                                <a href="https://www.linkedin.com/in/tegar-alwinata/">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-white w-8 h-8 opacity-50 hover:opacity-100 transition-opacity duration-500" viewBox="0 0 30 30">
                                        <path d="M24,4H6C4.895,4,4,4.895,4,6v18c0,1.105,0.895,2,2,2h18c1.105,0,2-0.895,2-2V6C26,4.895,25.105,4,24,4z M10.954,22h-2.95 v-9.492h2.95V22z M9.449,11.151c-0.951,0-1.72-0.771-1.72-1.72c0-0.949,0.77-1.719,1.72-1.719c0.948,0,1.719,0.771,1.719,1.719 C11.168,10.38,10.397,11.151,9.449,11.151z M22.004,22h-2.948v-4.616c0-1.101-0.02-2.517-1.533-2.517 c-1.535,0-1.771,1.199-1.771,2.437V22h-2.948v-9.492h2.83v1.297h0.04c0.394-0.746,1.356-1.533,2.791-1.533 c2.987,0,3.539,1.966,3.539,4.522V22z"></path>
                                    </svg>
                                </a>
                                <a href="https://github.com/thestrange300">
                                    <svg role="img" viewBox="0 0 24 24" class="fill-white w-6 h-6 opacity-50 hover:opacity-100 transition-opacity duration-500" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title>
                                        <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div id="section2" class="flex flex-col justify-center items-center gap-y-4 w-full h-fit">
                        <div class="flex gap-x-2 w-[80%] h-16 items-center border-b-[1px] border-white border-opacity-30 border-dashed">
                            <img src="{{ asset('gif/fire.webp') }}" alt="" class="w-auto h-8">
                            <h3 class="text-2xl font-ehs text-left translate-y-1">Experience</h3>
                        </div>

                        <div id="description-box" class=" grid grid-cols-4 gap-x-4 w-[80%] h-fit border bg-[#080808] border-gray-500 rounded-lg p-6 border-opacity-30">
                            <div class="col-span-1 bg-[#191919] rounded-lg flex justify-center items-center relative">
                                <p class="font-ehs text-4xl">N/A</p>
                                <p class=" bg-[#141415] border-white border-[0.5px] border-opacity-30 absolute rounded-full px-2 py-1 bottom-2 text-xs font-spmono">Data Analysis</p>
                            </div>
                            <div class="col-span-3 flex flex-col gap-y-4">
                                <div class="flex gap-x-4 justify-between items-start">
                                    <div class="flex gap-x-4 justify-center items-center">
                                        <img src="{{ asset('img/unair.png') }}" alt="Logo Unair" class="w-auto h-12 rounded-lg saturate-50">
                                        <div class="flex flex-col justify-center">
                                            <h5 class="font-ehs">DPKKA Unair</h5>
                                            <p class="font-spmono">Data Entry and Validator</p>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="font-spmono text-sm font-semibold">Apr 2024 – Jul 2024</p>
                                        <p class="font-spmono text-sm font-extralight text-right">Freelance</p>
                                    </div>
                                </div>

                                <div class="bg-black p-4 border-[1px] border-gray-500 border-opacity-30 rounded-lg w-full h-full ">
                                    <p class="font-spmono text-sm text-neutral-400">Cleaned and streamlined <span class="text-white font-semibold">120,000+</span> rows of raw data, validated over <span class="text-white font-semibold">15,000</span> data points for accuracy, and developed a comprehensive master dataset with <span class="text-white font-semibold">6,500+</span> rows.</p>
                                </div>
                            </div>                           
                        </div>

                        <div id="description-box" class=" grid grid-cols-4 gap-x-4 w-[80%] h-fit border bg-[#080808] border-gray-500 rounded-lg p-6 border-opacity-30">
                            <div class="col-span-1 bg-[#191919] rounded-lg flex justify-center items-center relative">
                                <p class="font-ehs text-4xl">N/A</p>
                                <p class=" bg-[#141415] border-white border-[0.5px] border-opacity-30 absolute rounded-full px-2 py-1 bottom-2 text-xs font-spmono">Teaching</p>
                            </div>
                            <div class="col-span-3 flex flex-col gap-y-4">
                                <div class="flex gap-x-4 justify-between items-start">
                                    <div class="flex gap-x-4 justify-center items-center">
                                        <img src="{{ asset('img/surabaya.png') }}" alt="Logo Pemerintah Kota Surabaya" class="w-auto h-12 rounded-lg saturate-[.3]">
                                        <div class="flex flex-col justify-center">
                                            <h5 class="font-ehs">Diskominfo Surabaya</h5>
                                            <p class="font-spmono">ICT Learning Instructor</p>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="font-spmono text-sm font-semibold">Aug 23 – Jan 24</p>
                                        <p class="font-spmono text-sm font-extralight text-right">Internship</p>
                                    </div>
                                </div>

                                <div class="bg-black p-4 border-[1px] border-gray-500 border-opacity-30 rounded-lg w-full h-full ">
                                    <p class="font-spmono text-sm text-neutral-400">Designed and developed a comprehensive <span class="font-semibold text-white">100+ page</span> end-of-internship training module covering <span class="font-semibold text-white">13</span> topics for MSME participants at the Broadband Learning Center. Conducted hands-on workshops on Office Applications, Creative Design, Video Editing, and Fun Programming. Acted as a key liaison between the Surabaya City Government and the local community to enhance IT literacy.</p>
                                </div>
                            </div>                           
                        </div>

                        <div id="description-box" class=" grid grid-cols-4 gap-x-4 w-[80%] h-fit border bg-[#080808] border-gray-500 rounded-lg p-6 border-opacity-30">
                            <div class="col-span-1 bg-[#191919] rounded-lg flex justify-center items-center relative">
                                <p class="font-ehs text-4xl">N/A</p>
                                <p class=" bg-[#141415] border-white border-[0.5px] border-opacity-30 absolute rounded-full px-2 py-1 bottom-2 text-xs font-spmono">Web Development</p>
                            </div>
                            <div class="col-span-3 flex flex-col gap-y-4">
                                <div class="flex gap-x-4 justify-between items-start">
                                    <div class="flex gap-x-4 justify-center items-center">
                                        <img src="{{ asset('img/bprs.png') }}" alt="Logo BPRS" class="w-auto h-10 rounded-lg saturate-[.3]">
                                        <div class="flex flex-col justify-center">
                                            <h5 class="font-ehs">BPRS Baktimakmur Indah</h5>
                                            <p class="font-spmono">Front End & UI/UX Developer</p>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="font-spmono text-sm font-semibold">Aug 23 – Dec 23</p>
                                        <p class="font-spmono text-sm font-extralight text-right">Internship</p>
                                    </div>
                                </div>

                                <div class="bg-black p-4 border-[1px] border-gray-500 border-opacity-30 rounded-lg w-full h-full ">
                                    <p class="font-spmono text-sm text-neutral-400">Contributed to the Implementation of AI for <span class="font-semibold text-white">Credit Scoring and Early Warning Systems</span> Matching Fund project with Universitas Airlangga in the BPRS sector. Designed intuitive UIs from low to high-fidelity mockups, applying mobile-first design and iterative testing for optimal UX. Developed sleek, responsive front-end designs using <span class="font-semibold text-red-500">Laravel</span> and <span class="font-semibold text-sky-500">Tailwind CSS</span>, ensuring alignment with stakeholder needs.</p>
                                </div>
                            </div>                           
                        </div>

                    </div>

                    <div id="section2" class="flex flex-col justify-center items-center gap-y-4 w-full h-fit">
                        <div class="flex gap-x-2 w-[80%] h-16 items-center border-b-[1px] border-white border-opacity-30 border-dashed">
                            <img src="{{ asset('gif/rocket.webp') }}" alt="" class="w-auto h-8">
                            <h3 class="text-2xl font-ehs text-left translate-y-1">Projects</h3>
                        </div>
                    </div>

                    <div class="grid grid-cols-5 grid-rows-2 h-[550px] w-[80%] border bg-[#080808] border-gray-500 rounded-lg p-6 border-opacity-30 gap-x-4 gap-y-4">
                        <div class="flex justify-center items-center relative w-full h-full col-span-3 row-span-1 bg-black p-4 border-[1px] border-gray-500 border-opacity-30 rounded-lg">
                            <p class="font-ehs text-4xl">N/A</p>
                            <p class=" bg-[#141415] border-white border-[0.5px] border-opacity-30 absolute rounded-full px-2 py-1 bottom-2 text-xs font-spmono">Web Development</p>
                        </div>
                        <div class="flex justify-center items-center relative w-full h-full col-span-2 row-span-1 bg-black p-4 border-[1px] border-gray-500 border-opacity-30 rounded-lg">
                            <p class="font-ehs text-4xl">N/A</p>
                            <p class=" bg-[#141415] border-white border-[0.5px] border-opacity-30 absolute rounded-full px-2 py-1 bottom-2 text-xs font-spmono">Web Development</p>
                        </div>

                        <div class="w-full h-full col-span-5 row-span-1 grid grid-cols-3 gap-y-4 gap-x-4">

                            <div class="flex justify-center items-center relative w-full h-full col-span-1 bg-black p-4 border-[1px] border-gray-500 border-opacity-30 rounded-lg">
                                <p class="font-ehs text-4xl">N/A</p>
                                <p class=" bg-[#141415] border-white border-[0.5px] border-opacity-30 absolute rounded-full px-2 py-1 bottom-2 text-xs font-spmono">Web Development</p>
                            </div>

                            <div class="flex justify-center items-center relative w-full h-full col-span-1 bg-black p-4 border-[1px] border-gray-500 border-opacity-30 rounded-lg">
                                <p class="font-ehs text-4xl">N/A</p>
                                <p class=" bg-[#141415] border-white border-[0.5px] border-opacity-30 absolute rounded-full px-2 py-1 bottom-2 text-xs font-spmono">Web Development</p>
                            </div>

                            <div class="flex justify-center items-center relative w-full h-full col-span-1 bg-black p-4 border-[1px] border-gray-500 border-opacity-30 rounded-lg">
                                <p class="font-ehs text-4xl">N/A</p>
                                <p class=" bg-[#141415] border-white border-[0.5px] border-opacity-30 absolute rounded-full px-2 py-1 bottom-2 text-xs font-spmono">Web Development</p>
                            </div>

                        </div>
                    </div>

                    <div id="section3" class="flex flex-col justify-center items-center gap-y-4 w-full h-fit">
                        <div class="flex gap-x-2 w-[80%] h-16 items-center border-b-[1px] border-white border-opacity-30 border-dashed">
                            <img src="{{ asset('gif/actually.gif') }}" alt="" class="w-auto h-8">
                            <h3 class="text-2xl font-ehs text-left translate-y-1">Organization and Certification</h3>
                        </div>
                    </div>

                    <div class="p-4 w-[80%] h-full bg-[#080808] border-[1px] border-gray-500 border-opacity-30 rounded-lg">
                        <div class="grid grid-cols-2 grid-rows-2 gap-y-8 relative">    
                            <div class="col-span-2 row-span-1 grid grid-cols-2 gap-x-8 relative">
                                
                                <div class="absolute top-1/2 left-1/2 w-[1px] h-full bg-gray-500 bg-opacity-30 -translate-y-1/2"></div>
    
                                <div class="w-full h-full bg-black p-4 border-[1px] border-gray-500 border-opacity-30 rounded-lg flex flex-col gap-y-4">
                                    <h3 class="text-xl font-ehs text-center">Organization</h3>
                                    <div class="flex-col flex gap-y-2">
                                        <p class="font-spmono text-sm text-white font-semibold">
                                            ⭐ Head of Artistic Dept. LPM FST UNAIR
                                        </p>
                                        <p class="font-spmono text-sm text-neutral-400">Led a team of two designers to create 35+ Instagram feed layouts and 50+ story designs, ensuring brand alignment. Mentored team members in Inkscape and Canva to enhance design consistency. Oversaw and approved layouts, storyboards, and illustrations while incorporating team feedback.</p>
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
    
                            <div class="absolute top-1/2 left-1/2 h-[0.5px] w-full inset-x-4 bg-gray-500 bg-opacity-30 -translate-x-1/2"></div>
    
                            <div class="col-span-2 row-span-1 w-full h-full bg-black p-4 border-[1px] border-gray-500 border-opacity-30 rounded-lg flex flex-col gap-y-4">
                                
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
                                        ⭐ Machine Learning Professional Ceritficate (IBM)
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
