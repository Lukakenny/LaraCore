<x-laraLayouts>
    <div class="max-w-6xl mx-auto space-y-8">

        <div>
            <h1 class="text-3xl sm:text-4xl font-bold text-white drop-shadow-md mb-2">Dobrodošao nazad! 👋</h1>
            <p class="text-white/60 text-sm sm:text-base">Evo brzog pregleda statistike tvoje LaraCore aplikacije.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <div
                class="bg-white/10 backdrop-blur-lg border border-white/20 shadow-2xl rounded-2xl p-6 flex items-center hover:bg-white/20 transition-all duration-300 transform hover:-translate-y-1">
                <div
                    class="bg-blue-500/20 border border-blue-500/30 p-4 rounded-xl text-blue-400 text-3xl shadow-inner flex items-center justify-center h-16 w-16">
                    👥
                </div>
                <div class="ml-5">
                    <p class="text-white/60 text-sm font-medium uppercase tracking-wider mb-1">Korisnici</p>
                    <h3 class="text-3xl font-bold text-white drop-shadow-sm">{{count($users)}}</h3>
                </div>
            </div>

            <div
                class="bg-white/10 backdrop-blur-lg border border-white/20 shadow-2xl rounded-2xl p-6 flex items-center hover:bg-white/20 transition-all duration-300 transform hover:-translate-y-1">
                <div
                    class="bg-emerald-500/20 border border-emerald-500/30 p-4 rounded-xl text-emerald-400 text-3xl shadow-inner flex items-center justify-center h-16 w-16">
                    📝
                </div>
                <div class="ml-5">
                    <p class="text-white/60 text-sm font-medium uppercase tracking-wider mb-1">Objave</p>
                    <h3 class="text-3xl font-bold text-white drop-shadow-sm">{{count($posts)}}</h3>
                </div>
            </div>

            <div
                class="bg-white/10 backdrop-blur-lg border border-white/20 shadow-2xl rounded-2xl p-6 flex items-center hover:bg-white/20 transition-all duration-300 transform hover:-translate-y-1">
                <div
                    class="bg-purple-500/20 border border-purple-500/30 p-4 rounded-xl text-purple-400 text-3xl shadow-inner flex items-center justify-center h-16 w-16">
                    📂
                </div>
                <div class="ml-5">
                    <p class="text-white/60 text-sm font-medium uppercase tracking-wider mb-1">Kategorije</p>
                    <h3 class="text-3xl font-bold text-white drop-shadow-sm">{{count($categories)}}</h3>
                </div>
            </div>

        </div>

        <div class="mt-12 bg-white/5 border border-white/10 rounded-2xl p-8 text-center border-dashed">
            <p class="text-white/40 text-sm">Ovde možeš kasnije dodati tabelu sa 5 najnovijih objava ili grafikon
                poseta.</p>
        </div>

    </div>
</x-laraLayouts>
