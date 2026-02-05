@extends('layouts.docs')

@section('title', 'Laravel SaaS Starter Kit v1')

@section('content')
<div class="mb-8">
    <div class="flex items-center gap-3 mb-4">
        <h1 class="text-3xl sm:text-4xl font-bold text-[#1b1b18] dark:text-[#EDEDEC]">Laravel SaaS Starter Kit</h1>
        <span class="inline-block px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-300 rounded-full text-sm font-semibold">v1.0</span>
    </div>
    <p class="text-lg text-[#706f6c] dark:text-[#A1A09A]">A modern, production-ready Laravel SaaS starter kit with authentication, dark mode, and responsive design.</p>
</div>

<section class="mb-16">
    <h2 class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-6 pb-2 border-b border-[#e3e3e0] dark:border-[#3E3E3A]">What's Included</h2>
    <p class="text-[#706f6c] dark:text-[#A1A09A] mb-6">This starter kit is built with Laravel 12.x and includes everything you need to launch your SaaS application quickly. It comes with pre-built authentication, a modern design system with automatic dark mode, and a fully responsive layout that works beautifully on all devices.</p>
    
    <div class="grid sm:grid-cols-2 gap-4">
        <div class="p-4 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg">
            <h3 class="font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-2">🔐 Complete Authentication</h3>
            <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">User registration, login, password reset, email verification, and profile management</p>
        </div>
        <div class="p-4 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg">
            <h3 class="font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-2">🎨 Modern Design System</h3>
            <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">System-preference dark mode with consistent color palette and responsive layouts</p>
        </div>
        <div class="p-4 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg">
            <h3 class="font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-2">📱 Mobile-Friendly</h3>
            <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">Fully responsive with slide-out sidebar navigation and touch-optimized interface</p>
        </div>
        <div class="p-4 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg">
            <h3 class="font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-2">⚡ Production Ready</h3>
            <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">Built with Laravel Breeze, Tailwind CSS v4, and SQLite database</p>
        </div>
    </div>
</section>

<section class="mb-16">
    <h2 class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-6 pb-2 border-b border-[#e3e3e0] dark:border-[#3E3E3A]">Technical Stack</h2>
    <div class="grid sm:grid-cols-3 gap-4">
        <div class="text-center p-4 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg">
            <div class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-1">Laravel 12.x</div>
            <div class="text-sm text-[#706f6c] dark:text-[#A1A09A]">PHP Framework</div>
        </div>
        <div class="text-center p-4 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg">
            <div class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-1">Tailwind CSS v4</div>
            <div class="text-sm text-[#706f6c] dark:text-[#A1A09A]">Styling</div>
        </div>
        <div class="text-center p-4 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg">
            <div class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-1">Laravel Breeze</div>
            <div class="text-sm text-[#706f6c] dark:text-[#A1A09A]">Authentication</div>
        </div>
    </div>
</section>

<section class="mb-16">
    <h2 class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-6 pb-2 border-b border-[#e3e3e0] dark:border-[#3E3E3A]">Documentation</h2>
    <div class="grid gap-4 sm:grid-cols-2">
        <a href="{{ route('docs.starter-kits.laravel-saas-starter-kit-v1.get-started') }}" class="block p-6 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg hover:shadow-md transition">
            <h3 class="text-xl font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Get Started</h3>
            <p class="text-[#706f6c] dark:text-[#A1A09A]">Quick start guide to set up your project</p>
        </a>
        <a href="{{ route('docs.starter-kits.laravel-saas-starter-kit-v1.installation') }}" class="block p-6 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg hover:shadow-md transition">
            <h3 class="text-xl font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Installation</h3>
            <p class="text-[#706f6c] dark:text-[#A1A09A]">Detailed installation instructions</p>
        </a>
        <a href="{{ route('docs.starter-kits.laravel-saas-starter-kit-v1.features') }}" class="block p-6 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg hover:shadow-md transition">
            <h3 class="text-xl font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Features</h3>
            <p class="text-[#706f6c] dark:text-[#A1A09A]">Explore all available features</p>
        </a>
        <a href="{{ route('docs.starter-kits.laravel-saas-starter-kit-v1.configuration') }}" class="block p-6 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg hover:shadow-md transition">
            <h3 class="text-xl font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Configuration</h3>
            <p class="text-[#706f6c] dark:text-[#A1A09A]">Configure your application</p>
        </a>
        <a href="{{ route('docs.starter-kits.laravel-saas-starter-kit-v1.deployment') }}" class="block p-6 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg hover:shadow-md transition">
            <h3 class="text-xl font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-2">Deployment</h3>
            <p class="text-[#706f6c] dark:text-[#A1A09A]">Deploy your application to production</p>
        </a>
    </div>
</section>

<section>
    <div class="bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-lg p-6">
        <h3 class="font-semibold text-blue-900 dark:text-blue-300 mb-2">Ready to get started?</h3>
        <p class="text-blue-800 dark:text-blue-400 text-sm mb-4">Follow our quick start guide to have your SaaS application up and running in minutes.</p>
        <a href="{{ route('docs.starter-kits.laravel-saas-starter-kit-v1.get-started') }}" class="inline-block px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg text-sm font-semibold transition">Get Started →</a>
    </div>
</section>
@endsection
