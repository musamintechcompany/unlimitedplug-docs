@extends('layouts.docs')

@section('title', 'Get Started - Laravel SaaS Starter Kit')

@section('content')
<h1 class="text-3xl sm:text-4xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-4">Get Started</h1>
<p class="text-lg text-[#706f6c] dark:text-[#A1A09A] mb-12">Quick start guide to set up your Laravel SaaS Starter Kit</p>

<section class="mb-16">
    <h2 class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-6 pb-2 border-b border-[#e3e3e0] dark:border-[#3E3E3A]">Quick Start</h2>
    <div class="space-y-4">
        <div class="flex gap-4">
            <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 font-semibold">1</span>
            <div class="flex-1">
                <p class="text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Extract the downloaded ZIP file</p>
                <div class="relative group">
                    <code class="block bg-[#dbdbd7] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] px-4 py-2 rounded text-sm pr-12">cd laravel-saas-starter-kit-v1.0</code>
                    <button onclick="copyToClipboard('cd laravel-saas-starter-kit-v1.0', this)" class="absolute right-2 top-2 p-1 rounded hover:bg-gray-200 dark:hover:bg-gray-700 opacity-0 group-hover:opacity-100 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="flex gap-4">
            <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 font-semibold">2</span>
            <div class="flex-1">
                <p class="text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Install PHP dependencies</p>
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
                <p class="text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Install JavaScript dependencies</p>
                <div class="relative group">
                    <code class="block bg-[#dbdbd7] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] px-4 py-2 rounded text-sm pr-12">npm install</code>
                    <button onclick="copyToClipboard('npm install', this)" class="absolute right-2 top-2 p-1 rounded hover:bg-gray-200 dark:hover:bg-gray-700 opacity-0 group-hover:opacity-100 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="flex gap-4">
            <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 font-semibold">4</span>
            <div class="flex-1">
                <p class="text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Create environment file</p>
                <div class="relative group mb-2">
                    <code class="block bg-[#dbdbd7] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] px-4 py-2 rounded text-sm pr-12">copy .env.example .env</code>
                    <button onclick="copyToClipboard('copy .env.example .env', this)" class="absolute right-2 top-2 p-1 rounded hover:bg-gray-200 dark:hover:bg-gray-700 opacity-0 group-hover:opacity-100 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="flex gap-4">
            <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 font-semibold">5</span>
            <div class="flex-1">
                <p class="text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Generate application key</p>
                <div class="relative group">
                    <code class="block bg-[#dbdbd7] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] px-4 py-2 rounded text-sm pr-12">php artisan key:generate</code>
                    <button onclick="copyToClipboard('php artisan key:generate', this)" class="absolute right-2 top-2 p-1 rounded hover:bg-gray-200 dark:hover:bg-gray-700 opacity-0 group-hover:opacity-100 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="flex gap-4">
            <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 font-semibold">6</span>
            <div class="flex-1">
                <p class="text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Run database migrations</p>
                <div class="relative group">
                    <code class="block bg-[#dbdbd7] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] px-4 py-2 rounded text-sm pr-12">php artisan migrate</code>
                    <button onclick="copyToClipboard('php artisan migrate', this)" class="absolute right-2 top-2 p-1 rounded hover:bg-gray-200 dark:hover:bg-gray-700 opacity-0 group-hover:opacity-100 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="flex gap-4">
            <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 font-semibold">7</span>
            <div class="flex-1">
                <p class="text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Build assets</p>
                <div class="relative group">
                    <code class="block bg-[#dbdbd7] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] px-4 py-2 rounded text-sm pr-12">npm run dev</code>
                    <button onclick="copyToClipboard('npm run dev', this)" class="absolute right-2 top-2 p-1 rounded hover:bg-gray-200 dark:hover:bg-gray-700 opacity-0 group-hover:opacity-100 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="flex gap-4">
            <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 font-semibold">8</span>
            <div class="flex-1">
                <p class="text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Start the development server</p>
                <div class="relative group">
                    <code class="block bg-[#dbdbd7] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] px-4 py-2 rounded text-sm pr-12">php artisan serve</code>
                    <button onclick="copyToClipboard('php artisan serve', this)" class="absolute right-2 top-2 p-1 rounded hover:bg-gray-200 dark:hover:bg-gray-700 opacity-0 group-hover:opacity-100 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 rounded-lg p-6">
        <h3 class="font-semibold text-green-900 dark:text-green-300 mb-2">✅ You're all set!</h3>
        <p class="text-green-800 dark:text-green-400 text-sm">Visit <code class="bg-green-100 dark:bg-green-900 px-2 py-1 rounded">http://localhost:8000</code> or <code class="bg-green-100 dark:bg-green-900 px-2 py-1 rounded">http://127.0.0.1:8000</code> to see your application.</p>
    </div>
</section>
@endsection
