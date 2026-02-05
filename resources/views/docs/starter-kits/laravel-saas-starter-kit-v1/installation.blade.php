@extends('layouts.docs')

@section('title', 'Installation - Laravel SaaS Starter Kit')

@section('content')
<h1 class="text-3xl sm:text-4xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-4">Installation</h1>
<p class="text-lg text-[#706f6c] dark:text-[#A1A09A] mb-12">Detailed installation instructions for your Laravel SaaS Starter Kit</p>

<section class="mb-16">
    <h2 class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-6 pb-2 border-b border-[#e3e3e0] dark:border-[#3E3E3A]">Requirements</h2>
    <ul class="space-y-2">
        <li class="flex gap-3">
            <span class="text-blue-600 dark:text-blue-400">→</span>
            <span class="text-[#1b1b18] dark:text-[#EDEDEC]">PHP 8.2 or higher</span>
        </li>
        <li class="flex gap-3">
            <span class="text-blue-600 dark:text-blue-400">→</span>
            <span class="text-[#1b1b18] dark:text-[#EDEDEC]">Composer</span>
        </li>
        <li class="flex gap-3">
            <span class="text-blue-600 dark:text-blue-400">→</span>
            <span class="text-[#1b1b18] dark:text-[#EDEDEC]">Node.js & NPM</span>
        </li>
    </ul>
</section>

<section class="mb-16">
    <h2 class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-6 pb-2 border-b border-[#e3e3e0] dark:border-[#3E3E3A]">Setup Steps</h2>
    <div class="space-y-6">
        <div>
            <h3 class="text-lg font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-3">1. Extract ZIP File</h3>
            <p class="text-[#706f6c] dark:text-[#A1A09A] mb-2">Extract the downloaded ZIP file to your desired location:</p>
            <div class="relative group">
                <code class="block bg-[#dbdbd7] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] px-4 py-2 rounded text-sm pr-12">cd laravel-saas-starter-kit-v1.0</code>
            </div>
        </div>
        
        <div>
            <h3 class="text-lg font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-3">2. Install PHP Dependencies</h3>
            <div class="relative group">
                <code class="block bg-[#dbdbd7] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] px-4 py-2 rounded text-sm pr-12">composer install</code>
            </div>
        </div>
        
        <div>
            <h3 class="text-lg font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-3">3. Install JavaScript Dependencies</h3>
            <div class="relative group">
                <code class="block bg-[#dbdbd7] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] px-4 py-2 rounded text-sm pr-12">npm install</code>
            </div>
        </div>
        
        <div>
            <h3 class="text-lg font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-3">4. Create Environment File</h3>
            <div class="relative group">
                <code class="block bg-[#dbdbd7] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] px-4 py-2 rounded text-sm pr-12">copy .env.example .env</code>
            </div>
        </div>
        
        <div>
            <h3 class="text-lg font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-3">5. Generate Application Key</h3>
            <div class="relative group">
                <code class="block bg-[#dbdbd7] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] px-4 py-2 rounded text-sm pr-12">php artisan key:generate</code>
            </div>
        </div>
        
        <div>
            <h3 class="text-lg font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-3">6. Run Database Migrations</h3>
            <div class="relative group">
                <code class="block bg-[#dbdbd7] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] px-4 py-2 rounded text-sm pr-12">php artisan migrate</code>
            </div>
        </div>
        
        <div>
            <h3 class="text-lg font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-3">7. Build Assets</h3>
            <div class="relative group">
                <code class="block bg-[#dbdbd7] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] px-4 py-2 rounded text-sm pr-12">npm run dev</code>
            </div>
        </div>
        
        <div>
            <h3 class="text-lg font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-3">8. Start Development Server</h3>
            <div class="relative group">
                <code class="block bg-[#dbdbd7] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] px-4 py-2 rounded text-sm pr-12">php artisan serve</code>
            </div>
            <p class="text-[#706f6c] dark:text-[#A1A09A] mt-2 text-sm">Visit <code class="bg-[#dbdbd7] dark:bg-[#0a0a0a] px-2 py-1 rounded text-xs">http://localhost:8000</code> or <code class="bg-[#dbdbd7] dark:bg-[#0a0a0a] px-2 py-1 rounded text-xs">http://127.0.0.1:8000</code> to see your application.</p>
        </div>
    </div>
</section>
@endsection
