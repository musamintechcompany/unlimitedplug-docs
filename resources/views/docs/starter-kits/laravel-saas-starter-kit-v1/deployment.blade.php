@extends('layouts.docs')

@section('title', 'Deployment - Laravel SaaS Starter Kit')

@section('content')
<h1 class="text-3xl sm:text-4xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-4">Deployment</h1>
<p class="text-lg text-[#706f6c] dark:text-[#A1A09A] mb-12">Deploy your Laravel SaaS application to production</p>

<section class="mb-16">
    <h2 class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-6 pb-2 border-b border-[#e3e3e0] dark:border-[#3E3E3A]">Production Setup</h2>
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
@endsection
