<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mohamed El Mehdi RAHMOUN - Full Stack Developer Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in-out',
                    }
                }
            }
        }
    </script>
</head>
<body class="min-h-screen bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 bg-black/20 backdrop-blur-md border-b border-white/10">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="text-2xl font-bold bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">
                    MR 
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#about" class="text-white/80 hover:text-white transition-colors">About</a>
                    <a href="#skills" class="text-white/80 hover:text-white transition-colors">Skills</a>
                    <a href="#experience" class="text-white/80 hover:text-white transition-colors">Experience</a>
                    <a href="#education" class="text-white/80 hover:text-white transition-colors">Education</a>
                    <a href="#projects" class="text-white/80 hover:text-white transition-colors">Projects</a>
                    <a href="#contact" class="text-white/80 hover:text-white transition-colors">Contact</a>
                </div>
                <button class="border border-purple-400 text-purple-400 hover:bg-purple-400 hover:text-white px-4 py-2 rounded-md transition-colors flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Resume
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-32 pb-20 px-6">
        <div class="container mx-auto text-center">
            <div class="mb-8">
                <div class="w-32 h-32 mx-auto mb-6 rounded-full bg-gradient-to-r from-purple-400 to-pink-400 p-1">
                    <div class="w-full h-full rounded-full bg-slate-900 flex items-center justify-center">
                        <span class="text-2xl font-bold text-purple-400">MR</span>
                    </div>
                </div>
            </div>

            <h1 class="text-5xl md:text-7xl font-bold mb-6">
                <span class="bg-gradient-to-r from-purple-400 via-pink-400 to-red-400 bg-clip-text text-transparent">
                    Mohamed El Mehdi
                </span>
                <br>
                <span class="text-white">RAHMOUN</span>
            </h1>
            <p class="text-xl md:text-2xl text-white/80 mb-8 max-w-3xl mx-auto">
                Crafting exceptional digital experiences with modern technologies. Specialized in Laravel, Vue, and backend architecture.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
                <a href="#projects" class="bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 text-white px-8 py-3 rounded-lg font-semibold flex items-center justify-center">
                    Experiences
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
                <a href="mailto:mahdimedrhm@gmail.com" class="border border-white/20 text-white hover:bg-white/10 px-8 py-3 rounded-lg font-semibold flex items-center justify-center">
                    Get In Touch
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </a>
            </div>
            <div class="flex justify-center space-x-6">
                <a href="https://github.com/mahdimedRhm" target="_blank" class="text-white/60 hover:text-purple-400 transition-colors">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                    </svg>
                </a>
                <a href="https://www.linkedin.com/in/mdrahmo" target="_blank" class="text-white/60 hover:text-purple-400 transition-colors">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                </a>
                <a href="mailto:mahdimedrhm@gmail.com" class="text-white/60 hover:text-purple-400 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 px-6">
        <div class="container mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-bold text-white mb-6">About Me</h2>
                    <p class="text-white/80 text-lg mb-6">
                        I'm Mehdi, a backend engineer at Verge passionate about building secure, scalable, and high-performance systems using Laravel, PHP, MySQL.              
                    </p>
                    <p class="text-white/80 text-lg mb-8">
                        I specialize in optimizing backend architecture, implementing cybersecurity best practices and writing clean, maintainable code and improving system reliability.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-purple-400">20+</div>
                            <div class="text-white/60">Projects Completed</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-purple-400">5+</div>
                            <div class="text-white/60">Years Experience</div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-gradient-to-r from-purple-600/20 to-pink-600/20 rounded-2xl p-8 backdrop-blur-sm border border-white/10">
                        <div class="w-full h-96 bg-gradient-to-br from-purple-500/20 to-pink-500/20 rounded-lg flex items-center justify-center">
                            <svg class="w-24 h-24 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 px-6">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-white text-center mb-12">Technical Skills</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Frontend Card -->
                <div class="bg-white/5 border border-white/10 backdrop-blur-sm rounded-lg p-6">
                    <svg class="w-12 h-12 text-purple-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                    <h3 class="text-white text-xl font-semibold mb-2">Frontend</h3>
                    <p class="text-white/60 mb-4">Modern UI/UX Development</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-purple-600/20 text-purple-300 px-2 py-1 rounded text-sm">React</span>
                        <span class="bg-purple-600/20 text-purple-300 px-2 py-1 rounded text-sm">Vue.js</span>
                        <span class="bg-purple-600/20 text-purple-300 px-2 py-1 rounded text-sm">Tailwind</span>
                        <span class="bg-purple-600/20 text-purple-300 px-2 py-1 rounded text-sm">TypeScript</span>
                    </div>
                </div>

                <!-- Backend Card -->
                <div class="bg-white/5 border border-white/10 backdrop-blur-sm rounded-lg p-6">
                    <svg class="w-12 h-12 text-pink-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
                    </svg>
                    <h3 class="text-white text-xl font-semibold mb-2">Backend</h3>
                    <p class="text-white/60 mb-4">Server-side Architecture</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-pink-600/20 text-pink-300 px-2 py-1 rounded text-sm">Laravel</span>
                        <span class="bg-pink-600/20 text-pink-300 px-2 py-1 rounded text-sm">Node.js</span>
                        <span class="bg-pink-600/20 text-pink-300 px-2 py-1 rounded text-sm">PHP</span>
                        <span class="bg-pink-600/20 text-pink-300 px-2 py-1 rounded text-sm">Python</span>
                    </div>
                </div>

                <!-- Database Card -->
                <div class="bg-white/5 border border-white/10 backdrop-blur-sm rounded-lg p-6">
                    <svg class="w-12 h-12 text-blue-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"></path>
                    </svg>
                    <h3 class="text-white text-xl font-semibold mb-2">Database</h3>
                    <p class="text-white/60 mb-4">Data Management</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-blue-600/20 text-blue-300 px-2 py-1 rounded text-sm">MySQL</span>
                        <span class="bg-blue-600/20 text-blue-300 px-2 py-1 rounded text-sm">PostgreSQL</span>
                        <span class="bg-blue-600/20 text-blue-300 px-2 py-1 rounded text-sm">MongoDB</span>
                        <span class="bg-blue-600/20 text-blue-300 px-2 py-1 rounded text-sm">Redis</span>
                    </div>
                </div>

                <!-- DevOps Card -->
                <div class="bg-white/5 border border-white/10 backdrop-blur-sm rounded-lg p-6">
                    <svg class="w-12 h-12 text-green-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                    </svg>
                    <h3 class="text-white text-xl font-semibold mb-2">DevOps</h3>
                    <p class="text-white/60 mb-4">Deployment & Scaling</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-green-600/20 text-green-300 px-2 py-1 rounded text-sm">Docker</span>
                        <span class="bg-green-600/20 text-green-300 px-2 py-1 rounded text-sm">CI/CD</span>
                        <span class="bg-green-600/20 text-green-300 px-2 py-1 rounded text-sm">Linux</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Work Experience Section -->
    <section id="experience" class="py-20 px-6 bg-black/20">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-white text-center mb-12">Work Experience</h2>
            <div class="max-w-4xl mx-auto">
                <div class="relative">
                    <!-- Timeline line -->
                    <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-gradient-to-b from-purple-400 to-pink-400"></div>
                    
                    <!-- Experience Item 1 -->
                    <div class="relative flex items-start mb-12">
                        <div class="absolute left-6 w-4 h-4 bg-purple-400 rounded-full border-4 border-slate-900"></div>
                        <div class="ml-20 bg-white/5 border border-white/10 backdrop-blur-sm rounded-lg p-6 w-full">
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
                                <div>
                                    <h3 class="text-xl font-bold text-white">Junior Backend Engineer</h3>
                                    <a href="https://verge.digital/" target="_blank" class="text-purple-400 font-semibold hover:text-purple-300">Verge</a>
                                </div>
                                <div class="flex items-center text-white/60 mt-2 md:mt-0">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0V6a2 2 0 012-2h4a2 2 0 012 2v1m-6 0h6m-6 0l.01.01M18 7v8a2 2 0 01-2 2H8a2 2 0 01-2-2V7a2 2 0 012-2h8a2 2 0 012 2z"></path>
                                    </svg>
                                    <span>Mar 2024 - Present</span>
                                </div>
                            </div>
                            <div class="flex items-center text-white/60 mb-4">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span>Bradford, United Kingdom</span>
                            </div>
                            <p class="text-white/80 mb-4">
                                Since March 2024, I've been part of a backend team building and maintaining large-scale platforms using Laravel, Vue.js, and MySQL. I focus on crafting clean, scalable systems, managing server setups via Forge and DigitalOcean, and improving user experience with dynamic front-end components.
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-purple-600/20 text-purple-300 px-2 py-1 rounded text-sm">Laravel</span>
                                <span class="bg-purple-600/20 text-purple-300 px-2 py-1 rounded text-sm">Livewire</span>
                                <span class="bg-purple-600/20 text-purple-300 px-2 py-1 rounded text-sm">Vue.js</span>
                                <span class="bg-purple-600/20 text-purple-300 px-2 py-1 rounded text-sm">Docker</span>
                            </div>
                        </div>
                    </div>

                    <!-- Experience Item 2 -->
                    <div class="relative flex items-start mb-12">
                        <div class="absolute left-6 w-4 h-4 bg-pink-400 rounded-full border-4 border-slate-900"></div>
                        <div class="ml-20 bg-white/5 border border-white/10 backdrop-blur-sm rounded-lg p-6 w-full">
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
                                <div>
                                    <h3 class="text-xl font-bold text-white">Full Stack Developer</h3>
                                    <a href="http://www.numesia.fr" target="_blank" class="text-pink-400 font-semibold hover:text-pink-300">Numesia</a>
                                </div>
                                <div class="flex items-center text-white/60 mt-2 md:mt-0">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0V6a2 2 0 012-2h4a2 2 0 012 2v1m-6 0h6m-6 0l.01.01M18 7v8a2 2 0 01-2 2H8a2 2 0 01-2-2V7a2 2 0 012-2h8a2 2 0 012 2z"></path>
                                    </svg>
                                    <span>Mar 2019 - Dec 2021</span>
                                </div>
                            </div>
                            <div class="flex items-center text-white/60 mb-4">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span>Strasbourg France - Remote</span>
                            </div>
                            <p class="text-white/80 mb-4">
                                From 2019 to 2021, I contributed to five national-scale platforms. My role involved designing RESTful APIs, handling both SQL and NoSQL databases, and implementing backend logic with Laravel. I also played a part in shaping and developing front-end components for a seamless UI.
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-pink-600/20 text-pink-300 px-2 py-1 rounded text-sm">Laravel</span>
                                <span class="bg-pink-600/20 text-pink-300 px-2 py-1 rounded text-sm">Vue.js</span>
                                <span class="bg-pink-600/20 text-pink-300 px-2 py-1 rounded text-sm">MongoDB</span>
                                <span class="bg-pink-600/20 text-pink-300 px-2 py-1 rounded text-sm">Docker</span>
                            </div>
                        </div>
                    </div>

                    <!-- Experience Item 3 -->
                    <div class="relative flex items-start mb-12">
                        <div class="absolute left-6 w-4 h-4 bg-blue-400 rounded-full border-4 border-slate-900"></div>
                        <div class="ml-20 bg-white/5 border border-white/10 backdrop-blur-sm rounded-lg p-6 w-full">
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
                                <div>
                                    <h3 class="text-xl font-bold text-white">Full Stack Developer</h3>
                                    <p class="text-blue-400 font-semibold">ZorxCorp</p>
                                </div>
                                <div class="flex items-center text-white/60 mt-2 md:mt-0">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0V6a2 2 0 012-2h4a2 2 0 012 2v1m-6 0h6m-6 0l.01.01M18 7v8a2 2 0 01-2 2H8a2 2 0 01-2-2V7a2 2 0 012-2h8a2 2 0 012 2z"></path>
                                    </svg>
                                    <span>Jun 2017 - Feb 2019</span>
                                </div>
                            </div>
                            <div class="flex items-center text-white/60 mb-4">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span>Batna, Algeria</span>
                            </div>
                            <p class="text-white/80 mb-4">
                                Between 2017 and 2019, I built full stack web and mobile solutions using Laravel, Vue.js, and Node.js. I managed middleware and routing, ensured secure client-server communication, and implemented robust data validation and protection practices.
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-blue-600/20 text-blue-300 px-2 py-1 rounded text-sm">Vue.js</span>
                                <span class="bg-blue-600/20 text-blue-300 px-2 py-1 rounded text-sm">Laravel</span>
                                <span class="bg-blue-600/20 text-blue-300 px-2 py-1 rounded text-sm">MySQL</span>
                                <span class="bg-blue-600/20 text-blue-300 px-2 py-1 rounded text-sm">C#</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="py-20 px-6">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-white text-center mb-12">Education & Certifications</h2>
            <div class="max-w-4xl mx-auto">
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Education Item 1 -->
                    <div class="bg-white/5 border border-white/10 backdrop-blur-sm rounded-lg p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-white">Masters In Cyber Security</h3>
                                <p class="text-purple-400 font-semibold">Bradford University</p>
                            </div>
                        </div>
                        <div class="flex items-center text-white/60 mb-4">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0V6a2 2 0 012-2h4a2 2 0 012 2v1m-6 0h6m-6 0l.01.01M18 7v8a2 2 0 01-2 2H8a2 2 0 01-2-2V7a2 2 0 012-2h8a2 2 0 012 2z"></path>
                            </svg>
                            <span>2022 - 2024</span>
                        </div>
                        <p class="text-white/80 mb-4">
                            Specialized in network security, penetration testing, ethical hacking, cryptography, risk management, and incident response. Experienced in securing enterprise systems and applying standards like ISO 27000. Skilled at solving real-world security challenges with practical, hands-on expertise.
                        </p>
                    </div>

                    <!-- Education Item 2 -->
                    <div class="bg-white/5 border border-white/10 backdrop-blur-sm rounded-lg p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-white">Masters In Cryptography</h3>
                                <p class="text-blue-400 font-semibold">University of Batna 2</p>
                            </div>
                        </div>
                        <div class="flex items-center text-white/60 mb-4">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0V6a2 2 0 012-2h4a2 2 0 012 2v1m-6 0h6m-6 0l.01.01M18 7v8a2 2 0 01-2 2H8a2 2 0 01-2-2V7a2 2 0 012-2h8a2 2 0 012 2z"></path>
                            </svg>
                            <span>2019 - 2021</span>
                        </div>
                        <p class="text-white/80 mb-4">
                            Master's in Cryptography and Cybersecurity with a focus on advanced cryptography, cyber system security, and operating system protection. Developed expertise in securing complex systems and understanding cryptographic protocols.
                        </p>
                    </div>

                    <!-- Education Item 3 -->
                    <div class="bg-white/5 border border-white/10 backdrop-blur-sm rounded-lg p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-500 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-white">Bachelor in Information System</h3>
                                <p class="text-green-400 font-semibold">University of Batna 2</p>
                            </div>
                        </div>
                        <div class="flex items-center text-white/60 mb-4">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0V6a2 2 0 012-2h4a2 2 0 012 2v1m-6 0h6m-6 0l.01.01M18 7v8a2 2 0 01-2 2H8a2 2 0 01-2-2V7a2 2 0 012-2h8a2 2 0 012 2z"></path>
                            </svg>
                            <span>2017 - 2020</span>
                        </div>
                        <p class="text-white/80 mb-4">
                            Studied object-oriented programming, networks, web and mobile application development, and operating systems fundamentals, gaining a solid foundation in IT systems.
                        </p>
                    </div>

                    <!-- Certification Item -->
                    <div class="bg-white/5 border border-white/10 backdrop-blur-sm rounded-lg p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-red-500 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-white">Certified CCNA V6</h3>
                                <p class="text-orange-400 font-semibold">Cisco</p>
                            </div>
                        </div>
                        <div class="flex items-center text-white/60 mb-4">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0V6a2 2 0 012-2h4a2 2 0 012 2v1m-6 0h6m-6 0l.01.01M18 7v8a2 2 0 01-2 2H8a2 2 0 01-2-2V7a2 2 0 012-2h8a2 2 0 012 2z"></path>
                            </svg>
                            <span>Certified 2020</span>
                        </div>
                        <p class="text-white/80 mb-4">
                            Comprehensive training in networking fundamentals, routing and switching, IP addressing, network security, and troubleshooting using Cisco technologies and protocols.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Contact Section -->
    <section id="contact" class="py-20 px-6 bg-black/20">
        <div class="container mx-auto">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl font-bold text-white mb-6">Let's Work Together</h2>
                <p class="text-xl text-white/80 mb-12">
                    Ready to bring your ideas to life? Let's discuss your next project.
                </p>
                <div class="grid md:grid-cols-3 gap-8 mb-12">
                    <div class="bg-white/5 border border-white/10 backdrop-blur-sm rounded-lg p-6 text-center">
                        <svg class="w-12 h-12 text-purple-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <h3 class="text-white font-semibold mb-2">Email</h3>
                        <p class="text-white/60">mahdimedrhm@gmail.com</p>
                    </div>
                    <div class="bg-white/5 border border-white/10 backdrop-blur-sm rounded-lg p-6 text-center">
                        <svg class="w-12 h-12 text-purple-400 mx-auto mb-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                        <h3 class="text-white font-semibold mb-2">LinkedIn</h3>
                        <p class="text-white/60">/in/mdrahmo</p>
                    </div>
                    <div class="bg-white/5 border border-white/10 backdrop-blur-sm rounded-lg p-6 text-center">
                        <svg class="w-12 h-12 text-purple-400 mx-auto mb-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                        <h3 class="text-white font-semibold mb-2">GitHub</h3>
                        <p class="text-white/60">@mahdimedRhm</p>
                    </div>
                </div>
                <a href="mailto:mahdimedrhm@gmail.com" class="bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 text-white px-8 py-3 rounded-lg font-semibold flex items-center justify-center mx-auto">
                    Start a Project
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 px-6 border-t border-white/10">
        <div class="container mx-auto text-center">
            <p class="text-white/60">© 2024 nycun.</p>
        </div>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>