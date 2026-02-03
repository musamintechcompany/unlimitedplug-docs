<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentation - Unlimited Plug</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC]">
    <div class="min-h-screen">
        <!-- Header -->
        <header class="bg-white dark:bg-[#161615] shadow-sm sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
                <a href="{{ url('/') }}" class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC]">Unlimited Plug</a>
                
                <div class="flex items-center gap-3">
                    <!-- Mobile version -->
                    <div class="lg:hidden text-sm text-[#706f6c] dark:text-[#A1A09A] border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-full px-2 py-1">
                        v12.x
                    </div>
                    
                    <!-- Mobile hamburger menu -->
                    <button class="lg:hidden p-2 rounded-md text-[#706f6c] dark:text-[#A1A09A] hover:text-[#1b1b18] dark:hover:text-[#EDEDEC]" onclick="toggleMobileMenu()">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    
                    <!-- Desktop Laravel version -->
                    <div class="hidden lg:block text-sm text-[#706f6c] dark:text-[#A1A09A] border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-full px-3 py-1">
                        Laravel 12.x
                    </div>
                </div>
            </div>
            
            <!-- Mobile menu -->
            <div id="mobileMenu" class="hidden lg:hidden border-t border-[#e3e3e0] dark:border-[#3E3E3A] bg-white dark:bg-[#161615]">
                <nav class="px-4 py-4 space-y-2">
                    <a href="#quick-start" class="block px-4 py-2 text-sm text-[#706f6c] dark:text-[#A1A09A] hover:bg-[#dbdbd7] dark:hover:bg-[#3E3E3A] rounded-lg" onclick="scrollToSection('quick-start')">Quick Start</a>
                    <a href="#features" class="block px-4 py-2 text-sm text-[#706f6c] dark:text-[#A1A09A] hover:bg-[#dbdbd7] dark:hover:bg-[#3E3E3A] rounded-lg" onclick="scrollToSection('features')">Features</a>
                    <a href="#configuration" class="block px-4 py-2 text-sm text-[#706f6c] dark:text-[#A1A09A] hover:bg-[#dbdbd7] dark:hover:bg-[#3E3E3A] rounded-lg" onclick="scrollToSection('configuration')">Configuration</a>
                    <a href="#customization" class="block px-4 py-2 text-sm text-[#706f6c] dark:text-[#A1A09A] hover:bg-[#dbdbd7] dark:hover:bg-[#3E3E3A] rounded-lg" onclick="scrollToSection('customization')">Customization</a>
                    <a href="#deployment" class="block px-4 py-2 text-sm text-[#706f6c] dark:text-[#A1A09A] hover:bg-[#dbdbd7] dark:hover:bg-[#3E3E3A] rounded-lg" onclick="scrollToSection('deployment')">Deployment</a>
                    <a href="#support" class="block px-4 py-2 text-sm text-[#706f6c] dark:text-[#A1A09A] hover:bg-[#dbdbd7] dark:hover:bg-[#3E3E3A] rounded-lg" onclick="scrollToSection('support')">Support</a>
                </nav>
            </div>
        </header>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                <!-- Sidebar Navigation -->
                <aside class="hidden lg:block lg:col-span-3">
                    <nav class="sticky top-24 space-y-1">
                        <a href="#quick-start" class="block px-4 py-2 text-sm font-medium text-[#1b1b18] dark:text-[#EDEDEC] bg-[#dbdbd7] dark:bg-[#3E3E3A] rounded-lg">Quick Start</a>
                        <a href="#features" class="block px-4 py-2 text-sm text-[#706f6c] dark:text-[#A1A09A] hover:bg-[#dbdbd7] dark:hover:bg-[#3E3E3A] rounded-lg">Features</a>
                        <a href="#configuration" class="block px-4 py-2 text-sm text-[#706f6c] dark:text-[#A1A09A] hover:bg-[#dbdbd7] dark:hover:bg-[#3E3E3A] rounded-lg">Configuration</a>
                        <a href="#customization" class="block px-4 py-2 text-sm text-[#706f6c] dark:text-[#A1A09A] hover:bg-[#dbdbd7] dark:hover:bg-[#3E3E3A] rounded-lg">Customization</a>
                        <a href="#deployment" class="block px-4 py-2 text-sm text-[#706f6c] dark:text-[#A1A09A] hover:bg-[#dbdbd7] dark:hover:bg-[#3E3E3A] rounded-lg">Deployment</a>
                        <a href="#support" class="block px-4 py-2 text-sm text-[#706f6c] dark:text-[#A1A09A] hover:bg-[#dbdbd7] dark:hover:bg-[#3E3E3A] rounded-lg">Support</a>
                    </nav>
                </aside>

                <!-- Main Content -->
                <main class="lg:col-span-9">
                    <div class="bg-white dark:bg-[#161615] rounded-lg shadow-sm p-6 sm:p-8 lg:p-12">
                        <h1 class="text-3xl sm:text-4xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-4">Documentation</h1>
                        <p class="text-lg text-[#706f6c] dark:text-[#A1A09A] mb-12">Everything you need to get started with Unlimited Plug SaaS Starter Kit</p>

                        <!-- Quick Start -->
                        <section id="quick-start" class="mb-16 scroll-mt-24">
                            <h2 class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-6 pb-2 border-b border-[#e3e3e0] dark:border-[#3E3E3A]">Quick Start</h2>
                            <div class="space-y-4">
                                <div class="flex gap-4">
                                    <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 font-semibold">1</span>
                                    <div class="flex-1">
                                        <p class="text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Clone the repository</p>
                                        <div class="relative group">
                                            <code class="block bg-[#dbdbd7] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] px-4 py-2 rounded text-sm pr-12">git clone your-repo-url</code>
                                            <button onclick="copyToClipboard('git clone your-repo-url', this)" class="absolute right-2 top-2 p-1 rounded hover:bg-gray-200 dark:hover:bg-gray-700 opacity-0 group-hover:opacity-100 transition">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 font-semibold">2</span>
                                    <div class="flex-1">
                                        <p class="text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Install dependencies</p>
                                        <div class="relative group">
                                            <code class="block bg-[#dbdbd7] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] px-4 py-2 rounded text-sm pr-12">composer install</code>
                                            <button onclick="copyToClipboard('composer install', this)" class="absolute right-2 top-2 p-1 rounded hover:bg-gray-200 dark:hover:bg-gray-700 opacity-0 group-hover:opacity-100 transition">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 font-semibold">3</span>
                                    <div class="flex-1">
                                        <p class="text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Setup environment</p>
                                        <div class="relative group">
                                            <code class="block bg-[#dbdbd7] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] px-4 py-2 rounded text-sm pr-12 mb-2">cp .env.example .env</code>
                                            <button onclick="copyToClipboard('cp .env.example .env', this)" class="absolute right-2 top-2 p-1 rounded hover:bg-gray-200 dark:hover:bg-gray-700 opacity-0 group-hover:opacity-100 transition">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                                            </button>
                                        </div>
                                        <div class="relative group">
                                            <code class="block bg-[#dbdbd7] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] px-4 py-2 rounded text-sm pr-12">php artisan key:generate</code>
                                            <button onclick="copyToClipboard('php artisan key:generate', this)" class="absolute right-2 top-2 p-1 rounded hover:bg-gray-200 dark:hover:bg-gray-700 opacity-0 group-hover:opacity-100 transition">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 font-semibold">4</span>
                                    <div class="flex-1">
                                        <p class="text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Configure database and migrate</p>
                                        <div class="relative group">
                                            <code class="block bg-[#dbdbd7] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] px-4 py-2 rounded text-sm pr-12">php artisan migrate</code>
                                            <button onclick="copyToClipboard('php artisan migrate', this)" class="absolute right-2 top-2 p-1 rounded hover:bg-gray-200 dark:hover:bg-gray-700 opacity-0 group-hover:opacity-100 transition">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 font-semibold">5</span>
                                    <div class="flex-1">
                                        <p class="text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Install frontend dependencies and build</p>
                                        <div class="relative group">
                                            <code class="block bg-[#dbdbd7] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] px-4 py-2 rounded text-sm pr-12">npm install && npm run dev</code>
                                            <button onclick="copyToClipboard('npm install && npm run dev', this)" class="absolute right-2 top-2 p-1 rounded hover:bg-gray-200 dark:hover:bg-gray-700 opacity-0 group-hover:opacity-100 transition">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Features -->
                        <section id="features" class="mb-16 scroll-mt-24">
                            <h2 class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-6 pb-2 border-b border-[#e3e3e0] dark:border-[#3E3E3A]">Features Included</h2>
                            <div class="grid sm:grid-cols-2 gap-4">
                                <div class="flex items-start gap-3 p-4 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg">
                                    <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    <div>
                                        <h3 class="font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">User Authentication</h3>
                                        <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">Login, Register, Password Reset</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3 p-4 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg">
                                    <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    <div>
                                        <h3 class="font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">User Dashboard</h3>
                                        <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">Pre-built dashboard layout</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3 p-4 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg">
                                    <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    <div>
                                        <h3 class="font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">Profile Management</h3>
                                        <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">Update profile information</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3 p-4 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg">
                                    <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    <div>
                                        <h3 class="font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">Email Verification</h3>
                                        <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">Built-in email verification</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3 p-4 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg">
                                    <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    <div>
                                        <h3 class="font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">Tailwind CSS</h3>
                                        <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">Modern utility-first CSS</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3 p-4 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg">
                                    <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    <div>
                                        <h3 class="font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">Dark Mode</h3>
                                        <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">Built-in dark mode support</p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Configuration -->
                        <section id="configuration" class="mb-16 scroll-mt-24">
                            <h2 class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-6 pb-2 border-b border-[#e3e3e0] dark:border-[#3E3E3A]">Configuration</h2>
                            <div class="bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-lg p-6 mb-6">
                                <h3 class="font-semibold text-blue-900 dark:text-blue-300 mb-2">Environment Variables</h3>
                                <p class="text-blue-800 dark:text-blue-400 text-sm">Update your <code class="bg-blue-100 dark:bg-blue-900 px-2 py-1 rounded text-[#1b1b18] dark:text-[#EDEDEC]">.env</code> file with the following:</p>
                            </div>
                            <div class="space-y-4">
                                <div class="border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-lg p-4">
                                    <code class="text-sm font-mono text-[#1b1b18] dark:text-[#EDEDEC]">APP_NAME</code>
                                    <p class="text-sm text-[#706f6c] dark:text-[#A1A09A] mt-1">Your application name</p>
                                </div>
                                <div class="border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-lg p-4">
                                    <code class="text-sm font-mono text-[#1b1b18] dark:text-[#EDEDEC]">APP_URL</code>
                                    <p class="text-sm text-[#706f6c] dark:text-[#A1A09A] mt-1">Your application URL</p>
                                </div>
                                <div class="border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-lg p-4">
                                    <code class="text-sm font-mono text-[#1b1b18] dark:text-[#EDEDEC]">DB_*</code>
                                    <p class="text-sm text-[#706f6c] dark:text-[#A1A09A] mt-1">Database connection credentials</p>
                                </div>
                                <div class="border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-lg p-4">
                                    <code class="text-sm font-mono text-[#1b1b18] dark:text-[#EDEDEC]">MAIL_*</code>
                                    <p class="text-sm text-[#706f6c] dark:text-[#A1A09A] mt-1">Email service configuration</p>
                                </div>
                            </div>
                        </section>

                        <!-- Customization -->
                        <section id="customization" class="mb-16 scroll-mt-24">
                            <h2 class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-6 pb-2 border-b border-[#e3e3e0] dark:border-[#3E3E3A]">Customization</h2>
                            <div class="space-y-6">
                                <div>
                                    <h3 class="text-lg font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-3">Branding</h3>
                                    <ul class="space-y-3">
                                        <li class="flex gap-3">
                                            <span class="text-blue-600 dark:text-blue-400">→</span>
                                            <span class="text-[#1b1b18] dark:text-[#EDEDEC]">Update logo in <code class="bg-[#dbdbd7] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] px-2 py-1 rounded text-sm">resources/views/components/application-logo.blade.php</code></span>
                                        </li>
                                        <li class="flex gap-3">
                                            <span class="text-blue-600 dark:text-blue-400">→</span>
                                            <span class="text-[#1b1b18] dark:text-[#EDEDEC]">Modify colors in <code class="bg-[#dbdbd7] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] px-2 py-1 rounded text-sm">tailwind.config.js</code></span>
                                        </li>
                                        <li class="flex gap-3">
                                            <span class="text-blue-600 dark:text-blue-400">→</span>
                                            <span class="text-[#1b1b18] dark:text-[#EDEDEC]">Update welcome page in <code class="bg-[#dbdbd7] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] px-2 py-1 rounded text-sm">resources/views/welcome.blade.php</code></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </section>

                        <!-- Deployment -->
                        <section id="deployment" class="mb-16 scroll-mt-24">
                            <h2 class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-6 pb-2 border-b border-[#e3e3e0] dark:border-[#3E3E3A]">Deployment</h2>
                            <div class="bg-yellow-50 dark:bg-yellow-900/20 border border-yellow-200 dark:border-yellow-800 rounded-lg p-6 mb-6">
                                <p class="text-yellow-800 dark:text-yellow-400 text-sm">Follow these steps to deploy your application to production:</p>
                            </div>
                            <div class="space-y-3">
                                <div class="flex gap-3 items-start">
                                    <span class="flex-shrink-0 w-6 h-6 flex items-center justify-center rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A] text-xs font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">1</span>
                                    <div class="relative group flex-1">
                                        <code class="block bg-[#dbdbd7] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] px-4 py-2 rounded text-sm pr-12">APP_ENV=production</code>
                                        <button onclick="copyToClipboard('APP_ENV=production', this)" class="absolute right-2 top-2 p-1 rounded hover:bg-gray-200 dark:hover:bg-gray-700 opacity-0 group-hover:opacity-100 transition">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="flex gap-3 items-start">
                                    <span class="flex-shrink-0 w-6 h-6 flex items-center justify-center rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A] text-xs font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">2</span>
                                    <div class="relative group flex-1">
                                        <code class="block bg-[#dbdbd7] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] px-4 py-2 rounded text-sm pr-12">APP_DEBUG=false</code>
                                        <button onclick="copyToClipboard('APP_DEBUG=false', this)" class="absolute right-2 top-2 p-1 rounded hover:bg-gray-200 dark:hover:bg-gray-700 opacity-0 group-hover:opacity-100 transition">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="flex gap-3 items-start">
                                    <span class="flex-shrink-0 w-6 h-6 flex items-center justify-center rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A] text-xs font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">3</span>
                                    <div class="relative group flex-1">
                                        <code class="block bg-[#dbdbd7] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] px-4 py-2 rounded text-sm pr-12">php artisan config:cache</code>
                                        <button onclick="copyToClipboard('php artisan config:cache', this)" class="absolute right-2 top-2 p-1 rounded hover:bg-gray-200 dark:hover:bg-gray-700 opacity-0 group-hover:opacity-100 transition">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="flex gap-3 items-start">
                                    <span class="flex-shrink-0 w-6 h-6 flex items-center justify-center rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A] text-xs font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">4</span>
                                    <div class="relative group flex-1">
                                        <code class="block bg-[#dbdbd7] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] px-4 py-2 rounded text-sm pr-12">php artisan route:cache</code>
                                        <button onclick="copyToClipboard('php artisan route:cache', this)" class="absolute right-2 top-2 p-1 rounded hover:bg-gray-200 dark:hover:bg-gray-700 opacity-0 group-hover:opacity-100 transition">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="flex gap-3 items-start">
                                    <span class="flex-shrink-0 w-6 h-6 flex items-center justify-center rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A] text-xs font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">5</span>
                                    <div class="relative group flex-1">
                                        <code class="block bg-[#dbdbd7] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] px-4 py-2 rounded text-sm pr-12">npm run build</code>
                                        <button onclick="copyToClipboard('npm run build', this)" class="absolute right-2 top-2 p-1 rounded hover:bg-gray-200 dark:hover:bg-gray-700 opacity-0 group-hover:opacity-100 transition">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Support -->
                        <section id="support" class="scroll-mt-24">
                            <h2 class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-6 pb-2 border-b border-[#e3e3e0] dark:border-[#3E3E3A]">Support</h2>
                            <div class="bg-gradient-to-r from-blue-50 to-purple-50 dark:from-blue-900/20 dark:to-purple-900/20 rounded-lg p-8 text-center">
                                <h3 class="text-xl font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Need Help?</h3>
                                <p class="text-[#706f6c] dark:text-[#A1A09A] mb-4">Our support team is here to help you</p>
                                <a href="mailto:support@unlimitedplug.com" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                    Contact Support
                                </a>
                            </div>
                        </section>
                    </div>
                </main>
            </div>
        </div>
    </div>
    <script>
        function copyToClipboard(text, button) {
            navigator.clipboard.writeText(text).then(function() {
                const originalIcon = button.innerHTML;
                button.innerHTML = '<svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>';
                setTimeout(() => {
                    button.innerHTML = originalIcon;
                }, 2000);
            });
        }
        
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        }
        
        function scrollToSection(sectionId) {
            document.getElementById(sectionId).scrollIntoView({ behavior: 'smooth' });
            document.getElementById('mobileMenu').classList.add('hidden');
        }
    </script>
</body>
</html>
