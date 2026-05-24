@php use Illuminate\Support\Facades\Auth; @endphp
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaraCore </title>

    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-[#121212] via-[#2d0b0b] to-[#121212] min-h-screen font-sans antialiased text-slate-200">

<nav class="bg-[#121212]/60 backdrop-blur-xl border-b border-white/10 sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 rounded-xl bg-gradient-to-tr from-[#FF2D20] to-rose-600 flex items-center justify-center text-white font-black shadow-lg shadow-red-500/30">
                    LC
                </div>
                <span class="text-xl font-bold text-white tracking-tight">LaraCore</span>
            </div>

            <div class="flex items-center gap-2 sm:gap-4">
                <a href="{{ route('user.index') }}"
                   class="px-4 py-2 rounded-xl text-sm font-medium transition-all
          {{ request()->routeIs('user.index')
                ? 'bg-white/10 text-white border border-white/10 shadow-inner'
                : 'text-slate-400 hover:text-white hover:bg-white/5 border border-transparent' }}">
                    ✨ Svi postovi
                </a>

                <a href="{{ route('user.myPosts') }}"
                   class="px-4 py-2 rounded-xl text-sm font-medium transition-all
          {{ request()->routeIs('user.myPosts')
                ? 'bg-white/10 text-white border border-white/10 shadow-inner'
                : 'text-slate-400 hover:text-white hover:bg-white/5 border border-transparent' }}">
                    📁 Moji postovi
                </a>
            </div>

            <div class="flex items-center gap-4">
                <div class="hidden sm:flex flex-col text-right">
                    <span class="text-sm font-medium text-white leading-tight">{{Auth::user()->name}}</span>
                    <span class="text-xs text-slate-400">{{Auth::user()->role}}</span>
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
            </div>
        </div>
    </div>
</nav>
{{$slot}}

</body>
</html>
