@extends('layouts.docs')

@section('title', 'Configuration - Laravel SaaS Starter Kit')

@section('content')
<h1 class="text-3xl sm:text-4xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-4">Configuration</h1>
<p class="text-lg text-[#706f6c] dark:text-[#A1A09A] mb-12">Configure your Laravel SaaS Starter Kit</p>

<section class="mb-16">
    <h2 class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-6 pb-2 border-b border-[#e3e3e0] dark:border-[#3E3E3A]">Email Verification</h2>
    <p class="text-[#706f6c] dark:text-[#A1A09A] mb-4">Email verification is disabled by default to make development easier. When enabled, users must verify their email address before accessing the application.</p>
    
    <div class="bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-lg p-6 mb-4">
        <h3 class="font-semibold text-blue-900 dark:text-blue-300 mb-2">📍 Location</h3>
        <p class="text-blue-800 dark:text-blue-400 text-sm mb-2">The User model is located at:</p>
        <code class="text-sm text-blue-900 dark:text-blue-300">app/Models/User.php</code>
    </div>
    
    <div class="space-y-4">
        <div>
            <h3 class="text-lg font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-3">How to Enable Email Verification</h3>
            <p class="text-[#706f6c] dark:text-[#A1A09A] mb-3">Follow these steps to enable email verification:</p>
        </div>
        
        <div>
            <p class="text-[#1b1b18] dark:text-[#EDEDEC] mb-2 font-medium">Step 1: Open the User model</p>
            <p class="text-sm text-[#706f6c] dark:text-[#A1A09A] mb-2">Navigate to <code class="bg-[#dbdbd7] dark:bg-[#0a0a0a] px-2 py-1 rounded text-sm">app/Models/User.php</code></p>
        </div>
        
        <div>
            <p class="text-[#1b1b18] dark:text-[#EDEDEC] mb-2 font-medium">Step 2: Uncomment the import statement</p>
            <p class="text-sm text-[#706f6c] dark:text-[#A1A09A] mb-3">At the top of the file, uncomment the MustVerifyEmail import:</p>
            <div class="code-block">
                <div class="code-header">
                    <span class="code-dot" style="background: #ff5f56;"></span>
                    <span class="code-dot" style="background: #ffbd2e;"></span>
                    <span class="code-dot" style="background: #27c93f;"></span>
                    <span class="text-xs text-gray-400">app/Models/User.php (line 5)</span>
                </div>
                <div class="code-content">
                    <button onclick="copyCode(this)" class="copy-btn">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    </button>
                    <pre><code class="language-php"><span class="diff-remove">// use Illuminate\Contracts\Auth\MustVerifyEmail;</span>
<span class="diff-add">use Illuminate\Contracts\Auth\MustVerifyEmail;</span></code></pre>
                </div>
            </div>
        </div>
        
        <div>
            <p class="text-[#1b1b18] dark:text-[#EDEDEC] mb-2 font-medium">Step 3: Implement the interface</p>
            <p class="text-sm text-[#706f6c] dark:text-[#A1A09A] mb-3">Update the class declaration to implement MustVerifyEmail:</p>
            <div class="code-block">
                <div class="code-header">
                    <span class="code-dot" style="background: #ff5f56;"></span>
                    <span class="code-dot" style="background: #ffbd2e;"></span>
                    <span class="code-dot" style="background: #27c93f;"></span>
                    <span class="text-xs text-gray-400">app/Models/User.php (line 9)</span>
                </div>
                <div class="code-content">
                    <button onclick="copyCode(this)" class="copy-btn">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    </button>
                    <pre><code class="language-php"><span class="diff-remove">class User extends Authenticatable // implements MustVerifyEmail</span>
<span class="diff-add">class User extends Authenticatable implements MustVerifyEmail</span></code></pre>
                </div>
            </div>
        </div>
    </div>
    
    <div class="mt-4 bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 rounded-lg p-4">
        <h4 class="font-semibold text-green-900 dark:text-green-300 text-sm mb-2">✅ That's it!</h4>
        <p class="text-green-800 dark:text-green-400 text-sm">Once enabled, new users will receive an email verification link after registration. They must click the link to verify their email before accessing the application.</p>
    </div>
</section>

<section class="mb-16">
    <h2 class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-6 pb-2 border-b border-[#e3e3e0] dark:border-[#3E3E3A]">Database Configuration</h2>
    <p class="text-[#706f6c] dark:text-[#A1A09A] mb-4">The default database is SQLite. To use MySQL or PostgreSQL, update your <code class="bg-[#dbdbd7] dark:bg-[#0a0a0a] px-2 py-1 rounded text-sm">.env</code> file:</p>
    
    <div class="code-block">
        <div class="code-header">
            <span class="code-dot" style="background: #ff5f56;"></span>
            <span class="code-dot" style="background: #ffbd2e;"></span>
            <span class="code-dot" style="background: #27c93f;"></span>
            <span class="text-xs text-gray-400">.env</span>
        </div>
        <div class="code-content">
            <button onclick="copyCode(this)" class="copy-btn">
                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
            </button>
            <pre><code class="language-bash">DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password</code></pre>
        </div>
    </div>
</section>

<section class="mb-16">
    <h2 class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-6 pb-2 border-b border-[#e3e3e0] dark:border-[#3E3E3A]">Mail Configuration</h2>
    <p class="text-[#706f6c] dark:text-[#A1A09A] mb-4">Configure your mail settings in <code class="bg-[#dbdbd7] dark:bg-[#0a0a0a] px-2 py-1 rounded text-sm">.env</code>:</p>
    
    <div class="code-block">
        <div class="code-header">
            <span class="code-dot" style="background: #ff5f56;"></span>
            <span class="code-dot" style="background: #ffbd2e;"></span>
            <span class="code-dot" style="background: #27c93f;"></span>
            <span class="text-xs text-gray-400">.env</span>
        </div>
        <div class="code-content">
            <button onclick="copyCode(this)" class="copy-btn">
                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
            </button>
            <pre><code class="language-bash">MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host
MAIL_PORT=587
MAIL_USERNAME=your-username
MAIL_PASSWORD=your-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@example.com
MAIL_FROM_NAME="${APP_NAME}"</code></pre>
        </div>
    </div>
</section>

<section class="mb-16">
    <h2 class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-6 pb-2 border-b border-[#e3e3e0] dark:border-[#3E3E3A]">Dark Mode</h2>
    <p class="text-[#706f6c] dark:text-[#A1A09A] mb-4">Dark mode automatically follows the user's system preferences. No manual toggle required - it detects if the user has dark mode enabled on their device and applies it automatically.</p>
    
    <div class="bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-lg p-6 mb-4">
        <h3 class="font-semibold text-blue-900 dark:text-blue-300 mb-2">📍 Location</h3>
        <p class="text-blue-800 dark:text-blue-400 text-sm mb-3">The dark mode detection code is located in the <code class="bg-blue-100 dark:bg-blue-900 px-2 py-1 rounded text-xs">&lt;head&gt;</code> section of:</p>
        <code class="text-sm text-blue-900 dark:text-blue-300">resources/views/layouts/app.blade.php</code>
    </div>
    
    <div class="mb-4">
        <h3 class="text-lg font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-3">How It Works</h3>
        <p class="text-[#706f6c] dark:text-[#A1A09A] mb-3">The script checks the user's system preference using <code class="bg-[#dbdbd7] dark:bg-[#0a0a0a] px-2 py-1 rounded text-sm">window.matchMedia</code> and adds the <code class="bg-[#dbdbd7] dark:bg-[#0a0a0a] px-2 py-1 rounded text-sm">dark</code> class to the HTML element if dark mode is preferred.</p>
    </div>
    
    <div class="code-block">
        <div class="code-header">
            <span class="code-dot" style="background: #ff5f56;"></span>
            <span class="code-dot" style="background: #ffbd2e;"></span>
            <span class="code-dot" style="background: #27c93f;"></span>
            <span class="text-xs text-gray-400">resources/views/layouts/app.blade.php</span>
        </div>
        <div class="code-content">
            <button onclick="copyCode(this)" class="copy-btn">
                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
            </button>
            <pre><code class="language-javascript">&lt;script&gt;
    if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
        document.documentElement.classList.add('dark');
    }
&lt;/script&gt;</code></pre>
        </div>
    </div>
    
    <div class="mt-4 bg-yellow-50 dark:bg-yellow-900/20 border border-yellow-200 dark:border-yellow-800 rounded-lg p-4">
        <h4 class="font-semibold text-yellow-900 dark:text-yellow-300 text-sm mb-2">💡 Note</h4>
        <p class="text-yellow-800 dark:text-yellow-400 text-sm">This script is placed in the <code class="bg-yellow-100 dark:bg-yellow-900 px-2 py-1 rounded text-xs">&lt;head&gt;</code> section (before the body) to prevent any flash of light mode when the page loads.</p>
    </div>
</section>

<section class="mb-16">
    <h2 class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-6 pb-2 border-b border-[#e3e3e0] dark:border-[#3E3E3A]">Customization</h2>
    
    <div class="space-y-6">
        <div>
            <h3 class="text-lg font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-3">Colors</h3>
            <p class="text-[#706f6c] dark:text-[#A1A09A] mb-3">Update the color palette in your Blade templates by replacing the hex values:</p>
            <div class="grid sm:grid-cols-2 gap-2">
                <div class="flex items-center gap-2 p-2 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded">
                    <div class="w-4 h-4 rounded" style="background: #0a0a0a;"></div>
                    <code class="text-xs text-[#706f6c] dark:text-[#A1A09A]">#0a0a0a - Dark background</code>
                </div>
                <div class="flex items-center gap-2 p-2 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded">
                    <div class="w-4 h-4 rounded" style="background: #161615;"></div>
                    <code class="text-xs text-[#706f6c] dark:text-[#A1A09A]">#161615 - Dark cards</code>
                </div>
                <div class="flex items-center gap-2 p-2 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded">
                    <div class="w-4 h-4 rounded" style="background: #EDEDEC;"></div>
                    <code class="text-xs text-[#706f6c] dark:text-[#A1A09A]">#EDEDEC - Dark primary text</code>
                </div>
                <div class="flex items-center gap-2 p-2 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded">
                    <div class="w-4 h-4 rounded" style="background: #A1A09A;"></div>
                    <code class="text-xs text-[#706f6c] dark:text-[#A1A09A]">#A1A09A - Dark secondary text</code>
                </div>
                <div class="flex items-center gap-2 p-2 bg-[#dbdbd7] dark:bg-[#0a0a0a] rounded">
                    <div class="w-4 h-4 rounded" style="background: #3E3E3A;"></div>
                    <code class="text-xs text-[#706f6c] dark:text-[#A1A09A]">#3E3E3A - Dark borders</code>
                </div>
            </div>
        </div>
        
        <div>
            <h3 class="text-lg font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-3">Branding</h3>
            <ul class="space-y-3">
                <li class="flex gap-3">
                    <span class="text-blue-600 dark:text-blue-400">→</span>
                    <span class="text-[#1b1b18] dark:text-[#EDEDEC]">Update <code class="bg-[#dbdbd7] dark:bg-[#0a0a0a] px-2 py-1 rounded text-sm">APP_NAME</code> in <code class="bg-[#dbdbd7] dark:bg-[#0a0a0a] px-2 py-1 rounded text-sm">.env</code></span>
                </li>
                <li class="flex gap-3">
                    <span class="text-blue-600 dark:text-blue-400">→</span>
                    <span class="text-[#1b1b18] dark:text-[#EDEDEC]">Replace logo in <code class="bg-[#dbdbd7] dark:bg-[#0a0a0a] px-2 py-1 rounded text-sm">resources/views/components/application-logo.blade.php</code></span>
                </li>
                <li class="flex gap-3">
                    <span class="text-blue-600 dark:text-blue-400">→</span>
                    <span class="text-[#1b1b18] dark:text-[#EDEDEC]">Customize welcome page content in <code class="bg-[#dbdbd7] dark:bg-[#0a0a0a] px-2 py-1 rounded text-sm">resources/views/welcome.blade.php</code></span>
                </li>
            </ul>
        </div>
    </div>
</section>

<section>
    <h2 class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-6 pb-2 border-b border-[#e3e3e0] dark:border-[#3E3E3A]">Project Structure</h2>
    <div class="bg-[#dbdbd7] dark:bg-[#0a0a0a] p-4 rounded-lg">
        <pre class="text-sm text-[#1b1b18] dark:text-[#EDEDEC] overflow-x-auto"><code>resources/views/
├── auth/                    # Authentication pages
│   ├── login.blade.php
│   ├── register.blade.php
│   ├── forgot-password.blade.php
│   ├── reset-password.blade.php
│   └── verify-email.blade.php
├── layouts/                 # Layout templates
│   ├── app.blade.php       # Authenticated layout
│   ├── guest.blade.php     # Guest layout
│   └── navigation.blade.php
├── profile/                 # Profile management
│   ├── edit.blade.php
│   └── partials/
├── components/              # Reusable components
├── dashboard.blade.php      # Dashboard page
└── welcome.blade.php        # Landing page</code></pre>
    </div>
</section>
@endsection
