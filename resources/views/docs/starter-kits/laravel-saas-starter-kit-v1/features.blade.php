@extends('layouts.docs')

@section('title', 'Features - Laravel SaaS Starter Kit')

@section('content')
<h1 class="text-3xl sm:text-4xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-4">Features</h1>
<p class="text-lg text-[#706f6c] dark:text-[#A1A09A] mb-12">Explore all the features included in your starter kit</p>

<section class="mb-16">
    <h2 class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-6 pb-2 border-b border-[#e3e3e0] dark:border-[#3E3E3A]">Authentication</h2>
    <div class="grid sm:grid-cols-2 gap-4">
        <div class="flex items-start gap-3 p-4 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg">
            <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div>
                <h3 class="font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">User Registration & Login</h3>
                <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">Complete authentication system</p>
            </div>
        </div>
        <div class="flex items-start gap-3 p-4 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg">
            <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div>
                <h3 class="font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">Password Reset</h3>
                <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">Secure password recovery</p>
            </div>
        </div>
        <div class="flex items-start gap-3 p-4 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg">
            <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div>
                <h3 class="font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">Email Verification</h3>
                <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">Optional email verification (disabled by default)</p>
            </div>
        </div>
        <div class="flex items-start gap-3 p-4 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg">
            <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div>
                <h3 class="font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">Profile Management</h3>
                <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">Update info, change password, delete account</p>
            </div>
        </div>
    </div>
</section>

<section class="mb-16">
    <h2 class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-6 pb-2 border-b border-[#e3e3e0] dark:border-[#3E3E3A]">Design System</h2>
    <div class="space-y-4">
        <div class="p-4 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg">
            <h3 class="font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-2">🌓 System-Preference Dark Mode</h3>
            <p class="text-sm text-[#706f6c] dark:text-[#A1A09A] mb-3">Automatic dark mode detection based on user's system preferences. No manual toggle required.</p>
        </div>
        
        <div class="p-4 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg">
            <h3 class="font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-2">🎨 Consistent Color Palette</h3>
            <div class="grid sm:grid-cols-2 gap-2 text-sm mt-3">
                <div class="flex items-center gap-2">
                    <div class="w-4 h-4 rounded" style="background: #0a0a0a;"></div>
                    <code class="text-xs text-[#706f6c] dark:text-[#A1A09A]">#0a0a0a - Dark Background</code>
                </div>
                <div class="flex items-center gap-2">
                    <div class="w-4 h-4 rounded border" style="background: #FDFDFC;"></div>
                    <code class="text-xs text-[#706f6c] dark:text-[#A1A09A]">#FDFDFC - Light Background</code>
                </div>
                <div class="flex items-center gap-2">
                    <div class="w-4 h-4 rounded" style="background: #161615;"></div>
                    <code class="text-xs text-[#706f6c] dark:text-[#A1A09A]">#161615 - Dark Cards</code>
                </div>
                <div class="flex items-center gap-2">
                    <div class="w-4 h-4 rounded border" style="background: #ffffff;"></div>
                    <code class="text-xs text-[#706f6c] dark:text-[#A1A09A]">#ffffff - Light Cards</code>
                </div>
                <div class="flex items-center gap-2">
                    <div class="w-4 h-4 rounded" style="background: #EDEDEC;"></div>
                    <code class="text-xs text-[#706f6c] dark:text-[#A1A09A]">#EDEDEC - Dark Primary Text</code>
                </div>
                <div class="flex items-center gap-2">
                    <div class="w-4 h-4 rounded border" style="background: #18181b;"></div>
                    <code class="text-xs text-[#706f6c] dark:text-[#A1A09A]">#18181b - Light Primary Text</code>
                </div>
            </div>
        </div>
        
        <div class="p-4 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg">
            <h3 class="font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-2">📱 Fully Responsive</h3>
            <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">Mobile and desktop layouts that work beautifully on all screen sizes</p>
        </div>
    </div>
</section>

<section class="mb-16">
    <h2 class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-6 pb-2 border-b border-[#e3e3e0] dark:border-[#3E3E3A]">UI Components</h2>
    <div class="grid sm:grid-cols-2 gap-4">
        <div class="flex items-start gap-3 p-4 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg">
            <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div>
                <h3 class="font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">Modern Welcome Page</h3>
                <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">Phone mockup showcase</p>
            </div>
        </div>
        <div class="flex items-start gap-3 p-4 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg">
            <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div>
                <h3 class="font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">Clean Auth Pages</h3>
                <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">Login, register, forgot password</p>
            </div>
        </div>
        <div class="flex items-start gap-3 p-4 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg">
            <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div>
                <h3 class="font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">Dashboard with Navigation</h3>
                <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">Pre-built dashboard layout</p>
            </div>
        </div>
        <div class="flex items-start gap-3 p-4 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg">
            <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div>
                <h3 class="font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">Mobile Navigation</h3>
                <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">Slide-out sidebar for mobile</p>
            </div>
        </div>
        <div class="flex items-start gap-3 p-4 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg">
            <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div>
                <h3 class="font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">Dropdown Menus</h3>
                <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">User menu and navigation</p>
            </div>
        </div>
        <div class="flex items-start gap-3 p-4 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg">
            <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div>
                <h3 class="font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">Modal Components</h3>
                <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">Reusable modal dialogs</p>
            </div>
        </div>
    </div>
</section>

<section class="mb-16">
    <h2 class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-6 pb-2 border-b border-[#e3e3e0] dark:border-[#3E3E3A]">Technical Stack</h2>
    <div class="grid sm:grid-cols-2 gap-4">
        <div class="p-4 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg">
            <h3 class="font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-1">Laravel 12.x</h3>
            <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">Latest Laravel framework</p>
        </div>
        <div class="p-4 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg">
            <h3 class="font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-1">Laravel Breeze</h3>
            <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">Authentication scaffolding</p>
        </div>
        <div class="p-4 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg">
            <h3 class="font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-1">Blade Templates</h3>
            <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">Laravel's templating engine</p>
        </div>
        <div class="p-4 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg">
            <h3 class="font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-1">Tailwind CSS v4</h3>
            <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">Utility-first CSS framework</p>
        </div>
        <div class="p-4 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded-lg">
            <h3 class="font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-1">SQLite Database</h3>
            <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">Default database (MySQL/PostgreSQL supported)</p>
        </div>
    </div>
</section>
@endsection
