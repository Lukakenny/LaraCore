@php use App\Models\User;use Illuminate\Support\Facades\Auth; @endphp

    <!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LaraCore CMS</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">

<div class="min-h-screen bg-gradient-to-br from-[#FF2D20] to-[#1a1a1a] text-white flex flex-col">

    <nav
        class="fixed top-0 z-50 w-full h-16 bg-white/5 backdrop-blur-md border-b border-white/10 flex items-center justify-between px-6">

        <div class="flex items-center space-x-3">
                <span class="font-bold text-xl tracking-wider text-white">
                    LaraCore <span class="text-[#FF2D20]">CMS</span>
                </span>
            <p>{{Auth::user()->name}}</p>
        </div>

        <div class="flex items-center space-x-4">
            <span class="text-sm font-medium text-white/80">Admin</span>
            <div
                class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center text-xs font-bold shadow-inner border border-white/10">
                {{ mb_strtoupper(mb_substr(Auth::user()->name, 0, 1)) }}
            </div>
        </div>
    </nav>

    <div class="pt-16 flex flex-1 h-screen overflow-hidden">

        <aside
            class="w-64 bg-white/5 backdrop-blur-lg border-r border-white/10 flex flex-col p-4 overflow-y-auto md:flex">

            <div class="flex flex-col space-y-2 flex-1">

                <a href="{{route('admin.admin')}}"
                   class="px-4 py-3  font-medium shadow-sm flex items-center space-x-3
                   {{ request()->routeIs('admin.admin') ? 'bg-white/10 border border-white/20 text-white font-medium shadow-sm' : 'text-white/70 hover:text-white hover:bg-white/5' }}">
                    <span class="{{ request()->routeIs('admin.admin') ? 'text-[#FF2D20]' : 'text-white/30' }}">●</span>
                    <span>Dashboard</span>
                </a>

                <a href="{{route('admin.posts.index')}}"
                   class="px-4 py-3 text-white/70 hover:text-white hover:bg-white/5 rounded-xl transition-colors duration-200 flex items-center space-x-3
                   {{ request()->routeIs('admin.posts.index') ? 'bg-white/10 border border-white/20 text-white font-medium shadow-sm' : 'text-white/70 hover:text-white hover:bg-white/5' }}">
                    <span class="{{ request()->routeIs('admin.posts.index') ? 'text-[#FF2D20]' : 'text-white/30' }}">●</span>
                    <span>Objave (Posts)</span>
                </a>

                <a href="{{route('admin.categories.index')}}"
                   class="px-4 py-3 text-white/70 hover:text-white hover:bg-white/5 rounded-xl transition-colors duration-200 flex items-center space-x-3
                   {{ request()->is('admin.categories.index') ? 'bg-white/10 border border-white/20 text-white font-medium shadow-sm' : 'text-white/70 hover:text-white hover:bg-white/5' }}">
                    <span class="{{ request()->is('admin.categories.index') ? 'text-[#FF2D20]' : 'text-white/30' }}">●</span>
                    <span>Kategorije</span>
                </a>

            </div>

            <div class="mt-auto pt-4 border-t border-white/10">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                            class="w-full text-left px-4 py-3 text-red-400 hover:bg-red-500/10 rounded-xl transition-colors duration-200 flex items-center space-x-3">
                        <span>Odjava</span>
                    </button>
                </form>
            </div>
        </aside>

        <main class="flex-1 p-8 overflow-y-auto">

            {{ $slot }}

        </main>

    </div>
</div>

</body>
</html>
